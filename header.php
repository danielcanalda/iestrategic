<?php include 'common/_settings.php'; 

echo'
<header>
    <nav class="full-width"><div class="row">

      <div class="site-menu col-10">
        <ul>
          <li><img class="logo fluide" src="/images/logo.png" alt="logo white"/></li>';
            foreach ($site_menu as $key => $value)
            {
              echo '<li><a href="'.$key.'">' . $value . '</a></li>';
            }
            echo '
        </ul>
      </div>
      <div class="nav-icons col-2">
        <ul>
          <li>'.$_iconSearch.'</li>
          <li>'.$_iconCart.'</li>
          <li>'.$_svg_user.'</li>
        </ul>
      </div>
    </div></nav>
</header>'

?>