<?php

declare(strict_types=1);

namespace app\value_objects;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable
 */
class Name{

    /** @ORM\Column(type="string",length=50) */    
    private string $name;
}
