// Afficher le bouton "Retour à l'accueil" lors du défilement
window.onscroll = function () {
    var backToTopButton = document.getElementById('back-to-home');
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        backToTopButton.style.display = 'block';
    } else {
        backToTopButton.style.display = 'none';
    }
};

// Afficher le bouton "Retour en haut" après un certain scroll
window.addEventListener("scroll", () => {
    const button = document.getElementById("back-to-top");
    if (window.scrollY > 300) {
        button.style.display = "block";
    } else {
        button.style.display = "none";
    }
});

// Fonction pour faire défiler vers le haut
function scrollToTop() {
    window.scrollTo({ top: 0, behavior: "smooth" });
}
