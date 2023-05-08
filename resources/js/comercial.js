export default class Comercial {
	constructor(){
		this.main;
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
		console.log(options);
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
		console.log(buttonCancelFormNewRecord);
		buttonCancelFormNewRecord.addEventListener("click", () => {
			this.openAndCloseFormNewRecord(0);
		});

		let buttonSaveFormNewRecord = document.querySelector(".form-comercial > .buttons > span:nth-child(2)");

		buttonSaveFormNewRecord.addEventListener("click", () => {
			this.checkFormNewRecord();
		});
	}

	openAndCloseFormNewRecord(status){
		let interfaceNewRecord = document.querySelector(".new-record-comercial-background");
		if(status){
			interfaceNewRecord.style.display = "flex";
		}else{
			interfaceNewRecord.style.display = "none";
		}
	}

	checkFormNewRecord(){
		
	}
}