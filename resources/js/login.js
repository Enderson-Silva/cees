export default class Login {
	constructor(){
		this.main;

		this.optionsProfile = false;
	}

	async run(main){
		this.setInstance(main);

		let isActive = await this.main.isActive();

		if(isActive){
			this.main.render.renderAfterLogin();
			this.main.showAlert(1, "Login realizado com sucesso!");
		}
		this.setEvents();
	}

	setInstance(main){
		this.main = main;
	}

	setEvents(){

		//open and close screen login

		let buttonEnter = document.querySelector(".login-off");
		let loginLayout = document.querySelector(".login-background");
		let login = document.querySelector(".login");

		buttonEnter.addEventListener("click", () => {
			loginLayout.style.display = "flex";
			setTimeout(() => {
				login.style.transform = "scale(1)";
			}, 10);
		});

		loginLayout.addEventListener("click", (event) => {
			if(event.target !== loginLayout) return;
			loginLayout.style.display = "none";
			login.style.transform = "scale(0)";
		});

		//login enter

		let buttonFormLogin = document.querySelector(".button-form-login");

		buttonFormLogin.addEventListener("click", () => {
			let name = document.getElementsByName("form-login-name")[0].value;
			let password = document.getElementsByName("form-login-password")[0].value;
			this.checkLogin(name, password);
		});

		//login out

		let loginOn = document.querySelector(".login-on");
		let optionsProfile = document.querySelector(".options-profile");
		let iconLogout = document.querySelector(".options-profile img:nth-child(2)");

		loginOn.addEventListener("click", () => {
			if(!this.optionsProfile){
				optionsProfile.style.display = "flex";
				this.optionsProfile = true;
			}else{
				optionsProfile.style.display = "none";
				this.optionsProfile = false;
			}
		});

		iconLogout.addEventListener("click", () => {
			this.logout();
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
			this.main.showAlert(1, "Login realizado com sucesso!");
		}else{
			this.main.showAlert(3, "Login ou senha incorreto.");
		}
	}

	logout(){
		return new Promise(async resolve => {
			let fetchLogout = await fetch("app/logout.php");

			location.reload();
		});
	}
}