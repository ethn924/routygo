<?php
// Connexion à la base de données
session_start();

// Si l'utilisateur est déjà connecté, rediriger vers accueil.php
if (isset($_SESSION['user_id'])) {
    header("Location: ../Accueil/accueil.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Connexion à la base de données
    $pdo = new PDO('mysql:host=localhost;dbname=hotel', 'root', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Logique de connexion
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérification des identifiants dans la base de données
    $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Si l'utilisateur existe et que le mot de passe est correct
    if ($user && password_verify($password, $user['password'])) {
        // Démarrer la session pour l'utilisateur
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        // Rediriger vers la page d'accueil après la connexion
        header("Location: ../Accueil/accueil.php");
        exit();
    } else {
        // Affichage d'un message d'erreur si les identifiants sont incorrects
        echo "<p style='color:red;'>Nom d'utilisateur ou mot de passe incorrect.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="connexion.css">
</head>
<body>
    <div class="container">
        <h2>Connexion</h2>
        <form method="POST" action="connexion.php">
            <div class="input-group">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="connexion-btn">Se connecter</button>
        </form>
        <p>Pas encore de compte ? <a href="../Formulaire/formulaire.php">S'inscrire</a></p>
        
        <!-- Bouton de retour à la page d'accueil -->
        <button class="back-btn" onclick="window.location.href='../Accueil/accueil.php';">Retour à la page d'accueil</button>
    </div>
</body>
</html>
