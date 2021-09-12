<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{

    /**
     * @Route("/product", name="product")
     */
    public function createProduct(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $product = new Product();
        $product->setName("Mouse");
        $product->setPrice(1999);
        $product->setDescription("Beautifull but not working");
        $entityManager->persist($product);
        $entityManager->flush();

        return new Response('Saved new product with id' . $product->getId());
    }

    /**
     * @Route("product/{id}",name="show_product")
     */
    public function showProduct(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $product = $this->getDoctrine()
            ->getRepository(Product::class)
            ->find($id);
        $product->setName('Keyboard');
        $entityManager->flush();

        if (!$product) {
            throw $this->createNotFoundException(
                'No product for id: ' . $id
            );
        }

        return new Response('Check this product out:' . $product->getName());
    }
}
