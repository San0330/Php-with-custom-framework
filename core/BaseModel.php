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
        $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src"));

        // database configuration parameters
        $conn = array(
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ . '/db.sqlite',
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
}
