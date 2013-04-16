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

    class PrestationModels
    {
        public static function insertFiche(Application $app,array $tab)
        {
            //suppression du _token
            unset($tab['_token']);
            $date = \DateTime::createFromFormat('d-m-Y',$tab['dDate']);
            $tab['dDate'] = $date->format('Y-m-d');

            $app['db']->insert('livre', $tab);
            //$app['session']->set('idClient', $app['db']->lastInsertId());
            $app["session"]->set("success", "nouvelle prestation Ajouté");


        }

        public static function getFiche(Application $app,$id){

            $sql = "SELECT *,DATE_FORMAT(dDate, '%d-%m-%Y') AS dateFormat FROM livre WHERE dossier = ?";
            return $app['db']->fetchAll($sql, array($id));

        }

        public static function updateFiche(Application $app,array $tab)
        {
            //suppression du _token
            unset($tab['_token']);
            $date = \DateTime::createFromFormat('d-m-Y',$tab['dDate']);
            $tab['dDate'] = $date->format('Y-m-d');

            $app['db']->update('livre',$tab,array('idLivre' => $tab['idLivre']));
            //$app['session']->set('idClient', $app['db']->lastInsertId());
            $app["session"]->set("success", "nouvelle prestation Ajouté");


        }

        public static function delPrestation(Application $app,$id){

            $app['db']->delete('livre',array('idLivre'=>$id));

        }

        public static function getLivre(Application $app,$id){

            $sql = 'SELECT * FROM livre WHERE idLivre = ?';
            return $app['db']->fetchAll($sql,array($id));

        }


    }

}
