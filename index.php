<html class="no-js" lang="es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" href="html-reset.css" type="text/css" />
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>

    <body>
        <?php include 'header.php'; ?>

        <?php include 'content-home.php'; ?>

        <?php include 'footer.php'; ?>

      <script>
        window.onload = function() {
          let scrollpos = window.scrollY;
          const header = document.querySelector("header");
          const header_height = header.offsetHeight + 300;
        
          const add_class_on_scroll = () => header.classList.add("fade-in");
          const remove_class_on_scroll = () => header.classList.remove("fade-in");
        
          window.addEventListener('scroll', function() { 
            scrollpos = window.scrollY;
        
            if (scrollpos >= header_height) { add_class_on_scroll(); }
            else { remove_class_on_scroll(); }
          });

          //////////////////////////////////////////

          const form  = document.getElementsByTagName('form')[0];
          const email = document.getElementById("email");
          const emailError = document.querySelector('#email + span.error');

          const nombre = document.getElementById("nombre");
          const nombreError = document.querySelector('#nombre + span.error');

          const apellido = document.getElementById("apellido");
          const apellidoError = document.querySelector('#apellido + span.error');

          const telefono = document.getElementById("telefono");
          const telefonoError = document.querySelector('#telefono + span.error');

          const defaultcheck = document.getElementById("defaultCheck1");
          const defaultcheckError = document.querySelector('#defaultCheck1 + span.error');

          email.addEventListener("input", function (event) {
            if (email.validity.valid) {
              emailError.innerHTML = '';
              emailError.className = 'error';
            } else {
              showError();
            }
          });

          nombre.addEventListener("input", function (event) {
            if (nombre.validity.valid) {
              nombreError.innerHTML = '';
              nombreError.className = 'error';
            } else {
              showError();
            }
          });

          apellido.addEventListener("input", function (event) {
            if (apellido.validity.valid) {
              apellidoError.innerHTML = '';
              apellidoError.className = 'error';
            } else {
              showError();
            }
          });

          telefono.addEventListener("input", function (event) {
            if (telefono.validity.valid) {
              telefonoError.innerHTML = '';
              telefonoError.className = 'error';
            } else {
              showError();
            }
          });

          defaultcheck.addEventListener("input", function (event) {
            if (defaultcheck) {
              defaultcheckError.innerHTML = '';
              defaultcheckError.className = 'error';
            } else {
              showError();
            }
          });



          form.addEventListener('submit', function (event) {      
            if(!email.validity.valid || !nombre.validity.valid || !apellido.validity.valid || !telefono.validity.valid || !defaultcheck) {
              showError();
              event.preventDefault();
            }
          });
          function showError() {
            if(email.validity.valueMissing) {
              emailError.textContent = 'Debe introducir una dirección de correo electrónico.';
            } else if(email.validity.typeMismatch) {
              emailError.textContent = 'El valor introducido debe ser una dirección de correo electrónico.';
            }
            emailError.className = 'error activo';

            //////////////////////////////////////////
            if(nombre.validity.valueMissing) {
              nombreError.textContent = 'Debe introducir un nombre.';
            } else if(nombre.validity.typeMismatch) {
              nombreError.textContent = 'El valor introducido debe ser un nombre.';
            }
            nombreError.className = 'error activo';

            //////////////////////////////////////////
            if(telefono.validity.valueMissing) {
              telefonoError.textContent = 'Debe introducir un teléfono válido.';
            } else if(telefono.validity.typeMismatch) {
              telefonoError.textContent = 'El valor introducido debe ser el teléfono.';
            }
            telefonoError.className = 'error activo';

            //////////////////////////////////////////
            if(apellido.validity.valueMissing) {
              apellidoError.textContent = 'Debe introducir un apellido.';
            } else if(apellido.validity.typeMismatch) {
              apellidoError.textContent = 'El valor introducido debe ser el apellido.';
            }
            apellidoError.className = 'error activo';

            //////////////////////////////////////////
            if(!defaultcheck.checked) {
              defaultcheckError.textContent = 'Debe marcar la casilla.';
            }
            defaultcheckError.className = 'error activo';
          }

        }
      </script>
    </body>

</html>