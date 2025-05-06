<?php
// deconnexion.php

session_start();

// Supprimer toutes les variables de session
session_unset();

// Détruire la session
session_destroy();

// Rediriger vers la page de connexion après la déconnexion
header("Location: ../Accueil/accueil.php");
exit();
?>
