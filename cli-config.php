<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
//require_once '/vendor/symfony/polyfill-mbstring/bootstrap.php';

// replace with mechanism to retrieve EntityManager in your app
//$entityManager = GetEntityManager();
require_once __DIR__ . "/vendor/autoload.php";
$isDevMode = true;
// Настройки будут браться из аннотаций, на мой взгляд, это удобнее
// Заметьте, что здесь я передаю путь до каталога, который будет содержать в себе классы сущностей, проецируемые на БД
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/lib/Doctrine/"), $isDevMode, null, null, false);
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'host'     => 'localhost',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'newyear',
    'charset'  => 'UTF8',
);
$entityManager = EntityManager::create($dbParams, $config);
return ConsoleRunner::createHelperSet($entityManager);
