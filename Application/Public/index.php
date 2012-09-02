<?php

require dirname(dirname(__DIR__)) .
            DIRECTORY_SEPARATOR . 'Data' .
            DIRECTORY_SEPARATOR . 'Core.link.php'; 

from('Hoa')
	->import('Dispatcher.Basic')
	->import('Router.Http')
	->import('Http.Response')
	->import('File.Read')
	->import('Xyl.~')
	->import('Xyl.Interpreter.Html.~');

from('Hoathis')
    ->import('KitAggreagate')
    ->import('Controller.Generic');
	//->import('Kit.Response');




$dispatcher = new Hoa\Dispatcher\Basic();

$router = new Hoa\Router\Http();

$router->setPrefix('/Avosoft/Application/Public');

$router->get('i', '/', 'main', 'index');
$router->get('ac', '/(?<_call>\w+)/(?<_able>\w+)', '(\w+)', '(\w+)');
$router->get('c', '/(?<_call>\w+)', '(\w+)', 'index');
$router->get('_css', '/Css/(?<resource>)');



$dispatcher->setKitName('Hoathis\KitAggreagate');

$view = new Hoa\Xyl(
	new Hoa\File\Read('hoa://Application/View/Main.xyl'),
	new Hoa\Http\Response(), // notre outputstream !
	new Hoa\Xyl\Interpreter\Html(),
	$router
);


try {

	$dispatcher->dispatch(
		$router,
		$view

	);
} catch (Hoa\Exception $e ) {


	$router->route($router->getPrefix() . '/error');
	$dispatcher->dispatch($router, $view);
}
