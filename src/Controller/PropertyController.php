<?php

namespace App\Controller;

use App\Entity\Property;
use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PropertyController extends AbstractController
{

    private $repository;

    public function __construct(PropertyRepository $repository)
    {
        $this->repository = $repository;
    }

    // path: /biens name: "property.index"
    public function index(): Response
    {
        return $this->render('property/index.html.twig',[
            'current_menu' => 'properties'
        ]);
    }

    // path: /biens/{slug}-{id} name: "property.show"
    public function show(Property $property, string $slug): Response
    {
        if ($property->getSlug() != $slug) {
            return $this->redirectToRoute('property.show', [
                'id' => $property->getId(),
                'slug' => $property->getSlug(),
            ],301);
        }
        
        return $this->render('property/show.html.twig',[
            'property' => $property, 
            'current_menu' => 'properties'
        ]);
    }

}

?>