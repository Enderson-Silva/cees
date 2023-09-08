<?php

require(__DIR__."/vendor/autoload.php");

use App\Utils\parseUrl;

use App\Http\Router;
use App\Http\Response;
use App\Controller\Pages;
use App\Controller\Actions;

define("URL", "http://localhost/Projetos/cees");

$objRouter = new Router(URL);

$objRouter->get('/', [
	function(){
		return new Response(200, Pages\Login::getLogin());
	}
]);

$objRouter->post('/', [
	function(){
		return new Response(200, Pages\Login::getLogin());
	}
]);

$objRouter->get('/home', [
	function(){
		return new Response(200, Pages\Home::getHome());
	}
]);

$objRouter->get('/interativo', [
	function(){
		return new Response(200, Pages\Interativo::getInterativo());
	}
]);

$objRouter->run()->sendResponse();