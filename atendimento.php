<?php
	require_once("app/hasSession.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cees Cursos - Sistema</title>
	<link rel="stylesheet" href="resources/css/general.css"/>
	<link rel="stylesheet" href="resources/css/main.css"/>
	<link rel="stylesheet" href="resources/css/service.css"/>
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
			<div class="service">
				<ul class="bar-menu bar-menu-service">
					<li>
						<span><img src="resources/img/atendimento/pre-cadastro.svg"></span>
						<span>Pré Cadastro</span>
					</li>
					<li>
						<span><img src="resources/img/atendimento/brinde.svg"></span>
						<span>Brinde</span>
					</li>
					<li>
						<span><img src="resources/img/atendimento/bolsa.svg"></span>
						<span>Bolsa</span>
					</li>
					<li>
						<span><img src="resources/img/atendimento/matricular.svg"></span>
						<span>Matricular</span>
					</li>
				</ul>
				<div class="content-service">
					<div class="title-form">
						<h1>Pré Cadastro</h1>
					</div>
					<div class="form-content">
						<div class="form-default form-pre-cadastro">
							<div class="input-default input-name">
								<span>Nome</span>
								<input type="text" />
							</div>
							<div class="input-default input-birth">
								<span>Data de nascimento</span>
								<input type="date" />
							</div>
							<div class="input-default input-phone">
								<span>Número de telefone</span>
								<input type="text" />
							</div>
							<div class="input-default input-cpf">
								<span>CPF</span>
								<input type="text" />
							</div>
							<div class="input-default input-rg">
								<span>RG</span>
								<input type="text" />
							</div>
							<div class="buttons-default buttons-pre-cadastro">
								<button>Cadastrar</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>

	<script src="resources/js/atendimento.js"></script>
</body>
</html>