document.addEventListener("DOMContentLoaded", function() {
    const scrollToTopButton = document.querySelector(".scroll-to-top");
    const footer = document.querySelector("footer");
    let isVisible = false;

    // Inicialmente oculto y sin animación
    scrollToTopButton.style.display = "none";
    scrollToTopButton.style.opacity = "0";
    scrollToTopButton.style.transition = "opacity 0.3s, bottom 0.3s";

    window.addEventListener("scroll", function() {
        const scrollY = window.scrollY || window.pageYOffset;
        const sixth = document.documentElement.scrollHeight / 6;

        // Mostrar/ocultar con animación
        if (scrollY > sixth) {
            if (!isVisible) {
                scrollToTopButton.style.display = "flex";
                setTimeout(() => {
                    scrollToTopButton.style.opacity = "1";
                }, 10);
                isVisible = true;
            }
        } else {
            if (isVisible) {
                scrollToTopButton.style.opacity = "0";
                setTimeout(() => {
                    scrollToTopButton.style.display = "none";
                }, 300);
                isVisible = false;
            }
        }

        // Evitar que el botón se sobreponga al footer
        if (footer) {
            const footerRect = footer.getBoundingClientRect();
            const windowHeight = window.innerHeight;
            const buttonHeight = scrollToTopButton.offsetHeight;
            const overlap = windowHeight - footerRect.top;

            if (overlap > 0) {
                scrollToTopButton.style.bottom = `${overlap + 20}px`;
            } else {
                scrollToTopButton.style.bottom = "2rem";
            }
        }
    });

    window.scrollToTop = function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
});