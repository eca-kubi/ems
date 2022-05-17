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
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(dirname(__DIR__)."/entities");
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'driver' => DB_DRIVER,
    'user' => DB_USER,
    'password' => DB_PASS,
    'dbname' => DB_NAME,
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);

// set directory for proxies
//$config->setProxyDir(dirname(__DIR__)."/proxies");

$entityManager = EntityManager::create($dbParams, $config);

// ---- Initialize Doctrine Entity Manager

function GetEntityManager(){
    global $entityManager;
    return $entityManager;
}