<?php
session_start();

// Vérifier si l'utilisateur est connecté

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RoutyGo - Nos Hôtels</title>
  <link rel="stylesheet" href="hotel.css">
</head>

<body>
  <header>
    <div class="logo">
      <img src="logo.jpg" alt="Logo RoutyGo" />
    </div>
    <h1 class="site-title">
      <a href="../Accueil/accueil.php">RoutyGo</a>
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

  <main>
    <section class="hotels">
      <h2>Nos Hôtels</h2>
      <div class="hotel-list">
        <!-- Hôtel Paris -->
        <div class="hotel">
          <img src="hotel_paris.jpg" alt="Hôtel Paris" />
          <div class="hotel-info">
            <h3>Hôtel Paris</h3>
            <p>Élégant et confortable en plein centre de Paris.</p>
            <p class="price">Prix : 120€/nuit</p>
            <button class="view-hotel-button" onclick="window.location.href='hotel_paris.php'">Voir l'hôtel</button>
          </div>
        </div>

        <!-- Hôtel Tokyo -->
        <div class="hotel">
          <img src="hotel_tokyo.jpg" alt="Hôtel Tokyo" />
          <div class="hotel-info">
            <h3>Hôtel Tokyo</h3>
            <p>Moderne et raffiné, au cœur de la capitale japonaise.</p>
            <p class="price">Prix : 100€/nuit</p>
            <button class="view-hotel-button" onclick="window.location.href='hotel_tokyo.php'">Voir l'hôtel</button>
          </div>
        </div>

        <!-- Hôtel Rome -->
        <div class="hotel">
          <img src="hotel_rome.jpg" alt="Hôtel Rome" />
          <div class="hotel-info">
            <h3>Hôtel Rome</h3>
            <p>Chic et cosy, idéalement situé près du Colisée.</p>
            <p class="price">Prix : 150€/nuit</p>
            <button class="view-hotel-button" onclick="window.location.href='hotel_rome.php'">Voir l'hôtel</button>
          </div>
        </div>

        <!-- Hôtel Londres -->
        <div class="hotel">
          <img src="hotel_london.jpg" alt="Hôtel Londres" />
          <div class="hotel-info">
            <h3>Hôtel Londres</h3>
            <p>Luxueux et central, à deux pas du Big Ben.</p>
            <p class="price">Prix : 180€/nuit</p>
            <button class="view-hotel-button" onclick="window.location.href='hotel_london.php'">Voir l'hôtel</button>
          </div>
        </div>
      </div>
    </section>
  </main>

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
  <button id="back-to-top" onclick="scrollToTop()">↑ Retour en haut</button>
</body>

</html>