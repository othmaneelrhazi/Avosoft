<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gg
 * Date: 17/09/12
 * Time: 12:35
 * To change this template use File | Settings | File Templates.
 */

namespace App\Models {

    use Silex\Application;

    class DossierModels
    {

        public static function ajouter (Application $app,$tab){

            //suppression du nom de client, on ne garde que son id.
            unset($tab['autocomplete']);

            $app['db']->insert('dossier',$tab);
            $app["session"]->setFlash("success", "Nouveau Dossier créer");


        }

        public static function choisir(Application $app){

            $sql = 'SELECT tDossier,idDossier FROM dossier';
            return $app['db']->fetchAll($sql);

        }

        public static function recup(Application $app,$id){

            $sql = 'SELECT tDossier , CONCAT_WS(" ",tNom,tPrenom) AS autocomplete , idDossier, client ';
            $sql.= 'FROM dossier ';
            $sql.= 'INNER JOIN client ';
            $sql.= 'ON idClient = client ';
            $sql.= 'WHERE idDossier = ?';

            return $app['db']->fetchAll($sql,array($id));



        }

        public static function delete(Application $app,$id){

            $app['db']->delete('dossier',array('idDossier'=>$id));
            $app["session"]->setFlash("success", "Client Supprimé");

        }


    }

}
