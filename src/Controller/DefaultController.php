<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\View;

class DefaultController
{
    /**
     * @Rest\Put("/machineoutil/{id}")
     * @Rest\Post("/machineoutil/{id}")
     */
    public function index()
    {
        return new Response('Hello!');
    }
}