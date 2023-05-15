export default class Comercial {
	constructor(){
		this.main;

		this.statusButtonNewRecord = true;
		this.statusButtonEdit = true;

		this.category = 1;
	}

	async run(main){
		this.setInstance(main);
		
		this.setEvents();
	}

	setInstance(main){
		this.main = main;
	}

	setEvents(){
		let options = document.querySelectorAll(".type-list-schedules span");
		options.forEach((element, index) => {
			element.addEventListener("click", () => {
				this.main.render.renderStatusComercial(index);
			});
		});

		let newRecordButton = document.querySelector(".tools-records");

		newRecordButton.addEventListener("click", () => {
			this.openAndCloseFormNewRecord(1);
		});

		let buttonCancelFormNewRecord = document.querySelector(".form-comercial .buttons span");
		buttonCancelFormNewRecord.addEventListener("click", () => {
			if(this.statusButtonNewRecord){
				this.openAndCloseFormNewRecord(0);
			}
		});

		let buttonSaveFormNewRecord = document.querySelector(".form-comercial > .buttons > span:nth-child(2)");

		buttonSaveFormNewRecord.addEventListener("click", () => {
			if(this.statusButtonNewRecord){
				this.editOrInsert();
			}
		});

		//set keyup

		let numberOne = document.getElementsByName("number-contact-one-comercial")[0];
		let numberTwo = document.getElementsByName("number-contact-two-comercial")[0];

		numberOne.addEventListener("keyup", () => {
			this.formatNumber(numberOne);
		});

		numberTwo.addEventListener("keyup", () => {
			this.formatNumber(numberTwo);
		});
	}

	openAndCloseFormNewRecord(status){
		let interfaceNewRecord = document.querySelector(".new-record-comercial-background");
		let formComercial = document.querySelector(".form-comercial");
		if(status){
			interfaceNewRecord.style.display = "flex";
			setTimeout(() => {
				formComercial.style.transform = "scale(1)";
			}, 10);
		}else{
			interfaceNewRecord.style.display = "none";
			formComercial.style.transform = "scale(0)";
		}
	}

	editOrInsert(){
		this.checkFormNewRecord();
	}

	checkFormNewRecord(){
		let nameOne = document.getElementsByName("name-contact-one-comercial");
		let nameTwo = document.getElementsByName("name-contact-two-comercial");
		let numberOne = document.getElementsByName("number-contact-one-comercial");
		let numberTwo = document.getElementsByName("number-contact-two-comercial");
		let date = document.getElementsByName("date-comercial");
		let time = document.getElementsByName("time-comercial");
		let status = document.querySelector(".status-select-comercial");
		let tag = document.querySelector(".tag-select-comercial");
		let observation = document.querySelector(".observation-textarea-comercial");

		if(nameOne[0].value == ""){
			this.main.showAlert(2, "Valor obrigatório não preenchido.");
			return;
		}

		if(numberOne[0].value == ""){
			this.main.showAlert(2, "Valor obrigatório não preenchido.");
			return;
		}

		if(date[0].value == ""){
			this.main.showAlert(2, "Valor obrigatório não preenchido.");
			return;
		}

		if(time[0].value == ""){
			this.main.showAlert(2, "Valor obrigatório não preenchido.");
			return;
		}

		this.saveNewRecord();

	}

	saveNewRecord(){
		return new Promise(async resolve => {
			let nameOne = document.getElementsByName("name-contact-one-comercial");
			let nameTwo = document.getElementsByName("name-contact-two-comercial");
			let numberOne = document.getElementsByName("number-contact-one-comercial");
			let numberTwo = document.getElementsByName("number-contact-two-comercial");
			let date = document.getElementsByName("date-comercial");
			let time = document.getElementsByName("time-comercial");
			let status = document.querySelector(".status-select-comercial");
			let tag = document.querySelector(".tag-select-comercial");
			let observation = document.querySelector(".observation-textarea-comercial");

			this.statusButtonNewRecord = false;

			let fetchSaveRecord = await fetch("app/saveNewRecord.php", {
				method: "post",
				body: JSON.stringify({
					nameOne: nameOne[0].value,
					nameTwo: nameTwo[0].value,
					numberOne: numberOne[0].value,
					numberTwo: numberTwo[0].value,
					date: date[0].value,
					time: time[0].value,
					status: status.value,
					tag: tag.value,
					observation: observation.value
				})
			});

			let result = await fetchSaveRecord.json();

			this.statusButtonNewRecord = true;

			if(result){
				this.main.showAlert(1, "Novo registro adicionado com sucesso!");
			}else{
				this.main.showAlert(3, "Houve um erro ao adicionar registro.");	
			}

			nameOne[0].value = "";
			nameTwo[0].value = "";
			numberOne[0].value = "";
			numberTwo[0].value = "";
			time[0].value = "00:00";
			observation.value = "";
		});
	}

	formatNumber(element){
		element.value = element.value.replace(/[^\d]/gi, "");
		element.value = element.value.replace(/([0-9]{2})([0-9]{5})([0-9]{4})/, "($1) $2-$3");
	}

	async deleteItem(item){
		let confirm = await this.main.confirm("Excluir cadastro comercial", "Ao excluir esse cadastro, não será possível recupera-lô!");

		if(!confirm) return;

		let fetchDeleteComercial = await fetch("app/delete.php", {
			method: "post",
			body: JSON.stringify({
				id: item,
				table: "comercial"
			})
		});

		 let result = await fetchDeleteComercial.json()

		this.main.showAlert(1, result['message']);

		this.main.render.renderStatusComercial(this.category);
	}
}