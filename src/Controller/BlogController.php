<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{

    //This will only work for firefox
    /**
     * @Route("/blog/{id}", 
     * methods={"GET","HEAD"},
     * )
     */
    public function show(int $id): Response
    {
        return new Response('<html><body>Hello This is BlogController show</body></body>' . $id);
    }
}
