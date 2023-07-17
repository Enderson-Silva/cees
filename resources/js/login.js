class Login {
	constructor(){
		alert("foi chamada");
	}

	async verifyLogin(){

		let inputs = {
			name: document.getElementById("nameForm"),
			password: document.getElementById("passwordForm")
		}


		if(!this.validationInputs(inputs)) return;

		let fetchVerify = await fetch("app/checkLogin.php", {
			method: "post",
			body: JSON.stringify({
				name: inputs.name.value,
				password: inputs.password.value
			})
		});

		let result = await fetchVerify.json();
		console.log(result);
		if(result["sucess"]) window.location.replace(`${window.location.origin}/Projetos/cees-main/dashboard.php`);
	}

	validationInputs(inputs){

		let nameValue = inputs.name.value;
		let passwordValue = inputs.password.value;



		return true;
		
	}
}

var login = new Login();