<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;

class ExampleController extends AbstractController
{
    /**
     * @Route("/example/{number}", name="example_controller")
     */
    public function number($number, LoggerInterface $logger, Session $Session): Response
    {
        $logger->info("render number twig");
        if ($number == 1) {
            throw $this->createNotFoundException("No number was provided");
        }
        $Session->set("number", $number);
        $this->addFlash("notice", "Number you send was" . $number);
        return $this->render('example/number.html.twig', ['number' => $number]);
    }
}
