<?php
session_start();

// Vérifier si l'utilisateur est connecté

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Politique de Confidentialité - RoutyGo</title>
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


  <main class="content-center">
    <h2>Politique de Confidentialité</h2>
    <p>
      Chez RoutyGo, la protection de vos données personnelles est une
      priorité. Nous nous engageons à respecter votre vie privée et à protéger
      vos informations personnelles. Cette politique de confidentialité
      explique comment nous collectons, utilisons et protégeons vos données
      personnelles lorsque vous utilisez notre site.
    </p>

    <section>
      <h3>1. Informations collectées</h3>
      <p>
        Nous collectons plusieurs types d'informations pour fournir et
        améliorer nos services :
      </p>
      <ul>
        <li>
          <strong>Informations personnelles :</strong> nom, adresse email,
          numéro de téléphone, etc.
        </li>
        <li>
          <strong>Informations de navigation :</strong> adresse IP, données de
          navigation, cookies.
        </li>
        <li>
          <strong>Informations de paiement :</strong> informations liées aux
          transactions effectuées sur notre site (via un prestataire de
          paiement sécurisé).
        </li>
      </ul>
    </section>

    <section>
      <h3>2. Utilisation des données</h3>
      <p>
        Les informations collectées sont utilisées dans les buts suivants :
      </p>
      <ul>
        <li>
          Pour améliorer nos services et vous fournir une expérience plus
          personnalisée.
        </li>
        <li>Pour traiter vos réservations, achats et demandes de support.</li>
        <li>
          Pour vous informer sur nos nouveaux produits, services et
          promotions.
        </li>
        <li>
          Pour analyser les tendances d'utilisation et améliorer notre site.
        </li>
      </ul>
    </section>

    <section>
      <h3>3. Sécurité des données</h3>
      <p>
        Nous prenons des mesures de sécurité techniques et organisationnelles
        pour protéger vos données personnelles contre toute perte, utilisation
        abusive ou accès non autorisé. Cependant, aucun système de
        transmission de données sur Internet n'est totalement sécurisé, et
        nous ne pouvons garantir la sécurité absolue de vos informations.
      </p>
    </section>

    <section>
      <h3>4. Cookies</h3>
      <p>
        Nous utilisons des cookies pour améliorer votre expérience de
        navigation et analyser l'utilisation de notre site. Les cookies sont
        de petits fichiers stockés sur votre appareil. Vous pouvez configurer
        votre navigateur pour refuser les cookies, mais cela peut limiter
        certaines fonctionnalités du site.
      </p>
    </section>

    <section>
      <h3>5. Vos droits</h3>
      <p>
        Conformément à la législation en vigueur, vous disposez de plusieurs
        droits concernant vos données personnelles :
      </p>
      <ul>
        <li>
          <strong>Droit d'accès :</strong> vous pouvez demander l'accès à vos
          données personnelles que nous détenons.
        </li>
        <li>
          <strong>Droit de rectification :</strong> vous pouvez demander la
          correction de vos données si elles sont inexactes.
        </li>
        <li>
          <strong>Droit à l'effacement :</strong> vous pouvez demander
          l'effacement de vos données dans certaines conditions.
        </li>
        <li>
          <strong>Droit d'opposition :</strong> vous pouvez vous opposer à
          l'utilisation de vos données pour des raisons légitimes.
        </li>
        <li>
          <strong>Droit à la portabilité :</strong> vous pouvez demander la
          transférabilité de vos données dans un format structuré et
          couramment utilisé.
        </li>
      </ul>
      <p>
        Pour exercer vos droits, veuillez nous contacter à l'adresse suivante
        :
        <a href="mailto:routygocontactpro@gmail.com">routygocontactpro@gmail.com</a>.
      </p>
    </section>

    <section>
      <h3>6. Partage des données</h3>
      <p>
        Nous ne vendons ni ne louons vos données personnelles à des tiers.
        Cependant, nous pouvons partager vos informations avec des partenaires
        tiers lorsque cela est nécessaire pour fournir nos services, par
        exemple avec des prestataires de paiement ou des fournisseurs de
        services de transport.
      </p>
    </section>

    <section>
      <h3>7. Modifications de la politique de confidentialité</h3>
      <p>
        Nous nous réservons le droit de modifier cette politique de
        confidentialité à tout moment. En cas de modification, la nouvelle
        version sera publiée sur cette page, avec la date de mise à jour.
      </p>
    </section>
  </main>

  <div class="back-button-container">
    <a href="accueil.html">
      <button class="back-button">Retour à l'accueil</button>
    </a>
  </div>

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
          <li><a href="../Restaurants/restaurant.html">Restaurants</a></li>
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