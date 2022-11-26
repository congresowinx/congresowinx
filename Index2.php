<html lang="es">
    <head>
        <link href="icono.ico" type="image/x-icon" rel="shortcut icon" />
        <title>Congreso de Matemáticas</title>
       <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="icon.css">
 
           <link rel="stylesheet" href="css/estilosmenuarriba.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">  
        
         <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
<link rel="icon" href="img/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="css/estilos.css">
        
        <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .containerCredi {
        background-color: #333333;
    }

  


      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .feature-icon {
  width: 4rem;
  height: 4rem;
  border-radius: .75rem;
}

.icon-link > .bi {
  margin-top: .125rem;
  margin-left: .125rem;
  fill: currentcolor;
  transition: transform .25s ease-in-out;
}
.icon-link:hover > .bi {
  transform: translate(.25rem);
}

.icon-square {
  width: 3rem;
  height: 3rem;
  border-radius: .75rem;
}

.text-shadow-1 { text-shadow: 0 .125rem .25rem rgba(0, 0, 0, .25); }
.text-shadow-2 { text-shadow: 0 .25rem .5rem rgba(0, 0, 0, .25); }
.text-shadow-3 { text-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .25); }

.card-cover {
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}

.feature-icon-small {
  width: 3rem;
  height: 3rem;
}

        </style>
    </head>


<body>
    <!--
Encabezado de la página */
        */banner, menu, carrusel, cuadro iniciar, cuadro fechas, -->
        <!-- Baner -->
     
      
         <div id="wrapper" > <center> <img src="img/banpru.jpg" class="baner"/> </center>  </div>
         
       <!-- Barra de menu -->
         <div>
            <header>  
                <input type="checkbox" id="btn-menu"> 
                <label for="btn-menu"><img src="img/menuicono11.png" alt=""> </label>
                <nav class="menu" style="z-index: 1;">
                    <ul>
                        <li> <a href="index.php">Inicio</a></li>
                        <li> <a href="">Memorias</a></li>
                        <li> <a href="">Convocatoria</a></li> 
                        <li> <a href="inscripcionYcostos.php">Inscripción y Costos</a></li>
                        <li> <a href="ComiteOrg">Comité Organizador</a></li>
                        <li> <a href=""><img class="alineadoicono" src="img/iniciaricono.png">&nbsp;Iniciar Sesión</a></li>
                    </ul>  
                </nav> 
                
            </header>
        </div>

        <div>
            <header>
            <input type="checkbox" id="btn-menu2"> 
                <label for="btn-menu2"><img src="img/icono_informacion2.png" alt=""> </label>
                <nav class="menu2" style="z-index: 2;">           
                    <ul>    
                      <li> <a href=""><img class="alineadoicono" src="img/icono_informacion2.png"> </a></li>        
                        <li> <a href="ponencias_info.php">Ponencias</a></li>  
                        <li> <a href="carteles_info.php">Carteles</a></li>
                        <li> <a href="talleres_info.php">Talleres</a></li>
                    </ul>  
                </nav>                
            </header>
        </div>
 
       
<!-- Carrusel -->
         
        
<div align="center">
            <div class="slider">
              <div class="slides">
                <!--radio buttons start-->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <!--radio buttons end-->
                <!--slide images start-->
               <div class="slide first">
                  <img src="img/pruebaconvocatoria1.jpg" alt="">
                </div>
                <div class="slide">
                  <img src="img/convocatoriafechas.jpg" alt="">
                </div>
                <div class="slide">
                  <img src="img/carrusel1.jpg" alt="">
                </div>
              <div class="slide">
                  <img src="img/carrusel2.jpg" alt="">
                </div>
              <!--  <div class="slide">
                  <img src="4.jpg" alt="">
                </div>-->
                <!--slide images end-->
                <!--automatic navigation start-->
                <div class="navigation-auto">
                  <div class="auto-btn1"></div>
                  <div class="auto-btn2"></div>
                  <div class="auto-btn3"></div>
                  <div class="auto-btn4"></div>
                </div>
                <!--automatic navigation end-->
              </div>
              <!--manual navigation start-->
              <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
              </div>
              <!--manual navigation end-->
            </div>
            </div>
       <!-- Cuadritos, inicio sesión y calendario  -->
         <!-- Inicio sesión  -->

         <div class="box">
			<div class="loginBox">
				<img class="avatar" src="img/Recurso1.png" alt="user">
				<h1>Iniciar Sesión</h1>
				<form method="POST">
					<!******USERNAME*******>
					<label for="Username">Correo</label>
					<input type="text" placeholder="Ingresa Correo" name="user" required>

					<!******PASSWORD*******>
					<label for="Password">Contraseña</label>
					<input type="password" placeholder="Ingresa Contraseña" name="pass" required>

					<input type="submit" value="Iniciar Sesión">

					<a href="#">¿Olvidaste tu contraseña?</a>
					<br>
					<a href="registro.php">¿No tienes una cuenta?</a>
				</form>
			</div>
		</div>


    <!-- calendario -->
    <div class="calendar">
             <h1 class="title" style="color:#2B307C">Fechas Importantes</h1>
    <div class="calendar__info">
        <div class="calendar__prev" id="prev-month">&#9664;</div>
        <div class="calendar__month" id="month"></div>
        <div class="calendar__year" id="year"></div>
        <div class="calendar__next" id="next-month">&#9654;</div>
    </div>
          
    <div class="calendar__week">
        <div class="calendar__day calendar__item">Lu.</div>
        <div class="calendar__day calendar__item">Ma.</div>
        <div class="calendar__day calendar__item">Mi.</div>
        <div class="calendar__day calendar__item">Ju.</div>
        <div class="calendar__day calendar__item">Vi.</div>
        <div class="calendar__day calendar__item">Sa.</div>
        <div class="calendar__day calendar__item">Do.</div>
    </div>

    <div class="calendar__dates" id="dates"></div>
