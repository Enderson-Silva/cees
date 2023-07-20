<?php

/*require("vendor/autoload.php");

$temp = new \PhpOffice\PhpWord\TemplateProcessor('base.docx');

$temp->setValue("nome", "Enderson");
$temp->setValue("idade", "18");
$temp->setValue("cpf", "12.1346.135-34");
//$temp->saveAs("enderson.docx");
*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cees Cursos - Sistema</title>
	<link rel="stylesheet" href="resources/css/general.css"/>
	<link rel="stylesheet" href="resources/css/main.css"/>
	<link rel="icon" href="resources/img/icon-cees.png"/>

	<script defer type="module" src="resources/js/main.js"></script>
</head>
<body>
	<div class="general">
		<nav class="navegation">
			<div class="logo-cees">
				<img src="https://i.imgur.com/SYDXHEE.png"/>
			</div>
			<div class="title-navegation">
				<span>Navegação</span>
			</div>
			<ul class="menu">
				<li>
					<div class="option-menu">
						<div class="icon-and-text-li">
							<div class="icon-li-menu">
								<img src="resources/img/icon-home.svg"/>
							</div>
							<div class="text-li">Dashboard</div>
						</div>
					</div>
				</li>
				<li>
					<div class="option-menu">
						<div class="icon-and-text-li">
							<div class="icon-li-menu">
								<img src="resources/img/icon-calendar.svg"/>
							</div>
							<div class="text-li">Comercial</div>
						</div>
					</div>
				</li>
				<li>
					<div class="option-menu">
						<div class="icon-and-text-li">
							<div class="icon-li-menu">
								<img src="resources/img/icon-people.svg"/>
							</div>
							<div class="text-li">Matrículas</div>
						</div>
					</div>
				</li>
				<li>
					<div class="option-menu">
						<div class="icon-and-text-li">
							<div class="icon-li-menu">
								<img src="resources/img/icon-cube.svg"/>
							</div>
							<div class="text-li">Atendimento</div>
						</div>
					</div>
				</li>
				<li>
					<div class="option-menu">
						<div class="icon-and-text-li">
							<div class="icon-li-menu">
								<img src="resources/img/icon-book.svg"/>
							</div>
							<div class="text-li">Contrato</div>
						</div>
					</div>
				</li>
			</ul>
		</nav>
		<main>
			<header>
				<div class="notifications">
					<div class="icon-notification">
						<img src="resources/img/icon-notification-on.svg"/>
					</div>
					<div class="text">
						<div class="alert-notification"></div>
						Notificações
					</div>
				</div>
				<div class="profile">
					<div class="options-profile">
						<img src="resources/img/icon-settings.svg"/>
						<img src="resources/img/icon-logout.svg"/>
					</div>
					<div class="icon-user">
						<img src="resources/img/icon-user.svg"/>
					</div>
					<div class="login-off">
						Entrar
					</div>
					<div class="login-on">
						Name
					</div>
				</div>
			</header>
			
		</main>
	</div>
</body>
</html>