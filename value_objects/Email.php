<?php

declare(strict_types=1);

use Doctrine\ORM\Mapping as ORM;

/* @Embeddable */
class Email{
    /* @Column(type="string") */    
    private string $email;
}
