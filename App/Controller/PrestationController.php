<?php
namespace App\Controller {

    use Silex\Application;
    use Silex\ControllerProviderInterface;
    use Silex\ControllerCollection;
    use App\Models\DossierModels as Dossier;
    use App\Models\PrestationModels as Prestation;

    class PrestationController implements ControllerProviderInterface
    {


        public function index(Application $app)
        {

            $form = $app["form.factory"]->create(new \App\Form\Prestation());
            $data['form'] = $form->createView();
            $data['dossier'] = Dossier::choisir($app);
            $data['legend'] = 'Choisir Dossier';
            $data['route'] = $app['url_generator']->generate("prestation.index");


            if ($app['request']->getMethod() === 'POST') {

                $formData = $app['request']->request->all();
                return $app->redirect($app['url_generator']->
                    generate("fiche.get", array('id' => $formData['dossier']['dossier'])));

            }
            return $app["twig"]->render("prestation/ajouter.twig", $data);
        }


        public function ajouter(Application $app)
        {


            $form = $app["form.factory"]->create(new \App\Form\Prestation());
            $data['form'] = $form->createView();
            $data['dossier'] = Dossier::choisir($app);
            $data['legend'] = 'Choisir Dossier';
            $data['route'] = 'Suivre le chemin';
            return $app["twig"]->render("prestation/ajouter.twig", $data);

        }

        public function fiche(Application $app, $id)
        {
            //on récupère les infos
            $formData = $app['request']->request->all();
            //j'ajoute l'id du dossier
            $formData['livre']['dossier'] = $id;
            $form = $app["form.factory"]->create(new \App\Form\Livre());
            $data['form'] = $form->createView();
            $dossier = Dossier::recup($app, $id);

            $data['nomDossier'] = 'Dossier : ' . $dossier[0]['tDossier'];
            $data['nomClient'] = 'Client : ' . $dossier[0]['autocomplete'];
            $data['route'] = $id;
            $data['prestation'] = Prestation::getFiche($app, $id);


            if ($app['request']->getMethod() === 'POST') {

                Prestation::insertFiche($app, $formData['livre']);
                return $app->redirect($app['url_generator']->
                    generate("fiche.get", array('id' => $id)));


            }

            //  $app['mp']->dump($formData['livre']);
            return $app["twig"]->render("prestation/fiche.twig", $data);
        }

        public function delete(Application $app, $id, $route)
        {

            Prestation::delPrestation($app, $id);
            return $app->redirect($app['url_generator']->
                generate("fiche.get", array('id' => $route)));


        }

        public function modifier(Application $app,$id,$route){

            $get = Prestation::getLivre($app,$id);
            $date = \DateTime::createFromFormat('Y-m-d',$get[0]['dDate']);
            $get[0]['dDate'] = $date->format('d-m-Y');

            if ('POST' == $app['request']->getMethod()) {
                //on récupère les infos
                $formData = $app['request']->request->all();
                $formData['livre']['idLivre'] = $id;

                Prestation::updateFiche($app, $formData['livre']);
                return $app->redirect($app['url_generator']->
                  generate("fiche.get", array('id' => $route)));


            }

            $form = $app["form.factory"]->create(new \App\Form\Livre(),$get[0]);
            $data['form'] = $form->createView();

            $dossier = Dossier::recup($app, $get[0]['dossier']);

            $data['nomDossier'] = 'Dossier : ' . $dossier[0]['tDossier'];
            $data['nomClient'] = 'Client : ' . $dossier[0]['autocomplete'];

            $data['id'] = $id;
            $data['route'] = $route;
            return $app["twig"]->render("prestation/modifier.twig",$data);


        }


        public function connect(Application $app)
        {
            // créer un nouveau controller basé sur la route par défaut
            $prestation = $app['controllers_factory'];
            $prestation->match('/', 'App\Controller\PrestationController::index');
            $prestation->match("/index", 'App\Controller\PrestationController::index')->bind("prestation.index");
            $prestation->match("/ajouter", 'App\Controller\PrestationController::ajouter')->bind("prestation.ajouter");
            $prestation->match("/fiche", 'App\Controller\PrestationController::fiche')->bind("prestation.fiche");
            $prestation->match("/fiche/{id}", array($this, 'Fiche'))->bind("fiche.get");
            $prestation->match("/delete/{id}/{route}", 'App\Controller\PrestationController::delete')->bind("prestation.delete");
            $prestation->match("/modifier/{id}/{route}", 'App\Controller\PrestationController::modifier')->bind("prestation.modifier");

            return $prestation;
        }


    }

}