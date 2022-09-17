const estadoPrestamoEl = document.querySelectorAll('.estado-prestamo');
estadoPrestamoEl.forEach((e) => {
    if(e.textContent === 'Devuelto') {
        e.style.color = 'green';
    }
});