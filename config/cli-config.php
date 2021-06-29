<?php

declare(strict_types=1);

namespace app\config;

use app\core\Application;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

$entityManager = (new Application())->getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);
