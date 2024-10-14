<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $correctUsername = 'admin';
    $correctPassword = 'admin';

    // Vérifier les identifiants
    if ($username === $correctUsername && $password === $correctPassword) {
        $_SESSION['isAuthenticated'] = true;
        
        // Rediriger vers la page admin.php
        header('Location: admin.php');
        exit;
    } else {
        echo 'Identifiants incorrects.';
    }
}
?>