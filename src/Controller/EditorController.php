<?php

namespace App\Controller;

use App\Repository\EditorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EditorController extends AbstractController
{
    #[Route('/editor', name: 'app_editor_list')]
    public function list(EditorRepository $editorRepository): Response
    {
        $editors = $editorRepository->findAll();
        //dd($editors);
        
        return $this->render('editor/list.html.twig', ['editors' => $editors
            
        ]);
    }
    #[Route('/editor/delete/{id}', name: 'app_editor_delete')]
    public function delete($id,EditorRepository $editorRepository,EntityManagerInterface $em): Response
    {
       // dd($id);
        $editor = $editorRepository->find($id);
        $em->remove($editor);
        $em->flush();
        return $this->redirectToRoute('app_editor_list');
        
        //return $this->render('editor/list.html.twig', ['editors' => $editors]);
    }
}
