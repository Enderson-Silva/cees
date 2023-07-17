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
			<div class="dashboard">
				<div class="statistics">
					<div class="block-statistic">
						<div class="infos-statistic">
							<div class="left-statistic">
								<span>00/50</span>
								<span>Matrículas</span>
							</div>
							<div class="right-statistic">
								<img src="resources/img/icon-pc-analytics.svg"/>
							</div>
						</div>
						<div class="time-statistic">
							<div class="icon-time-statistic">
								<img src="resources/img/icon-time.svg"/>
							</div>
							<div class="text-time-statistic">
								Faltam 0 dias
							</div>
						</div>
					</div>
					<div class="block-statistic">
						<div class="infos-statistic">
							<div class="left-statistic">
								<span>R$00,00</span>
								<span>Faturamento</span>
							</div>
							<div class="right-statistic">
								<img src="resources/img/icon-real.svg"/>
							</div>
						</div>
						<div class="time-statistic">
							<div class="icon-time-statistic">
								<img src="resources/img/icon-statistic-bar.svg"/>
							</div>
							<div class="text-time-statistic">
								Meta: R$15.000,00
							</div>
						</div>
					</div>
					<div class="block-statistic">
						<div class="infos-statistic">
							<div class="left-statistic">
								<span>00/25</span>
								<span>Matrículas</span>
							</div>
							<div class="right-statistic">
								<img src="resources/img/icon-pc-analytics.svg"/>
							</div>
						</div>
						<div class="time-statistic">
							<div class="icon-time-statistic">
								<img src="resources/img/icon-statistic-candle.svg"/>
							</div>
							<div class="text-time-statistic">
								Minhas Matrículas
							</div>
						</div>
					</div>
					<div class="block-statistic">
						<div class="infos-statistic">
							<div class="left-statistic">
								<span>R$00,00</span>
								<span>Faturamento</span>
							</div>
							<div class="right-statistic">
								<img src="resources/img/icon-real.svg"/>
							</div>
						</div>
						<div class="time-statistic">
							<div class="icon-time-statistic">
								<img src="resources/img/icon-statistic-candle.svg"/>
							</div>
							<div class="text-time-statistic">
								Meu Faturamento
							</div>
						</div>
					</div>
				</div>
				<div class="visits-content">
					<div class="visits">
						<div class="visits-title">
							<div>Visitas do dia</div>
							<div>Veja todas as visitas agendadas para hoje</div>
						</div>
						<div class="list-visits">
							<div class="list-default list-dashboard">
								<div class="header-list-default header-list-dashboard">
									<div class="item-cell-list">
										Horário
									</div>
									<div class="item-cell-list">
										Nome
									</div>
									<div class="item-cell-list">
										Telefone
									</div>
									<div class="item-cell-list">
										Responsável
									</div>
									<div class="item-cell-list">
										Mídia
									</div>
								</div>
								<div class="items-list-dashboard">
									
								</div>
							</div>
						</div>
					</div>
					<div class="narrative">
						<div class="narrative-individual">
							<div class="title-narrative">
								<span>Relatório</span>
								<span>Individual</span>
							</div>
							<table class="table-narrative">
								<tr>
									<td>Agendamentos</td>
									<td>0</td>
								</tr>
								<tr>
									<td>Visitas</td>
									<td>0</td>
								</tr>
								<tr>
									<td>Atendimentos</td>
									<td>0</td>
								</tr>
								<tr>
									<td>Matrículas</td>
									<td>0</td>
								</tr>
								<tr>
									<td>Faturamento</td>
									<td>00,00</td>
								</tr>
							</table>
						</div>
						<div class="narrative-collective">
							<div class="title-narrative">
								<span>Relatório</span>
								<span>Geral</span>
							</div>
							<table class="table-narrative">
								<tr>
									<td>Agendamentos</td>
									<td>0</td>
								</tr>
								<tr>
									<td>Visitas</td>
									<td>0</td>
								</tr>
								<tr>
									<td>Atendimentos</td>
									<td>0</td>
								</tr>
								<tr>
									<td>Matrículas</td>
									<td>0</td>
								</tr>
								<tr>
									<td>Faturamento</td>
									<td>00,00</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
</body>
</html>