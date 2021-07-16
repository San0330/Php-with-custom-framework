<?php

declare(strict_types=1);

namespace app\value_objects;

use Doctrine\ORM\Mapping as ORM;

/** 
 * @ORM\Embeddable 
 */
class LastName{
    /** @ORM\Column(type="string") */    
    private string $lastname;
}
