document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('#signup-form');
    const username = document.getElementById('username');
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirm-password');
    
    const usernameError = document.getElementById('username-error');
    const emailError = document.getElementById('email-error');
    const passwordError = document.getElementById('password-error');
    const confirmPasswordError = document.getElementById('confirm-password-error');

    form.addEventListener('submit', function(event) {
        let isValid = true;
        
        // Réinitialiser les messages d'erreur
        resetErrors();

        // Validation du nom d'utilisateur
        if (username.value.trim() === "") {
            usernameError.textContent = "Le nom d'utilisateur est requis.";
            isValid = false;
        }

        // Validation de l'email
        if (!validateEmail(email.value)) {
            emailError.textContent = "L'email est invalide.";
            isValid = false;
        }

        // Validation du mot de passe
        if (password.value.length < 6) {
            passwordError.textContent = "Le mot de passe doit contenir au moins 6 caractères.";
            isValid = false;
        }

        // Validation de la confirmation du mot de passe
        if (password.value !== confirmPassword.value) {
            confirmPasswordError.textContent = "Les mots de passe ne correspondent pas.";
            isValid = false;
        }

        // Si le formulaire n'est pas valide, empêcher l'envoi
        if (!isValid) {
            event.preventDefault();
        }
    });

    function resetErrors() {
        usernameError.textContent = "";
        emailError.textContent = "";
        passwordError.textContent = "";
        confirmPasswordError.textContent = "";
    }

    function validateEmail(email) {
        const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        return regex.test(email);
    }
});
