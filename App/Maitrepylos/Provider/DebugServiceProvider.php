<?php

/*
 *
 * (c) Gérard Ernaelsten <Ernaelsten@gmail.com>
 */

namespace Maitrepylos\Provider;

use Silex\Application;
use Silex\ServiceProviderInterface;


/**
 * Mise en page d'un var_dump
 *
 * @author Gérard Ernaelsten <Ernaelsten@gmail.com>
 */
class DebugServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['mp'] = $app->share(function ($app)
        {
            return new \Maitrepylos\Debug();
        });
    }

    public function boot(Application $app)
    {
    }
}
