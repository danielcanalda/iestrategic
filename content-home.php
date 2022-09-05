<?php include 'common/_settings.php';

echo '
<main>
  <section id="banner" class="banner">
    <div class="row">
      <div class="col col-9">
        <h1>' . $top_image_section->title . '</h1>
        <p>' . $top_image_section->content . '</p>
      </div>
    </div>
  </section>
  <section id="featured" class="featured full-width">
    <div class="row">
      <div class="col">
    
      

    <div class="featured-wrap">
        <div class="featured-item featured-title">
            <img src="images/logo-icon.png" width="87" height="73" alt="logo icon">
            <h2><span>PRODUCTOS</span><br>DESTACADOS</h2>
        </div>';

        foreach ($first_section_pages as $array)
        {
            echo '
        <div class="featured-item">
          <div class="featured-image">
            <img class="fluide" src="' . $array['image'] . '" alt="' . $array['title'] . '"/>
          </div>
          <div class="featured-info">
            <h3>' . $array['title'] . '
            </h3>
            <p class="feature-description">' . substr($array['description'], 0, 100) . '...
            </p>
          </div>
        
         
        </div>
        ';
        }

echo '</div>
    </div></div>
  </section>

  <section id="banner-2" class="banner">
    <div class="row">
      <div class="col col-lg-7 col-md-6 col-center">
        <h2>' . $second_section->title . '</h2>
        <p>' . $second_section->content . '</p>
      </div>
      <div class="col col-lg-5 col-md-6">
        <div class="logos-wrap">';
         foreach ($second_section->logos as $image) {
            echo '<img src="'.$image.'" class="logos" alt="" />';
          }
        echo '
        </div>
      </div>
    </div>
  </section>
  <section id="products" class="products">
    <div class="row">
      <div class="col">
        <h3>PRODUCTOS MÁS VENDIDOS</h3>
      </div>
    </div>
    <div class="row">';

        foreach ($third_section_pages as $array)
        {
            echo '
        <div class="col col-4">
          <div class="product-item">
            <div class="product-image">
              <img class="fluide" src="' . $array['image'] . '" alt="' . $array['title'] . '"/>
            </div>
            <div class="product-info">
              <h4>' . $array['title'] . '
              </h4>
              <p class="featured-description">' . substr($array['description'], 0, 100) . '...
              </p>
            </div>
           
          </div>
        </div>
        ';
        }

    echo '
    </div>
  </section>
 <section id="featured" class="featured full-width">
    <div class="row">
      <div class="col">
        <div class="featured-cat-wrap">';

        foreach ($fourth_section_pages as $array)
        {
            echo '
        <div class="featured-cat-item">
          <div class="featured-cat-image">
             <div class="featured-cat-info">
            <h3>' . $array['title'] . '
            </h3>
          </div>
          </div>
        </div>
        ';
        }

  echo '</div>
      </div>
    </div>
 </section>
  <section id="contact" class="contact">
    <div class="row">
      <div class="col col-5">
        <div class="info">
          <h2>iEstrategic<br><span>Agencia de marketing digital</span></h2>
          <p>'.$_contact_section->address.'<br>'.$_contact_section->postal_code.' - '.$_contact_section->address_city.'<br>Trabaja con nosotros</p>
          <p>Ver en google maps</p>
          <p>'.$_contact_section->phone.'</p>
          <p>'.$_contact_section->email.'</p>
        </div>
      </div>
      <div class="col col-7">
        <div class="form-wrap">
          <p>'.$_contact_section->form_text.'</p>
          <form id="formulario" novalidate>
          <div class="inputs-wrap">
              <div class="form-group">
                <label>NOMBRE</label>
                <input id="nombre" name="first_name" type="text" required class="form-control">
                <span class="error" aria-live="polite"></span>
              </div>
              <div class="form-group">
                <label>APELLIDOS</label>
                <input id="apellido" name="second_name" type="text" required class="form-control">
                <span class="error" aria-live="polite"></span>
              </div>
              <div class="form-group">
                <label>TELÉFONO</label>
                <input id="telefono" name="phone" type="tel" required class="form-control" pattern="[0-9]{9}">
                <span class="error" aria-live="polite"></span>
              </div>
              <div class="form-group">
                <label>EMAIL</label>
                <input id="email" name="email" type="email" required class="form-control" pattern=".*@\w{2,}\.\w{2,}">
                <span class="error" aria-live="polite"></span>
              </div>
              <div class="form-group">
                <label>COMENTARIOS</label>
                <textarea id="comentarios" rows="6"></textarea>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input type="checkbox" id="defaultCheck1" required class="form-check-input">
                  <span class="error" aria-live="polite"></span>
                  <label for="defaultCheck1" class="form-check-label">
                    He leído y acepto 
                    <a href="" target="_blank">el aviso legal
                    </a>.
                  </label>
                </div>
                <button type="submit" class="btn">ENVIAR</button>

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

</main>
';

?>
