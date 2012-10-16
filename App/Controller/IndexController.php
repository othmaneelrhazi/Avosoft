<?php
namespace App\Controller {

    use Silex\Application;
    use Silex\ControllerProviderInterface;


    class IndexController implements ControllerProviderInterface
    {


        public function index(Application $app)
        {   $result = \App\Models\IndexModels::login($app);
            return $app["twig"]->render("index/index.twig");
        }

        public function about(Application $app)
        {

            return $app["twig"]->render("index/about.twig");

        }

        public function info(Application $app)
        {
            return phpinfo();
        }

        public function connect(Application $app)
        {
            // créer un nouveau controller basé sur la route par défaut
            $index = $app['controllers_factory'];
            $index->match("/", 'App\Controller\IndexController::index')->bind("index.index");
            $index->match("/index", 'App\Controller\IndexController::index');
            $index->match("/info", 'App\Controller\IndexController::info')->bind("index.info");
            $index->match("/about", 'App\Controller\IndexController::about')->bind("index.about");


            return $index;
        }


    }

}