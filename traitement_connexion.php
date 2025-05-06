<?php
// -------------------------
// SECTION PHP : Traitement de la connexion
// -------------------------
session_start();

// Récupérer les données du formulaire
$identifier = $_POST['identifier'] ?? '';
$password = $_POST['password'] ?? '';

// Paramètres de connexion à la base de données
$host = 'localhost';
$dbname = 'hotel';
$dbuser = 'root';
$dbpass = 'root';

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Rechercher l'utilisateur par nom d'utilisateur ou email
$stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE username = :identifier OR email = :identifier");
$stmt->execute([':identifier' => $identifier]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    // Connexion réussie : stocker les informations de l'utilisateur en session
    $_SESSION['username'] = $user['username'];
    $_SESSION['email'] = $user['email'];
    
    // Afficher une pop-up de succès et rediriger vers la page d'accueil
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script>
      document.addEventListener('DOMContentLoaded', function(){
         Swal.fire({
            icon: 'success',
            title: 'Connexion réussie !',
            text: 'Bienvenue, " . htmlspecialchars($user['username']) . "',
            confirmButtonText: 'Continuer'
         }).then((result) => {
            window.location.href = '../Accueil/accueil.php';
         });
      });
    </script>";
} else {
    // Échec de la connexion : afficher une pop-up d'erreur et rediriger vers la page de connexion
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script>
      document.addEventListener('DOMContentLoaded', function(){
         Swal.fire({
            icon: 'error',
            title: 'Erreur de connexion',
            text: 'Identifiant ou mot de passe incorrect.',
            confirmButtonText: 'Réessayer'
         }).then((result) => {
            window.location.href = 'connexion.html';
         });
      });
    </script>";
}
?>
