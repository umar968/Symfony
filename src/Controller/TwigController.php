<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class TwigController extends AbstractController
{
    /**
     * @Route("/twig", name="twig")
     */
    // public function __construct(Environment $twig)
    // {
    //     $loader = $twig->getLoader();
    //     if ($loader->exists('twig/index.html.twig')) {
    //     }
    // }
    public function index(): Response
    {
        $this->addFlash(
            'noti',
            'This is message send from controller using flash'
        );

        $render = $this->renderView('twig/index.html.twig', [
            'user_name' => ["Muhammad", "Umar"],
        ]);



        return new Response($render);
    }
}
