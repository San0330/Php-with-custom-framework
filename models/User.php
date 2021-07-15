<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $firstname;

    /*
     * @ORM\Column(type="string")
     */
    private $lastname;

    /*
     * @ORM\Column(type="string")
     */
    private $email;

    /*
     * @ORM\Column(type="string")
     */ 
    private $password;

}
