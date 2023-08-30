<?php

require(__DIR__."/vendor/autoload.php");

use App\Http\Router;
use App\Http\Response;
use App\Controller\Pages\Home;

define("URL", "http://localhost/Projetos/cees");

$objRouter = new Router(URL);

$objRouter->get('/', [
	function(){
		return new Response(200, Home::getHome());
	}
]);

$objRouter->run()->sendResponse();

exit;

echo Home::getHome();