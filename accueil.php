<?php
// Démarrage de la session pour suivre l'état de connexion
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Routy Go</title>
  <!-- Lien vers le fichier CSS externe accueil.css -->
  <link rel="stylesheet" href="accueil.css" />
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

<main>
  <section class="hero">
    <img src="background_section_accueil.jpeg" alt="Coucher de soleil" />
    <div class="hero-text">
      <h1>Des destinations de rêves vous attendent !</h1>
      <p>Explorez des endroits exotiques et inoubliables</p>
    </div>
  </section>
  <section class="trending">
    <h2>RECHERCHES TENDANCES</h2>
    <div class="destinations">
      <div class="destination">
        <img src="capadocia.jpg" alt="Capadocia, Turquie" />
        <a href="https://fr.wikipedia.org/wiki/Capadoce" target="_blank">
          <p>Capadocia, Turquie</p>
        </a>
      </div>
      <div class="destination">
        <img src="chiangmai.jpg" alt="Chiang Mai, Thaïlande" />
        <a href="https://fr.wikipedia.org/wiki/Chiang_Mai" target="_blank">
          <p>Chiang Mai, Thaïlande</p>
        </a>
      </div>
      <div class="destination">
        <img src="siemreap.jpg" alt="Siem Reap, Cambodge" />
        <a href="https://fr.wikipedia.org/wiki/Siem_Reap" target="_blank">
          <p>Siem Reap, Cambodge</p>
        </a>
      </div>
      <div class="destination">
        <img src="tozeur.jpg" alt="Tozeur, Tunisie" />
        <a href="https://fr.wikipedia.org/wiki/Tozeur" target="_blank">
          <p>Tozeur, Tunisie</p>
        </a>
      </div>
      <div class="destination">
        <img src="okinawa.jpg" alt="Okinawa, Japon" />
        <a href="https://fr.wikipedia.org/wiki/Okinawa" target="_blank">
          <p>Okinawa, Japon</p>
        </a>
      </div>
      <div class="destination">
        <img src="lacalabre.jpg" alt="La Calabre, Italie" />
        <a href="https://fr.wikipedia.org/wiki/Calabre" target="_blank">
          <p>La Calabre, Italie</p>
        </a>
      </div>
    </div>
  </section>
</main>

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
        <li><a href="../Destinations/destinations.php">Destinations</a></li>
        <li><a href="../Hotels/hotel.php">Hôtels</a></li>
        <li><a href="../Restaurants/restaurant.php">Restaurants</a></li>
        <li><a href="#">Activités</a></li>
        <li><a href="../About-Us/about-us.php">À propos de nous</a></li>
        <li><a href="../Obligations/obligations.php">Obligations légales</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h3>Nous suivre</h3>
      <div class="social-icons">
        <a href="https://www.facebook.com/profile.php?id=61574765286788"><img src="facebook-icon.png" alt="Facebook" /></a>
        <a href="https://www.instagram.com/routygo/"><img src="instagram-icon.png" alt="Instagram" /></a>
        <a href="https://www.linkedin.com/in/routy-go-37603435a/"><img src="linkedin-icon.png" alt="LinkedIn" /></a>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2025 RoutyGo - Tous droits réservés</p>
    <a href="../Obligations/obligations.php">Obligations légales</a>
  </div>
</footer>

</body>

</html>
