<?php
ini_set('date.timezone', 'Europe/Brussels');

define('ROOT', dirname(__DIR__));

$loader = require_once __DIR__ . '/../vendor/autoload.php';

$loader->add("App", ROOT);


//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Security\Http\Firewall;



$app = new Silex\Application();

$app->register(new Silex\Provider\ServiceControllerServiceProvider());


/* twig */
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    "twig.path" => ROOT . "/App/Views",
    'twig.options' => array('cache' => ROOT.'/cache', 'strict_variables' => true)
));


# form
$app->register(new Silex\Provider\FormServiceProvider());
# validation
$app->register(new Silex\Provider\ValidatorServiceProvider());
# trans
$app->register(new Silex\Provider\TranslationServiceProvider());

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
        'dbname'   => 'avosoft',
        'host'     => 'localhost',        
        'user'     => 'root',
        'password' => 'bonjour',
        'charset'  => 'UTF8'
    ),
));

# url generator
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());


/* Gestion des sessions*/
$app->register(new Silex\Provider\SessionServiceProvider());

/*Gestion d'un dump()*/
$app->register(new Maitrepylos\Provider\DebugServiceProvider());

///* Gestion de la sécurité */
//$app->register(new Silex\Provider\SecurityServiceProvider(), array(
//    'security.firewalls' => array(
//        'foo' => array('pattern' => '^/foo'), // Exemple d'une url accessible en mode non connecté
//        'default' => array(
//            'pattern' => '^.*$',
//            'anonymous' => true, // Indispensable car la zone de login se trouve dans la zone sécurisée (tout le front-office)
//            'form' => array('login_path' => '/', 'check_path' => 'connexion'),
//            'logout' => array('logout_path' => '/deconnexion'), // url à appeler pour se déconnecter
//            'users' => $app->share(function() use ($app) {
//                // La classe App\User\UserProvider est spécifique à notre application et est décrite plus bas
//                return new App\Controller\UserProvider($app['db']);
//            }),
//        ),
//    ),
//    'security.access_rules' => array(
//        // ROLE_USER est défini arbitrairement, vous pouvez le remplacer par le nom que vous voulez
//        array('^/.+$', 'ROLE_USER'),
//        array('^/foo$', ''), // Cette url est accessible en mode non connecté
//    )
//));

$app['debug'] = true;

//$app->register($p = new Silex\Provider\WebProfilerServiceProvider(), array(
//    'profiler.cache_dir' => __DIR__.'/../cache/profiler',
//));

$app->mount("/", new App\Controller\IndexController());
$app->mount("/prestation", new App\Controller\PrestationController());
$app->mount("/client", new App\Controller\ClientController());
$app->mount("/dossier", new App\Controller\DossierController());
//$app->mount('/_profiler', $p);



return $app;