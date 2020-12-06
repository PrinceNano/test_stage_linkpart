<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;
    
    /**
     * @ORM\OneToMany(targetEntity="MachineOutil", mappedBy="user", cascade={"persist"})
     */
    private $machineoutils;

    public function _construct()
    {
        $this->machineoutils = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setBiography($password)
    {
        $this->password = $password;
    }

    public function getMachineOutils()
    {
        return $this->machineoutils;
    }
}