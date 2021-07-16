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
    private int $id;

    /**
     * @Embedded(class="FirstName",column_prefix=false)
     */
    private FirstName $firstname;

    /*
     * @Embedded(class="LastName",column_prefix=false)
     */
    private LastName $lastname;

    /*
     * @Embedded(class="Email",column_prefix=false)
     */
    private Email $email;

    /*
     * @ORM\Column(type="string")
     */ 
    private string $password;

}
