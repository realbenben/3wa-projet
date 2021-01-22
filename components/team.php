<div class="container">
    <div class="row">
        
        
          <?php

  $peoples = array(
    array('name' => 'Rob Hunt', 'skill' => ' pizzaiolo', 'image' => 'chef-1.jpg'),
    array('name' => 'Alex Brooke', 'skill' => 'Glacier', 'image' => 'chef-2.jpg'),
    array('name' => 'Andrew Pendrick', 'skill' => 'Sauce master', 'image' => 'chef-3.jpg')
  );

foreach ($peoples as $person) {
    echo '<div class="col">';
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