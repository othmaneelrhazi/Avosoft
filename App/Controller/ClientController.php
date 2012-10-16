<?php
namespace App\Controller {

    use Silex\Application;
    use Silex\ControllerProviderInterface;
    use Silex\ControllerCollection;

    //Gesttion de la base de données
    use App\Models\ClientModels as Client;


    class ClientController implements ControllerProviderInterface
    {


        public function index(Application $app)
        {

            return $app["twig"]->render("client/ajouter.twig");
        }


        public function ajouter(Application $app)
        {
            $data['title'] = 'Ajouter Client';


            $clientForm = $app["form.factory"]->create(new \App\Form\NewClient());

            $data['form'] = $clientForm->createView();

            return $app["twig"]->render("client/modifier.twig", $data);

        }


        public function client(Application $app, $id = NULL)
        {


            if ($app['request']->getMethod() === 'POST') {

                $clientForm = $app["form.factory"]->create(new \App\Form\Client());

                $clientForm->bindRequest($app["request"]);

                if ($clientForm->isValid()) {


                    Client::nouveau($app, $clientForm->getData(), $id);
                    return $app->redirect($app['url_generator']->
                        generate("modifier.get", array('id' => $app['session']->get('idClient'))));

                } else {

                    $app["session"]->setFlash("error", "Vouys avez des erreurs");
                    return $app->redirect($app['url_generator']->
                        generate("client.ajouter"));

                }

            }


        }


        public function adresse(Application $app, $id = NULL)
        {

            $clientAdresse = $app["form.factory"]->create(new \App\Form\Adresse());
            $client = \App\Models\BaseModels::client($app, $app['session']->get('idClient'));

            $data = array();
            $data['client'] = $client[0];
            $data['form'] = $clientAdresse->createView();

            if ($app['request']->getMethod() === 'POST') {

                $clientAdresse->bindRequest($app['request']);
                //on doit ajouter l'id client
                $adresse = $clientAdresse->getData();
                $adresse['client'] = $id;

                Client::adresse($app, $adresse, $id);
                return $app->redirect($app['url_generator']->
                    generate("modifier.get", array('id' => $id)));

            }


            return $app["twig"]->render("client/adresse.twig", $data);

        }


        public function clientAutocomplete(Application $app, $chemin)
        {

            if ($app['request']->getMethod() === 'POST') {

                $formData = $app['request']->request->all();

                //on modifie un client
                if ($chemin == 1) {
                    return $app->redirect($app['url_generator']->
                        generate("modifier.get", array('id' => $formData['client']['idclient'])));

                }

                //on supprime un client
                if ($chemin == 2) {
                    return $app->redirect($app['url_generator']->
                        generate("delete.get", array('id' => $formData['client']['idclient'])));

                }

            }

            $data = array();
            $data['route'] = $chemin;
            $form = $app["form.factory"]->create(new \App\Form\Autocomplete());
            $data['form'] = $form->createView();
            $data['client'] = \App\Models\ClientModels::client($app);
            return $app["twig"]->render("client/autocomplete.twig", $data);

        }

        public function modifier(Application $app, $id)
        {


            $data = array();
            $data['title'] = 'Modifier Client';
            $data['route'] = $app['url_generator']->
                generate("client.get", array('id' => $id));

            $data['routeAdresse'] = $app['url_generator']->
                generate("client.adresse", array('id' => $id));

            $clientForm = $app["form.factory"]->create(new \App\Form\Client());
            $clientAdresse = $app["form.factory"]->create(new \App\Form\Adresse());


            $client = Client::getClient($app, $id);
            $adresse = Client::getAdresse($app, $id);


            $clientForm->bind($client[0]);
            $clientAdresse->bind($adresse[0]);


            $data['form'] = $clientForm->createView();
            $data['formAdresse'] = $clientAdresse->createView();


            return $app["twig"]->render("client/ajouter.twig", $data);


        }

        public function delete(Application $app, $id){

            Client::deleteClient($app,$id);
            return $app->redirect($app['url_generator']->
                generate("index.index"));

        }


        public function connect(Application $app)
        {
            // créer un nouveau controller basé sur la route par défaut
            $client = $app['controllers_factory'];
            $client->match('/', 'App\Controller\ClientController::index');
            $client->match("/index", 'App\Controller\ClientController::index');
            $client->match("/ajouter/", array($this, 'ajouter'))->bind("client.ajouter");
            $client->match("/client/", array($this, 'client'))->bind("client.client");
            $client->match("/client/{id}", array($this, 'client'))->bind("client.get");
            $client->match("/adresse/{id}", array($this, 'adresse'))->bind("client.adresse");
            $client->match("/modifier/{id}", array($this, "modifier"))->bind("modifier.get");
            $client->match("/delete/{id}", array($this, "delete"))->bind("delete.get");
            $client->match("/autocomplete/{chemin}", array($this, "clientAutocomplete"))->bind("client.clientAutocomplete");

            return $client;
        }


    }

}