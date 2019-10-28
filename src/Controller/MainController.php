<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{

    public function home()
    {
        return $this->render('main/index.html.twig');
    }

    public function products()
    {
        return $this->render('main/products.html.twig');
    }

    public function discount()
    {
        return $this->render('main/discount.html.twig');
    }

    public function support()
    {
        return $this->render('main/support.html.twig');
    }

    public function about()
    {
        return $this->render('main/about.html.twig');
    }


}
