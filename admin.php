<?php
session_start();

if (!isset($_SESSION['isAuthenticated']) || $_SESSION['isAuthenticated'] !== true) {
    die('Accès refusé.');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Admin</title>
    <style>
        body {
            background-color: #f4f4f4;
            text-align: center;
            padding-top: 50px;
        }
        h1 {
            color: #333;
        }
        img {
            width: 100px;
            cursor: pointer;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Bienvenue sur la Page Admin</h1>
    <p>Vous êtes connecté avec succès.</p>
    <form action="logout.php" method="post" style="display: inline;">
        <button type="submit" style="border: none; background: none;">
            <img src="image4.jpeg" alt="Déconnexion">
        </button>
    </form>
</body>
</html>