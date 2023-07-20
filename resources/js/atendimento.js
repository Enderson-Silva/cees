var atendimento = {
	setEventMenu: () => {
		var menuOptions = document.querySelectorAll(".bar-menu-service li span:nth-child(2)");
		
		menuOptions.forEach((element, index) => {
			element.addEventListener("click", () => {
				switch(index){
					case 0:
						atendimento.renderFormService("pre-cadastro-atendimento.html", index);
					break;
					case 1:
						atendimento.renderFormService("brinde-atendimento.html", index);
					break;
					case 2:
						atendimento.renderFormService("bolsa-atendimento.html", index);
					break;
					case 3:
						atendimento.renderFormService("matricular-atendimento.html", index);
					break;
				}
			});
		});
	},

	renderFormService: async (layout, index) => {

		var contentForms = document.querySelector(".form-content");
		var titleForm = document.querySelector(".title-form h1");

		var fetchLayout = await fetch(`resources/include/html/${layout}`, {
			cache: "no-cache"
		});

		switch(index){
			case 0:
				titleForm.innerHTML = "Pré Cadastro";
			break;
			case 1:
				titleForm.innerHTML = "Liberar Brinde";
			break;
			case 2:
				titleForm.innerHTML = "Solicitar bolsa de estudos";
			break;
			case 3:
				titleForm.innerHTML = "Matricular";
			break;
		}

		var result = await fetchLayout.text();

		contentForms.innerHTML = "";
		contentForms.innerHTML = result;
	}
}

atendimento.setEventMenu();