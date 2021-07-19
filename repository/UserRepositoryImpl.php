<?php

declare(strict_types=1);

namespace app\repository;

use Doctrine\ORM\EntityRepository;

class UserRepositoryImpl extends EntityRepository implements UserRepositoryInterface{
    public function register(){
        return null; 
    }
}
