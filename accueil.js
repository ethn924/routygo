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
  
