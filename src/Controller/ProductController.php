<?php

namespace App\Controller;

use App\Service\MessageGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController
{
    /**
     * @Route("/msg",name="message_service")
     */
    public function list(MessageGenerator $messageGenerator): Response
    {
        $message = $messageGenerator->getHappyMessage();

        return new Response($message);
    }
}
