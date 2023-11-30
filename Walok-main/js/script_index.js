document.addEventListener("DOMContentLoaded", function() {
    const headers = document.querySelectorAll('.index-header, .index-header2, .index-header3');
    let currentIndex = 0;

    function mostrarHeader() {
        // Ocultar el elemento actual
        headers[currentIndex].classList.remove('mostrar');
        headers[currentIndex].classList.add('ocultar');

        currentIndex = (currentIndex + 1) % headers.length;

        // Mostrar el siguiente elemento
        headers[currentIndex].classList.remove('ocultar');
        headers[currentIndex].classList.add('mostrar');
    }

    // Mostrar el primer elemento y ocultar index-header2 e index-header3
    headers[currentIndex].classList.add('mostrar');
    headers[1].classList.add('ocultar');
    headers[2].classList.add('ocultar');

    setInterval(mostrarHeader, 8000);
});