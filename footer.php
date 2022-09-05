<?php include 'common/_settings.php';

echo'
<footer>
   <div class="row">
      <div class="col col-3 col-s-6">';
        foreach ($footer_1_menu as $key => $value)
        {
          echo '
          <div class="footer-item pxy">
            <p><a href="'.$key.'">' . $value . '</a></p>
          </div>
        ';
        }
      echo '
      </div>
      <div class="col col-3 col-s-6">';
        foreach ($footer_2_menu as $key => $value)
        {
          echo '
          <div class="footer-item pxy">
            <p><a href="'.$key.'">' . $value . '</a></p>
          </div>
        ';
        }
      echo '
      </div>
      <div class="col col-3 col-s-6">';
        foreach ($footer_3_menu as $key => $value)
        {
          echo '
          <div class="footer-item pxy">
            <p><a href="'.$key.'">' . $value . '</a></p>
          </div>
        ';
        }
      echo '
      </div>
      <div class="col col-3 col-s-6">';
        foreach ($footer_4_menu as $key => $value)
        {
          echo '
          <div class="footer-item pxy">
            <p><a href="'.$key.'">' . $value . '</a></p>
          </div>
        ';
        }
      echo '
      </div>
      <div class="col col-3 col-s-6">';
        foreach ($footer_5_menu as $key => $value)
        {
          echo '
          <div class="footer-item pxy">
            <p><a href="'.$key.'">' . $value . '</a></p>
          </div>
        ';
        }
      echo '
      </div>
      <div class="col col-3 col-s-6">';
        foreach ($footer_6_menu as $key => $value)
        {
          echo '
          <div class="footer-item pxy">
            <p><a href="'.$key.'">' . $value . '</a></p>
          </div>
        ';
        }
      echo '
      </div>
      <div class="col col-3 col-s-6">';
        foreach ($footer_7_menu as $key => $value)
        {
          echo '
          <div class="footer-item pxy">
            <p><a href="'.$key.'">' . $value . '</a></p>
          </div>
        ';
        }
      echo '
      </div>
    </div>
    <div class="row p-2">
      <div class="col col-12 flex">
        <div class="line"></div>
        <div class="logo-footer">
          <img class="logo fluide" src="/images/logo.png" alt="logo white"/>
        </div>
        <div class="line"></div>
      </div>
    </div>
    <div class="row p-1">
        <div class="col col-12">
            <div class="menu-footer">
                <ul>';
            foreach ($footer_nav_menu as $key => $value)
            {
              echo '<li><a href="'.$key.'">' . $value . '</a></li>';
            }
            echo '
                </ul>
            </div>
        </div>
    </div>
    <div class="row p-2">
        <div class="col col-12">
            <div class="disclaimer">
              <p>Copyright© 2021 iEstrategic</p>';
          foreach ($footer_disclaimer_menu as $key => $value)
          {
            echo '<p><a href="'.$key.'" target="_blank">' . $value . '</a></p>';
          }
          echo '
          <p>Website by <a href="https://www.iestrategic.es/" target="_blank">iEstrategic</a></p>
            </div>
        </div>
    </div>
   

</footer>';

?>