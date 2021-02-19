<div class="container">
    <div class="row">
      
          <?php

  $peoples = array(
    array('name' => 'Roberto Halania', 'skill' => ' pizzaiolo', 'image' => 'chef-1.jpg'),
    array('name' => 'Giovanni Cortano', 'skill' => 'Glacier', 'image' => 'chef-2.jpg'),
    array('name' => 'Massimo Pandrico', 'skill' => 'Sauce master', 'image' => 'chef-3.jpg')
  );

foreach ($peoples as $person) {
    echo '<div class="col card">';
      echo '<div class="card-team">';
        echo '<img class="card-team-image" src="assets/images/' . $person['image'] . '">';
        echo '<div class="card-team-content">';
          echo '<p>' . $person['name'] . '</p>';
          echo '<em>' . $person['skill'] . '</em>';
        echo '</div>';
      echo '</div>';
    echo '</div>';
  }
  ?>
        
    </div>
</div>