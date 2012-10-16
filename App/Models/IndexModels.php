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

    class IndexModels
    {

        public static function login (Application $app){

            $sql = 'SELECT * FROM client';
            $result = $app['db']->fetchAll($sql);
            return $result;



        }


    }

}
