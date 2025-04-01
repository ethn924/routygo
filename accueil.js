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







/*
// Créez la carte avec Leaflet, centrée sur Paris (48.8566, 2.3522) avec un zoom de 13
var map = L.map('map').setView([48.8566, 2.3522], 13);

// Ajouter les tuiles Stamen Toner
L.tileLayer('https://{s}.tile.stamen.com/toner/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://stamen.com">Stamen Design</a> | ' +
                 '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a>',
    subdomains: ['a', 'b', 'c', 'd'],
    minZoom: 5,
    maxZoom: 18
}).addTo(map);

// Ajouter un marqueur à Paris
var marker = L.marker([48.8566, 2.3522]).addTo(map);
marker.bindPopup("<b>Paris</b>").openPopup();
*/
