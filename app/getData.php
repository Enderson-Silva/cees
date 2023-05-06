<?php

header("Content-Type: application/json");

$post = json_decode(file_get_contents("php://input"), true);

try{
	require_once("connect.php");
}catch(Exception $error){
	echo json_encode(["error" => "Houve um erro ao conectar-se com o banco de dados.", "sucess" => false]);
	exit();
}

try{
	if(isset($post["category"])){
		switch($post["category"]){
			case "dashboard":
				$query = $con->prepare("SELECT * FROM colaboradores");
				$query->execute();

				$query2 = $con->prepare("SELECT * FROM comercial WHERE date_visit=:date_visit AND status=:status");
				$query2->bindValue(":status", "agendamento");
				$query2->bindValue(":date_visit", date("Y-m-d"));
				$query2->execute();

				$dashboard = ["colaboradores" => [], "visitas" => []];

				foreach($query->fetchAll(PDO::FETCH_ASSOC) as $value){
					array_push($dashboard["colaboradores"], $value);
				}

				foreach($query2->fetchAll(PDO::FETCH_ASSOC) as $value){
					array_push($dashboard["visitas"], $value);
				}

				echo json_encode($dashboard);

				//echo json_encode($query->fetchAll(PDO::FETCH_ASSOC));
			break;
			case "comercial":

			break;
			case "matriculas":

			break;
			case "atendimento":

			break;
			case "documentos":

			break;
		}
	}else{
		echo json_encode(["error" => "Categoria de solicitação não informada.", "sucess" => false]);
	}
}catch(Exception $error){
	echo json_encode(["error" => "Houve um erro ao buscar informações solicitadas.", "sucess" => false]);
}