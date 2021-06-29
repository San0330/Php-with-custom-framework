<?php

declare(strict_types=1);

namespace app\core;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class BaseModel
{

    private EntityManager $entityManager;

    public function __construct(Type $var = null)
    {
        // Create a simple "default" Doctrine ORM configuration for Annotations
        $isDevMode = true;
        $proxyDir = null;
        $cache = null;
        $useSimpleAnnotationReader = false;

        $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/../models"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

        // database configuration parameters
        $conn = array(
            'driver' => 'pdo_mysql',
            'user' => 'root',
            'password' => 'password',
            'dbname' => 'blog',
            'port' => 3306,
        );

        $this->entityManager = EntityManager::create($conn, $config);
    }

    public function flush($entity = null)
    {
        $this->entityManager->flush($entity);
    }

    public function persist($entity)
    {
        $this->entityManager->persist($entity);
    }

    public function getRepository(string $repository)
    {
        return $this->entityManager->getRepository($repository);
    }

    public function getEntityManager()
    {
        return $this->entityManager;
    }
}
