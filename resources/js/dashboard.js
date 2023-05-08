export default class Dashboard {
	constructor(){
		this.main;
	}

	async run(main){
		this.setInstance(main);
		this.main.render.renderPreDashboard();
	}

	setInstance(main){
		this.main = main;
	}
}