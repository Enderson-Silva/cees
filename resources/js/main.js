import login from "./login.js";
import render from "./render.js";

class Main {
	constructor(){
		this.login = new login();
		this.render = new render();

		this.run();
	}

	async run(){
		this.setInstance();
	}

	setInstance(){
		this.login.setInstance(this);
		this.render.setInstance(this);
	}

	getCookie(name){
		let cookie = {};

		document.cookie.split(";").forEach((element) => {
			let [key, value] = element.split("=");
			cookie[key.trim()] = value;
		});

		return cookie[name];
	}
}

var main = new Main();