// Fonction pour réserver un hôtel
function reserveHotel(hotelName) {
  alert('Réservation effectuée pour ' + hotelName);
}

// Fonction pour soumettre un avis
function submitReview(hotelId) {
  const reviewText = document.getElementById('review-text-' + hotelId).value;
  if (reviewText) {
    const reviewsList = document.getElementById('reviews-' + hotelId);
    reviewsList.innerHTML = ''; // Supprimer "Avis à venir..." avant d'ajouter le nouvel avis
    const newReview = document.createElement('li');
    newReview.textContent = reviewText;
    reviewsList.appendChild(newReview);
    document.getElementById('review-text-' + hotelId).value = ''; // Vider le champ de texte après la soumission
  }
}

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

