document.addEventListener("DOMContentLoaded", function() {
    const navbar = document.getElementById("navbar");
    let lastScrollTop = 0;
    let navbarHeight = navbar.offsetHeight;
    let threshold = navbarHeight / 2;

    window.addEventListener("scroll", function() {
        let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
        if (currentScroll > lastScrollTop && currentScroll > threshold) {
            navbar.style.transform = "translateY(-100%)";
        } else {
            navbar.style.transform = "translateY(0)";
        }
        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
    });

    window.toggleMenu = function(btn) {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
        menu.classList.toggle('flex');
    };

    // Cierra el menú móvil al hacer clic en un enlace
    document.querySelectorAll('#mobile-menu a').forEach(link => {
        link.addEventListener('click', () => {
            const menu = document.getElementById('mobile-menu');
            menu.classList.add('hidden');
            menu.classList.remove('flex');
        });
    });
});