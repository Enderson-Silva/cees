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
		session_start();
		switch($post["category"]){
			case "dashboard":
				$query = $con->prepare("SELECT * FROM colaboradores");
				$query->execute();

				$query2 = $con->prepare("SELECT * FROM comercial WHERE DATE(date_visit)=DATE(:date_visit) AND status=:status ORDER BY time_visit");
				$query2->bindValue(":status", "agendamento");
				$query2->bindValue(":date_visit", date("Y-m-d"));
				$query2->execute();

				$dashboard = ["colaboradores" => [], "visitas" => []];

				foreach($query->fetchAll(PDO::FETCH_ASSOC) as $value){
					if($post['argument'] == "all"){
						if($value["nickname"] == $_SESSION['nickname']){
							$dashboard["colaborador"] = $value;
						}else{
							array_push($dashboard["colaboradores"], $value);
						}
					}else{
						array_push($dashboard["colaboradores"], $value);
					}
				}

				foreach($query2->fetchAll(PDO::FETCH_ASSOC) as $value){
					array_push($dashboard["visitas"], $value);
				}

				echo json_encode($dashboard);

				//echo json_encode($query->fetchAll(PDO::FETCH_ASSOC));
			break;
			case "comercial":
				$query1 = $con->prepare("SELECT * FROM comercial WHERE status=:status AND responsible=:responsible ORDER BY date_visit, time_visit");
				$query1->bindValue(":status", $post['argument']);
				$query1->bindValue(":responsible", $_SESSION['nickname']);
				$query1->execute();

				echo json_encode($query1->fetchAll(PDO::FETCH_ASSOC));
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
	echo json_encode(["error" => "Houve um erro ao buscar informações solicitadas. {$error}", "sucess" => false]);
}