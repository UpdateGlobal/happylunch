  <!DOCTYPE html>
  <html lang="es">
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Happylunchesservices - Peru</title>
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
       <a href="#!name"><span class="white-text name">Nombre Padre</span></a>
       <a href="">Logout</a>
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


<!-- 
<div id="container">
  <div id="menu">
    <img src="img/logo.jpg" width="200" height="75">
    <ul id="slide-out"></ul>
    
  </div>
</div>
 -->

<div id="container">
  <div id="menu">
    <ul id="slide-out" class="side-nav fixed tabs">
      <li class="thin"><div class="bgcolor center">
        <br>
                <img src="img/logo-white.png" width="250" height="75">
            <div class="background" align="left">
              <ul>
                <li style="margin-bottom: -30px;"><a href=""><span class="white-text">Pedro Cabilla</span></a></li>
                <li style="margin-bottom: -30px;"><a href="registrouser.php">Logout</a></li>
                <li style="margin-bottom: -20px;"><a href=""><span class="white-text">jdandturk@gmail.com</span></a></li>
                <li><a href="registrouser.php"><i class="material-icons">edit</i>Editar Perfil</a></li>
              </ul>
            </div>
          </div>
      </li>

      <li class="thin listh"><a class="active tooltipped" href="#test" data-position="right" data-delay="50" data-tooltip="Aqui podras ver como puedes ordenar nuestros platillos.">Como Ordenar</a></li>
      <li class="thin listh"><a href="#carta" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Puedes ver lo que tenemos para ti.">Revisa Nuestra Carta</a></li>
      <li class="thin listh"><a href="#test1" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Seleccion la fecha y mira lo que tenemos para ese dia y elige para quien.">Selecciona Menus</a></li>

      <li class="thin listh"><a class='dropdown-button' data-activates='dropdown1'>Para Quiene?<i class="material-icons">arrow_drop_down</i></a></li>
            <ul id='dropdown1' class='dropdown-content'>
              <li><a href="#test2">Alan</a></li>
              <li><a href="#test2">luis</a></li>
              <li><a href="#test2">alberto</a></li>

            </ul>
      <li class="thin listh"><a href="#test4" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Registra a alguien mas para colocarlo en tu lista ">Agrega a Alquien Mas</a></li>
      <li class="thin listh"><a href="#test5">Crear Menus</a></li>
      <li class="thin listh"><a href="#test6">Agregar Colegio</a></li>
      <li class="thin listh"><a href="#test7">Pedidos Admin</a></li>
      <li class="thin listh"><a href="#test8" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Aqui puedes revisar todo ">Pedidos Pedro Cabilla</a></li>
    </ul>
  </div>
</div>

<!--
======================================================================
==                                                                  ==
==           AQUI INICIA LA SECCION DE EXPERIENCIA USER             ==
==                                                                  ==
======================================================================
-->
<div id="test" style="display: none;" class="conten">

   
  <div class="container">
    <div class="row" align="center">
      <h1 class="thin listh">Bienvenidos</h1>
      <p>Aqui estar una breve explicacion del uso de la plataforma</p>
    </div>
  </div>


</div>

