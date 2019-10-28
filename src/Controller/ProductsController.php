<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    public function informatics() {
        return $this->render('products/informatics.html.twig');
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
