window.toggleDropdown = function(button) {
    const content = button.nextElementSibling;
    content.classList.toggle('active');
};

window.openModal = function() {
    const modal = document.getElementById("imageModal");
    const modalImg = document.getElementById("fullImage");
    const img = document.getElementById("zoomable-image");
    modal.classList.add('active');
    modalImg.src = img.src;
};

window.closeModal = function() {
    const modal = document.getElementById("imageModal");
    modal.classList.remove('active');
};

// Cerrar al hacer clic fuera de la imagen
document.addEventListener('click', function(event) {
    const modal = document.getElementById("imageModal");
    if (modal.classList.contains('active') && event.target === modal) {
        window.closeModal();
    }
});