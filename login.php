  <!DOCTYPE html>
  <html lang="es">
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Titulo del Sitio</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="DESCRIPCION DEL SITIO" />
      <meta name="keywords" content="PALABRAS CLAVER" />
      <meta name="author" content="luis alberto bernal fuentes" />

        <!-- Facebook and Twitter integration -->
      <meta property="og:title" content=""/>
      <meta property="og:image" content=""/>
      <meta property="og:url" content=""/>
      <meta property="og:site_name" content=""/>
      <meta property="og:description" content=""/>
      <meta name="twitter:title" content="" />
      <meta name="twitter:image" content="" />
      <meta name="twitter:url" content="" />

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="css/animate.css">
      <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
      <link rel="stylesheet" type="text/css" href="css/materialize.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">

      <!--normalizecss-->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
          <!--contenidoBODY-->

<div class="center">


<div class="had-container">

       <div class="parallax-container logueo">
        <div class="parallax" style="background-size: cover; height: 100%; width: 100%;" ><img src="img/kitchen.jpg"></div>
        <div class="row"><br>
          <div class="col m8 s8 offset-m2 offset-s2 center">
            <h4 class="truncate bg-card-user">
            <div class="row login">
              <h4 class="thin">Inicia sesión.</h4>
              <form class="col s12">
                <div class="row">
                   <div class="input-field col m12 s12">
                    <i class="material-icons iconis prefix">account_box</i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Nombre Usuario</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col m12 s12">
                    <i class="material-icons iconis prefix">enhanced_encryption</i>
                    <input id="password" type="password" class="validate">
                    <label for="password">Contraseña</label>
                  </div>
                </div>
                <div class="row">
                  <button class="btn waves-effect waves-light" type="submit" name="action">Iniciar sesión!</button>
                </div>
              </form>
            </div>
            </h4>
            <h3 class="thin"><a href="registrouser.php" class="white-text">Registrate</a></h3>
          </div>
        </div>
      </div>
    </div>
    
    </div> <!-- fin del .container -->







        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="">Footer Content</h5>
                <p class=" thin">Happy Lunches Service lo invita a contactarnos por los diferentes medios de comunicacion que colocamos a su disposición:</p>
                <ul class="">
                  <li class="thin">Celular. 922126906</li>
                  <li class="thin">Tel: 6053573 - 6053577</li>
                  <li class="thin">Whatsapp: +51 922-126-906</li>
                  <li class="thin">info@happylunchesservice.com</li>
                  <li class="thin">Horario: Lun - Vier 8:00 am - 4:00 pm</li>
                  <li class="thin">Lima - Perú</li>
                </ul>
              </div>
              <div class="col l6 s12">

                <img src="img/logo.jpg" class="responsive-img" style="width: 70%; margin: -10px 124px 0px;">
            
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container grey-text">
            © 2017-2018 Happy Lunches Service
            <a class=" text-lighten-4 right" href="update.pe">Update.pe</a>
            </div>
          </div>
        </footer>


</div>

          <!--contenidoBODY-->
                <!--Import jQuery before materialize.js-->
                <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                <script type="text/javascript" src="js/materialize.min.js"></script>
                  <script type="text/javascript" src="js/materialize.js"></script>

                <script type="text/javascript">
                $(document).ready(function(){
                      $('.button-collapse').sideNav({
                        menuWidth: 300, // Default is 300
                        edge: 'left', // Choose the horizontal origin
                        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                        draggable: true, // Choose whether you can drag to open on touch screens,
                        onOpen: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is opened
                        onClose: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
                      }
                    );
                        $('.parallax').parallax();
                    });
                </script>
    </body>
  </html>