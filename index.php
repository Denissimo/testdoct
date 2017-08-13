<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;


//$em = new ORM\EntityManager();

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/cli-config.php";
$isDevMode = true;
// Настройки будут браться из аннотаций, на мой взгляд, это удобнее
// Заметьте, что здесь я передаю путь до каталога, который будет содержать в себе классы сущностей, проецируемые на БД

$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/models"), $isDevMode, null, null, false);
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
$entityManager = EntityManager::create($dbParams, $config);
$em = $entityManager->getConnection();

//$em = $entityManager->getWrappedConnection();

//$q = $entityManager->createQuery("SELECT * FROM sys_urls");
$q = $em->prepare("SELECT * FROM sys_urls");
$q->execute();
$r = $q->fetchAll();
//$p = $q->bindParam();
//$r = $q->getArrayResult();
//$r = $q->getResult($q);


echo "<pre>";
//var_dump($r);
echo "</pre>";

//var_dump(realpath(__DIR__."/vendor/doctrine/orm/lib/Doctrine"));
//$param = array("parent" => "test9");
//$person = SysUrls::getRepository('PersonBlocked')->findBy($param);

//$testPost->setRowId(100);
$time1 = microtime();
for($i=0; $i<200; $i++) {
    $testPost = new TestPost();
    $testPost->setTestedit("zzzz" . rand(00, 99));
    $testPost->setTesthid("uUuU" . rand(00, 99));
    $testPost->setDatetime(new DateTime());
    $entityManager->persist($testPost);
    $entityManager->flush();
}
print_r(microtime() - $time1);


//var_dump($testPost);