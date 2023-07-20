var main = {
	getCookie: (name) => {
		let cookie = {};

		document.cookie.split(";").forEach((element) => {
			let [key, value] = element.split("=");
			cookie[key.trim()] = value;
		});

		return cookie[name];
	},

	showAlert: (style = 1, message) => {
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

		newAlert.addEventListener("click", () => {
			newAlert.style.right = "-100%";

			setTimeout(() => {
				newAlert.remove();
			}, 820);
		}, {once: true});

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
	},

	confirm: (title, text) => {
		return new Promise(async resolve => {
			let confirmBackground = document.querySelector(".confirm-background");
			let confirm = document.querySelector(".confirm");
			let confirmTitle = document.querySelector(".confirm-title span");
			let confirmText = document.querySelector(".confirm-text p");
			let confirmButtons = document.querySelectorAll(".confirm-buttons span");

			confirmTitle.innerText = title;
			confirmText.innerText = text;

			confirmBackground.style.display = "flex";
			setTimeout(() => {
				confirm.style.transform = "scale(1)";
			}, 10);	

			confirmButtons[0].addEventListener("click", () => {
				confirmBackground.style.display = "none";
				confirm.style.transform = "scale(0)";
				resolve(false);
			}, {once: true});

			confirmButtons[1].addEventListener("click", () => {
				confirmBackground.style.display = "none";
				confirm.style.transform = "scale(0)";
				resolve(true)
			}, {once: true});
		});
	},

	loadMenu: async () => {
		let menu = document.querySelector(".menu");
		let pagesAcess =  JSON.parse(localStorage.getItem("pages_acess"));
		delete pagesAcess["id"];
		delete pagesAcess["id_colaborador"];
		console.log(pagesAcess);

		let fetchLi = await fetch("resources/include/html/menu-li.html", {
			cache: "no-cache"
		});

		let resultFetchLi = await fetchLi.text();
		console.log(resultFetchLi);

		menu.innerHTML = "";

		for(var i = 0; i < Object.keys(pagesAcess).length; i++){

			if(Object.values(pagesAcess)[i] == '1'){
				let li = resultFetchLi.replace("{icon}", Object.keys(pagesAcess)[i]);
				li = li.replace("{link}", `${Object.keys(pagesAcess)[i]}.php`);
				li = li.replace("{name}", Object.keys(pagesAcess)[i].charAt(0).toUpperCase() + Object.keys(pagesAcess)[i].slice(1));

				menu.innerHTML += li;
			}
		}
	}
}

main.loadMenu();