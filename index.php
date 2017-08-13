<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

//$em = new ORM\EntityManager();

require_once __DIR__ . "/vendor/autoload.php";
$isDevMode = true;
// Настройки будут браться из аннотаций, на мой взгляд, это удобнее
// Заметьте, что здесь я передаю путь до каталога, который будет содержать в себе классы сущностей, проецируемые на БД
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/lib/Doctrine/"), $isDevMode);

$parameters = array(

);//Здесь вам надо вытащить настройки подключения к БД для вашего проекта
//Здесь вам надо вытащить настройки подключения к БД для вашего проекта
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'host'     => 'localhost',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'newyear',
    'charset'  => 'UTF8',
);
$entityManager = EntityManager::create($dbParams, $config)->getConnection();
//$entityManager->getConnection()->getDatabasePlatform();

//$q = $entityManager->createQuery("SELECT * FROM sys_urls");
$q = $entityManager->prepare("SELECT * FROM sys_urls");
$q->execute();
$r = $q->fetchAll();
//$p = $q->bindParam();
//$r = $q->getArrayResult();
//$r = $q->getResult($q);


echo "<pre>";
//var_dump($r);
echo "</pre>";

var_dump(realpath(__DIR__."/vendor/doctrine/orm/lib/Doctrine"));
//var_dump(__DIR__);
//$sysUrls = new SysUrls();