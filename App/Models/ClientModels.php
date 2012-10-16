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

    class ClientModels
    {

        public static function nouveau(Application $app, array $tab, $id)
        {
            $tab['tNom'] = strtoupper($tab['tNom']);

            if ($id == NULL) {
                $app['db']->insert('client', $tab);
                $app['session']->set('idClient', $app['db']->lastInsertId());
                $app["session"]->setFlash("success", "nouveau Client Ajouté");
            } else {

                $app['db']->update('client', $tab, array('idClient' => $id));
                $app['session']->set('idClient', $id);
                $app["session"]->setFlash("success", "Client Modifié");

            }

        }


        public static function adresse(Application $app, array $tab, $id)
        {

            $sql = 'SELECT COUNT(idAdresse) AS compteur ';
            $sql .= 'FROM adresse ';
            $sql .= 'WHERE client = ? ';
            $sql .= 'UNION ALL ';
            $sql .= 'SELECT 0';

            $r = $app['db']->fetchAll($sql, array($id));


            if ($r[0]['compteur'] == 0) {

                $app['db']->insert('adresse', $tab);
                $app["session"]->setFlash("success", "Adresse ajouté");

            } else {

                $app['db']->update('adresse', $tab, array('client' => $id));
                $app["session"]->setFlash("success", "Adresse modifié");
            }


        }

        public static function client(Application $app)
        {
            $sql = 'SELECT tNom,tPrenom,idClient FROM client';

            return $app['db']->fetchAll($sql);

        }

        public static function getClient(Application $app, $id)
        {

            $sql = 'SELECT * FROM client WHERE idClient = ?';
            return $app['db']->fetchAll($sql, array($id));

        }

        public static function getAdresse(Application $app, $id)
        {

            $sql = 'SELECT * FROM adresse WHERE client = ?';
            return $app['db']->fetchAll($sql, array($id));

        }

        public static function deleteClient(Application $app, $id)
        {
            $sql = 'SELECT COUNT(idAdresse) AS compteur ';
            $sql .= 'FROM adresse ';
            $sql .= 'WHERE client = ? ';
            $sql .= 'UNION ALL ';
            $sql .= 'SELECT 0';

            $r = $app['db']->fetchAll($sql, array($id));

            if ($r[0]['compteur'] != 0) {

                $app['db']->delete('adresse', array('client' => $id));

            }

            $app['db']->delete('client', array('idClient' => $id));
            $app["session"]->setFlash("success", "Client Supprimé");

        }


    }


}
