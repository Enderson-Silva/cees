var input = document.querySelector("#jojo");

input.addEventListener("keyup", (event) => {
	event.target.value = event.target.value.replace(/\D/g, '');
	event.target.value = event.target.value.replace(/([0-9]{2})/, '($1) ');
	event.target.value = event.target.value.replace(/([0-9]{5})([0-9]{4})/, '$1-$2');

	//event.target.value = event.target.value.replace(/([0-9]{3})([0-9]{3})([0-9]{3})([0-9]{2})/, "$1.$2.$3-$4");
})