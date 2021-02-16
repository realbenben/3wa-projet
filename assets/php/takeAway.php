<?php

// call the db connection
    session_start();
    require_once 'connection.php';

// this page is used to do requests from database to post customer order
$db = dbConnection(); 
$sql = $db->prepare('SELECT type, name, price, ingredients
                    FROM products
                    ORDER BY id');
                    
// 3. Exécuter la requête
$sql->execute();

// 4. Récupérer les résultats de la requête exécutée et les stocker dans une variable
$products = $sql->fetchAll();
    $template = 'takeAway';

    var_dump($products);


foreach ($products as $product) {
    
     echo '<li>' . $product['name'] . ' ' . $product['price'] . '€ ' . '</li>';
};

?>