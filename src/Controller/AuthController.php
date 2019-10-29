<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AuthController extends AbstractController
{

    public function profile()
    {
        return $this->render('auth/profile.html.twig',[
            'user' => $this->getUser()
            ]);
    }
}
