<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// Vérifie que l'utilisateur est connecté
if (!isset($_SESSION['username'])) {
    echo "Vous devez être connecté pour accéder à cette page.";
    exit();
}

// Connexion à la base de données
$host = 'localhost';
$dbname = 'hotel';
$user = 'root';
$pass = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupération des informations de l'utilisateur connecté
    $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE username = :username");
    $stmt->execute(['username' => $_SESSION['username']]);
    $userData = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$userData) {
        echo "Utilisateur non trouvé.";
        exit();
    }

} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Espace</title>
    <link rel="stylesheet" href="accueil.css"> <!-- utilise le même style que les autres pages -->
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.jpg" alt="Logo RoutyGo" />
        </div>
        <h1 class="site-title">
            <a href="accueil.php">RoutyGo</a>
        </h1>
        <div class="auth-buttons">
            <a href="../Connexion/deconnexion.php"><button class="connexion">Se déconnecter</button></a>
        </div>
    </header>

    <main style="text-align: center; padding: 50px;">
        <h1>Bienvenue, <?php echo htmlspecialchars($userData['username']); ?> !</h1>
        <p>Email : <?php echo htmlspecialchars($userData['email']); ?></p>
    </main>

    <footer>
        <p>&copy; 2025 RoutyGo - Tous droits réservés</p>
    </footer>
</body>
</html>
