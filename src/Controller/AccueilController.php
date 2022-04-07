<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
     /**
     * @Route("/", name="app_accueil")
     */
    public function accueil (Request $request){
        return $this->render('accueil/index.html.twig', [
          /* 'exposants' => $exposants,
            'categories' => $categories*/
        ]); 
    }
}