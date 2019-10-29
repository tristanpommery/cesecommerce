<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdministrationController extends AbstractController
{

    public function adminIndex()
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        return $this->render('administration/index.html.twig');
    }
    public function edit()
    {
        return $this->render('administration/edit.html.twig');
    }
    public function delete()
    {
        return $this->render('administration/delete.html.twig');
    }
    public function add()
    {
        return $this->render('administration/add.html.twig');
    }

}
