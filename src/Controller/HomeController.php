<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Form\UserProfileType; 
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

final class HomeController extends AbstractController
{

    #[Route('/home', name: 'app_home')]
    public function index(Request $request): Response
    {
        $session = $request->getSession();
        $user = $session->get('user');

        return $this->render('pages/home.html.twig', [
            'controller_name' => 'HomeController',
            'user' => $user,
        ]);
    }

    #[Route('/', name: 'app_home2')]
    public function index2(Request $request): Response
    {
        $session = $request->getSession();
        $user = $session->get('user');

        return $this->render('pages/home.html.twig', [
            'controller_name' => 'HomeController',
            'user' => $user,
        ]);
    }

    #[Route('/about', name: 'app_about')]
    public function about(Request $request): Response
    {
        $session = $request->getSession();
        $user = $session->get('user');

        return $this->render('pages/about.html.twig', [
            'controller_name' => 'HomeController',
            'user' => $user,
        ]);
    }

    #[Route('/team', name: 'app_team')]
    public function team(SessionInterface $session): Response
    {
        $user = $session->get('user');

        return $this->render('pages/team.html.twig', [
            'controller_name' => 'HomeController',
            'user' => $user,
        ]);
    }
















 #[Route('/profil', name: 'user_profil')]
public function profil(Request $request, SessionInterface $session, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $em): Response
{
    // Récupère l'utilisateur depuis la session
    $user = $session->get('user');

    // Crée le formulaire lié à l'utilisateur pour name, email et password
    $form = $this->createForm(UserProfileType::class, $user);
    $form->handleRequest($request);

    // Si le formulaire est soumis et valide
    if ($form->isSubmitted() && $form->isValid()) {
        $plainPassword = $form->get('password')->getData();
        if ($plainPassword) {
            $hashedPassword = $passwordHasher->hashPassword($user, $plainPassword);
            $user->setPassword($hashedPassword);
        }

        $em->flush();

        $this->addFlash('success', 'Votre profil a été mis à jour.');
        return $this->redirectToRoute('user_profil');
    }

    return $this->render('pages/profil.html.twig', [
        'user' => $user,
        'form' => $form->createView(),
    ]);
}










































    // ================================
    //          PAGE CONTACT
    // ================================

   #[Route('/contact', name: 'app_contact')]
public function contact(
    Request $request,
    SessionInterface $session,
    HttpClientInterface $httpClient
): Response {
    $user = $session->get('user');

    // Clé reCAPTCHA à passer au template
    $recaptchaSiteKey = $_ENV['RECAPTCHA_SITE_KEY'] ?? null;

    // Si le formulaire est soumis
    if ($request->isMethod('POST')) {

        // -----------------------
        // 1. Vérification CAPTCHA
        // -----------------------
        $captchaResponse = $request->request->get('g-recaptcha-response');

        $verify = $httpClient->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
            'body' => [
                'secret' => $_ENV['RECAPTCHA_SECRET_KEY'] ?? '',
                'response' => $captchaResponse
            ]
        ]);

        $captchaData = $verify->toArray();

        if (!$captchaData['success']) {
            $this->addFlash('error', 'Veuillez valider le CAPTCHA.');
            return $this->redirectToRoute('app_contact');
        }

        // -----------------------
        // 2. Traitement du message
        // -----------------------
        $name = $request->request->get('name');
        $email = $request->request->get('email');
        $subject = $request->request->get('subject');
        $message = $request->request->get('message');

        // TODO : Envoi d’email ou enregistrement DB ici

        $this->addFlash('success', 'Votre message a bien été envoyé.');
        return $this->redirectToRoute('app_contact');
    }

    // Affichage initial
    return $this->render('pages/contact.html.twig', [
        'controller_name' => 'HomeController',
        'user' => $user,
        'recaptcha_site_key' => $recaptchaSiteKey, // <--- clé passée au template
    ]);
}
}
