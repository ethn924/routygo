<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=, initial-scale=1.0" />
    <link rel="stylesheet" href="restaurant.css" />
    <title>Document</title>
  </head>
  <body>
  <header>
    <!-- Ligne supérieure du header -->
    <div class="header-top">
      <!-- Zone gauche : Logo et Branding -->
      <div class="header-left">
        <div class="logo">
          <img src="logo.jpg" alt="Logo RoutyGo" />
        </div>
        <div class="site-branding">
          <h1 class="site-title">
            <a href="../Accueil/accueil.php">RoutyGo</a>
          </h1>
        </div>
      </div>
      
      <!-- Zone centrale : Navigation -->
      <nav class="header-nav">
        <ul>
          <li><a href="../Destinations/destinations.php">Destinations</a></li>
          <li><a href="../Hotels/hotel.php">Hôtels</a></li>
          <li><a href="../Restaurants/restaurant.php">Restaurants</a></li>
          <li><a href="#">Activités</a></li>
          <li><a href="../About-Us/about-us.php">À propos de nous</a></li>
          <li><a href="../Obligations/obligations.php">Obligations légales</a></li>
        </ul>
      </nav>
      
      <!-- Zone droite : Boutons d'authentification -->
      <div class="header-right">
        <div class="auth-buttons">
          <a href="../Formulaire/formulaire.php">
            <button class="inscription">Inscription</button>
          </a>
          <?php if (isset($_SESSION['username'])): ?>
            <a href="../Connexion/deconnexion.php">
              <button class="deconnexion">Se déconnecter</button>
            </a>
          <?php else: ?>
            <a href="../Connexion/connexion.php">
              <button class="connexion">Connexion</button>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
    
    <!-- Ligne inférieure du header : Slogan complet -->
    <div class="header-bottom">
      <h2 class="slogan">Avec RoutyGo, votre voyage commence ici : réservez, partez et profitez !</h2>
    </div>
  </header>

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