<!--
======================================================================
==                                                                  ==
==                AQUI INICIA LA SECCION DE MENUS                   ==
==                                                                  ==
======================================================================
-->

  <div id="test1" style="display: none;" class="conten">
    <h1 class="thin">Seleccion de Menus</h1>

  <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header active"><img src="img/lunes.png" class="iconmenu"> Lunes - 12-12-12</div>
      <div class="collapsible-body">

        <div class="row">
          <div class="col s12 m6 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch1.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Seco Con Frijoles<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>
                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>
                          <input type="checkbox" id="check001" />
                          <label for="check001">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check002" />
                          <label for="check002">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check003" />
                          <label for="check003">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>

          <div class="col s12 m6 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch2.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Seco de pollo<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>
                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>
                          <input type="checkbox" id="check004" />
                          <label for="check004">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check005" />
                          <label for="check005">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check006" />
                          <label for="check006">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>



          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch3.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Enrollado de pollo<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>
                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>
                          <input type="checkbox" id="check007" />
                          <label for="check007">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check008" />
                          <label for="check008">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check009" />
                          <label for="check009">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch4.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Filet pescado c/ arroz<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>
                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>
                          <input type="checkbox" id="check010" />
                          <label for="check010">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check011" />
                          <label for="check011">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check012" />
                          <label for="check012">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch5.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Carapulcra<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>
                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>
                          <input type="checkbox" id="check013" />
                          <label for="check013">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check014" />
                          <label for="check014">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check015" />
                          <label for="check015">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>
        </div>
        <div class="row" align="right"><input type="submit" name="submit" id="submit" class="btn" value="Ordenar"></div>  
      </div>

    </li>
    


    <!--esatsrdere-->

        <li>
      <div class="collapsible-header"><img src="img/martes.png" class="iconmenu">  Martes - 13-12-12</div>
      <div class="collapsible-body">

        <div class="row">
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch5.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>
                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>
                          <input type="checkbox" id="check016" />
                          <label for="check016">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check017" />
                          <label for="check017">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check018" />
                          <label for="check018">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch4.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>
                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>
                          <input type="checkbox" id="check019" />
                          <label for="check019">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check020" />
                          <label for="check020">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check021" />
                          <label for="check021">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch3.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>
                   <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>
                          <input type="checkbox" id="check022" />
                          <label for="check022">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check023" />
                          <label for="check023">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check024" />
                          <label for="check024">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch2.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>
                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>

                      <ul>
                        <li>
                          <input type="checkbox" id="check025" />
                          <label for="check025">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check026" />
                          <label for="check026">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check027" />
                          <label for="check027">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch1.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>
                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>
                          <input type="checkbox" id="check028" />
                          <label for="check028">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check0029" />
                          <label for="check0029">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check030" />
                          <label for="check030">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>
        </div>
           <div class="row" align="right"><input type="submit" name="submit" id="submit" class="btn" value="Ordenar"></div>  
      </div>
    </li>    <li>
      <div class="collapsible-header"><img src="img/miercoles.png" class="iconmenu"> Miercoles - 14-12-12</div>
      <div class="collapsible-body">

        <div class="row">
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch1.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>
                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>
                          <input type="checkbox" id="check031" />
                          <label for="check031">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check032" />
                          <label for="check032">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check033" />
                          <label for="check033">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch2.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>
                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>
                          <input type="checkbox" id="check034" />
                          <label for="check034">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check035" />
                          <label for="check035">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check036" />
                          <label for="check036">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch3.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>
                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>
                          <input type="checkbox" id="check037" />
                          <label for="check037">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check038" />
                          <label for="check038">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check038" />
                          <label for="check038">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch4.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>
                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>
                          <input type="checkbox" id="check039" />
                          <label for="check039">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check040" />
                          <label for="check040">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check041" />
                          <label for="check041">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch5.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>
                  <br>
                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>
                          <input type="checkbox" id="check042" />
                          <label for="check042">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check043" />
                          <label for="check043">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check044" />
                          <label for="check044">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>
        </div>
           <div class="row" align="right"><input type="submit" name="submit" id="submit" class="btn" value="Ordenar"></div>  
      </div>
    </li>
        <li>
      <div class="collapsible-header"><img src="img/jueves.png" class="iconmenu"> Jueves - 15-12-12</div>
      <div class="collapsible-body">

        <div class="row">
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch5.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>

                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>
                          <input type="checkbox" id="check045" />
                          <label for="check045">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check046" />
                          <label for="check046">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check047" />
                          <label for="check047">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch4.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>

                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>
                          <input type="checkbox" id="check047" />
                          <label for="check047">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check048" />
                          <label for="check048">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check049" />
                          <label for="check049">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch3.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>
  
                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>
                          <input type="checkbox" id="check050" />
                          <label for="check050">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check051" />
                          <label for="check051">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check052" />
                          <label for="check052">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch2.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>

                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>
                          <input type="checkbox" id="check053" />
                          <label for="check053">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check054" />
                          <label for="check054">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check055" />
                          <label for="check055">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch1.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>

                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>
                          <input type="checkbox" id="check056" />
                          <label for="check056">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check057" />
                          <label for="check057">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check057" />
                          <label for="check057">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>
        </div>
           <div class="row" align="right"><input type="submit" name="submit" id="submit" class="btn" value="Ordenar"></div>  
      </div>
    </li>   
    <li>
      <div class="collapsible-header"><img src="img/viernes.png" class="iconmenu">  Viernes - 16-12-12</div>
      <div class="collapsible-body">



                <div class="row">
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch5.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>

                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>
                          <input type="checkbox" id="check045" />
                          <label for="check045">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check046" />
                          <label for="check046">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check047" />
                          <label for="check047">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch4.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>

                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>
                          <input type="checkbox" id="check047" />
                          <label for="check047">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check048" />
                          <label for="check048">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check049" />
                          <label for="check049">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch3.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>
  
                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>
                          <input type="checkbox" id="check050" />
                          <label for="check050">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check051" />
                          <label for="check051">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check052" />
                          <label for="check052">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch2.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>

                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>
                          <input type="checkbox" id="check053" />
                          <label for="check053">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check054" />
                          <label for="check054">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check055" />
                          <label for="check055">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch1.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Nombre Menu<i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Para Quienes?<i class="material-icons right">close</i></span>

                  <p style="font-size: 8px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>
                          <input type="checkbox" id="check056" />
                          <label for="check056">Alan</label>
                        </li>
                        <li>            
                          <input type="checkbox" id="check057" />
                          <label for="check057">Gianella</label></li>
                        <li>
                          <input type="checkbox" id="check057" />
                          <label for="check057">Raul</label>
                        </li>
                      </ul>
                </div>
            </div>
          </div>
        </div>
           <div class="row" align="right"><input type="submit" name="submit" id="submit" class="btn" value="Ordenar"></div>  
      </div>
      </li>
  </ul>
