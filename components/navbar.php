<ul>
  <?php

  $navlinks = array(
    array('title' => 'A propos', 'icon' => 'fa-store', 'href' => 'about.php'),
    array('title' => 'Menu', 'icon' => 'fa-pizza-slice', 'href' => 'menu.php'),
    array('title' => 'Contact', 'icon' => 'fa-phone', 'href' => 'contact.php')
  );

foreach ($navlinks as $link) {
    echo '<li>';
      echo '<a href="' . $link['href'] . '">';
        echo '<i class="fas ' . $link['icon'] . '"></i>';
        echo '<div class="navbar-link">' . $link['title'] . '</div>';
      echo '</a>';
    echo '</li>';
  }
  ?>
</ul>
