<?php

header("Content-Type: application/json");

try{
	require_once("connect.php");
}catch(Exception $error){
	echo json_encode(["error" => "Houve um erro ao conectar-se com o banco de dados.", "sucess" => false]);
	exit();
}

try{
	session_start();
	if(isset($_SESSION["id"])){
		$query = $con->prepare("SELECT * FROM pages_acess WHERE id_colaborador=:id LIMIT 1");
		$query->bindParam(":id", $_SESSION['id']);
		$query->execute();

		$result = $query->fetch(PDO::FETCH_ASSOC);

		echo json_encode(["pages_acess" => $result, "sucess" => true]);
	}else{
		echo json_encode(["error" => "Houve um erro ao buscar informações! ID não informado.", "sucess" => false]);
		exit();
	}
}catch(Exception $error){
	echo json_encode(["error" => "Houve um erro ao buscar dados iniciais.", "sucess" => false]);
}