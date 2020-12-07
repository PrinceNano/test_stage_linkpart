<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\MachineOutil;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;

class MachineOutilController extends AbstractController
{
    /**
     * * @Get(
     *     path = "/machineoutil/{id}",
     *     name = "app_machineoutil_show",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\Post("/machineoutil")
     * @Rest\View(StatusCode = 201)
     * @ParamConverter("machineOutil", converter="fos_rest.request_body")
     */


     public function createMachineOutil(MachineOutil $machineOutil)
     {
        $em = $this->getDoctrine()->getManager();

        $em->persist($machineOutil);
        $em->flush();

        return $this->view($machineOutil, Response::HTTP_CREATED, ['Location' => $this->generateUrl('app_machineoutil_show', ['id' => $machineOutil->getId(), UrlGeneratorInterface::ABSOLUTE_URL])]);
    }

    public function showAction(MachineOutil $machineOutil)
    {
        return $machineOutil;
    }

    //     public function showAction(MachineOutil $machineOutil)
    // {
    //     return $machineOutil;
    // }

}