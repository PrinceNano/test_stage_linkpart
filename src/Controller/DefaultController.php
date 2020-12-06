<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\View;

class DefaultController
{
    /**
     * @View(
     *     statusCode = 201,
     *     serializerGroups = {"POST_CREATE"}
     * )
     */
    public function index()
    {
        return new Response('Hello!');
    }
}