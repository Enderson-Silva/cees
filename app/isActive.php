<?php

header("Content-Type: application/json");

try{
	session_start();

	if(isset($_SESSION['nickname'])){
		echo json_encode(['sucess' => true]);
	}else{
		echo json_encode(["sucess" => false]);
	}

	require_once("updateGeneral.php");
}catch(Exception $error){
	echo json_encode(["error" => "Houve um erro ao fazer login.", "sucess" => false]);
}