<?php

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class ExampleController extends AbstractController
{
    /**
     * @Route("/example/{number}", name="example_controller")
     */
    public function number($number, Request $req): Response
    {

        // return new Response($req->query->get('page'));
        return $this->json(["name" => $req->query->get("name")]);
    }
}
