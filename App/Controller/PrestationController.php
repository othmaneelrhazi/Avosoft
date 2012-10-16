<?php
namespace App\Controller {

    use Silex\Application;
    use Silex\ControllerProviderInterface;
    use Silex\ControllerCollection;

    class PrestationController implements ControllerProviderInterface
    {


        public function index(Application $app)
        {
            //$password = $app['security.encoder.digest']->encodePassword('bonjour', '');
            //$decode = $app['security.encoder.digest']->decodePassword(' VZa0Yp8zFGS+hEbBkQiyICBr3fPI6VjOEMb28ecXRpter1+rVdUoUSPDb4Ss+CYEbjNsI6dME3ygBUq97QzIcw==');
            return $app["twig"]->render("prestation/ajouter.twig");
        }

        public function ajouter(Application $app)
        {
           // self::dump(\App\Models\IndexModels::login($app));
            //\Doctrine\Common\Util\Debug::dump(\App\Models\IndexModels::login($app));
           // var_dump(\App\Models\IndexModels::login($app));
            return $app["twig"]->render("prestation/ajouter.twig");

        }

        public function info(Application $app)
        {
            return phpinfo();
        }

        public function connect(Application $app)
        {
            // créer un nouveau controller basé sur la route par défaut
            $prestation = $app['controllers_factory'];
            $prestation->match('/', 'App\Controller\PrestationController::index');
            $prestation->match("/index", 'App\Controller\PrestationController::index');
            $prestation->match("/info", 'App\Controller\PrestationController::info');
            $prestation->match("/ajouter", 'App\Controller\PrestationController::ajouter')->bind("prestation.ajouter");

            return $prestation;
        }


    }

}