<?php
//Database params
const DB_HOST = 'localhost'; //Add your db host
const DB_USER = 'root'; // Add your DB root
const DB_PASS = ''; //Add your DB pass
const DB_NAME = 'ems'; //Add your DB Name
const DB_DRIVER = 'pdo_mysql';

//APP ROOT
define('APPROOT', dirname(dirname(__FILE__)));

//URL ROOT (Dynamic links)
const URLROOT = 'http://localhost/ems';

//Site name
const SITENAME = 'MullenLowe Accra Employee Management System';


// ---- Initialize Doctrine Entity Manager
use Doctrine\ORM\Configuration;
use Doctrine\ORM\Mapping\Driver\AttributeDriver;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Cache\Adapter\ArrayAdapter;
use Symfony\Component\Cache\Adapter\PhpFilesAdapter;

$paths = array(dirname(__DIR__)."/models");
$isDevMode = true;

// the connection configuration
$dbParams = array(
    'driver' => DB_DRIVER,
    'user' => DB_USER,
    'password' => DB_PASS,
    'dbname' => DB_NAME,
);

if ($isDevMode) {
    $queryCache = new ArrayAdapter();
    $metadataCache = new ArrayAdapter();
} else {
    $queryCache = new PhpFilesAdapter('doctrine_queries');
    $metadataCache = new PhpFilesAdapter('doctrine_metadata');
}

//$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$config = new Configuration();
//$config = Setup::createAttributeMetadataConfiguration($paths, $isDevMode);

// set metadata driver
$driverImpl = new AttributeDriver($paths);
$config->setMetadataDriverImpl($driverImpl);

// set metadata cache
$config->setMetadataCache($metadataCache);

// set directory for proxies
$config->setProxyDir(dirname(__DIR__)."/proxies");

// set proxy namespace
$config->setProxyNamespace('App\Proxies');

// set query cache
$config->setQueryCache($queryCache);

if ($isDevMode) {
    $config->setAutoGenerateProxyClasses(true);
} else {
    $config->setAutoGenerateProxyClasses(false);
}

$entityManager = EntityManager::create($dbParams, $config);

// ---- Initialize Doctrine Entity Manager

function GetEntityManager(): EntityManager
{
    global $entityManager;
    return $entityManager;
}