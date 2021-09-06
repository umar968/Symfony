<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class WifiController
{

    //This is get
    function list($name): Response
    {
        return new Response(
            '<html><body>Hello this is list of WifiController</body></html>' . $name
        );
    }
}
