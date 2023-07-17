<?php

header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

try{
	require_once("connect.php");
}catch(Exception $error){
	echo json_encode(["error" => "Houve um erro ao conectar-se com o banco de dados.", "sucess" => false]);
	exit();
}

try{
	if(isset($data["name"]) && isset($data["password"])){
		$query = $con->prepare("SELECT * FROM colaboradores WHERE nickname= BINARY :name LIMIT 1");
		$query->bindParam(":name", $data['name']);
		$query->execute();

		$result = $query->fetch(PDO::FETCH_ASSOC);

		if(password_verify($data["password"], $result["password"])){
			session_start();

			$_SESSION['name'] = $result["name"];
			$_SESSION['nickname'] = $result["nickname"];
			$_SESSION['role'] = $result["role"];
			
			echo json_encode(["sucess" => true]);
		}else{
			echo json_encode(["error" => "Nome ou senha incorreto.", "sucess" => false]);
		}


	}else{
		echo json_encode(["error" => "É preciso informar nome e senha para fazer o login.", "sucess" => false]);
		exit();
	}
}catch(Exception $error){
	echo json_encode(["error" => "Houve um erro ao fazer login.", "sucess" => false]);
}