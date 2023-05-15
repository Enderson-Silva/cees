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
	<link rel="stylesheet" href="resources/css/main.css"/>
	<link rel="icon" href="resources/img/icon-cees.png"/>

	<script defer type="module" src="resources/js/main.js"></script>
</head>
<body>
	<div class="general">
		<div class="fixed-screens">
			<div class="loading-background">
				<img src="resources/img/icon-loading-animation.svg"/>
			</div>
			<div class="alerts-content">
			</div>
			<div class="confirm-background">
				<div class="confirm">
					<div class="confirm-title">
						<span>{title}</span>
					</div>
					<div class="confirm-text">
						<p>{text}</p>
					</div>
					<div class="confirm-buttons">
						<span>Cancelar</span>
						<span>Confirmar</span>
					</div>
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
								<input type="text" placeholder="Digite seu nome" name="form-login-name" autocomplete="off"/>
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
								<input type="password" placeholder="Digite sua senha" name="form-login-password" autocomplete="off"/>
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
							<input type="text" placeholder="Nome" minlength="3" maxlength="35" name="name-contact-one-comercial" autocomplete="off">
							<input type="text" placeholder="(00) 00000-0000" minlength="15" maxlength="15" name="number-contact-one-comercial" autocomplete="off"/>
						</div>
					</div>
					<div class="contact-two">
						<div class="title-contact">
							<span>Contato</span>
							<span>Secundário (opicional)</span>
						</div>
						<div class="input-contact-content">
							<input type="text" placeholder="Nome" minlength="3" maxlength="35" name="name-contact-two-comercial" autocomplete="off">
							<input type="text" placeholder="(00) 00000-0000" minlength="15" maxlength="15" name="number-contact-two-comercial" autocomplete="off"/>
						</div>
					</div>
					<div class="date-time">
						<input type="date" name="date-comercial">
						<input type="time" name="time-comercial">
					</div>
					<div class="status-tag">
						<div class="status">
							<span>Status</span>
							<select class="status-select-comercial">
								<option value="inativo" selected>Inativo</option>
								<option value="agendamento">Agendamento</option>
								<option value="pendente">Pendente</option>
								<option value="sem interesse">Sem Interesse</option>
								<option value="matrícula">Matrícula</option>
							</select>
						</div>
						<div class="etiqueta">
							<span>Etiqueta</span>
							<select class="tag-select-comercial">
								<option value="macro" selected>Macro</option>
								<option value="fachada">Fachada</option>
								<option value="indicação">Indicação</option>
								<option value="panfletagem">Panfletagem</option>
								<option value="outro">Outro</option>
							</select>
						</div>
					</div>
					<div class="description">
						<div class="title-description">
							<span>Observação</span>
						</div>
						<textarea class="observation-textarea-comercial" placeholder="Observação (opcional)"></textarea>
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
					<div class="items-list-comercial">

					</div>
				</div>
			</div>
			<div class="contract">
				<div class="contract-infos">
					<div class="contract-title">
						<span>Contrato</span>
					</div>
					<div class="inputs-student">
						<input type="text" placeholder="nome aluno" name="">
						<input type="date" placeholder="data nascimento aluno" name="">
						<input type="text" placeholder="cpf aluno" name="">
					</div>
					<div class="inputs-responsible">
						<input type="text" placeholder="nome responsavel financeiro" name="">
						<input type="text" placeholder="rg responsável financeiro" name="">
						<input type="text" placeholder="SSP repsonsavel financeiro" name="">
						<input type="text" placeholder="cpf responsavel financeiro" name="">
					</div>
					<div class="inputs-contact">
						<input type="text" placeholder="numero para contato 1" name="">
						<input type="text" placeholder="numero para contato 2" name="">
						<input type="text" placeholder="numero para contato 3" name="">
					</div>
					<div class="inputs-address">
						<input type="text" placeholder="endereço" name="">
						<input type="text" placeholder="cep" name="">
					</div>
					<div class="inputs-course">
						<input type="text" placeholder="curso" name="">
						<input type="text" placeholder="data de inicio" name="">
						<input type="text" placeholder="carga horária" name="">
						<input type="text" placeholder="dia do curso" name="">
						<input type="text" placeholder="horario do curso" name="">
					</div>
					
					<input type="text" placeholder="total do curso" name="">
					<input type="text" placeholder="nome aluno" name="">
					<input type="text" placeholder="nome aluno" name="">
					<input type="text" placeholder="nome aluno" name="">
					<input type="text" placeholder="nome aluno" name="">
					<input type="text" placeholder="nome aluno" name="">
				</div>
			</div>
		</main>
	</div>
</body>
</html>