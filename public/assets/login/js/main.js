function toggleForms() {
    var loginForm = document.getElementById('loginForm');
    var registerForm = document.getElementById('registerForm');
    var loginToggle = document.getElementById('loginToggle');
    var registerToggle = document.getElementById('registerToggle');

    if (loginForm.style.display === "none") {
        registerForm.style.display = "none";
        loginForm.style.display = "flex";
        registerToggle.style.display = "none";
        loginToggle.style.display = "block";
    } else {
        loginForm.style.display = "none";
        registerForm.style.display = "flex";
        loginToggle.style.display = "none";
        registerToggle.style.display = "block";
    }
}