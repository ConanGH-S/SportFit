// Estado del Préstamo
const estadoPrestamoEl = document.querySelectorAll(".estado-prestamo");
estadoPrestamoEl.forEach((e) => {
	if (e.textContent === "Devuelto") {
		e.style.color = "green";
	}
});

// Estado del Inventario
const estadoArticuloEl = document.querySelectorAll(".estado-articulo");
estadoArticuloEl.forEach((ev) => {
	if (ev.textContent === "Buen estado") {
		ev.style.color = "green";
	} else if (ev.textContent === "Estado regular") {
		ev.style.color = "orange";
	} else {
		ev.style.color = "red";
	}
});
