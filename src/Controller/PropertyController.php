<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PropertyController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('property/index.html.twig',[
            'current_menu' => 'properties'
        ]);
    }
}

?>