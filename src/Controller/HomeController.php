<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

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
    public function about(): Response
    {
        $session = $request->getSession();
        $user = $session->get('user');

        return $this->render('pages/about.html.twig', [
            'controller_name' => 'HomeController',
            'user' => $user,
        ]);
    }

    #[Route('/team', name: 'app_team')]
    public function team(): Response
    {
        $session = $request->getSession();
        $user = $session->get('user');

        return $this->render('pages/team.html.twig', [
            'controller_name' => 'HomeController',
            'user' => $user,
        ]);
    }
}
