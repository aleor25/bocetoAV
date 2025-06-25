document.addEventListener("DOMContentLoaded", function() {
    const navbar = document.getElementById("navbar");
    let lastScrollTop = 0;
    let navbarHeight = navbar.offsetHeight;
    let threshold = navbarHeight / 2; // Ahora el umbral es la mitad del navbar

    window.addEventListener("scroll", function() {
        let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
        // Solo ocultar si se ha desplazado más de la mitad del navbar
        if (currentScroll > lastScrollTop && currentScroll > threshold) {
            navbar.style.transform = "translateY(-100%)";
        } else {
            navbar.style.transform = "translateY(0)";
        }
        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
    });

    window.toggleMenu = function(btn) {
        const menu = document.querySelector('.navbar-right');
        btn.classList.toggle('active');
        menu.classList.toggle('active');
    };

    document.querySelectorAll('.navbar-right a').forEach(link => {
        link.addEventListener('click', () => {
            document.querySelector('.navbar-right').classList.remove('active');
            document.querySelector('.navbar-toggle').classList.remove('active');
        });
    });
});