// Afficher le bouton "Retour à l'accueil" lors du défilement
window.onscroll = function() {
    var backToTopButton = document.getElementById('back-to-home');
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        backToTopButton.style.display = 'block';
    } else {
        backToTopButton.style.display = 'none';
    }
};
