import login from "./login.js";
import render from "./render.js";
import dashboard from "./dashboard.js";
import comercial from "./comercial.js";

class Main {
	constructor(){
		this.login = new login();
		this.render = new render();
		this.dashboard = new dashboard();
		this.comercial = new comercial();

		this.run();
	}

	async run(){
		this.setInstance();
	}

	setInstance(){
		this.login.run(this);
		this.render.run(this);
		this.dashboard.run(this);
		this.comercial.run(this);
	}

	getCookie(name){
		let cookie = {};

		document.cookie.split(";").forEach((element) => {
			let [key, value] = element.split("=");
			cookie[key.trim()] = value;
		});

		return cookie[name];
	}

	isActive(){
		return new Promise(async resolve => {
			let isActive = await fetch("app/isActive.php");

			let result = await isActive.json();

			if(result['sucess']){
				return resolve(true);
			}else{
				return resolve(false);
			}
		});
	}

	showAlert(style = 1, message){
		let newAlert = document.createElement("div");
		newAlert.setAttribute("class", "show-alert");

		let newIconAlert = document.createElement("div");
		newIconAlert.setAttribute("class", "icon-alert");

		let newImg = document.createElement("img");

		switch(style){
			case 1:
				newImg.setAttribute("src", "resources/img/icon-check.svg");
				newAlert.style.background = "var(--color-check-one)";
				newAlert.style.border = "2px solid var(--color-check-two)";
			break;
			case 2:
				newImg.setAttribute("src", "resources/img/icon-alert.svg");
				newAlert.style.background = "var(--color-warning-one)";
				newAlert.style.border = "2px solid var(--color-warning-two)";
			break;
			case 3:
				newImg.setAttribute("src", "resources/img/icon-error.svg");
				newAlert.style.background = "var(--color-error-one)";
				newAlert.style.border = "2px solid var(--color-error-two)";
			break;
		}

		newIconAlert.append(newImg);

		let newMsgAlert = document.createElement("div");
		newMsgAlert.setAttribute("class", "message-alert");

		let newMessage = document.createElement("p");
		newMessage.innerText = message;

		newMsgAlert.append(newMessage);


		newAlert.append(newIconAlert, newMsgAlert);

		let alertsContent = document.querySelector(".alerts-content");
		let alerts = document.querySelectorAll(".show-alert")[0];

		alertsContent.insertBefore(newAlert, alerts);

		setTimeout(() => {
			newAlert.style.right = "10px";
		}, 100);

		setTimeout(() => {
			newAlert.style.right = "-100%";

			setTimeout(() => {
				newAlert.remove();
			}, 820);
		}, 4*1000);
	}
}

var main = new Main();