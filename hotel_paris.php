<?php
session_start();

// Connexion à la base de données
$host = 'localhost'; // ou votre serveur
$dbname = 'hotel';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    exit;
}

// L'ID de l'hôtel Paris
$hotel_id = 1;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['rating'], $_POST['comment'])) {
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    // Ajouter l'avis à la base de données
    $stmt = $pdo->prepare("INSERT INTO avis (hotel_id, rating, comment, created_at, updated_at) 
                           VALUES (:hotel_id, :rating, :comment, NOW(), NOW())");
    $stmt->execute(['hotel_id' => $hotel_id, 'rating' => $rating, 'comment' => $comment]);
}

// Affichage des avis
$stmt = $pdo->prepare("SELECT * FROM avis WHERE hotel_id = :hotel_id");
$stmt->execute(['hotel_id' => $hotel_id]);
$avis_list = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hôtel à Paris - RoutyGo</title>
    <link rel="stylesheet" href="hotel_paris.css">
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
        <div class="auth-buttons">
            <a href="connexion.php"><button>Se connecter</button></a>
            <a href="inscription.php"><button>S'inscrire</button></a>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <h2>Bienvenue à l'Hôtel à Paris</h2>
        <p>Cet hôtel offre un cadre exceptionnel pour votre séjour à Paris. Profitez d'une vue imprenable sur la ville, d'un service haut de gamme et d'un confort incomparable.</p>

        <div class="reservation">
    <h3>Réservez votre chambre</h3>
    <a href="reserver.php"><button>Réserver maintenant</button></a>
</div>


        <!-- Avis -->
        <h3>Donnez votre avis sur l'hôtel</h3>
        <form method="POST">
            <label for="rating">Votre note :</label>
            <select name="rating" id="rating" required>
                <option value="1">1 étoile</option>
                <option value="2">2 étoiles</option>
                <option value="3">3 étoiles</option>
                <option value="4">4 étoiles</option>
                <option value="5">5 étoiles</option>
            </select><br>

            <label for="comment">Votre commentaire :</label><br>
            <textarea name="comment" id="comment" required></textarea><br>

            <button type="submit">Envoyer votre avis</button>
        </form>

        <!-- Affichage des avis -->
        <div class="avis-list">
            <h4>Avis des visiteurs</h4>
            <?php
            foreach ($avis_list as $avis) {
                echo "<p><strong>Commentaire:</strong> " . htmlspecialchars($avis['comment']) . " (Note: " . htmlspecialchars($avis['rating']) . " étoiles)</p>";
            }
            ?>
        </div>

        <div class="back-button-container">
            <a href="destinations.php"><button>Retour aux Destinations</button></a>
        </div>
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