<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\MachineOutil;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;

class MachineOutilController extends AbstractController
{
    /**
     * @Route("/machineoutil", name="create_machineoutil")
     */
    public function createMachineOutil(): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $machineOutil = new MachineOutil();
        $machineOutil->setName('Test');
        $machineOutil->setDescription('Descriptiontest');
        $machineOutil->setUser('Henry');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($machineOutil);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$machineOutil->getId());
    }
}