<?php

session_start();

require 'assets/app_php/connection.php';

if (empty($_POST)) {
    // Affichage du formulaire
    $template = 'login';
    require 'login.phtml';
} else {
    // On essaie de connecter l'utilisateur
    $db = dbConnection();
    
    $sql = $db->prepare('
        SELECT email, password
        FROM customer
        WHERE email = ?
    ');
    
    $sql->execute([
        $_POST['email']
    ]);
    
    $user = $sql->fetch();
    
    // Cas : l'email renseigné n'a pas été trouvé
    if (empty($user)) {
        
    } else {
        // L'email a été trouvé, on a récupéré les informations de l'utilisateur
        // On vérifie si le mot de passe correspond bien à l'email tapé
        
        if (password_verify($_POST['password'], $user['password'])) {
            // Le mot de passe correspond bien
            // Connecter l'utilisateur : on enregistre ses informations dans la session
            $_SESSION['auth'] = [
                'id' => $user['id'],
                'username' => $user['username'],
                'email' => $user['email'],
            ];
        } else {
            // Erreur de mot de passe
        }
    }
    
    redirect('./about.php');
}