var login = {
	verifyLogin: async () => {

		let inputs = {
			name: document.getElementById("nameForm"),
			password: document.getElementById("passwordForm")
		}


		if(!login.validationInputs(inputs)){
			return;
		}

		let fetchVerify = await fetch("app/checkLogin.php", {
			method: "post",
			body: JSON.stringify({
				name: inputs.name.value,
				password: inputs.password.value
			})
		});

		let resultVerify = await fetchVerify.json();
		console.log(resultVerify);
		if(!resultVerify["sucess"]){
			return;
		}

		let fetchData = await fetch("app/data.php", {
			method: "post"
		});

		let resultData = await fetchData.json();

		localStorage.setItem("pages_acess", JSON.stringify(resultData['pages_acess']));

		window.location.replace(`${window.location.origin}/Projetos/cees-main/dashboard.php`);
	},

	validationInputs: (inputs) => {

		let nameValue = inputs.name.value;
		let passwordValue = inputs.password.value;

		return true;
		
	}
}