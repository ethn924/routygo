<?php
session_start();

?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RoutyGo : Destinations et Carte</title>
  <link rel="stylesheet" href="destinations.css" />

  <!-- Inclure le CSS de Leaflet -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

  <!-- Inclure Turf.js -->
  <script src="https://unpkg.com/@turf/turf"></script>
  <!-- Inclure Leaflet JS -->
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</head>

<body>
<header>
  <div class="logo">
      <img src="logo.jpg" alt="Logo RoutyGo" />
  </div>
  <h1 class="site-title">
    <a href="..\Accueil\accueil.php">RoutyGo</a>
  </h1>
  <h1 class="slogan">
    Avec RoutyGo, votre voyage commence ici : réservez, partez et profitez !
  </h1>
  <nav>
    <ul>
      <li><a href="../Destinations/destinations.php">Destinations</a></li>
      <li><a href="../Hotels/hotel.php">Hôtels</a></li>
      <li><a href="../Restaurants/restaurant.php">Restaurants</a></li>
      <li><a href="#">Activités</a></li>
      <li><a href="../About-Us/about-us.php">À propos de nous</a></li>
      <li><a href="../Obligations/obligations.php">Obligations légales</a></li>
    </ul>
  </nav>

  <!-- Regroupement des boutons Connexion, Déconnexion et Inscription -->
  <div class="auth-buttons">
    <a href="../Formulaire/formulaire.php">
      <button class="inscription">Inscription</button>
    </a>

    <?php if (isset($_SESSION['username'])): ?>
      <a href="../Connexion/deconnexion.php">
        <button class="connexion">Se déconnecter</button>
      </a>
    <?php else: ?>
      <a href="../Connexion/connexion.php">
        <button class="connexion">Connexion</button>
      </a>
    <?php endif; ?>
  </div>
</header>

  

  <!-- Contenu principal -->
  <main>
    <h2>Découvrez nos Destinations</h2>
    <p>
      Explorez les meilleures destinations avec RoutyGo et trouvez les
      meilleurs hôtels, restaurants et activités pour votre voyage.
    </p>

    <!-- Bouton pour explorer la carte -->
    <button id="exploreButton">Explorez</button>

    <!-- Conteneur pour la carte (initialement cachée) -->
    <h2>Carte Interactive</h2>
    <p>
      Visualisez la distance entre différents points d'intérêt grâce à notre
      carte interactive.
    </p>
    <div id="map" style="height: 600px; display: none"></div>
  </main>

  <div class="back-button-container">
    <a href="..\Accueil\accueil.php">
      <button class="back-button">Retour à l'accueil</button>
    </a>
  </div>

  <!-- Pied de page RoutyGo -->
  <footer>
    <div class="footer-container">
      <div class="footer-section">
        <h3>À propos</h3>
        <p>
          RoutyGo vous aide à découvrir les meilleures destinations et
          expériences à travers le monde.
        </p>
      </div>
      <div class="footer-section">
        <h3>Liens rapides</h3>
        <ul>
          <li><a href="#">Destinations</a></li>
          <li><a href="#">Hôtels</a></li>
          <li><a href="#">Restaurants</a></li>
          <li><a href="#">Activités</a></li>
          <li><a href="..\About-Us\about-us.html">À propos de nous</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h3>Nous suivre</h3>
        <div class="social-icons">
          <a href="#"><img src="facebook-icon.png" alt="Facebook" /></a>
          <a href="#"><img src="instagram-icon.png" alt="Instagram" /></a>
          <a href="#"><img src="linkedin-icon.png" alt="LinkedIn" /></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2025 RoutyGo - Tous droits réservés</p>
    </div>
  </footer>

  <!-- Script Leaflet + Turf.js pour la carte -->
  <script>
    // Fonction pour afficher la carte après avoir cliqué sur le bouton "Explorez"
    document
      .getElementById("exploreButton")
      .addEventListener("click", function() {
        // Demander la position de l'utilisateur
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(
            function(position) {
              // Si l'utilisateur accepte, afficher la carte
              document.getElementById("map").style.display = "block"; // Rendre la carte visible

              // Cacher le bouton après avoir cliqué
              document.getElementById("exploreButton").style.display = "none";

              // Utilisation des coordonnées de l'utilisateur
              var latitude = position.coords.latitude;
              var longitude = position.coords.longitude;

              // Créer la carte Leaflet centrée sur la position de l'utilisateur
              var map = L.map("map").setView([latitude, longitude], 13);

              // Ajouter les tuiles OpenStreetMap à la carte
              L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
              }).addTo(map);

              // Ajouter un marqueur à la position de l'utilisateur
              var marker = L.marker([latitude, longitude]).addTo(map);

              // Afficher la position dans une popup
              marker.bindPopup("Vous êtes ici !").openPopup();
            },
            function(error) {
              // Gérer les erreurs de géolocalisation
              alert("Erreur lors de la récupération de la position : " + error.message);
              document.getElementById("map").style.display = "none"; // Cacher la carte
            }
          );
        } else {
          // Si la géolocalisation n'est pas supportée par le navigateur
          alert("La géolocalisation n'est pas supportée par votre navigateur.");
        }
      });
  </script>
</body>

</html>