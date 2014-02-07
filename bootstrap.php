<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(__DIR__ . '/src/entities');

$dbParams = array(
    'driver'   => 'pdo_pgsql',
    'user'     => 'schema-test',
    'password' => 'password',
    'dbname'   => 'schema-test',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, true);
$entityManager = EntityManager::create($dbParams, $config);