</div>

<script src="js/scriptscal.js"></script>


       <br>
       <br>
       <br>
       <br>
       <br>
       <br>

<div class="containerCredi">
<footer class="py-5">
    <div class="row">
      <div class="col-6 col-md-2 mb-3">
        <ul class="nav flex-column">
          <li class="nav-item mb-2" class="nav-link p-0 text-muted"> <img src="img/escudo-blanco.png" alt="Photo" style="width:65%;"> </li>
        </ul>
        </div>

      <div class="col-6 col-md-2 mb-3">
        <h5 style="color: #FFFFFF;">CONTACTO</h5>
        <ul class="nav flex-column">
          <li style="color: #FFFFFF;" class="nav-item mb-2" class="nav-link p-0 text-muted ">SEDE</li>
          <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted">Facultad de Estudios Superiores Cuautitlán</li>
        </ul>
        </div>

        <div class="col-6 col-md-2 mb-3">
        <h5 style="color: #FFFFFF;">UBICACIÓN</h5>
        <ul class="nav flex-column">
          <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted">Km 2.5 carretera Cuautitlán-Teoloyucan, San Sebastián Xhala, Cuautitlán Izcalli, Estado de México. C.P. 54714.</li>
        </ul>
        </div>
        
        <div class="col-6 col-md-2 mb-3">
        <h5 style="color: #FFFFFF;">TELÉFONO</h5>
        <ul class="nav flex-column">
        <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> (55) 56 23 18 86 / (55) 56 23 18 90</li>
          <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted">Para mayores informes o dudas comunicarse al Departamento de Matemáticas Edificio A8 Campo 4.</li>
        
        </ul>
        </div>

        <div class="col-6 col-md-2 mb-3">
        <h5 style="color: #FFFFFF;">DESARROLLADORES</h5>
        <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> Miriam</li>
        <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> Jonathan </li>
        <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> Davila Nayely</li>
        <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> Luz</li>
        <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> Olivares Vega Ana Jesús</li>
        <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> Olvera Mendoza Viridiana</li>
          <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> Romero Jaime Fernanda</li>
        <ul class="nav flex-column">
          
        </ul>
        </div>

  <div class="containerCredi">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li style="color: #FFFFFF;"class="nav-item" class="nav-link px-2 text-muted">Sitio Web administrado por: Departamento de Matemáticas</li>
       <li style="color: #FFFFFF;" class="nav-item" class="nav-link px-2 text-muted">Esta página puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente
        completa y su dirección electrónica.</li>
         <li style="color: #FFFFFF;" class="nav-item" class="nav-link px-2 text-muted">De otra forma requiere permiso previo por escrito de la institución</li>
    </ul>
  <center>
      <p style="color: #FFFFFF;">&copy; <?php echo date('Y'); ?> Hecho en México, todos los derechos reservados. </p>
    </center>
  </footer>
</div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    
    <?php
$conexion=pg_connect("host=localhost dbname=BDCongresoMate user=postgres password= ");

 if(isset($_POST["user"]) && isset($_POST["pass"])){
     session_start();
$usuario= $_POST["user"];
$clave= $_POST["pass"];
  $clave = hash('sha512', $clave);
/*
 if($conexion){
                echo "CONEXIÓN EXITOSA <br>";
            }else{
                echo "CONEXIÓN FALLIDA";
            }
            */
$query="SELECT usuario, contraseña FROM usuario WHERE usuario='$usuario' AND contraseña= '$clave' ";
 $consulta= pg_query($conexion,$query);
 $cantidad= pg_num_rows($consulta);
 
 $query2=("Select id_usuario from usuario where usuario='$usuario' ");
                            $conn2=pg_query($conexion,$query2);

                               if(!$conn2){
                                 die(pg_error($conexion));
                                    }

                               if (pg_num_rows($conn2) > 0) {
                                          while($rowData = pg_fetch_array($conn2)){
                                       $conn3=intval($rowData["id_usuario"]);
                                                   }
                                             }
                                             
                           $query5=("Select permiso_id_rol from permisos where usuario_id='$conn3' ");
                            $conn5=pg_query($conexion,$query5);

                               if(!$conn5){
                                 die(pg_error($conexion));
                                    }

                               if (pg_num_rows($conn5) > 0) {
                                          while($rowData = pg_fetch_array($conn5)){
                                       $conn4=$rowData["permiso_id_rol"];
                                                   }
                                             }
                                if ($cantidad>0){
     header ("location:perfilnavegacion.php");
                                }
                                             
                    /*    if ($conn4=="0"){
                                          
 if ($cantidad>0){
     echo '<script>alert("Sesión Iniciada")</script>';
     header ("location:perfilusuario.php");

 } else{
      echo '<script>alert("Datos incorrectos")</script>';
 }}else if ($conn4=="1"){
     if ($cantidad>0){
     echo '<script>alert("Sesión Iniciada")</script>';
     header ("location:perfilponente.php");

 } else{
      echo '<script>alert("Datos incorrectos")</script>';
 }
 
 }*/
 
 }
?>

</body>
</html>