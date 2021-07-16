<?php

declare(strict_types=1);

namespace app\value_objects;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable
 */
class FirstName{

    /** @ORM\Column(type="string") */    
    private string $firstname;
}
