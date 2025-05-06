<?php
session_start();

// Vérifie que l'utilisateur est connecté
if (!isset($_SESSION['user_id'], $_SESSION['username'])) {
    header('Location: connexion.php');
    exit;
}

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

// Récupération des infos utilisateur
$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['username'];

// Insertion dans la table reservations
$stmt = $pdo->prepare("INSERT INTO reservations (user_id, username, created_at, updated_at) 
                       VALUES (:user_id, :username, NOW(), NOW())");

$stmt->execute([
    'user_id' => $user_id,
    'username' => $user_name
]);

// Redirige vers une confirmation
header('Location: confirmation.php');
exit;
?>
