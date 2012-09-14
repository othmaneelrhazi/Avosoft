<?php
namespace App\Controller {

    use Silex\Application;
    use Silex\ControllerProviderInterface;
    use Silex\ControllerCollection;

    class IndexController implements ControllerProviderInterface
    {
        /**
         * @var string
         */
        public $form = "this is a form";

        public function index(Application $app)
        {
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
            $index->match("/", 'App\Controller\IndexController::index');
            $index->match("/index", 'App\Controller\IndexController::index');
            $index->match("/info", 'App\Controller\IndexController::info');
            $index->match("/about", 'App\Controller\IndexController::about');

            return $index;
        }
    }

}