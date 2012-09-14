<?php
ini_set('date.timezone', 'Europe/Brussels');

define('ROOT', dirname(__DIR__));

$loader = require_once __DIR__ . '/../vendor/autoload.php';

$loader->add("App", ROOT);

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;



$app = new Silex\Application();



/* twig */
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    "twig.path" => ROOT . "/App/Views",
    'twig.options' => array('cache' => ROOT.'/cache', 'strict_variables' => true)
));

/* Gestion de Log*/
$app->register(new Silex\Provider\MonologServiceProvider(), array(
    'monolog.logfile'       => __DIR__ . '/../log/avosoft.log',
    'monolog.name'          => 'avosoft',
    'monolog.level'         => 300 // = Logger::WARNING
));


/* Base de données*/
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver'   => 'pdo_mysql',
        'host'     => 'localhost',
        'dbname'   => 'avosoft',
        'username' => 'root',
        'password' => 'bonjour',
    ),
));

/* Gestion des sessions*/
$app->register(new Silex\Provider\SessionServiceProvider());

$app['debug'] = true;


$app->mount("/", new App\Controller\IndexController());

return $app;