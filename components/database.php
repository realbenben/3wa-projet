<?php

// 1. Se connecter à la base de données dans laquelle on souhaite récupérer les informations
// Premier paramètre : DSN (Data Source Name) => informations de connexion au serveur mysql
// Deuxième paramètre : nom d'utilisateur de la base de données
// Troisième paramètre : mot de passe de l'utilisateur
// Quatrième paramètre facultatif : tableau avec les options de configuration
$connection = new PDO(
    'mysql:host=home.3wa.io:3307;dbname=live-38_benoitpat_PizzaMamma;charset=UTF8', 
    'benoitpat', 
    '29c1da6fMjMwYmJhNzU3ZGIyZjQ1MjEzZmMwZjg32f9f8a51', [
        // On active les erreurs lors des requêtes
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        // On récupère les résultats dans un tableau associatif uniquement
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);

$sql = $connection->prepare('SELECT name, price
                    FROM products
                    ORDER BY id');
                    
// 3. Exécuter la requête
$sql->execute();

// 4. Récupérer les résultats de la requête exécutée et les stocker dans une variable
$products = $sql->fetchAll();

var_dump($products);

?>