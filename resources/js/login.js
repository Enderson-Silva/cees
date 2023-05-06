export default class Login {
	constructor(){
		this.main;
		this.run();
	}

	setInstance(main){
		this.main = main;
	}

	async run(){
		this.setEvents();
	}

	setEvents(){

		//open and close screen login

		let buttonEnter = document.querySelector(".login-off");
		let loginLayout = document.querySelector(".login-background");

		buttonEnter.addEventListener("click", () => {
			loginLayout.style.display = "flex";
		});

		loginLayout.addEventListener("click", (event) => {
			if(event.target !== loginLayout) return;
			loginLayout.style.display = "none";
		});

		//login enter

		let buttonFormLogin = document.querySelector(".button-form-login");

		buttonFormLogin.addEventListener("click", () => {
			let name = document.getElementsByName("form-login-name")[0].value;
			let password = document.getElementsByName("form-login-password")[0].value;
			this.checkLogin(name, password);
		});
	}

	async checkLogin(name, password){
		let checkLogin = await fetch("app/checkLogin.php", {
			method: "post",
			body: JSON.stringify({
				name: name,
				password: password
			})
		});

		let result = await checkLogin.json();
		console.log(result);

		if(result["sucess"]){
			this.main.render.renderAfterLogin(result['data']);
		}else{
			alert("sdfg");
		}
	}
}