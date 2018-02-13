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

      <!--jqueryhideshow-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>-->
      <link rel="stylesheet" type="text/css" href="css/animate.css">
      <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
      <link rel="stylesheet" type="text/css" href="css/materialize.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">

      <!--normalizecss-->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


      <!--fontawesome fuentes-->
      <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


    </head>

<body>
<!--contenidoBODY-->
<!--mnuresponsive-->
  <ul id="slide-out" class="side-nav">
    <li><div class="user-view">
      <div class="background bgcolor" >

      </div>
       <a href="#!user"><i class="material-icons grande" style="font-size: 72px;">supervisor_account</i></a>
       <a href="#!name"><span class="white-text name">Nombre Padre</span></a><a href="">Logout</a>
       <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div>
    </li>
       <li class="thin"><a href="movil/menu.php">Menus</a></li>
              <ul class="collapsible collapsible-accordion">
                <li>
                  <a class="collapsible-header thin">Mis hijos <i class="material-icons">arrow_drop_down</i></a>
                  <div class="collapsible-body">
                    <ul>
                          <li class="thin"><a href="#test2">Alan</a></li>
                          <li class="thin"><a href="#test3">Gionella</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            <li class="thin"><a href="#test4">Agregar Hijo</a></li>
            <li class="thin"><a href="#test5">Crear Menus</a></li>
        <li class="thin"><a href="#test6">Agregar Colegio</a></li>
  </ul>


<div class="viewmovil">
  <nav class="bgcolor">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right ">
        <li><a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a></li>

      </ul>
    </div>
  </nav>
</div>
<!--menunormal-->



<div id="container">

  <div id="menu">

    <ul id="slide-out" class="side-nav fixed tabs">
      <li><div class="user-view">
            <div class="background bgcolor">
                
              </div>
              <a href="#!user"><i class="material-icons grande" style="font-size: 72px;">supervisor_account</i></a>
              <a href="#!name"><span class="white-text name">Nombre Padre</span></a><a href="">Logout</a>
              <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
            </div>
      </li>
      <li class="thin"><a href="#test1">Menus</a></li>
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header thin">Mis hijos <i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                    <li class="thin"><a href="#test2">Alan</a></li>
                    <li class="thin"><a href="#test3">Gionella</a></li>
              </ul>
            </div>
          </li>
        </ul>
      <li class="thin"><a href="#test4">Agregar Hijo</a></li>
      <li class="thin"><a href="#test5">Crear Menus</a></li>
       <li class="thin"><a href="#test6">Agregar Colegio</a></li>
       <li class="thin"><a href="#test7">Pedidos</a></li>
    </ul>
  </div>

<!--
======================================================================
==                                                                  ==
==                AQUI INICIA LA SECCION DE MENUS                   ==
==                                                                  ==
======================================================================
-->

  <div id="test1" style="display: none;">

  <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">room_service</i>Lunes - 12-12-12</div>
      <div class="collapsible-body">

        <div class="row">
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="http://materializecss.com/images/office.jpg">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>
                  <br>
                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>

                 
                  <p class="btn chip">Alan</p>
                  <p class="btn chip">Gionella</p>
                  <p class="btn chip">Raul</p>
                </div>
            </div>
          </div>
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="http://materializecss.com/images/office.jpg">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>
                  <p class="btn chip">Alan</p>
                  <p class="btn chip">Gionella</p>
                  <p class="btn chip">Raul</p>
                </div>
            </div>
          </div>
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="http://materializecss.com/images/office.jpg">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>
                  <p class="btn chip">Alan</p>
                  <p class="btn chip">Gionella</p>
                  <p class="btn chip">Raul</p>
                </div>
            </div>
          </div>
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="http://materializecss.com/images/office.jpg">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>
                  <p class="btn chip">Alan</p>
                  <p class="btn chip">Gionella</p>
                  <p class="btn chip">Raul</p>
                </div>
            </div>
          </div>
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="http://materializecss.com/images/office.jpg">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>
                  <p class="btn chip">Alan</p>
                  <p class="btn chip">Gionella</p>
                  <p class="btn chip">Raul</p>
                </div>
            </div>
          </div>

        </div>
      </div>
    </li>
    

  </ul>
</div>
<!--
======================================================================
==                                                                  ==
==                AQUI TERMINA LA SECCION DE MENUS                   ==
==                                                                  ==
======================================================================
-->
<!--
======================================================================
==                                                                  ==
==                AQUI INICIA LA SECCION DE HIJOS                   ==
==                                                                  ==
======================================================================
-->
  <div id="test2" style="display: none;">Mi Hijo Alan</div>
  <!--
======================================================================
==                                                                  ==
==                AQUI TERMINA LA SECCION DE MENUS                   ==
==                                                                  ==
======================================================================
-->
  <div id="test3" style="display: none;">Mi Hija Gionella</div>
  <div id="test4" style="display: none;">Registar hijo aqui formulario</div>
