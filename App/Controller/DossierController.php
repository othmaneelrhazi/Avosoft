<?php
namespace App\Controller {

    use Silex\Application;
    use Silex\ControllerProviderInterface;
    use Silex\ControllerCollection;

    //Gesttion de la base de données
    use App\Models\ClientModels as Client;
    use App\Models\DossierModels as Dossier;

    class DossierController implements ControllerProviderInterface
    {


        public function index(Application $app)
        {

        }

        public function ajouter(Application $app)
        {

            $dossier = $app["form.factory"]->create(new \App\Form\Dossier());

            if ($app['request']->getMethod() === 'POST') {

                $dossier->bindRequest($app['request']);
                Dossier::ajouter($app, $dossier->getData());
                $app->redirect($app['url_generator']->generate("index.index"));

            }


            $data['form'] = $dossier->createView();
            $data['client'] = Client::client($app);
            $data['legend'] = 'Nouveau Client';
            $data['route'] = $app['url_generator']->generate("dossier.ajouter");

            return $app["twig"]->render("dossier/ajouter.twig", $data);

        }

        public function choisir(Application $app)
        {

            $data['dossier'] = Dossier::choisir($app);


            if ($app['request']->getMethod() === 'POST') {

                $formData = $app['request']->request->all();
                $recup = Dossier::recup($app, $formData['dossier']['idDossier']);
                $dossier = $app['form.factory']->create(new \App\Form\DossierBis());
                $dossier->bind($recup[0]);
                $data['form'] = $dossier->createView();
                $data['client'] = Client::client($app);

                return $app["twig"]->render("dossier/remplacer.twig", $data);
            }


            $dossier = $app['form.factory']->create(new \App\Form\AutocompleteDossier());

            $data['form'] = $dossier->createView();

            return $app["twig"]->render("dossier/choisir.twig", $data);


        }

        public function modifier(Application $app)
        {
            $formData = $app['request']->request->all();




        }

        public function delete(Application $app)
        {
            if($app['request']->getMethod() === 'POST'){

                $formData = $app['request']->request->all();
                Dossier::delete($app,$formData['dossier']['idDossier']);
                //return $app->redirect($app['url_generator']->generate("index.index"));


            }
            $data['dossier'] = Dossier::choisir($app);
            $data['legend'] = 'Supprimer Dossier';
            $data['route'] = $app['url_generator']->generate("dossier.delete");

            $dossier = $app['form.factory']->create(new \App\Form\AutocompleteDossier());
            $data['form'] = $dossier->createView();

            return $app["twig"]->render("dossier/choisir.twig", $data);
        }


        public function connect(Application $app)
        {
            // créer un nouveau controller basé sur la route par défaut
            $dossier = $app['controllers_factory'];
            $dossier->match('/', 'App\Controller\DossierController::index');
            $dossier->match("/ajouter", 'App\Controller\DossierController::ajouter')->bind("dossier.ajouter");
            $dossier->match("/choisir", 'App\Controller\DossierController::choisir')->bind("dossier.choisir");
            $dossier->match("/delete", 'App\Controller\DossierController::delete')->bind("dossier.delete");

            return $dossier;
        }


    }

}