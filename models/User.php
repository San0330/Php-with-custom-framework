<?php

declare(strict_types=1);

namespace app\models;

use Doctrine\ORM\Mapping as ORM;
use app\value_objects\Email;
use app\value_objects\FirstName;
use app\value_objects\LastName;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{
    public function __construct(){
        $this->firstname = new FirstName();
        $this->lastname = new LastName(); 
        $this->email = new Email();
    }

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id;

    /**
     * @ORM\Embedded(class="app\value_objects\FirstName",columnPrefix=false)
     */
    private FirstName $firstname;

    /**
     * @ORM\Embedded(class="app\value_objects\LastName",columnPrefix=false)
     */
    private LastName $lastname;

    /**
     * @ORM\Embedded(class="app\value_objects\Email",columnPrefix=false)
     */
    private Email $email;

    /**
     * @ORM\Column(type="string")
     */ 
    private string $password;

}
