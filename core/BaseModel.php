<?php

declare(strict_types=1);

namespace app\core;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class BaseModel
{

    private EntityManager $entityManager;

    public function __construct()
    {
        // Create a simple "default" Doctrine ORM configuration for Annotations
        $isDevMode = true;
        $proxyDir = null;
        $cache = null;
        $useSimpleAnnotationReader = false;

        $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/../models"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

        // database configuration parameters
        $conn = array(
            'driver' => $_ENV['DB_DRIVER'],
            'user' => $_ENV['DB_USER'],
            'password' => $_ENV['DB_PASSWORD'],
            'dbname' => $_ENV['DB_NAME'],
            'port' => $_ENV['DB_PORT'],
        );

        $this->entityManager = EntityManager::create($conn, $config);
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
