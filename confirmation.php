<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: connexion.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Confirmation</title>
</head>
<body>
    <h2>Merci <?php echo htmlspecialchars($_SESSION['username']); ?> !</h2>
    <p>Votre réservation a bien été enregistrée.</p>
    <a href="accueil.php">Retour à l'accueil</a>
</body>
</html>
