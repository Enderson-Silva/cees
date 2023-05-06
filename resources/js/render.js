export default class Render {
	constructor(main){
		this.main;
	}

	setInstance(main){
		this.main = main;
		this.renderDashboard();
	}

	async renderAfterLogin(){
		let loginOffText = document.querySelector(".login-off");
		let loginOnText = document.querySelector(".login-on");
		let loginLayout = document.querySelector(".login-background");
		let iconUser = document.querySelector(".icon-user img");

		loginLayout.style.display = "none";

		loginOnText.innerHTML = this.main.getCookie("nickname");

		loginOffText.style.display = "none";
		loginOnText.style.display = "block";

		iconUser.src = this.main.getCookie("photo");

		let htmlNavegation = await this.getNavegation();

		let menu = document.querySelector(".menu");

		menu.innerHTML = htmlNavegation;
	}

	getNavegation(){
		return new Promise(async resolve => {
			let fetchNavegation = await fetch("resources/include/html/navegation.html", {
				cache: "no-cache"
			});
			let result = await fetchNavegation.text();

			resolve(result);
		});
	}

	renderDashboard(){
		try{
			return new Promise(async resolve => {
				let fetchDataDashboard = await fetch("app/getData.php", {
					method: "post",
					body: JSON.stringify({
						category: "dashboard"
					})
				});

				let dataDashboard = await fetchDataDashboard.json();

				//Render blocks statistics

				let block1 = document.querySelector(".block-statistic:nth-child(1)");

				//render List visitis day

				let fetchItemListHtml = await fetch("resources/include/html/item-list-dashboard.html", {
					cache: "no-cache"
				});
				let itemListHtml = await fetchItemListHtml.text();

				let listDashboard = document.querySelector(".items-list-dashboard");
				listDashboard.innerHTML = "";

				dataDashboard["visitas"].forEach((data) => {

					let item = itemListHtml.replace("{time}", data["time_visit"]);
					item = item.replace("{date}", data["date_visit"]);
					item = item.replace("{name_one}", data["name_one"]);
					item = item.replace("{name_two}", data["name_two"]);
					item = item.replace("{number_one}", data["number_one"]);
					item = item.replace("{number_two}", data["number_two"]);
					item = item.replace("{responsible}", data["responsible"]);
					item = item.replace("{tag}", data["tag"]);

					listDashboard.innerHTML += item;
				});

			});
		}catch(error){
			//code...
		}
	}
}