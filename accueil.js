// Script pour faire défiler la page vers le haut lorsqu'on clique sur le bouton
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

// Affichage du bouton "Retour en haut" uniquement lorsque l'utilisateur fait défiler la page
window.onscroll = function() {
    var backToTopButton = document.getElementById('back-to-top');
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        backToTopButton.style.display = "block";
    } else {
        backToTopButton.style.display = "none";
    }
};
