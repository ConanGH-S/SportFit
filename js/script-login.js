document.getElementById('btn__iniciar-sesion').addEventListener('click', iniciarSesion);
document.getElementById('btn__registrarse').addEventListener('click', register);

/**Declaración de variables */
let contenedor_login_register = document.querySelector('.contenedor__login-register');
let formulario_login = document.querySelector('.formulario__login');
let formulario_register = document.querySelector('.formulario__register');
let caja_trasera_login = document.querySelector('.caja__trasera-login');
let caja_trasera_register = document.querySelector('.caja__trasera-register');
function anchoPagina() {
	if (window.innerWidth > 850) {
		caja_trasera_login.style.display = 'block';
		caja_trasera_register.style.display = 'block';
	} else {
		caja_trasera_register.style.display = 'block';
		caja_trasera_register.style.opacity = '1';
		caja_trasera_login.style.display = 'none';
		formulario_login.style.display = 'block';
		formulario_register.style.display = 'none';
		contenedor_login_register.style.left = '0px';
	}
}
anchoPagina();
function iniciarSesion() {
	if (window.innerWidth > 850) {
		formulario_register.style.display = 'none';
		contenedor_login_register.style.left = '10px';
		formulario_login.style.display = 'block';
		caja_trasera_register.style.opacity = '1';
		caja_trasera_login.style.opacity = '0';
	} else {
		formulario_register.style.display = 'none';
		contenedor_login_register.style.left = '0px';
		formulario_login.style.display = 'block';
		caja_trasera_register.style.display = 'block';
		caja_trasera_login.style.display = 'none';
	}
}
function register() {
	if (window.innerWidth > 850) {
		formulario_register.style.display = 'block';
		contenedor_login_register.style.left = '410px';
		formulario_login.style.display = 'none';
		caja_trasera_register.style.opacity = '0';
		caja_trasera_login.style.opacity = '1';
	} else {
		formulario_register.style.display = 'block';
		contenedor_login_register.style.left = '0px';
		formulario_login.style.display = 'none';
		caja_trasera_register.style.display = 'none';
		caja_trasera_login.style.display = 'block';
		caja_trasera_login.style.opacity = '1';
	}
}
iniciarSesion();

// Validaciones para el inicio de sesión
// Declaración de variables
const loginFormEl = document.querySelector(".formulario__login");
const correoLoginInput = document.querySelector('#correoLogin');
const contrasenaLoginInput = document.querySelector('#contrasenaLogin');

// Funciones
const validarLoginForm = (e) => {
	if (correoLoginInput.value.length === 0 ||
		correoLoginInput.value === '' ||
		correoLoginInput.value === null ||
		/^\s+$/.test(correoLoginInput.value) ||
		contrasenaLoginInput.value.length === 0 ||
		contrasenaLoginInput.value === '' ||
		contrasenaLoginInput.value === null ||
		/^\s+$/.test(contrasenaLoginInput.value)) {ç
		e.preventDefault();
		Swal.fire({
			icon: 'error',
			title: 'Error...',
			text: 'Los campos no pueden estar vacío o lleno de espacios en blanco!',
		});
		return;
	}
}
const validarCorreoLogin = () => {
	if (correoLoginInput.value.length === 0 || correoLoginInput.value === '' || correoLoginInput.value === null || /^\s+$/.test(correoLoginInput.value)) {
		Swal.fire({
			icon: 'error',
			title: 'Error...',
			text: 'El correo no puede estar vacío o lleno de espacios en blanco!',
		});
		return;
	}
};
const validarContrasenaLogin = () => {
	if (contrasenaLoginInput.value.length === 0 || contrasenaLoginInput.value === '' || contrasenaLoginInput.value === null || /^\s+$/.test(contrasenaLoginInput.value)) {
		Swal.fire({
			icon: 'error',
			title: 'Error...',
			text: 'La contraseña no puede estar vacía o llena de espacios en blanco!',
		});
		return;
	}
};

// Eventos
loginFormEl.addEventListener("submit", validarLoginForm);
correoLoginInput.addEventListener('focusout', validarCorreoLogin);
contrasenaLoginInput.addEventListener('focusout', validarContrasenaLogin);
// Fin Validaciones para el inicio de sesión

// Validaciones para el registro de usuarios
// Declaración de variables
const documentoRegisterInput = document.querySelector('#documentoRegister');
const nombre_completoRegisterInput = document.querySelector('#nombre_completoRegister');
const correoRegisterInput = document.querySelector('#correoRegister');
const contactoRegisterInput = document.querySelector('#contactoRegister');
const contrasenaRegisterInput = document.querySelector('#contrasenaRegister');

// Funciones
const validarDocumentoRegister = () => {
	if (documentoRegisterInput.value.length === 0 || documentoRegisterInput.value === '' || documentoRegisterInput.value === null || /^\s+$/.test(documentoRegisterInput.value)) {
		Swal.fire({
			icon: 'error',
			title: 'Error...',
			text: 'El documento no puede estar vacío o lleno de espacios en blanco!',
		});
		return;
	}
};
const validarNombreRegister = () => {
	if (nombre_completoRegisterInput.value.length === 0 || nombre_completoRegisterInput.value === '' || nombre_completoRegisterInput.value === null || /^\s+$/.test(nombre_completoRegisterInput.value)) {
		Swal.fire({
			icon: 'error',
			title: 'Error...',
			text: 'El nombre no puede estar vacío o lleno de espacios en blanco!',
		});
		return;
	}
};
const validarCorreoRegister = () => {
	if (correoRegisterInput.value.length === 0 || correoRegisterInput.value === '' || correoRegisterInput.value === null || /^\s+$/.test(correoRegisterInput.value)) {
		Swal.fire({
			icon: 'error',
			title: 'Error...',
			text: 'El correo no puede estar vacío o lleno de espacios en blanco!',
		});
		return;
	}
};
const validarContactoRegister = () => {
	if (contactoRegisterInput.value.length === 0 || contactoRegisterInput.value === '' || contactoRegisterInput.value === null || /^\s+$/.test(contactoRegisterInput.value)) {
		Swal.fire({
			icon: 'error',
			title: 'Error...',
			text: 'El correo no puede estar vacío o lleno de espacios en blanco!',
		});
		return;
	}
};
const validarContrasenaRegister = () => {
	if (contrasenaRegisterInput.value.length === 0 || contrasenaRegisterInput.value === '' || contrasenaRegisterInput.value === null || /^\s+$/.test(contrasenaRegisterInput.value)) {
		Swal.fire({
			icon: 'error',
			title: 'Error...',
			text: 'La contraseña no puede estar vacía o llena de espacios en blanco!',
		});
		return;
	}
};

// Eventos
documentoRegisterInput.addEventListener('focusout', validarDocumentoRegister);
nombre_completoRegisterInput.addEventListener('focusout', validarNombreRegister);
correoRegisterInput.addEventListener('focusout', validarCorreoRegister);
contactoRegisterInput.addEventListener('focusout', validarContactoRegister);
contrasenaRegisterInput.addEventListener('focusout', validarContrasenaRegister);
// Fin Validaciones para el registro de usuarios
