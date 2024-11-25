<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(): Response
    {
        $user = $this->getUser();

        return $this->render('main/index.html.twig', ['user'=>$user  ]);
    }
    #[Route('/authers', name: 'app_authers')]
    public function authers(): Response
    {
        return $this->render('main/authers.html.twig', [  ]);
    }
}
