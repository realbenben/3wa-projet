<ul class="navbar">
  <?php

  $navlinks = array(
    array('title' => 'A propos', 'icon' => 'fa-store', 'href' => 'about.php'),
    array('title' => 'Menu', 'icon' => 'fa-pizza-slice', 'href' => 'menu.php'),
    array('title' => 'Contact', 'icon' => 'fa-phone', 'href' => 'contact.php'),
    array('title' => 'emporter', 'icon' => 'fa-car', 'href' => 'take-away.php')
  );

foreach ($navlinks as $link) {
    echo '<li class="navbar-label">';
      echo '<a class="navbar-link" href="' . $link['href'] . '">';
        echo '<i class="fas ' . $link['icon'] . '"></i>';
        echo '<div>' . $link['title'] . '</div>';
      echo '</a>';
    echo '</li>';
  }
  ?>
</ul>
