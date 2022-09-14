// Mostrar información extra
document.querySelectorAll('.card button').forEach((btn) => {
	btn.onclick = () => {
		document.querySelector('.container-info-card').classList.toggle('info-visible');
		// ? Variables
		let infoCardImg = document.querySelector('.info-card-img');
		let infoCardTitle = document.querySelector('.info-card-text h2');
		let infoObjeto = document.querySelector('#info-objeto');
		let infoCardCantidad = document.querySelector('#info-cantidad');
		let infoCardPrestado = document.querySelector('#info-prestado');
		//* Cambiar descripción dependiendo del botón
		switch (btn.getAttribute('id')) {
			case 'btn-info-futbol':
				infoCardImg.style.background = "url('../imgs/inventario-img/info-card/fondoDeporte.jpg')";
				infoCardTitle.textContent = 'Pelota de fútbol';
				infoObjeto.textContent = 'Pelota de futbol para su uso recreativo.';
				infoCardCantidad.textContent = 10;
				infoCardPrestado.textContent = 0;
				break;
			case 'btn-info-colchoneta':
				infoCardImg.style.background = "url('../imgs/inventario-img/info-card/fondoGimnasio.webp')";
				infoCardTitle.textContent = 'Colchonetas';
				infoObjeto.textContent = 'Colchoneta de gimnasia para su uso práctico.';
				infoCardCantidad.textContent = 60;
				infoCardPrestado.textContent = 0;
				break;
			case 'btn-info-baston':
				infoCardImg.style.background = "url('../imgs/inventario-img/info-card/fondoGimnasio.webp')";
				infoCardTitle.textContent = 'Bastones';
				infoObjeto.textContent = 'Bastones de gimnasia para su uso práctico';
				infoCardCantidad.textContent = 100;
				infoCardPrestado.textContent = 0;
				break;
			case 'btn-info-volleyball':
				infoCardImg.style.background = "url('../imgs/inventario-img/info-card/fondoDeporte.jpg')";
				infoCardTitle.textContent = 'Balones de volleyball';
				infoObjeto.textContent = 'Balones de volleyball para su uso recreativo.';
				infoCardCantidad.textContent = 10;
				infoCardPrestado.textContent = 0;
				break;
			case 'btn-info-ulaula':
				infoCardImg.style.background = "url('../imgs/inventario-img/info-card/fondoGimnasio.webp')";
				infoCardTitle.textContent = 'Ula ula';
				infoObjeto.textContent = 'Hoola hoops para su uso recreativo y práctico.';
				infoCardCantidad.textContent = 25;
				infoCardPrestado.textContent = 0;
				break;
			case 'btn-info-cono':
				infoCardImg.style.background = "url('../imgs/inventario-img/info-card/fondoGimnasio.webp')";
				infoCardTitle.textContent = 'Conos';
				infoObjeto.textContent = 'Conos de gimnasia para su uso recreativo y práctico.';
				infoCardCantidad.textContent = 10;
				infoCardPrestado.textContent = 0;
				break;
			case 'btn-info-platillo':
				infoCardImg.style.background = "url('../imgs/inventario-img/info-card/fondoGimnasio.webp')";
				infoCardTitle.textContent = 'Platillos';
				infoObjeto.textContent = 'Platillos de gimnasia para su uso recreativo y práctico.';
				infoCardCantidad.textContent = 20;
				infoCardPrestado.textContent = 0;
				break;
			case 'btn-info-lazos':
				infoCardImg.style.background = "url('../imgs/inventario-img/info-card/fondoGimnasio.webp')";
				infoCardTitle.textContent = 'Lazos';
				infoObjeto.textContent = 'Lazos de gimnasia para su uso recreativo y práctico.';
				infoCardCantidad.textContent = 5;
				infoCardPrestado.textContent = 0;
				break;
			case 'btn-info-pesa':
				infoCardImg.style.background = "url('../imgs/inventario-img/info-card/fondoGimnasio.webp')";
				infoCardTitle.textContent = 'Pesas';
				infoObjeto.textContent = 'Pesa de gimnasia para su uso práctico.';
				infoCardCantidad.textContent = 1;
				infoCardPrestado.textContent = 0;
				break;
			case 'btn-info-cronometro':
				infoCardImg.style.background = "url('../imgs/inventario-img/info-card/fondoDeporte.jpg')";
				infoCardTitle.textContent = 'Cronométro';
				infoObjeto.textContent = 'Cronometro de uso práctico y recreativo.';
				infoCardCantidad.textContent = 1;
				infoCardPrestado.textContent = 0;
				break;
			case 'btn-info-pelota-pong':
				infoCardImg.style.background = "url('../imgs/inventario-img/info-card/fondoDeporte.jpg')";
				infoCardTitle.textContent = 'Pelotas de ping pong';
				infoObjeto.textContent = 'Pelotas de mesas de ping pong para su uso recreativo.';
				infoCardCantidad.textContent = 20;
				infoCardPrestado.textContent = 0;
				break;
			case 'btn-info-metro':
				infoCardImg.style.background = "url('../imgs/inventario-img/info-card/fondoDeporte.jpg')";
				infoCardTitle.textContent = 'Metros';
				infoObjeto.textContent = 'Metro para uso práctico.';
				infoCardCantidad.textContent = 2;
				infoCardPrestado.textContent = 0;
				break;
			case 'btn-info-raqueta':
				infoCardImg.style.background = "url('../imgs/inventario-img/info-card/fondoDeporte.jpg')";
				infoCardTitle.textContent = 'Raquetas';
				infoObjeto.textContent = 'Raquetas de mesas de ping pong para uso recreativo.';
				infoCardCantidad.textContent = 10;
				infoCardPrestado.textContent = 0;
				break;
			case 'btn-info-pesa-pequeña':
				infoCardImg.style.background = "url('../imgs/inventario-img/info-card/fondoGimnasio.webp')";
				infoCardTitle.textContent = 'Pesas pequeñas';
				infoObjeto.textContent = 'Pesas pequeñas de gimnasia para uso recreativo y práctico.';
				infoCardCantidad.textContent = 10;
				infoCardPrestado.textContent = 0;
				break;
		}
		infoCardImg.style.backgroundSize = 'cover';
		infoCardImg.style.backgroundRepeat = 'no-repeat';
	};
});
// Ocultar recuadro
document.querySelectorAll('.quit-container').forEach((span) => {
	span.onclick = () => {
		document.querySelector('.container-info-card').classList.remove('info-visible');
	};
});
// ? Ocultar recuadro cuando se hace click por fuera del mismo
window.addEventListener("click", (e) => {
	if (e.target === document.querySelector(".container-info-card")) {
		document.querySelector('.container-info-card').classList.remove('info-visible');
	}
});
