<?php
require_once('library/Doctrine/Common/ClassLoader.php');

use 	Doctrine\Common\ClassLoader,
        Doctrine\ORM\Configuration,
        Doctrine\ORM\EntityManager,
        Doctrine\DBAL\Types\Type,
        Doctrine\Common\Cache\ArrayCache;


    $doctrineClassLoader = new ClassLoader('Doctrine', __DIR__ . '/library/');
    $doctrineClassLoader->register();

    $doctrineClassLoader = new ClassLoader('Symfony', __DIR__ . '/library/Doctrine/');
    $doctrineClassLoader->register();

    $doctrineClassLoader = new ClassLoader('Entity', __DIR__ . '/entities/');
    $doctrineClassLoader->register();

    // Set up caches
    $config = new Configuration;
    $cache = new ArrayCache;
    $config->setMetadataCacheImpl($cache);
    $config->setQueryCacheImpl($cache);

    // Metadata Driver
    $driverImpl = $config->newDefaultAnnotationDriver(__DIR__ . '/entities/');
    $config->setMetadataDriverImpl($driverImpl);

    // Proxy configuration
    $config->setProxyDir(__DIR__ . '/proxies/');
    $config->setProxyNamespace('Proxies');
    $config->setAutoGenerateProxyClasses(true);

    // Database connection information
    $connectionOptions = array(
        'driver' => 'pdo_mysql',
        'user' => 'root',
        'password' => '',
        'host' => 'localhost',
        'dbname' => 'zfopenstore',
    );

    // Create EntityManager
   return $em = EntityManager::create($connectionOptions, $config);
