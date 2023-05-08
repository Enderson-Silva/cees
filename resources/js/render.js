export default class Render {
	constructor(main){
		this.main;
	}

	async run(main){
		this.setInstance(main);
	}

	setInstance(main){
		this.main = main;
	}

	setNoneAllTabs(){
		let dashboard = document.querySelector(".dashboard");
		let comercial = document.querySelector(".records");

		dashboard.style.display = "none";
		comercial.style.display = "none";
	}

	selectRender(index){
		switch(index){
			case 0:
				this.renderDashboard();
			break;
			case 1:
				this.renderComercial();
			break;
			default:
			this.main.showAlert(2, "Função temporariamente indisponível.");
		}
	}

	async renderAfterLogin(){
		this.renderMenu();
		this.renderDashboard();
	}

	renderMenu(){
		return new Promise(async resolve => {

			let loginOffText = document.querySelector(".login-off");
			let loginOnText = document.querySelector(".login-on");
			let loginLayout = document.querySelector(".login-background");
			let iconUser = document.querySelector(".icon-user img");

			loginLayout.style.display = "none";

			loginOnText.innerHTML = this.main.getCookie("nickname");

			loginOffText.style.display = "none";
			loginOnText.style.display = "block";

			//iconUser.src = this.main.getCookie("photo");

			let menu = document.querySelector(".menu");

			let fetchNavegation = await fetch("resources/include/html/navegation.html", {
					cache: "no-cache"
				});

			let htmlNavegation = await fetchNavegation.text();

			menu.innerHTML = htmlNavegation;

			let lis = document.querySelectorAll(".menu li");

			lis.forEach((element, index) => {
				element.addEventListener("click", () => {
					this.selectRender(index);
				});
			});
		});
	}

	renderPreDashboard(){
		try{
			return new Promise(async resolve => {
				this.setNoneAllTabs();

				let dashboard = document.querySelector(".dashboard").style.display = "block";

				let fetchDataDashboard = await fetch("app/getData.php", {
					method: "post",
					body: JSON.stringify({
						category: "dashboard",
						argument: "pre"
					})
				});
				let dataDashboard = await fetchDataDashboard.json();

				console.log(dataDashboard);

				//Render blocks statistics

				let blockEnrollment = document.querySelector(".block-statistic:nth-child(1) .left-statistic span:nth-child(1)");
				let blockInvoicing = document.querySelector(".block-statistic:nth-child(2) .left-statistic span:nth-child(1)");

				let enrollments = 0;
				let invoicings = 0;

				dataDashboard['colaboradores'].forEach((colaborador) => {
					enrollments += colaborador['enrollment'];
					invoicings += colaborador['invoicing'];
				});

				blockEnrollment.innerHTML = enrollments+'/50';
				blockInvoicing.innerText = invoicings.toLocaleString('pt-br', {style: 'currency', currency: "BRL"});

				//render List visitis day

				let fetchItemListHtml = await fetch("resources/include/html/item-list-dashboard.html", {
					cache: "no-cache"
				});
				let itemListHtml = await fetchItemListHtml.text();

				let listDashboard = document.querySelector(".items-list-dashboard");
				listDashboard.innerHTML = "";

				dataDashboard["visitas"].forEach((data) => {
					let time = data['time_visit'].replace(/(\d{2}):(\d{2}):(\d{2})/, "$1:$2");
					let item = itemListHtml.replace("{time}", time);

					let date = data['date_visit'].replace(/(\d{4})-(\d{2})-(\d{2})/, "$3/$2/$1");
					item = item.replace("{date}", date);

					item = item.replace("{name_one}", data["name_one"]);
					item = item.replace("{name_two}", data["name_two"]);
					item = item.replace("{number_one}", data["number_one"]);
					item = item.replace("{number_two}", data["number_two"]);
					item = item.replace("{responsible}", data["responsible"]);
					item = item.replace("{tag}", data["tag"]);

					listDashboard.innerHTML += item;
				});

				//Render narrative

				let schedulesGeneral = document.querySelector(".narrative-collective .table-narrative tr:nth-child(1) td:nth-child(2)");
				let visitsGeneral = document.querySelector(".narrative-collective .table-narrative tr:nth-child(2) td:nth-child(2)");
				let callsGeneral = document.querySelector(".narrative-collective .table-narrative tr:nth-child(3) td:nth-child(2)");
				let enrolmentsGeneral = document.querySelector(".narrative-collective .table-narrative tr:nth-child(4) td:nth-child(2)");
				let invoicingGeneral = document.querySelector(".narrative-collective .table-narrative tr:nth-child(5) td:nth-child(2)");

				let schedulesGeneralValue = 0;
				let visitsGeneralValue = 0;
				let callsGeneralValue = 0;
				let enrolmentsGeneralValue = 0;
				let invoicingGeneralValue = 0;


				dataDashboard['colaboradores'].forEach((colaborador) => {
					schedulesGeneralValue += colaborador['schedules_day'];
					visitsGeneralValue += colaborador['visits_day'];
					callsGeneralValue += colaborador['calls_day'];
					enrolmentsGeneralValue += colaborador['enrollment_day'];
					invoicingGeneralValue += colaborador['invoicing_day'];
				});

				schedulesGeneral.innerText = schedulesGeneralValue;
				visitsGeneral.innerText = visitsGeneralValue;
				callsGeneral.innerText = callsGeneralValue;
				enrolmentsGeneral.innerText = enrolmentsGeneralValue;
				invoicingGeneral.innerText = invoicingGeneralValue.toLocaleString("pt-br", {style: 'currency', currency: 'BRL'});

			});
		}catch(error){
			this.main.showAlert(3, "Houve um erro ao tentar renderizar a Dashboard!");
		}
	}

	renderDashboard(){
		try{
			return new Promise(async resolve => {
				this.setNoneAllTabs();

				let dashboard = document.querySelector(".dashboard").style.display = "block";

				let fetchDataDashboard = await fetch("app/getData.php", {
					method: "post",
					body: JSON.stringify({
						category: "dashboard",
						argument: "all"
					})
				});
				let dataDashboard = await fetchDataDashboard.json();

				console.log(dataDashboard);

				//Render blocks statistics

				let blockEnrollment = document.querySelector(".block-statistic:nth-child(1) .left-statistic span:nth-child(1)");
				let blockInvoicing = document.querySelector(".block-statistic:nth-child(2) .left-statistic span:nth-child(1)");

				let enrollments = 0;
				let invoicings = 0;

				dataDashboard['colaboradores'].forEach((colaborador) => {
					enrollments += colaborador['enrollment'];
					invoicings += colaborador['invoicing'];
				});

				enrollments += dataDashboard['colaborador']['enrollment'];
				invoicings += dataDashboard['colaborador']['invoicing'];

				blockEnrollment.innerHTML = enrollments+'/50';
				blockInvoicing.innerText = invoicings.toLocaleString('pt-br', {style: 'currency', currency: "BRL"});

				let blockMyEnrollment = document.querySelector(".block-statistic:nth-child(3) .left-statistic span:nth-child(1)");
				let blockMyInvoicing = document.querySelector(".block-statistic:nth-child(4) .left-statistic span:nth-child(1)");

				blockMyEnrollment.innerHTML = dataDashboard['colaborador']['enrollment']+'/25';
				blockMyInvoicing.innerHTML = dataDashboard['colaborador']['invoicing'].toLocaleString('pt-br', {style: 'currency', currency: "BRL"});

				//render List visitis day

				let fetchItemListHtml = await fetch("resources/include/html/item-list-dashboard.html", {
					cache: "no-cache"
				});
				let itemListHtml = await fetchItemListHtml.text();

				let listDashboard = document.querySelector(".items-list-dashboard");
				listDashboard.innerHTML = "";

				dataDashboard["visitas"].forEach((data) => {
					let time = data['time_visit'].replace(/(\d{2}):(\d{2}):(\d{2})/, "$1:$2");
					let item = itemListHtml.replace("{time}", time);

					let date = data['date_visit'].replace(/(\d{4})-(\d{2})-(\d{2})/, "$3/$2/$1");
					item = item.replace("{date}", date);

					item = item.replace("{name_one}", data["name_one"]);
					item = item.replace("{name_two}", data["name_two"]);
					item = item.replace("{number_one}", data["number_one"]);
					item = item.replace("{number_two}", data["number_two"]);
					item = item.replace("{responsible}", data["responsible"]);
					item = item.replace("{tag}", data["tag"]);

					listDashboard.innerHTML += item;
				});

				//Render narrative

				let schedulesIndividual = document.querySelector(".narrative-individual .table-narrative tr:nth-child(1) td:nth-child(2)");
				let visitsIndividual = document.querySelector(".narrative-individual .table-narrative tr:nth-child(2) td:nth-child(2)");
				let callsIndividual = document.querySelector(".narrative-individual .table-narrative tr:nth-child(3) td:nth-child(2)");
				let enrolmentsIndividual = document.querySelector(".narrative-individual .table-narrative tr:nth-child(4) td:nth-child(2)");
				let invoicingsIndividual = document.querySelector(".narrative-individual .table-narrative tr:nth-child(5) td:nth-child(2)");

				schedulesIndividual.innerText = dataDashboard['colaborador']['schedules_day'];
				visitsIndividual.innerText = dataDashboard['colaborador']['visits_day'];
				callsIndividual.innerText = dataDashboard['colaborador']['calls_day'];
				enrolmentsIndividual.innerText = dataDashboard['colaborador']['enrollment_day'];
				invoicingsIndividual.innerText = dataDashboard['colaborador']['invoicing_day'].toLocaleString('pt-br', {style: 'currency', currency: 'BRL'});

				let schedulesGeneral = document.querySelector(".narrative-collective .table-narrative tr:nth-child(1) td:nth-child(2)");
				let visitsGeneral = document.querySelector(".narrative-collective .table-narrative tr:nth-child(2) td:nth-child(2)");
				let callsGeneral = document.querySelector(".narrative-collective .table-narrative tr:nth-child(3) td:nth-child(2)");
				let enrolmentsGeneral = document.querySelector(".narrative-collective .table-narrative tr:nth-child(4) td:nth-child(2)");
				let invoicingGeneral = document.querySelector(".narrative-collective .table-narrative tr:nth-child(5) td:nth-child(2)");

				let schedulesGeneralValue = 0;
				let visitsGeneralValue = 0;
				let callsGeneralValue = 0;
				let enrolmentsGeneralValue = 0;
				let invoicingGeneralValue = 0;


				dataDashboard['colaboradores'].forEach((colaborador) => {
					schedulesGeneralValue += colaborador['schedules_day'];
					visitsGeneralValue += colaborador['visits_day'];
					callsGeneralValue += colaborador['calls_day'];
					enrolmentsGeneralValue += colaborador['enrollment_day'];
					invoicingGeneralValue += colaborador['invoicing_day'];
				});

				invoicingGeneralValue += dataDashboard['colaborador']['invoicing_day'];

				schedulesGeneral.innerText = schedulesGeneralValue + dataDashboard['colaborador']['schedules_day'];
				visitsGeneral.innerText = visitsGeneralValue + dataDashboard['colaborador']['visits_day'];
				callsGeneral.innerText = callsGeneralValue + dataDashboard['colaborador']['calls_day'];
				enrolmentsGeneral.innerText = enrolmentsGeneralValue + dataDashboard['colaborador']['enrollment_day'];
				invoicingGeneral.innerText = invoicingGeneralValue.toLocaleString("pt-br", {style: 'currency', currency: 'BRL'});

			});
		}catch(error){
			this.main.showAlert(3, "Houve um erro ao tentar renderizar a Dashboard!");
		}
	}

	renderComercial(){
		return new Promise(async resolve => {
			try{
				this.setNoneAllTabs();
				let comercial = document.querySelector(".records").style.display = "block";
				this.renderStatusComercial(0);
			}catch(error){

			}
		});
	}

	renderStatusComercial(index){
		return new Promise(async resolve => {
			let tab;
			switch(index){
				case 0:
					tab = "agendamento";
				break;
				case 1:
					tab = "pendente";
				break;
				case 2:
					tab = "sem interesse";
				break;
				case 3:
					tab = "matrícula";
				break;
				case 4:
					tab = "inativo";
				break;
			}

			let fetchDataComercial = await fetch("app/getData.php", {
				method: "post",
				body: JSON.stringify({
					category: "comercial",
					argument: tab
				})
			});

			let dataComercial = await fetchDataComercial.json();

			console.log(dataComercial);

			let fetchItemListHtml = await fetch("resources/include/html/item-list-comercial.html", {
				cache: "no-cache"
			});

			let itemListHtml = await fetchItemListHtml.text();
			let listComercial = document.querySelector(".items-list-comercial");

			listComercial.innerHTML = "";

			dataComercial.forEach((item) => {

				let time = item['time_visit'].replace(/(\d{2}):(\d{2}):(\d{2})/, "$1:$2");

				let itemList = itemListHtml.replace("{time}", time);

				let date = item['date_visit'].replace(/(\d{4})-(\d{2})-(\d{2})/, "$3/$2/$1");

				itemList = itemList.replace("{date}", date);
				itemList = itemList.replace("{name_one}", item['name_one']);
				itemList = itemList.replace("{name_two}", item['name_two']);
				itemList = itemList.replace("{number_one}", item['number_one']);
				itemList = itemList.replace("{number_two}", item['number_two']);
				itemList = itemList.replace("{status}", item['status']);
				itemList = itemList.replace("{tag}", item['tag']);

				switch(item['status']){
					case "agendamento":
						itemList = itemList.replace("{class_status}", "status-agendamento");
					break;
					case "pendente":
						itemList = itemList.replace("{class_status}", "status-pendente");
					break;
					case "sem interesse":
						itemList = itemList.replace("{class_status}", "status-sem-interesse");
					break;
					case "matrícula":
						itemList = itemList.replace("{class_status}", "status-matricula");
					break;
					case "inativo":
						itemList = itemList.replace("{class_status}", "status-inativo");
					break;
				}

				listComercial.innerHTML += itemList;
			});


		});
	}
}