<?php

header("Content-Type: application/json");

$post = json_decode(file_get_contents("php://input"), true);

try{
	require_once("connect.php");
}catch(Exception $error){
	echo json_encode(["error" => "Houve um erro ao conectar-se com o banco de dados.", "sucess" => false]);
	exit();
}

if(isset($post['id']) AND isset($post['table'])){
	$query1 = $con->prepare("DELETE FROM {$post['table']} WHERE id=:id");
	$query1->bindValue(":id", $post['id']);
	$query1->execute();

	echo json_encode(["sucess" => false, "message" => "Registro deletado com sucesso!"]);
}else{
	echo json_encode(["error" => "Dados insuficientes para deletar registro!", "sucess" => false]);
}