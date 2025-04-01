<?php
// Récupérer les données envoyées par le formulaire
$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$confirmPassword = $_POST['confirm-password'] ?? '';

// Vérifier si le mot de passe et la confirmation sont identiques
$passwordMatch = ($password === $confirmPassword) ? true : false;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoutyGo : Confirmation d'inscription</title>
    <style>
        /* styles.css pour la page d'inscription confirmée */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            background: url('background_confirmation.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .confirmation-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            border-radius: 10px;
            text-align: center;
        }

        h1 {
            color: #4CAF50;
            margin-bottom: 20px;
            font-size: 32px;
            font-weight: bold;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.7);
        }

        p {
            font-size: 18px;
            margin: 10px 0;
            color: #333;
        }

        .btn {
            margin-top: 20px;
            padding: 15px;
            background-color: #4CAF50;
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-weight: bold;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .btn:active {
            transform: scale(0.98);
        }
    </style>
</head>
<body>

    <div class="confirmation-container">
        <h1>Inscription confirmée !</h1>

        <?php if ($passwordMatch): ?>
            <p><strong>Nom d'utilisateur :</strong> <?= htmlspecialchars($username) ?></p>
            <p><strong>Email :</strong> <?= htmlspecialchars($email) ?></p>
            <p><strong>Mot de passe :</strong> <?= str_repeat('*', strlen($password)) ?></p>
            <p><strong>Confirmation du mot de passe :</strong> <?= str_repeat('*', strlen($confirmPassword)) ?></p>
        <?php else: ?>
            <p><strong>Erreur :</strong> Les mots de passe ne correspondent pas.</p>
        <?php endif; ?>

        <button class="btn" onclick="window.location.href='http://localhost/RoutyGo/Accueil/accueil.html';">Retour à la page d'accueil</button>
    </div>

</body>
</html>
