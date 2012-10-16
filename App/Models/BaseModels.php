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

    class BaseModels
    {

        public static function client(Application $app,$id)
        {
            $sql = 'SELECT tNom,tPrenom FROM client WHERE idClient = ?';

            return $app['db']->fetchAll($sql,array($id));


        }




    }

}