</div>
<!--
======================================================================
==                                                                  ==
==                AQUI TERMINA LA SECCION DE CARTA                  ==
==                                                                  ==
======================================================================

-->   
<div id="carta" style="display: none;" class="conten">

  <div class="row">
  <div class="col s12 m6 l6"><h1 class="thin">Lista de Carta</h1></div>
  <div class="col s12 m6 l6 offset-m3" align="right">
      <label for="last_name"></label>
      <input id="last_name" type="text" placeholder="Buscas Un Menu Especial" class="validate">
  </div>
</div>
    
    <div class="row">
      <div class="row">
      <p id="demo"></p>
          <!--comida-
          <div class='col s12 m3 l3' style='width: 20%;'><div class='card'><div class='card-image waves-effect waves-block waves-light'><img class='activator responsive-img' src='img/lunch2.jpg' style='width: 280px; height: 200px;'></div><div class='card-content'><span class='activator grey-text text-darken-4'>Nombre Menu<i class='material-icons right'>event_note</i></span></div><div class='card-reveal'><span class='card-title grey-text text-darken-4 nombreson'>Descripcion del Menu<i class='material-icons right'>close</i></span><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p></div></div></div>
          <-comida-->

          <script>
          var text = "";
          var i = 0;
          while (i < 13) {
              text += "<div class='col s12 m3 l3' style='width: 20%;'><div class='card'><div class='card-image waves-effect waves-block waves-light'><img class='activator responsive-img' src='img/lunch2.jpg' style='width: 280px; height: 200px;'></div><div class='card-content'><span class='activator grey-text text-darken-4'>Arroz Con Pollo<i class='material-icons right'>event_note</i></span></div><div class='card-reveal'><span class='card-title grey-text text-darken-4 nombreson'>Descripcion del Menu<i class='material-icons right'>close</i></span><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></div></div></div>";
              i++;
          }
          document.getElementById("demo").innerHTML = text;
          </script>
      </div><!--row-->
    </div>

</div>

