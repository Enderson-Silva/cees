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
	session_start();

	$sql = "INSERT INTO comercial (id, responsible, time_visit, date_visit, name_one, name_two, number_one, number_two, status, tag) ";

	$con->prepare('INSERT INTO comercial (id, responsible, time_visit, date_visit, name_one, name_two, number_one, number_two, status, tag, observation) VALUES (:id, :responsible, :time_visit, :date_visit, :name_one, :name_two, :number_one, :number_two, :status, :tag, :observation)')->execute([
			":id" => null,
			":responsible" => $_SESSION['nickname'],
			":time_visit" => $post['time'].":00",
			":date_visit" => $post['date'],
			":name_one" => $post['nameOne'],
			":name_two" => $post['nameTwo'],
			":number_one" => $post['numberOne'],
			":number_two" => $post['numberTwo'],
			":status" => $post['status'],
			":tag" => $post['tag'],
			":observation" => $post['observation']
	]);

	echo json_encode(["sucess" => true]);
}catch(Exception $error){
	echo json_encode(["error" => "Houve um erro ao salvar novo registro. $error", "sucess" => false]);
	var_dump($post);
}