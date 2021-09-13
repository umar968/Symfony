<?php

namespace App\Controller;

use App\Service\SiteUpdateManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController
{

    /**
     * @Route("/msg",name="message_service")
     */
    public function list(SiteUpdateManager $siteUpdateManager): Response
    {
        if ($siteUpdateManager->notifyOfSiteUpdate()) {

            return new Response("Email has been send");
        } else {

            return new Response("Sorry Email cant be send");
        }
    }
}
