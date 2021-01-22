<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>

<h3> Les bases rouges : sauce tomate et mozzarella Fior di latte </h3>
<ul>

<?php

$products = [
  [
    'id' => 1,
    'type' => 'pizza',
    'title' => 'Regina',
    'price' => 11.4,
    'ingredients' => 'Tomate, mozzarella, champignon, jambon blanc, olives'
  ],
  [
    'id' => 2,
    'type' => 'pizza',
    'title' => 'Romana',
    'price' => 9.80,
    'ingredients' => 'Tomate, mozzarella, anchois, câpres à queue, olives'      
      ],
  [
    'id' => 3,
    'type' => 'pizza',
    'title' => 'Daniela',
    'price' => 13.80,
    'ingredients' => 'Tomate, mozzarella, San Daniel 18 mois après cuisson, copeaux de parmigiano, pousses d\'épinards'      
      ],
  [
    'id' => 4,
    'type' => 'pizza',
    'title' => 'Colonnata',
    'price' => 13.80,
    'ingredients' => 'Tomate, mozzarella, speck légèrement fumé, roquette et lard de Colonnata après cuisson'      
      ],
  [
    'id' => 5,
    'type' => 'pizza',
    'title' => 'Napolitaine',
    'price' => 9.80,
    'ingredients' => 'Tomate, mozzarella, basilic frais'      
      ],
  [
    'id' => 6,
    'type' => 'pizza',
    'title' => 'Diavola',
    'price' => 11.80,
    'ingredients' => 'Tomate, mozzarella, champignons, schiacciata piquante'      
      ],
  [
    'id' => 7,
    'type' => 'pizza',
    'title' => 'Salmone',
    'price' => 14.20,
    'ingredients' => 'sauce parmigiano a l\'aneth, saumon fumé par nos soins, tomates cerises et pousses d\'épinards'      
      ],
  [
    'id' => 8,
    'type' => 'pizza',
    'title' => 'Melanos',
    'price' => 15.80,
    'ingredients' => 'Sauce parmigiano à la truffe, jambon cuit Alfière à la truffe, roquette et parmigiano après cuisson'      
      ],
  [
    'id' => 9,
    'type' => 'pizza',
    'title' => '4 fromaggi',
    'price' => 14.20,
    'ingredients' => 'Sauce parmigiano, gorgonzola, taleggio, mozzarella, noix, tomates cerises et roquette'      
      ],
  [
    'id' => 10,
    'type' => 'pizza',
    'title' => 'Mortadella',
    'price' => 12.80,
    'ingredients' => 'Pesto, mozzarella, mortadelle de Bologne après cuisson, roquette et tomates confites'      
      ],
  [
    'id' => 11,
    'type' => 'pizza',
    'title' => 'La végétarienne',
    'price' => 11.80,
    'ingredients' => 'Pesto, légumes de saison cuits et en pickles, parmigiano'      
      ],
  //       [
  //   'id' => 12,
  //   'type' => 'dessert',
  //   'title' => 'Tiramisu',
  //   'price' => 6.00,
  //   'ingredients' =>       
  //     ],
  // [
  //   'id' => 13,
  //   'type' => 'dessert',
  //   'title' => '',
  //   'price' => ,
  //   'ingredients' => ''      
  //     ],
  // [
  //   'id' => 1,
  //   'type' => 'dessert',
  //   'title' => '',
  //   'price' => ,
  //   'ingredients' => ''      
  //     ],

];

foreach ($products as $product) {
    echo '<li>' . $product['title'] . ':  '. $product['price'] . ' €' . '</li>';
    echo '<li>' . $product['ingredients']  . '</li>';
    
}



?>


      
  </body>
</html>