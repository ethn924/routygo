<?php
session_start();

// Vérifier si l'utilisateur est connecté
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Obligations Légales - RoutyGo</title>
  <link rel="stylesheet" href="obligations.css" />
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
  <!-- Contenu principal -->
  <main class="content-center">
    <h2>Obligations Légales</h2>
    <p>
      Bienvenue sur la page dédiée aux obligations légales de RoutyGo. Cette
      page présente toutes les obligations auxquelles nous sommes tenus en
      matière de législation et de réglementation.
    </p>

    <section>
      <h3>1. Informations sur l'éditeur du site</h3>
      <p>Le site internet RoutyGo est édité par :</p>
      <ul>
        <li><strong>Nom de l'éditeur :</strong> RoutyGo S.A.R.L.</li>
        <li>
          <strong>Adresse :</strong> 123 Rue de la Voyage, 75000 Paris, France
        </li>
        <li><strong>Numéro SIRET :</strong> 123 456 789 00012</li>
        <li><strong>Numéro de téléphone :</strong> +33 1 23 45 67 89</li>
        <li><strong>Email :</strong> routygocontactpro@gmail.com</li>
      </ul>
    </section>

    <section>
      <h3>2. Propriété intellectuelle</h3>
      <p>
        Le contenu du site, incluant les textes, images, logos, et vidéos, est
        protégé par le droit d'auteur et reste la propriété exclusive de
        RoutyGo ou de ses partenaires. Toute reproduction, diffusion ou
        utilisation de ces éléments sans autorisation est interdite.
      </p>
    </section>

    <section>
      <h3>3. Protection des données personnelles</h3>
      <p>
        RoutyGo s'engage à respecter la vie privée de ses utilisateurs. Toutes
        les données personnelles collectées via le site sont traitées
        conformément à notre
        <a href="confidentialite.php">politique de confidentialité</a>. Vous
        avez le droit d'accéder, de rectifier ou de supprimer vos données
        personnelles à tout moment.
      </p>
    </section>

    <section>
      <h3>4. Cookies</h3>
      <p>
        Nous utilisons des cookies pour améliorer l'expérience utilisateur sur
        notre site. En naviguant sur le site, vous acceptez l'utilisation de
        cookies conformément à notre
        <a href="cookie.php">politique de cookies</a>.
      </p>
    </section>

    <section>
      <h3>5. Responsabilité</h3>
      <p>
        RoutyGo ne pourra être tenu responsable des erreurs, interruptions ou
        défaillances du site. Nous faisons tout notre possible pour assurer la
        disponibilité et la sécurité du site, mais ne pouvons garantir une
        absence totale de risques techniques.
      </p>
    </section>

    <section>
      <h3>6. Loi applicable et règlement des litiges</h3>
      <p>
        Le site RoutyGo est soumis à la législation française. En cas de
        litige, les tribunaux compétents de Paris seront les seuls
        juridiquement responsables.
      </p>
    </section>
  </main>

  <div class="back-button-container">
    <a href="accueil.html">
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
  <button id="back-to-top" onclick="scrollToTop()">↑ Retour en haut</button>
</body>

</html>