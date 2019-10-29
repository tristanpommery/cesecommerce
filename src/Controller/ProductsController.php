<?php

namespace App\Controller;

use App\Entity\SubCategory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    public function informatics() {

        $repo = $this->getDoctrine()->getRepository(SubCategory::class);
        $subcategory = $repo->findAll();

        return $this->render('products/informatics.html.twig', [
            'subcategories' => $subcategory
        ]);
    }

    public function communication() {
        return $this->render('products/communication.html.twig');
    }

    public function sound(){
        return $this->render('products/sound.html.twig');
    }

    public function connectors(){
        return $this->render('products/connectors.html.twig');
    }
}
