const formEditarContrasena = document.querySelector("form");
const contrasenaEl = document.querySelector("#contrasena");

const validarContrasena = (e) => {
    if (contrasenaEl.value.length === 0 || contrasenaEl.value === '' || contrasenaEl.value === null || /^\s+$/.test(contrasenaEl.value)) {
        e.preventDefault();
		Swal.fire({
			icon: 'error',
			title: 'Error...',
			text: 'La nueva contraseña no puede estar vacía o llena de espacios en blanco!',
		});
		return;
	}
    if (contrasenaEl.value.length < 4) {
        e.preventDefault();
		Swal.fire({
			icon: 'error',
			title: 'Error...',
			text: 'La nueva contraseña debe tener como mínimo 4 caracteres!',
		});
		return;
	}
}

formEditarContrasena.addEventListener("submit", validarContrasena);