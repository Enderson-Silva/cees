<?php

/*Sub pastas*/

$internalFolder = "projetos/cees";

/*Url*/

define("DIRPAGE", "http://{$_SERVER['HTTP_HOST']}/{$internalFolder}/");

/*Diretório Raiz*/

if(substr($_SERVER['DOCUMENT_ROOT'], -1) == "/"){
	define("DIRREQ", "{$_SERVER['DOCUMENT_ROOT']}{$internalFolder}");
}else{
	define("DIRREQ", "{$_SERVER['DOCUMENT_ROOT']}/{$internalFolder}");
}

/*Diretório específicos*/

define("DIRIMG", DIRPAGE."resources/img/");
define("DIRCSS", DIRPAGE."resources/css/");
define("DIRJS", DIRPAGE."resources/js/");
define("DIRFONT", DIRPAGE."resources/font/");
define("DIRINCLUDE", DIRPAGE."resources/");

/*Acesso ao banco de dados*/

define("HOST", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "cees");

/*Set timezone*/

date_default_timezone_set("America/Sao_Paulo");