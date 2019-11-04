<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use App\Entity\SubCategory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    public function category() {

        $repo = $this->getDoctrine()->getRepository(Category::class);
        $category = $repo->findAll();

        return $this->render('products/category.html.twig', [
            'categories' => $category
        ]);
    }

    public function subcategory(Category $category)
    {

        return $this->render('products/subcategory.html.twig', [
            'category' => $category
        ]);

    }

    public function items(SubCategory $subCategory)
    {
        return $this->render('products/items.html.twig', [
            'subcategory' => $subCategory
        ]);
    }

}
