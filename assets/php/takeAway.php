<?php



// call the db connection
    session_start();
    require 'connection.php';

// this page is used to show pizza in takeway.phtml/affiche les pizza dans le template
$db = dbConnection(); 
$sql = $db->prepare('SELECT id, name, price
                    FROM products
                    WHERE type ="pizza"
                    ORDER BY id');
                    
// 3. execute request/Exécuter la requête
$sql->execute();

// 4. stock result request in a variable
//Récupérer les résultats de la requête exécutée et les stocker dans une variable
$pizzas = $sql->fetchAll();
// var_dump($pizzas);

$sql = $db->prepare('SELECT id, name, price
                    FROM products
                    WHERE type ="boisson"
                    ORDER BY id');


$sql->execute();
$drinks = $sql->fetchAll();



// if (! empty($_POST)) {
    
//     // Création de la commande dans la table orders
//     // Récupérer le numéro de la commande qui a été créée (avec pdo::lastInsertId)
//     // 2 requêtes pour créer les produits :
//     // 1 pour la pizza avec $_POST['foods']
//     // 1 pour la boisson avec $_POST['drinks']

//     $sql = $db->prepare('
//         INSERT INTO orders(id, customer-id, order)
//         VALUES (?, ?, ?)
//     ');
// }


?>