<!--
======================================================================
==                                                                  ==
==                AQUI INICIA LA SECCION DE HIJOS                   ==
==                                                                  ==
======================================================================
-->
<div id="test2" style="display: none;" class="conten"><br>
  <h1 class="thin">Mi Hijo Alan Brito</h1>
        <div class="row">
            <div class="col s12 m4">
              <div class="card horizontal">
                <div class="card-image">
                  <!--aqui vas es una imagen-->
                  <i class="large material-icons" style="font-size: 150px;">perm_identity</i>
                </div>
                <div class="card-stacked">
                  <div class="card-content">
                   <ul>
                     <li style="line-height: 25px;"><b>Nombres:</b> Alan brito</li>
                     <li style="line-height: 25px;"><b>Apellidos:</b> Barrio Nuevo</li>
                     <li style="line-height: 25px;"><b>Colegio:</b> Colegio Santa Anita</li>
                     <li style="line-height: 25px;"><b>Grado:</b> 1º Primaria</li>
                   </ul>
                  </div>
                </div>
              </div>
            </div>
        </div>



        <div class="row">
          <h1>12-02-2018 al 16-02-2018</h1>
          <!--comida-->
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch1.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Fecha Menu: <i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                <span class="card-title grey-text text-darken-4 nombreson">Descripcion del Menu<i class="material-icons right">close</i></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                  <button class="btn">Eliminar</button>
                </div>
            </div>
          </div>
          <!--comida-->
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch2.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Fecha Menu: <i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                <span class="card-title grey-text text-darken-4 nombreson">Descripcion del Menu<i class="material-icons right">close</i></span> 
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                  <button class="btn">Eliminar</button>
                </div>
            </div>
          </div>
          <!--comida-->
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch3.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Fecha Menu: <i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                <span class="card-title grey-text text-darken-4 nombreson">Descripcion del Menu<i class="material-icons right">close</i></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                  <button class="btn">Eliminar</button>
                </div>
            </div>
          </div>
          <!--comida-->
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch4.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Fecha Menu: <i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Descripcion del Menu<i class="material-icons right">close</i></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                  <button class="btn">Eliminar</button>
                </div>
            </div>
          </div>
          <!--comida-->
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch5.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Fecha Menu: <i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Descripcion del Menu<i class="material-icons right">close</i></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                  <button class="btn">Eliminar</button>
                </div>
            </div>
          </div>
          <!--comida-->
        </div>


        <div class="row">
          <h1>20-02-2018 al 25-02-2018</h1>
          <!--comida-->
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch1.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Fecha Menu: <i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Descripcion del Menu<i class="material-icons right">close</i></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                  <button class="btn">Eliminar</button>
                </div>
            </div>
          </div>
          <!--comida-->
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch2.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Fecha Menu: <i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Descripcion del Menu<i class="material-icons right">close</i></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                  <button class="btn">Eliminar</button>
                </div>
            </div>
          </div>
          <!--comida-->
          <div class="col s12 m3 l3" style="width: 20%;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/lunch3.jpg" style="width: 280px; height: 200px;">
                </div>
                <div class="card-content">
                  <span class="activator grey-text text-darken-4">Fecha Menu: <i class="material-icons right">event_note</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 nombreson">Descripcion del Menu<i class="material-icons right">close</i></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                  <button class="btn">Eliminar</button>
                </div>
            </div>
          </div>
          <!--comida-->
        </div>



</div>
  <!--
======================================================================
==                                                                  ==
==           AQUI TERMINA LA SECCION DE AGREGAR HIJO                ==
==                                                                  ==
======================================================================
-->

