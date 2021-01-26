<?php
// used for the connection with dadabase
function dbConnection(): PDO
{
    return new PDO(
    'mysql:host=home.3wa.io:3307;dbname=live-38_benoitpat_PizzaMamma;charset=UTF8', 
    'benoitpat', 
    '29c1da6fMjMwYmJhNzU3ZGIyZjQ1MjEzZmMwZjg32f9f8a51', [
        // On active les erreurs lors des requêtes
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        // On récupère les résultats dans un tableau associatif uniquement
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );

}


?>