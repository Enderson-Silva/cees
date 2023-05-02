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
	<link rel="icon" href="resources/img/icon-cees.png"/>

	<script defer type="module" src="resources/js/main.js"></script>
</head>
<body>
	<div class="general">
		<div class="fixed-screens">
			<div class="show-alert">
				<div class="icon-alert">
					<img src="resources/img/icon-check.svg"/>
				</div>
				<div class="message-alert">
					<p>Houve um erro ao executar essa ação. Tente novamente!</p>
				</div>
			</div>
			<div class="login-background">
				<div class="login">
					<div class="login-left">
						<div class="icon-cees-content">
							<img src="resources/img/icon-cees.png">
						</div>
						<div class="title-login">
							<h1>Centro Especializado Espaço Sorriso</h1>
						</div>
					</div>
					<div class="login-right">
						<div class="icon-user-login">
							<div>
								<img src="resources/img/icon-user.svg"/>
							</div>
						</div>
						<div class="title-form-login">
							Login
						</div>
						<div class="form-login">
							<div class="input-content">
								<div class="icon-content">
									<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="64" height="64" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
	  									<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
	  									<circle cx="12" cy="7" r="4" />
	 									<path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
									</svg>
								</div>
								<input type="text" placeholder="Digite seu nome" name="form-login-name"/>
							</div>
							<div class="input-content">
								<div class="icon-content">
									<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
									  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
									  <rect x="5" y="11" width="14" height="10" rx="2" />
									  <circle cx="12" cy="16" r="1" />
									  <path d="M8 11v-4a4 4 0 0 1 8 0v4" />
									</svg>
								</div>
								<input type="text" placeholder="Digite sua senha" name="form-login-password"/>
							</div>
							<div class="button-form-login">
								Entrar
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="new-record-comercial-background">
				<div class="form-comercial">
					<div class="title-form">
						<span>Novo Registro</span>
					</div>
					<div class="contact-one">
						<div class="title-contact">
							<span>Contato</span>
							<span>Principal (obrigatório)</span>
						</div>
						<div class="input-contact-content">
							<input type="text" placeholder="Nome" name="" autocomplete="off">
							<input type="text" placeholder="(00) 00000-0000" name="" autocomplete="off"/>
						</div>
					</div>
					<div class="contact-two">
						<div class="title-contact">
							<span>Contato</span>
							<span>Secundário (opicional)</span>
						</div>
						<div class="input-contact-content">
							<input type="text" placeholder="Nome" name="" autocomplete="off">
							<input type="text" placeholder="(00) 00000-0000" name="" autocomplete="off"/>
						</div>
					</div>
					<div class="date-time">
						<input type="date" name="">
						<input type="time" name="">
					</div>
					<div class="status-tag">
						<div class="status">
							<span>Status</span>
							<select>
								<option selected>Inativo</option>
								<option>Agendamento</option>
								<option>Pendente</option>
								<option>Sem Interesse</option>
								<option>Matrícula</option>
							</select>
						</div>
						<div class="etiqueta">
							<span>Etiqueta</span>
							<select>
								<option selected disabled>Selecione</option>
								<option>Macro</option>
								<option>Fachada</option>
								<option>Indicação</option>
								<option>Panfletagem</option>
								<option>Outro</option>
							</select>
						</div>
					</div>
					<div class="description">
						<div class="title-description">
							<span>Observação</span>
						</div>
						<textarea placeholder="Observação (opcional)"></textarea>
					</div>
					<div class="buttons">
						<span tabindex="2">Cancelar</span>
						<span tabindex="1">Salvar</span>
					</div>
				</div>
			</div>
		</div>
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
						Name
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
								<div class="item-list-default item-list-dashboard">
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
										<span>Malu</span>
									</div>
									<div class="item-cell-list">
										<span>Fachada</span>
									</div>
								</div>
								<div class="item-list-default item-list-dashboard">
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
										<span>Enderson</span>
									</div>
									<div class="item-cell-list">
										<span>Indicação</span>
									</div>
								</div>
								<div class="item-list-default item-list-dashboard">
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
										<span>Enderson</span>
									</div>
									<div class="item-cell-list">
										<span>Indicação</span>
									</div>
								</div>
								<div class="item-list-default item-list-dashboard">
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
										<span>Enderson</span>
									</div>
									<div class="item-cell-list">
										<span>Indicação</span>
									</div>
								</div>
								<div class="item-list-default item-list-dashboard">
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
										<span>Enderson</span>
									</div>
									<div class="item-cell-list">
										<span>Indicação</span>
									</div>
								</div>
								<div class="item-list-default item-list-dashboard">
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
										<span>Enderson</span>
									</div>
									<div class="item-cell-list">
										<span>Indicação</span>
									</div>
								</div>
								<div class="item-list-default item-list-dashboard">
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
										<span>Enderson</span>
									</div>
									<div class="item-cell-list">
										<span>Indicação</span>
									</div>
								</div>
								<div class="item-list-default item-list-dashboard">
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
										<span>Enderson</span>
									</div>
									<div class="item-cell-list">
										<span>Indicação</span>
									</div>
								</div>
								<div class="item-list-default item-list-dashboard">
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
										<span>Enderson</span>
									</div>
									<div class="item-cell-list">
										<span>UPanfletagem</span>
									</div>
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