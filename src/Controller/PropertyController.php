<?php

namespace App\Controller;

use App\Entity\Property;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PropertyController extends AbstractController
{
    public function index(EntityManagerInterface $entityManager): Response
    {    
        return $this->render('property/index.html.twig',[
            'current_menu' => 'properties'
        ]);
    }
}

?>