<?php

require("vendor/autoload.php");

$temp = new \PhpOffice\PhpWord\TemplateProcessor('base.docx');

$temp->setValue("nome", "Enderson");
$temp->setValue("idade", "18");
$temp->setValue("cpf", "12.1346.135-34");
//$temp->saveAs("enderson.docx");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cees Cursos - Sistema</title>
	<link rel="stylesheet" href="resources/css/main.css"/>
	<link rel="icon" href="resources/img/favincon.svg"/>
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
							<div class="text-li">Documentos</div>
						</div>
					</div>
				</li>
				<li>
					<div class="option-menu">
						<div class="icon-and-text-li">
							<div class="icon-li-menu">
								<img src="resources/img/icon-documents.svg"/>
							</div>
							<div class="text-li">Atendimento</div>
						</div>
						<div class="icon-arrow">
							<img src="resources/img/icon-arrowhead.svg"/>
						</div>
					</div>
					<ul class="sub-ul">
						<li>
							<div class="icon-arrow-sub">
								<img src="resources/img/icon-arrowhead.svg"/>
							</div>
							<div class="text-li">Validar brinde</div>
						</li>
						<li>
							<div class="icon-arrow-sub">
								<img src="resources/img/icon-arrowhead.svg"/>
							</div>
							<div class="text-li">Validar Cheque Estudantil</div>
						</li>
						<li>
							<div class="icon-arrow-sub">
								<img src="resources/img/icon-arrowhead.svg"/>
							</div>
							<div class="text-li">Solicitar Bolsa</div>
						</li>
					</ul>
				</li>
				<li>
					<div class="option-menu">
						<div class="icon-and-text-li">
							<div class="icon-li-menu">
								<img src="resources/img/icon-book.svg"/>
							</div>
							<div class="text-li">Nova Bolsa</div>
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
					<div class="icon-user">
						<img src="resources/img/icon-user.svg"/>
					</div>
					<div class="login-off">
						Entrar
					</div>
					<div class="login-on">
						Enderson França
					</div>
				</div>
			</header>
			<div class="dashboard">
				<div class="statistics">
					<div class="block-statistic">
						<div class="infos-statistic">
							<div class="left-statistic">
								<span>23/50</span>
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
								Faltam 28 dias
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
								<span>0/25</span>
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
							<table>
								<tr>
									<td>Horário</td>
									<td>Nome</td>
									<td>Telefone</td>
									<td>Responsável</td>
									<td>Mídia</td>
								</tr>
								<tr>
									<td>14:30</td>
									<td>Enderson França</td>
									<td>61 991661398</td>
									<td>Enderson</td>
									<td>Panfletagem</td>
								</tr>
								<tr>
									<td>14:30</td>
									<td>Enderson França</td>
									<td>61 991661398</td>
									<td>Enderson</td>
									<td>Panfletagem</td>
								</tr>
								<tr>
									<td>14:30</td>
									<td>Enderson França</td>
									<td>61 991661398</td>
									<td>Enderson</td>
									<td>Panfletagem</td>
								</tr>
							</table>
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
									<td>10</td>
								</tr>
								<tr>
									<td>Visitas</td>
									<td>5</td>
								</tr>
								<tr>
									<td>Atendimentos</td>
									<td>3</td>
								</tr>
								<tr>
									<td>Matrículas</td>
									<td>1</td>
								</tr>
								<tr>
									<td>Faturamento</td>
									<td>100,00</td>
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
									<td>10</td>
								</tr>
								<tr>
									<td>Visitas</td>
									<td>5</td>
								</tr>
								<tr>
									<td>Atendimentos</td>
									<td>3</td>
								</tr>
								<tr>
									<td>Matrículas</td>
									<td>1</td>
								</tr>
								<tr>
									<td>Faturamento</td>
									<td>100,00</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="records">
				<div class="options-records">
					<div class="type-list-schedules">
						<span>Agendamentos</span>
						<span>Pendentes</span>
						<span>Sem Interesse</span>
						<span>Matrículas</span>
						<span>Inativos</span>
					</div>
					<div class="tools-records">
						<span>Adicionar Novo Registro</span>
					</div>
				</div>
				<div class="list-default list-comercial">
					<div class="header-list-default header-list-comercial">
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
							Status
						</div>
						<div class="item-cell-list">
							Etiqueta
						</div>
						<div class="item-cell-list">
							Opções
						</div>
					</div>
					<div class="item-list-default  item-list-comercial">
						<div class="item-cell-list">
							<span>12:00</span>
							<span>06/05/2023</span>
						</div>
						<div class="item-cell-list">
							<span>Enderson França da Silva</span>
							<span>Edlene Soares França</span>
						</div>
						<div class="item-cell-list">
							<span>61 991661398</span>
							<span>61 993240414</span>
						</div>
						<div class="item-cell-list">
							<span style="background: blue;">Agendamento</span>
						</div>
						<div class="item-cell-list">
							<span>Fachada</span>
						</div>
						<div class="item-cell-list">
							<img src="resources/img/icon-plus.svg"/>
							<img src="resources/img/icon-edit.svg"/>
							<img src="resources/img/icon-trash.svg"/>
						</div>
					</div>
					<div class="item-list-default  item-list-comercial">
						<div class="item-cell-list">
							<span>14:00</span>
							<span>01/05/2023</span>
						</div>
						<div class="item-cell-list">
							<span>Maria Luiza Camargos Amorim</span>
							<span>Rosa Camargos Amorim</span>
						</div>
						<div class="item-cell-list">
							<span>61 993564645</span>
							<span>61 983464356</span>
						</div>
						<div class="item-cell-list">
							<span style="background: red;">Sem Interesse</span>
						</div>
						<div class="item-cell-list">
							<span>Indicação</span>
						</div>
						<div class="item-cell-list">
							<img src="resources/img/icon-plus.svg"/>
							<img src="resources/img/icon-edit.svg"/>
							<img src="resources/img/icon-trash.svg"/>
						</div>
					</div>
					<div class="item-list-default  item-list-comercial">
						<div class="item-cell-list">
							<span>08:00</span>
							<span>05/05/2023</span>
						</div>
						<div class="item-cell-list">
							<span>Dayanne Amorim souza</span>
							<span>Afonso Pereira</span>
						</div>
						<div class="item-cell-list">
							<span>61 985645566</span>
							<span>61 997555464</span>
						</div>
						<div class="item-cell-list">
							<span style="background: green;">Matrícula</span>
						</div>
						<div class="item-cell-list">
							<span>Macro</span>
						</div>
						<div class="item-cell-list">
							<img src="resources/img/icon-plus.svg"/>
							<img src="resources/img/icon-edit.svg"/>
							<img src="resources/img/icon-trash.svg"/>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
</body>
</html>