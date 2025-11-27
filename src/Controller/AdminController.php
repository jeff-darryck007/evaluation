<?php

namespace App\Controller;

use App\Entity\Painting;
use App\Entity\Comment;
use App\Entity\User;
use App\Form\RegisterType;
use App\Form\LoginType;
use App\Form\CommentType;
use App\Form\PaintingFormType;
use Symfony\Component\HttpFoundation\JsonResponse; // formater les reponses en json
use App\Repository\PaintingRepository;
use App\Repository\CategoryRepository;
use App\Repository\CommentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AdminController extends AbstractController
{  
    #[Route('/login', name: 'app_login')]
    public function login( 
        Request $request, 
        EntityManagerInterface $em
    ): Response
    {
        $form = $this->createForm(LoginType::class);
        $form->handleRequest($request);

        $error = null;
        $userFound = null;
        

        if ($form->isSubmitted()) {
            $email = $form->get('email')->getData();
            $password = $form->get('password')->getData();
            $data = [
                'email' => $email,
                'password' => $password,
            ];
           
            // 1. Trouver l’utilisateur par email
            $userFound = $em->getRepository(User::class)->findOneBy([
                'email' => $data['email'],
            ]);
            
            if (!$userFound) {
                $error = "Adresse email inconnue.";
            } else {
                // 2. Vérifier le mot de passe
                if ($userFound->getPassword() === md5($data['password'])) {
                    $session = $request->getSession();
                    $session->set('user', $userFound);

                    // si user
                    if($userFound->getType() === "user"){
                        return $this->redirectToRoute('app_home'); // page que tu veux
                    }

                    // si admin
                    if($userFound->getType() === "admin"){
                        return $this->redirectToRoute('admin_painting_index'); // page que tu veux
                    }
                } else {
                    $error = "Mot de passe incorrect.";
                }
            }
        }

        return $this->render('pages/login.html.twig', [
            'form' => $form->createView(),
            'error' => $error,
            'user' => null,
        ]);
    }

    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request,
        EntityManagerInterface $em
    ): Response {
        
        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Hasher le mot de passe
            $hashedPassword = md5($form->get('password')->getData());
            $user->setPassword($hashedPassword);
            $user->setType("user"); // admin ou user

            // Sauvegarde
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Compte créé avec succès !');

            return $this->redirectToRoute('app_login');
        }

        return $this->render('pages/register.html.twig', [
            'form' => $form->createView(),
            'user' => null,
        ]);
    }

    #[Route('/logout', name: 'app_logout', methods: ['GET'])]
    public function logout(Request $request): Response
    {
        // detruit la session
        $session = $request->getSession();
        $session->invalidate();

        return $this->render('pages/home.html.twig', [
            'msag' => "Déconnexion réussie.",
            'user' => null,
        ]);
    }

    #[Route('/homeAdmin', name: 'admin_painting_index', methods: ['GET'])]
    public function homeAdmin(PaintingRepository $paintingRepository, Request $request): Response
    {
        $paintings = $paintingRepository->findAll();

        $session = $request->getSession();
        $user = $session->get('user');  
        if(!$user){
            return $this->redirectToRoute('app_login');
        }
        if($user->getType() !== "admin"){
            return $this->redirectToRoute('app_home');
        }
        return $this->render('pages/homeAdmin.html.twig', [
            'paintings' => $paintings,
            'user' => $user,
        ]);
    }

    #[Route('/add', name: 'admin_painting_add', methods: ['GET', 'POST'])]
    public function add(Request $request, EntityManagerInterface $em): Response
    {
        // 1️⃣ Crée une nouvelle entité Painting
        $painting = new Painting();

        // 2️⃣ Création du formulaire
        $form = $this->createForm(PaintingFormType::class, $painting);
        $form->handleRequest($request); 

        if ($form->isSubmitted() ) {
            foreach ($form->getErrors(true) as $error) {
        dump($error->getOrigin()->getName(), $error->getMessage());
    }
            // 3️⃣ Gestion de l'image uploadée
            $file = $form->get('image')->getData();

            if ($file instanceof UploadedFile) {
                // Nom unique pour le fichier
                $newFilename = uniqid() . '.' . $file->guessExtension();

                // Chemin du dossier de destination (configuré dans services.yaml)
                $uploadDir = $this->getParameter('paintings_directory');

                // Déplace le fichier uploadé dans /public/uploads/paintings
                $file->move($uploadDir, $newFilename);

                // Met à jour le nom du fichier dans l'entité
                $painting->setImage($newFilename);
            }

            // 4️⃣ Persiste la nouvelle entité
            $em->persist($painting);
            $em->flush();

            // 5️⃣ Message flash
            $this->addFlash('success', 'La peinture a été ajoutée avec succès.');

            // 6️⃣ Redirection
            return $this->redirectToRoute('admin_painting_index');
        }

        return $this->render('pages/addPaining.html.twig', [
            'form' => $form->createView(),
            'painting' => $painting, // utile si tu veux réutiliser certaines parties du template
        ]);
    }


    #[Route('/edit/{id}', name: 'admin_painting_edit', methods: ['GET', 'POST'])]
    public function edit(Painting $painting, Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(PaintingFormType::class, $painting);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // 1️⃣ Gestion de l'image uploadée
            $file = $form->get('image')->getData();

            if ($file) {
                // Nom unique pour le fichier
                $newFilename = uniqid() . '.' . $file->guessExtension();

                // Chemin du dossier de destination (configuré dans services.yaml)
                $uploadDir = $this->getParameter('paintings_directory');

                // Supprime l’ancienne image s’il y en a une
                if ($painting->getImage() && file_exists($uploadDir . '/' . $painting->getImage())) {
                    unlink($uploadDir . '/' . $painting->getImage());
                }

                // Déplace le nouveau fichier dans le dossier /public/uploads/paintings
                $file->move($uploadDir, $newFilename);

                // Met à jour le nom du fichier dans l'entité
                $painting->setImage($newFilename);
            }

            // 2️⃣ Sauvegarde des modifications
            $em->flush();

            // 3️⃣ Message flash
            $this->addFlash('success', 'La peinture a été mise à jour avec succès.');

            // 4️⃣ Redirection
            return $this->redirectToRoute('admin_painting_index');
        }

        return $this->render('pages/edit.html.twig', [
            'form' => $form->createView(),
            'painting' => $painting,
        ]);
    }

    #[Route('/delete/{id}', name: 'admin_painting_delete', methods: ['POST'])]
    public function delete(Request $request, Painting $painting, EntityManagerInterface $em): Response
    {
        // Vérifie le token CSRF pour éviter les suppressions malveillantes
        if (!$this->isCsrfTokenValid('delete' . $painting->getId(), $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Token CSRF invalide ou expiré.');
        }

        // Supprimer la peinture de la base
        $em->remove($painting);
        $em->flush();

        // Message flash de confirmation
        $this->addFlash('success', sprintf('La peinture "%s" a été supprimée avec succès.', $painting->getTitle()));

        // Redirection vers la liste
        return $this->redirectToRoute('admin_painting_index');
    }


    #[Route('/toggle/{id}', name: 'admin_painting_toggle', methods: ['POST'])]
    public function toggleVisible(Painting $painting, EntityManagerInterface $em): Response
    {
        // Inverse la valeur actuelle (true -> false ou 1 -> 0)
        $painting->setVisible(!$painting->getVisible());

        $em->flush();

        // Message flash selon le nouvel état
        if ($painting->getVisible()) {
            $this->addFlash('success', sprintf('La peinture "%s" est maintenant visible.', $painting->getTitle()));
        } else {
            $this->addFlash('warning', sprintf('La peinture "%s" est maintenant masquée.', $painting->getTitle()));
        }

        return $this->redirectToRoute('admin_painting_index');
    }


    //  Liste des peintures
    #[Route('/gallery', name: 'app_admin', methods: ['GET'])]
    public function index(PaintingRepository $paintingRepository, CategoryRepository $categoryRepository, Request $request): Response
    {
        $session = $request->getSession();
        $user = $session->get('user');

        // Récupère uniquement les peintures donc la catégorie est choisie
        $categoryId = $request->query->get('category');
        $paintings = [];

        if ($categoryId) {
            $paintings = $paintingRepository->findBy(['idCategory' => $categoryId, 'visible' => true]);
        } else {
            $paintings = $paintingRepository->findBy(['visible' => true]);
        }

        $categories = $categoryRepository->findAll();

        return $this->render('pages/gallery.html.twig', [
            'paintings' => $paintings,
            'user' => $user,
            'categories' => $categories,
        ]);
    }

    #[Route('/painting/{id}', name: 'app_painting_show', methods: ['GET', 'POST'])]
    public function show(int $id, PaintingRepository $paintingRepository, CommentRepository $commentRepository, Request $request, EntityManagerInterface $em): Response
    {
        $painting = $paintingRepository->find($id);

        if (!$painting) {
            throw $this->createNotFoundException("Cette œuvre n'existe pas.");
        }

        $comments_all = $commentRepository->findByPaintingId($painting->getId());

        // Nouveau commentaire
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        $session = $request->getSession();
        $user = $session->get('user');  

        if ($form->isSubmitted() && $form->isValid()) {
            if(!$user){
                return $this->redirectToRoute('app_login');
            }
            $comment->setCreatedAt(new \DateTimeImmutable());
            $comment->setIdPainting($painting); 
            $comment->setAuthor($user->getName());

            $em->persist($comment);
            $em->flush();

            $this->addFlash('success', 'Votre commentaire a été ajouté avec succès !');
            return $this->redirectToRoute('app_painting_show', ['id' => $painting->getId()]);
        }

        

        return $this->render('pages/detailGallery.html.twig', [
            'painting' => $painting,
            'comments' => $comments_all,
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }
    
   
}