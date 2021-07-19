<?php

declare(strict_types=1);

namespace app\models;

use Doctrine\ORM\Mapping as ORM;
use app\value_objects\Email;
use app\value_objects\Name;

/**
 * @ORM\Entity(repositoryClass="UserRepository")
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
     * @ORM\Embedded(class="app\value_objects\Name",columnPrefix="first")
     */
    private Name $firstname;

    /**
     * @ORM\Embedded(class="app\value_objects\Name",columnPrefix="last")
     */
    private Name $lastname;

    /**
     * @ORM\Embedded(class="app\value_objects\Email",columnPrefix=false)
     */
    private Email $email;

    /**
     * @ORM\Column(type="string",length=150)
     */ 
    private string $password;

}
