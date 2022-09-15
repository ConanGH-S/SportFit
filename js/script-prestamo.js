//* Establecer fecha actual
const fechaEl = document.querySelector("#fecha");
let fecha = new Date();
fechaEl.value =  `${fecha.getFullYear()}-${String(fecha.getMonth()).padStart(2, "0")}-${String(fecha.getDate()).padStart(2, "0")}`;