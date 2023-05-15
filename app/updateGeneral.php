<?php

header("Content-Type: application/json");

try{
	require_once("connect.php");
}catch(Exception $error){
	echo json_encode(["error" => "Houve um erro ao conectar-se com o banco de dados.", "sucess" => false]);
	exit();
}

$query1 = $con->prepare("UPDATE comercial SET status=:status WHERE date_visit < :date_now");
$query1->bindValue(":status", "pendente");
$query1->bindValue(":date_now", date("Y-m-d"));
$query1->execute();