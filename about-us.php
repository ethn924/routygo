<?php
session_start();

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>À propos de RoutyGo</title>
    <link rel="stylesheet" href="about-us.css" />
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
      <section class="about-us">
        <h2>À propos de RoutyGo</h2>
        <p><strong>RoutyGo</strong> simplifie vos voyages : réservez hôtels, restaurants et activités en toute simplicité.</p>
      
        <h3>Notre Histoire</h3>
        <p>Fondé par Jawed, Harris et Ethan, étudiant au lycée Paul Lapie en BTS SIO et passionnés de voyage et d'informatique, RoutyGo est né de l’envie de rendre la planification de voyages plus simple et intuitive.
          Jawed notre chef d'équipe, a fait en sorte que le projet se déroule à merveille, en suivant à la trace les objectifs donnés dans un grand profesionalisme. Harris, notre développeur, a su mettre en place une interface utilisateur fluide et agréable, tandis qu'Ethan, notre designer, a créé un design moderne et attrayant. Ensemble, ils ont donné vie à RoutyGo, une plateforme qui facilite la réservation de voyages.</p>
        </p>

        <h3>Notre Mission</h3>
        <p>Rendre vos voyages plus faciles et agréables grâce à une plateforme intuitive et des services de qualité.</p>

        <h3>Nos Services</h3>
        <ul>
          <li><strong>Hôtels :</strong> Des options pour tous les budgets.</li>
          <li><strong>Restaurants :</strong> Réservez facilement en ligne.</li>
          <li><strong>Activités :</strong> Explorez des expériences uniques.</li>
        </ul>

        <h3>Nos Valeurs</h3>
        <ul>
          <li><strong>Simplicité :</strong> Réservation rapide et facile.</li>
          <li><strong>Confiance :</strong> Transactions sécurisées.</li>
          <li><strong>Expérience :</strong> Des partenaires de qualité pour garantir un service optimal.</li>
        </ul>

        <h3>Nos Chiffres Clés</h3>
        <ul>
          <li>🌍 <strong>+100</strong> destinations proposées</li>
          <li>🏨 <strong>+500</strong> hôtels partenaires</li>
          <li>🍽 <strong>Réservation en 3 clics</strong></li>
        </ul>

        <h3>Témoignages</h3>
        <blockquote>
          <p>"Grâce à RoutyGo, j’ai pu organiser mon voyage en un clin d'œil ! Interface fluide et service impeccable." – Alice D.</p>
        </blockquote>
      </section>
    </main>

    <div class="back-button-container">
      <a href="..\Accueil\accueil.php">
          <button class="back-button">Retour à l'accueil</button>
      </a>
  </div>
  

    <script src="about-us.js"></script>
    <footer>
      <div class="footer-container">
        <div class="footer-section">
          <h3>À propos</h3>
          <p>RoutyGo vous aide à découvrir les meilleures destinations et expériences à travers le monde.</p>
        </div>
        <div class="footer-section">
          <h3>Liens rapides</h3>
          <ul>
            <li><a href="#">Destinations</a></li>
            <li><a href="#">Hôtels</a></li>
            <li><a href="#">Restaurants</a></li>
            <li><a href="#">Activités</a></li>
            <li><a href="../About-Us/about-us.html">À propos de nous</a></li>
          </ul>
        </div>
        <div class="footer-section">
          <h3>Nous suivre</h3>
          <div class="social-icons">
            <a href="https://www.facebook.com/profile.php?id=61574765286788"><img src="facebook-icon.png" alt="Facebook" /></a>
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
