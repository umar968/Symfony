<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;

class LoggerController extends AbstractController
{
    /**
     * @Route("/logger", name="logger")
     */
    public function index(LoggerInterface $logger): Response
    {
        $logger->info("This is index method of logger controller");

        return $this->render('logger/index.html.twig', [
            'controller_name' => 'LoggerController',
        ]);
    }
}
