<?php
session_start();

// Connexion à la base de données
$host = 'localhost';
$dbname = 'hotel';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérification des données envoyées
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validation basique
    if (empty($name) || empty($email) || empty($message)) {
        $error = 'Tous les champs sont obligatoires.';
    } else {
        // Préparation et insertion du message dans la base de données
        $stmt = $pdo->prepare("INSERT INTO message (name, email, message, date_sent) 
                               VALUES (:name, :email, :message, NOW())");

        $stmt->execute([
            'name' => $name,
            'email' => $email,
            'message' => $message
        ]);

        // Message de confirmation
        $success = 'Votre message a bien été envoyé. Nous vous répondrons dans les plus brefs délais.';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous - RoutyGo</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <img src="logo.png" alt="RoutyGo Logo">
        </div>
        <div class="site-title">
            <h1>RoutyGo</h1>
        </div>
        <div class="slogan">
            <p>Explorez le monde, réservez vos destinations</p>
        </div>
        <nav>
            <ul>
                <li><a href="accueil.php">Accueil</a></li>
                <li><a href="destinations.php">Destinations</a></li>
                <li><a href="hotel_paris.php">Hôtel à Paris</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <h2>Contactez-nous</h2>
        <p>Si vous avez des questions ou des suggestions, n'hésitez pas à nous contacter en remplissant le formulaire ci-dessous.</p>

        <?php
        if (isset($error)) {
            echo "<p style='color: red;'>$error</p>";
        }
        if (isset($success)) {
            echo "<p style='color: green;'>$success</p>";
        }
        ?>

        <form action="contact.php" method="POST">
            <label for="name">Nom :</label>
            <input type="text" name="name" id="name" required><br><br>

            <label for="email">Email :</label>
            <input type="email" name="email" id="email" required><br><br>

            <label for="message">Message :</label><br>
            <textarea name="message" id="message" rows="5" required></textarea><br><br>

            <button type="submit">Envoyer le message</button>
        </form>
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>À propos</h3>
                <p>RoutyGo est votre compagnon idéal pour explorer les meilleures destinations touristiques.</p>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <ul>
                    <li><a href="contact.php">Nous contacter</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Suivez-nous</h3>
                <div class="social-icons">
                    <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
                    <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
                    <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 RoutyGo. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>