<div id="test4" style="display: none;" class="conten"> 
  <h1 class="thin">Registra a tu Hijo</h1>
    <div class="row">
            <form action="#">
              <div class="col s12 m12 l12 input-field">
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Nombre</label>
              </div><!--end-->
              <div class="col s12 m6 l6 input-field">
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Apellido paterno</label>
              </div>
              <div class="col s12 m6 l6 input-field">
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Apellido materno</label>
              </div> 




              <div class="col s12 m6 l6 input-field">
                    <select>
                      <option value="" disabled selected><span class="grey-text">Donde Estudia</span> </option>
                      <option value="Markham College">Markham College</option>
                      <option value="Colegio SSCC Recoleta">Colegio SSCC Recoleta</option>
                      <option value="Colegio Santa Maria">Colegio Santa Maria</option>
                      <option value="Colegio Sophianum">Colegio Sophianum</option>
                      <option value="Colegio Sophianum">Colegio Sophianum</option>
                      <option value="Colegio Santa Ursula">Colegio Santa Ursula</option>
                    </select>
              </div>
              <div class="col s12 m6 l6 input-field">
                    <select>
                      <option value="" disabled selected>Que Grado Estudia</option>
                      <option value="1er Grado Primaria">1er Grado Primaria</option>
                      <option value="2do Grado Primaria">2do Grado Primaria</option>
                      <option value="3er Grado Primaria">3er Grado Primaria</option>
                      <option value="4to Grado Primaria">4to Grado Primaria</option>
                      <option value="5to Grado Primaria">5to Grado Primaria</option>
                      <option value="6to Grado Primaria">6to Grado Primaria</option>
                      <option value="1er Grado Segundaria">1er Grado Segundaria</option>
                      <option value="2do Grado Segundaria">2do Grado Segundaria</option>
                      <option value="3er Grado Segundaria">3er Grado Segundaria</option>
                      <option value="4to Grado Segundaria">4to Grado Segundaria</option>
                      <option value="5to Grado Segundaria">5to Grado Segundaria</option>
                    </select>
              </div>
  
              <div class="col s12 m6 l6">
                <label for="icon_prefix">Fecha de Nacimiento</label>
                <input type="text" class="datepicker">
              </div>

              <div class="col s12 m6 l6  file-field input-field">
                    <div class="btn">
                      <span>Foto de Hijo</span>
                      <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text">
                    </div>
                  </div>
              </div>

              <div class="container" align="center">
                  <input type="submit" name="submit" id="submit" class="btn" value="Registar">
              </div>
          </form>


      <table class="responsive-table centered striped">
        <thead>
          <tr>
              <th>Nombre</th>
              <th>Apellido Paterno</th>
              <th>Apellidos Maternos</th>
              <th>Colegio</th>
              <th>Grado</th>
              <th>Edad</th>
              <th>Acciones</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alan Brito</td>
            <td>Barrios</td>
            <td>Nuevos</td>
            <td>Colegio SSCC</td>
            <td>1º</td>
            <td>12</td>
            <td>
             <a class="btn sizebtn" ><i class="material-icons center btnmodificar">border_color</i></a>
             <a class="btn sizebtn" ><i class="material-icons center btnmodificar">delete</i></a>
            </td>
          </tr>

        </tbody>
      </table>
    
    </div><!--row-->
</div><!--end-->
<!--
======================================================================
==                                                                  ==
==           AQUI INICIA LA SECCION DE REGISTRO MENU                ==
==                                                                  ==
======================================================================
-->




<div id="test5" style="display: none;" class="conten">

      <div class="row">
        <h1 class="thin">Crear Menu</h1>
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

                    <div class="switch">
                      <label for="textarea1">Estatus del Menu</label>
                      <br><br>  
                      <label>
                        Deshativado
                        <input type="checkbox">
                        <span class="lever"></span>
                        Activado
                      </label>
                    </div>
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
      <table class="responsive-table centered striped">
        <thead>
          <tr>
              <th>Foto</th>
              <th>Nombre</th>
              <th>Descripcion</th>
              <th>Fecha</th>
              <th>Estatus</th>
              <th>Modificar</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td><img src="img/lunch1.jpg" width="60" height="60"></td>
            <td>Lomo</td>
            <td>lomo saltado con vegetales</td>
            <td>
              <input type="text" class="datepicker">
            </td>
            <td>
                    <div class="switch">
                      <label>
                        Deshativado
                        <input type="checkbox">
                        <span class="lever"></span>
                        Activado
                      </label>
                    </div>
            </td>
            <td>
             <a class="btn sizebtn" ><i class="material-icons center btnmodificar">border_color</i></a>
             <a class="btn sizebtn" ><i class="material-icons center btnmodificar">reply_all</i></a>
             <a class="btn sizebtn" ><i class="material-icons center btnmodificar">delete</i></a>
            </td>
          </tr>

        </tbody>
      </table>
