<!doctype html>
<html lang="en">
  <head>
    <?php include("./components/head.php"); ?>
    <title>Menu du restaurant</title>
  </head>
  <body>
    <?php include("./components/header.php"); ?>
    <main class="container">
      <h1>Menu</h1>
      <div class="animation">
        <h2>Les Pizze</h2>
        <h3> Les bases rouges : sauce tomate et mozzarella Fior di latte </h3>
        <ul class ="menu">
          <?php
          $pizzaRedBase = [
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
          ];
          foreach ($pizzaRedBase as $pizza) {
          echo '<li>' . $pizza['title'] . ':  '. $pizza['price'] . ' €' . '</li>';
          echo '<li><em class="italic">' . $pizza['ingredients']  . '</em></li>';
          
          }
          ?>
        </ul>
      </div>
      <div class="animation">
        <h3>Les bases blanches : creme de parmesan et mozzarella Fior di latte</h3>
        <ul class="menu">
          <?php
          $pizzaGreenBase =[
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
          
          ];
          foreach ($pizzaGreenBase as $pizza) {
          echo '<li>' . $pizza['title'] . ':  '. $pizza['price'] . ' €' . '</li>';
          echo '<li><em class="italic">' . $pizza['ingredients']  . '</em></li>';
          
          }
          
          ?>
        </ul>
      </div>
      <div class="animation">
        <h3>Les bases vertes : pesto et mozzarella fior di latte</h3>
        <ul class="menu">
          <?php
          $pizzaWhiteBase =[
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
          
          ];
          foreach ($pizzaWhiteBase as $pizza) {
          echo '<li>' . $pizza['title'] . ' :  '. $pizza['price'] . ' €' . '</li>';
          echo '<li><em class="italic">' . $pizza['ingredients']  . '</em></li>';
          
          }
          ?>
        </ul>
      </div>
      <div class="animation">
        <h2>Les Desserts</h2>
        <ul class="menu">
          <?php
          $desserts =[
          [
          'id' =>12 ,
          'type' => 'dessert',
          'title' => 'Tiramisu',
          'price' => 6.00,
          ],
          [
          'id' => 13,
          'type' => 'dessert',
          'title' => 'Cheese cake citron ou vanille',
          'price' => 6.00,
          ],
          [
          'id' => 14,
          'type' => 'dessert',
          'title' => 'Panna cottaaux fruits exotiques',
          'price' => 6.00,
          ],
          [
          'id' => 15,
          'type' => 'dessert',
          'title' => 'Pizza sucréé pate à tartiner maison',
          'price' => 6.50,
          ],
          [
          'id' => 16,
          'type' => 'dessert',
          'title' => 'Baba flambé',
          'price' => 6.50,
          ],
          [
          'id' => 17,
          'type' => 'dessert',
          'title' => 'Café gourmand',
          'price' => 6.50,
          ],
          [
          'id' => 18,
          'type' => 'dessert',
          'title' => 'Thé gourmand',
          'price' => 6.50,
          ],
          [
          'id' => 19,
          'type' => 'dessert',
          'title' => 'Cassata sicilienne',
          'price' => 6.90,
          ],
          [
          'id' => 20,
          'type' => 'dessert',
          'title' => 'Tarte au citron meringuée à l\'italienne',
          'price' => 8.20,
          ],
          [
          'id' => 21,
          'type' => 'dessert',
          'title' => 'Cannoli à la vanille',
          'price' => 7.80,
          ],
          [
          'id' => 22,
          'type' => 'dessert',
          'title' => 'Gateau au chocolat et amandes',
          'price' => 7.50,
          ],
          ];
          foreach ($desserts as $dessert) {
          echo '<li>' . $dessert['title'] . ' :  '. $dessert['price'] . ' €' . '</li>';
          }
          ?>
        </ul>
      </div>
      <div class="animation">
        <h2>cocktails</h2>
        <ul class="boissons">
          <?php
          $coktails =[
          [
          'id' => 23,
          'type' => 'coktail',
          'title' => 'Spritz Aperol',
          'price' => 6.50,
          ],
          [
          'id' => 24,
          'type' => 'coktail',
          'title' => 'Spritz Bitter',
          'price' => 6.50,
          ],
          [
          'id' => 25,
          'type' => 'coktail',
          'title' => 'Spritz Lillet Rosé',
          'price' => 6.50,
          ],
          [
          'id' => 26,
          'type' => 'coktail',
          'title' => 'Bellini',
          'price' => 6.50,
          ],
          [
          'id' => 27,
          'type' => 'coktail',
          'title' => 'Négroni',
          'price' => 6.50,
          ],
          [
          'id' => 28,
          'type' => 'coktail',
          'title' => 'Americano',
          'price' => 7.50,
          ],
          
          ];
          foreach ($coktails as $coktail) {
          echo '<li>' . $coktail['title'] . ' :  '. $coktail['price'] . ' €' . '</li>';
          }
          ?>
        </ul>
      </div>
      <div class="animation">
        <h2>Les apéritifs</h2>
        <ul class="boissons">
          <?php
          $aperitifs=[
          [
          'id' => 29,
          'type' => 'aperitif',
          'title' => 'Martini rouge ou blanc',
          'quantity'=> 5,
          'price' => 3.50,
          ],
          [
          'id' => 30,
          'type' => 'aperitif',
          'title' => 'Muscat',
          'quantity'=> 5,
          'price' => 3.5,
          ],
          [
          'id' => 31,
          'type' => 'aperitif',
          'title' => 'Ricard',
          'quantity'=>4,
          'price' => 3.50,
          ],
          [
          'id' => 32,
          'type' => 'aperitif',
          'title' => 'Porto rouge ou blanc',
          'quantity'=>5,
          'price' => 3.50,
          ],
          [
          'id' => 33,
          'type' => 'aperitif',
          'title' => 'Ballantines',
          'quantity'=>4,
          'price' => 4.90,
          ],
          [
          'id' => 34,
          'type' => 'aperitif',
          'title' => 'Jack Danie’ls',
          'quantity'=>4,
          'price' => 6.90,
          ],
          [
          'id' => 35,
          'type' => 'aperitif',
          'title' => 'Oban',
          'quantity'=>4,
          'price' => 7.90,
          ],
          [
          'id' => 36,
          'type' => 'aperitif',
          'title' => 'Pisang/ Malibu',
          'quantity'=>4,
          'price' => 4.50,
          ],
          [
          'id' => 37,
          'type' => 'aperitif',
          'title' => 'Gin/ Vodka ',
          'quantity'=>4,
          'price' => 4.50,
          ],
          [
          'id' => 38,
          'type' => 'aperitif',
          'title' => 'Coupe de Champagne',
          'quantity'=>8,
          'price' => 8.50,
          ],
          
          ];
          foreach ($aperitifs as $aperitif) {
          echo '<li>' . $aperitif['title'] . ' :  '. $aperitif['price'] . ' €' . ' /' . $aperitif['quantity'] . ' cl' .  '</li>';
          }
          ?>
        </ul>
      </div>
      <div class="animation">
        <h2>les bières</h2>
        <ul class="boissons">
          <?php
          $beers = [
          [
          'id' => 39,
          'type' => 'biere',
          'title' => 'Jupiler',
          'quantity'=> 25,
          'price' => 2.90,
          ],
          [
          'id' => 40,
          'type' => 'biere',
          'title' => 'Leffe',
          'quantity'=> 25,
          'price' => 3.80,
          ],
          [
          'id' => 41,
          'type' => 'biere',
          'title' => 'Hoegaarden',
          'quantity'=> 25,
          'price' => 3.80,
          ],
          [
          'id' => 42,
          'type' => 'biere',
          'title' => 'Leffe Ruby',
          'quantity'=>25,
          'price' => 3.90,
          ],
          [
          'id' => 43,
          'type' => 'biere',
          'title' => 'Duvel',
          'quantity'=>33,
          'price' => 3.80,
          ],
          [
          'id' => 44,
          'type' => 'biere',
          'title' => 'Karmeliet',
          'quantity'=>33,
          'price' => 3.90,
          ],
          ];
          foreach ($beers as $beer) {
          echo '<li>' . $beer['title'] . ' :  '. $beer['price'] . ' €' . ' /' . $beer['quantity'] . ' cl' .  '</li>';
          }
          ?>
        </ul>
      </div>
      <div class="animation">
        <h2>Les softs</h2>
        <ul class="boissons">
          <?php
          $softs = [
          [
          'id' => 45,
          'type' => 'soft',
          'title' => 'Coca-Cola',
          'quantity'=>33,
          'price' => 3.30,
          ],
          [
          'id' => 46,
          'type' => 'soft',
          'title' => 'Coca-cola light',
          'quantity'=>33,
          'price' => 3.30,
          ],
          [
          'id' => 47,
          'type' => 'soft',
          'title' => 'Jus de fruits',
          'quantity'=>2.90,
          'price' => 25,
          ],
          [
          'id' => 48,
          'type' => 'soft',
          'title' => 'Nestea',
          'quantity'=>33,
          'price' => 3.30,
          ],
          [
          'id' => 49,
          'type' => 'soft',
          'title' => 'Orangina',
          'quantity'=>25,
          'price' => 3.30,
          ],
          [
          'id' => 50,
          'type' => 'soft',
          'title' => 'Oasis',
          'quantity'=>33,
          'price' => 3.30,
          ],
          [
          'id' => 51,
          'type' => 'soft',
          'title' => 'Sprite',
          'quantity'=>33,
          'price' => 3.30,
          ],
          ];
          foreach ($softs as $soft) {
          echo '<li>' . $soft['title'] . ' :  '. $soft['price'] . ' €' . ' /' . $soft['quantity'] . ' cl' .  '</li>';
          }
          ?>
        </ul>
      </div>
      <div class="animation">
        <h2>Les eaux</h2>
        <ul class="boissons">
          <?php
          $waters= [
          [
          'id' => 52,
          'type' => 'eau',
          'title' => 'Evian',
          'quantity'=>50,
          'price' => 3.90,
          ],
          [
          'id' => 53,
          'type' => 'eau',
          'title' => 'Badoit',
          'quantity'=>100,
          'price' => 4.90,
          ],
          [
          'id' => 54,
          'type' => 'eau',
          'title' => 'San pellegrino',
          'quantity'=>100,
          'price' => 4.90,
          ],
          ];
          foreach ($waters as $water) {
          echo '<li>' . $water['title'] . ' :  '. $water['price'] . ' €' . ' /' . $water['quantity'] . ' cl' .  '</li>';
          }
          ?>
        </ul>
      </div>
      <div class="animation">
        <h2>Les Boissons Chaudes</h2>
        <ul class="boissons">
          <?php
          $hotDrinks= [
          [
          'id' => 55,
          'type' => 'boisson chaude',
          'title' => 'Expresso',
          'price' => 2.00,
          ],
          [
          'id' => 56,
          'type' => 'boisson chaude',
          'title' => 'Double expresso',
          'price' => 2.90,
          ],
          [
          'id' => 57,
          'type' => 'boisson chaude',
          'title' => 'Expresso grans cru',
          'price' => 2.90,
          ],
          [
          'id' => 58,
          'type' => 'boisson chaude',
          'title' => 'Thé',
          'price' => 2.90,
          ],
          [
          'id' => 59,
          'type' => 'boisson chaude',
          'title' => 'Cappuccino ou Viennois',
          'price' => 3.20,
          ],
          ];
          foreach ($hotDrinks as $drink) {
          echo '<li>' . $drink['title'] . ' :  '. $drink['price'] . ' €' . '</li>';
          }
          ?>
          
        </ul>
      </div>
      
      
      
      <div class="section section-pink">
        <div class="container">
          <h2 class="text-xlarge">Rencontrez la team</h2>
          <?php include("./components/team.php"); ?>
        </div>
      </div>
      
      <?php include("./components/footer.php"); ?>
    </body>
  </html>