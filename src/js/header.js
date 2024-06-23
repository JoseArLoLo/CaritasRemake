document.addEventListener('DOMContentLoaded', (event) => {
    const nav = document.querySelector('.header_nav');
    const liToMove = document.querySelector('.header_nav_donar');
    const ul = nav.querySelector('ul');

    function handleResize() {
        if (window.matchMedia('(min-width: 768px)').matches) {
            if (ul.contains(liToMove)) {
                nav.appendChild(liToMove);
            }
        } else {
            if (!ul.contains(liToMove)) {
                ul.appendChild(liToMove);
            }
        }
    }

    // Ejecutar al cargar la página
    handleResize();
    eventListeners();
    // Añadir el evento de resize
    window.addEventListener('resize', handleResize);
});
function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.header_nav_opciones');

    navegacion.classList.toggle('mostrar');
}