<!--
======================================================================
==                                                                  ==
==           AQUI INICIA LA SECCION DE REGISTRO MENU                ==
==                                                                  ==
======================================================================
-->
<div id="test5" style="display: none;">

      <div class="row">
        <h3 class="thin">Agregar Menu</h3>
        <div class="col s12 m6 l6" align="left">
            <form action="#">
                   <div class="input-field">
                    <input id="icon_prefix" type="text" class="validate" data-length="12  ">
                    <label for="icon_prefix">Nombre Menu</label>
                  </div>
                  <div class="input-field">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Descripcion</label>
                  </div>
                  <div class="file-field input-field">
                    <div class="btn">
                      <span>Archivo</span>
                      <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text">
                    </div>
                  </div>
              </div>
              <div class="col s12 m6 l6">
                <label for="textarea1">Fecha publicacion menu</label>
                 <input type="text" class="datepicker">
              </div>  
             
            </div>
            <div class="container" align="center">
                <input type="submit" name="submit" id="submit" class="btn" value="Registar">
            </div>
          </form>
          <br>   

               <div class="divider"></div>

            <h3 class="thin">Consultar</h3>  
            <div class="row">
            <div class="col s12 m6 l6">
              <form action="">
                <label for="textarea1">Desde</label>
                <input type="text" class="datepicker">
            </div>
            <div class="col s12 m6 l6">
                 <label for="textarea1">Hasta</label>
                 <input type="text" class="datepicker">
            </div>
              <input type="submit" name="submit" id="submit" class="btn" value="Consultar fechas">
              </form> 
            </div> 
</div> 
<!--
======================================================================
==                                                                  ==
==          AQUI INICIA LA SECCION DE AGREGAR COLEGIO               ==
==                                                                  ==
======================================================================
-->

  <div id="test6" style="display: none;">Agregar Colegio</div>
<!--
======================================================================
==                                                                  ==
==           AQUI INICIA LA SECCION DE AGREGAR COLEGIO              ==
==                                                                  ==
======================================================================
-->

<!--
======================================================================
==                                                                  ==
==           AQUI INICIA LA SECCION DE CONSULTA PEDIDOS             ==
==                                                                  ==
======================================================================
-->

<div id="test7" style="display: none;">
    

<H1>PEDIDOS</H1>
  <div class="row" style="" align="right">
    <form action="">
      <div class="input-field col s1 m3 l3">
        <select>
          <option value="" disabled selected>Elegir Colegio</option>
          <option value="">Aqui va Colegio</option>
        </select>
      </div>
      <div class="input-field col s1 m3 l3">
        <select>
          <option value="" disabled selected>Elegir Grado</option>
          <option value="">Aqui Va los Grados</option>
        </select>
      </div>
      <div class="input-field col s1 m3 l3">
        <select>
          <option value="" disabled selected>Elegir Menu</option>
          <option value="">Aqui va Menus</option>
        </select>
      </div>
      <div class="input-field col s1 m3 l3">
          <label for="textarea1">Desde</label>
          <input type="text" class="datepicker">
      </div>
          <input type="submit" name="submit" id="submit" class="btn" value="Consultar">
    </form>  
  </div>


<h1>SU CONSULTA</h1>
<p class="thin">Para la Fecha: 18/02/2018</p>


      <table class="responsive-table container centered">
        <thead>
          <tr>
              <th>Colegio</th>
              <th>Grado</th>
              <th>Menu</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Colegio ST</td>
            <td>1º</td>
            <td>Lomo saltado</td>
          </tr>
          <tr>
            <td>Colegio ST</td>
            <td>1º</td>
            <td>Lomo saltado</td>
          </tr>
          <tr>
            <td>Colegio ST</td>
            <td>1º</td>
            <td>Lomo saltado</td>
          </tr>
           <tr>
            <td>Colegio ST</td>
            <td>1º</td>
            <td>Lomo saltado</td>
          </tr>
        </tbody>
      </table>








</div>

<!--
======================================================================
==                                                                  ==
==           AQUI INICIA LA SECCION DE CONSULTA PEDIDOS             ==
==                                                                  ==
======================================================================
-->





    
    
</div>

          <!--contenidoBODY-->
                <!--Import jQuery before materialize.js-->
                <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                <script type="text/javascript" src="js/materialize.min.js"></script>
                  <script type="text/javascript" src="js/materialize.js"></script>
                  <script type="text/javascript" src="js/js.js"></script>

                <script type="text/javascript">
                $(document).ready(function() {

                    $('select').material_select();

                    $('.datepicker').pickadate({
                      selectMonths: true, // Creates a dropdown to control month
                      selectYears: 15, // Creates a dropdown of 15 years to control year,
                      today: 'Hoy',
                      clear: 'Limpiar',
                      close: 'Ok',
                      closeOnSelect: false // Close upon selecting a date,
                    });

                      $('.button-collapse').sideNav({
                          menuWidth: 300, // Default is 300
                          edge: 'left', // Choose the horizontal origin
                          closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                          draggable: true // Choose whether you can drag to open on touch screens,
                        }
                      ); 

                });
                </script>
    </body>
  </html>