<ul class="navbar">
  <?php

  $navlinks = array(
    array('title' => 'A propos', 'icon' => 'fa-store', 'href' => 'about.php'),
    array('title' => 'Menu', 'icon' => 'fa-pizza-slice', 'href' => 'card.php'),
    array('title' => 'Accès/Contact', 'icon' => 'fa-phone', 'href' => 'contact.php'),
    array('title' => 'emporter', 'icon' => 'fa-car', 'href' => 'login.php'),
    array('title' => 'gallerie', 'icon' => 'fa-image', 'href' => 'gals.php')
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
