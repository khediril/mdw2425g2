<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BookController extends AbstractController
{
    #[Route('/book', name: 'app_book_list')]
    public function list(): Response
    {
        
        return $this->render('book/list.html.twig', [
            'controller_name' => 'BookController',
        ]);
    }
}
