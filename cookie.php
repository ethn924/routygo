<?php
session_start();


?>


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Politique de Cookies - RoutyGo</title>
    <link rel="stylesheet" href="cookie.css" />
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
    <main class="content-center">
      <h2>Politique de Cookies</h2>
      <p>
        Bienvenue sur la page de la politique de cookies de RoutyGo. Nous
        utilisons des cookies pour améliorer votre expérience sur notre site,
        analyser le trafic et personnaliser le contenu proposé.
      </p>

      <section>
        <h3>1. Qu'est-ce qu'un cookie ?</h3>
        <p>
          Un cookie est un petit fichier texte déposé sur votre appareil lorsque
          vous visitez un site web. Il permet de mémoriser des informations
          relatives à votre navigation.
        </p>
      </section>

      <section>
        <h3>2. Pourquoi utilisons-nous des cookies ?</h3>
        <p>RoutyGo utilise des cookies pour :</p>
        <ul>
          <li>Faciliter la navigation sur notre site</li>
          <li>Mémoriser vos préférences</li>
          <li>Analyser l'audience et améliorer nos services</li>
          <li>Personnaliser le contenu et les offres publicitaires</li>
        </ul>
      </section>

      <section>
        <h3>3. Types de cookies utilisés</h3>
        <p>
          Nous utilisons des cookies de session et des cookies persistants,
          ainsi que des cookies tiers pour les analyses statistiques et la
          publicité.
        </p>
      </section>

      <section>
        <h3>4. Gestion et désactivation des cookies</h3>
        <p>
          Vous pouvez à tout moment modifier les paramètres de votre navigateur
          pour refuser l'installation des cookies. Notez que cela pourrait
          impacter certaines fonctionnalités du site.
        </p>
      </section>

      <section>
        <h3>5. Plus d'informations</h3>
        <p>
          Pour toute question relative à notre politique de cookies, veuillez
          consulter notre
          <a href="confidentialite.html">politique de confidentialité</a> ou
          nous contacter par email à routygocontactpro@gmail.com.
        </p>
      </section>
    </main>

    <div class="back-button-container">
      <a href="..\Accueil\accueil.html">
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
            <li><a href="about-us.html">À propos de nous</a></li>
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
  </body>
</html>
