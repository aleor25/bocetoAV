window.togglePassword = function() {
    let passwordInput = document.getElementById("password");
    let eyeIcon = document.querySelector(".fa-eye, .fa-eye-slash");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        if (eyeIcon) {
            eyeIcon.classList.remove("fa-eye");
            eyeIcon.classList.add("fa-eye-slash");
        }
    } else {
        passwordInput.type = "password";
        if (eyeIcon) {
            eyeIcon.classList.remove("fa-eye-slash");
            eyeIcon.classList.add("fa-eye");
        }
    }
};