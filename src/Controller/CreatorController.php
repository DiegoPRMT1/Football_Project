<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreatorController extends AbstractController
{
    /**
     * @Route("/creator", name="app_creator")
     */
    public function main(): Response
    {
        return $this->render('frontend/creator/index.html.twig');
    }

}