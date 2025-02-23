<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function index(): Response
    {
        // return 'Hello World!';
        return new Response("Hello World!");
    }
}