</div> 
</div>
<!--
======================================================================
==                                                                  ==
==          AQUI INICIA LA SECCION DE AGREGAR COLEGIO               ==
==                                                                  ==
======================================================================
-->

<div id="test6" style="display: none;" class="conten">
 <h1 class="thin">Agregar Colegio</h1>

  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <select>
            <option value="" disabled selected>Elegir Colegio</option>
            <option value="">Aqui va Colegio</option>
          </select>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Dirección</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Telefono</label>
        </div>
                <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Persona de Contacto</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input type="submit" name="submit" id="submit" class="btn" value="Agregar">
        </div>
      </div>
    </form>
  </div>
        
      <table class="responsive-table centered striped">
        <thead>
          <tr>
              <th>Colegio</th>
              <th>Direccion</th>
              <th>Telefono</th>
              <th>Accion</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Colegio ST</td>
            <td>Av la Universitara 123 entre Izaguire y Alisos</td>
            <td>921966985</td>
            <td>
              <a class="btn sizebtn" ><i class="material-icons center btnmodificar">border_color</i></a>
              <a class="btn sizebtn" ><i class="material-icons center btnmodificar">delete</i></a>
            </td>
          </tr>
          <tr>
            <td>Colegio ST</td>
            <td>Av la Universitara 123 entre Izaguire y Alisos</td>
            <td>921966985</td>
            <td>
              <a class="btn sizebtn" ><i class="material-icons center btnmodificar">border_color</i></a>
              <a class="btn sizebtn" ><i class="material-icons center btnmodificar">delete</i></a>
            </td>
          </tr>
          <tr>
            <td>Colegio ST</td>
            <td>Av la Universitara 123 entre Izaguire y Alisos</td>
            <td>921966985</td>
            <td>
              <a class="btn sizebtn" ><i class="material-icons center btnmodificar">border_color</i></a>
              <a class="btn sizebtn" ><i class="material-icons center btnmodificar">delete</i></a>
            </td>
          </tr>
           <tr>
            <td>Colegio ST</td>
            <td>Av la Universitara 123 entre Izaguire y Alisos</td>
            <td>921966985</td>
            <td>
              <a class="btn sizebtn" ><i class="material-icons center btnmodificar">border_color</i></a>
              <a class="btn sizebtn" ><i class="material-icons center btnmodificar">delete</i></a>
            </td>   
          </tr>
        </tbody>
      </table>


</div>
<!--
======================================================================
==                                                                  ==
==           AQUI INICIA LA SECCION DE AGREGAR MENUS              ==
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

<div id="test7" style="display: none;" class="conten">
    
<div class="row">
  <div class="col s12 m6 l6"><H1>PEDIDOS</H1> </div>
  <div class="col s12 m6 l6 offset-m3" align="right">
                        <label for="last_name"></label>
                        <input id="last_name" type="text" placeholder="Buscar General" class="validate">

         
  </div>
</div>


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
          <label for="textarea1">Fecha</label>
          <input type="text" class="datepicker">
      </div>
          <input type="submit" name="submit" id="submit" class="btn" value="Consultar">
    </form>  
  </div>


<h1>SU CONSULTA</h1>
<p class="thin">Para la Fecha: 18/02/2018</p>


      <table class="responsive-table centered striped">
        <thead>
          <tr>
              <th>Colegio</th>
              <th>Grado</th>
              <th>Menu</th>
              <th>Nombre</th>
              <th>Fecha</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Colegio ST</td>
            <td>1º</td>
            <td>Lomo saltado</td>
            <td>Daniel</td>
            <td>12-02-2018</td>
          </tr>
          <tr>
            <td>Colegio ST</td>
            <td>1º</td>
            <td>Lomo saltado</td>
             <td>Daniel</td>
             <td>12-02-2018</td>
          </tr>
          <tr>
            <td>Colegio ST</td>
            <td>1º</td>
            <td>Lomo saltado</td>
             <td>Alan</td>
             <td>12-02-2018</td>
          </tr>
           <tr>
            <td>Colegio ST</td>
            <td>1º</td>
            <td>Lomo saltado</td>
             <td>Alan</td>
             <td>12-02-2018</td>
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
                    $('.tooltipped').tooltip({delay: 50});

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