<?php

declare(strict_types=1);

use Doctrine\ORM\Mapping as ORM;

/* @Embeddable */
class FirstName{
    /* @Column(type="string") */    
    private string $name;
}
