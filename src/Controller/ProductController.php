<?php

declare(strict_types=1);

namespace App\Controller;

use App\Form\Type\AddToCartType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    #[Route('/', name: 'app_product')]
    public function index(): Response
    {
        $formproduct = $this->createForm(AddToCartType::class);

         return $this->render('product/index.html.twig', [
            'form_product' => $formproduct->createView(),
        ]);
    }
}
