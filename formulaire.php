<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoutyGo : Formulaire d'inscription</title>
    <link rel="stylesheet" href="formulaire.css">
</head>

<body>

    <h1><strong>Inscrivez-vous dès maintenant !</strong></h1>

    <div class="signup-container">
        <h2>Inscription</h2>
        <form id="signup-form" method="POST" action="accuse_reception.php">
            <div class="form-group">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" placeholder="Votre nom" required>
                <span class="error" id="username-error"></span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Votre email" required>
                <span class="error" id="email-error"></span>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Votre mot de passe" required>
                <span class="error" id="password-error"></span>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirmer le mot de passe</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirmer le mot de passe" required>
                <span class="error" id="confirm-password-error"></span>
            </div>
            <button type="submit" class="cta">S'inscrire</button>
        </form>

        <p class="login-link">Déjà un compte ? <a href="../Connexion/connexion.php">Connectez-vous</a></p>

        <button class="back-btn" onclick="window.location.href='http://localhost/RoutyGo/Accueil/accueil.php';">Retour à la page d'accueil</button>
    </div>

    <script src="formulaire.js"></script>

</body>

</html>
