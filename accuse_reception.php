<?php 
// -------------------------
// SECTION PHP : Traitement du formulaire
// -------------------------

// Récupérer les données envoyées par le formulaire via la méthode POST
$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$confirmPassword = $_POST['confirm-password'] ?? '';

// Vérifier que le mot de passe et sa confirmation sont identiques
$passwordMatch = ($password === $confirmPassword);

// Paramètres de connexion à la base de données
$host = 'localhost';
$dbname = 'hotel';
$dbuser = 'root'; 
$dbpass = 'root'; 

// Connexion à la base de données via PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbuser, $dbpass);
    // Configuration pour afficher les erreurs de PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // En cas d'erreur de connexion, arrêter le script et afficher un message
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Initialiser un tableau pour stocker d'éventuelles erreurs
$errors = [];

// Vérifier si les mots de passe ne correspondent pas
if (!$passwordMatch) {
    $errors[] = "Les mots de passe ne correspondent pas.";
}

if ($passwordMatch) {
    // Vérifier si le nom d'utilisateur existe déjà dans la base de données
    $stmt = $pdo->prepare("SELECT id FROM utilisateurs WHERE username = :username");
    $stmt->execute([':username' => $username]);
    if ($stmt->rowCount() > 0) {
        $errors[] = "Le nom d'utilisateur est déjà utilisé.";
    }

    // Vérifier si l'email existe déjà dans la base de données
    $stmt = $pdo->prepare("SELECT id FROM utilisateurs WHERE email = :email");
    $stmt->execute([':email' => $email]);
    if ($stmt->rowCount() > 0) {
        $errors[] = "L'email est déjà utilisé.";
    }

    // S'il n'y a pas d'erreurs, procéder à l'insertion des données dans la table "utilisateurs"
    if (empty($errors)) {
        // Hacher le mot de passe pour améliorer la sécurité avant de le stocker
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
        // Préparer la requête d'insertion
        $query = "INSERT INTO utilisateurs (username, email, password, created_at, updated_at)
                  VALUES (:username, :email, :password, NOW(), NOW())";
        $stmt = $pdo->prepare($query);
    
        try {
            // Exécuter la requête avec les valeurs correspondantes
            $stmt->execute([
                ':username' => $username,
                ':email'    => $email,
                ':password' => $hashedPassword
            ]);
        } catch(PDOException $e) {
            // En cas d'erreur d'insertion, ajouter l'erreur au tableau des erreurs
            $errors[] = "Erreur lors de l'insertion des données : " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <!-- -------------------------
       SECTION HTML : En-tête de la page
       ------------------------- -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RoutyGo : Confirmation d'inscription</title>
  <!-- Inclusion de la bibliothèque SweetAlert2 pour les pop-up élégants -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <!-- -------------------------
       SECTION JAVASCRIPT : Affichage du pop-up
       ------------------------- -->
  <script>
  // On attend que le DOM soit complètement chargé
  document.addEventListener("DOMContentLoaded", function() {
    <?php if (!empty($errors)): ?>
      // Si des erreurs existent, afficher une pop-up d'erreur avec SweetAlert2
      Swal.fire({
        icon: 'error',
        title: 'Erreur lors de l\'inscription',
        // Afficher les erreurs dans la pop-up, chaque erreur sur une nouvelle ligne
        html: '<?php echo implode("<br>", array_map("htmlspecialchars", $errors)); ?>',
        confirmButtonText: 'Retour'
      }).then((result) => {
        // Rediriger vers la page d'accueil après la fermeture du pop-up
        window.location.href = 'http://localhost/RoutyGo/Accueil/accueil.php';
      });
    <?php else: ?>
      // Sinon, si l'inscription a réussi, afficher une pop-up de confirmation
      Swal.fire({
        icon: 'success',
        title: 'Inscription confirmée !',
        html: 'Nom d\'utilisateur : <?= htmlspecialchars($username) ?><br>Email : <?= htmlspecialchars($email) ?>',
        confirmButtonText: 'Retour à l\'accueil'
      }).then((result) => {
        // Rediriger vers la page d'accueil après la fermeture du pop-up
        window.location.href = 'http://localhost/RoutyGo/Accueil/accueil.php';
      });
    <?php endif; ?>
  });
  </script>
</body>
</html>
