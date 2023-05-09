<?php

header("Content-Type: application/json");

try{
	setcookie("nickname", "", time() - 3600);
	setcookie("photo", "", time() - 3600);
	setcookie("role", "", time() - 3600);
	session_start();
	session_destroy();
}catch(Exception $error){
	echo json_encode(["error" => "Houve um erro ao salvar novo registro. $error", "sucess" => false]);
	var_dump($post);
}