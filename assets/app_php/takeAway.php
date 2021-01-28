<?php

// call the db connection
require 'connection.php';
$connection = dbConnection();

// this page is used to do requests from database to post customer order

$sql = $connection->prepare('SELECT type, name, price, ingredients
                    FROM products
                    ORDER BY id');
                    
// 3. Exécuter la requête
$sql->execute();

// 4. Récupérer les résultats de la requête exécutée et les stocker dans une variable
$products = $sql->fetchAll();

var_dump($products);

?>