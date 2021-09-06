<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    //Parameter validation
    /**
     * @Route("/blog/{id}", name="blog_list", requirements={"id"="\d+"})
     */
    public function list(int $id): Response
    {
        return new Response('<html><body>This will render when we pass number<body><html>' . $id);
    }

    /**
     * @Route("/blog/{title}", name="blog_show")
     */
    public function show(string $title): Response
    {
        return new Response('<html><body>This will render when we pass string<body><html>' . $title);
    }
}
