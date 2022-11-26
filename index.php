
<html lang="es">
    <head>
         <link href="img/favicon.png" type="image/x-icon" rel="shortcut icon" />
        <title>Congreso de Matemáticas</title>
      
        <link rel="stylesheet" href="css/estilos.css">
 <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale">
           
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"> 

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
/*Aqui empieza el nuevo menu de colores junto con el menu para celular responsivo
-------
------
------
------*/


 * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Roboto, sans-serif;
}


.containerBoton {
   width: 100%;
    height: 12vh;
    position: relative;
    top: 6%;
    transform: translateY(-50%);
    text-align: center; 
    background-color: transparent;
}


.nav-bar{
  display: none;
}

@media only screen and (max-width:768px){

    .nav-bar{
    position: fixed;
    right: 0;
    top: 14%;
    font-size:1.5rem;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    z-index: 100;
    }


}



  #btn-menu3{
      display: none;
    }
    .menu3 ul{
      margin: 0;
      list-style: none;
      padding: 0;
      display: flex;
    }
    
    .menu3 li{
      text-align: center;
      flex-grow: 1;
    }
    
    .menu3 li:hover {
        background:  rgb(135, 110, 19); 
    }
    
    .menu3 li a{
      display:  block;
      padding: 15px 20px;
      color: #fff;
      text-decoration: none;
    }

 @media (max-width: 768px){
      header label{
        display: block;
      } 
      .menu3 {
        position: absolute;
        background: transparent;
        width: 70%;
        margin-left: -70%;
        transition: all 0.5s;
      }
      .menu3 ul {
        flex-direction: column;
      }
      .menu3 li{
        border-top: 1px solid transparent;
      }
      #btn-menu3:checked ~.menu3 {
        margin: 0;
      }
    }

/*Aqui termina el nuevo menu de colores junto con el menu para celular responsivo*
-------------
------------
------------*/
  .box {
                width: 320px;
                height: 280px;
                background: transparent;
                margin-top: 20em;
                /*top: 50%;*/
                position: absolute;
                transform: translate(-150%, -50%);
                padding: 70px 30px;
                border-radius: 25px;
            }
            
            .loginBox {
                width: 320px;
                height: 400px;
                background: #FFF;
                color: #2B307C;
                position: absolute;
                transform: translate(-50%, -50%);
                box-sizing: border-box;
                padding: 40px 30px;
                border-radius: 9px;
                margin-top: -60px;

                border: 0.5em solid #2B307C;
            }
            
            .loginBox .avatar {
                width: 80px;
                height: 80px;
                border-radius: 50%;
                position: absolute;
                top: -50px;
                left: calc(50% - 40px);

                border: 0.5em solid #2B307C;
            }
            
            .loginBox h1 {
                margin: 0;
                padding: 0 0 20px;
                text-align: center;
                font-size: 22px;
            }
            
            .loginBox label {
                margin: 0;
                padding: 0;
                font-weight: bold;
                display: block; 
            }
            
            .loginBox input {
                width: 100%;
                margin-bottom: 20px;
            }
            
            .loginBox input[type="text"], 
            .loginBox input[type="password"] {
                border: none;
                border-bottom: 2px solid #2B307C;
                background: #00000012;
                outline: none;
                height: 40px;
                color: #000;
                font-size: 16px;
                margin-top: 5px;
                border-top-left-radius: 12px;
                border-top-right-radius: 12px;
            }
            
            .loginBox input[type="submit"] {
                border: none;
                outline: none;
                height: 40px;
                background: #2B307C;
                color: #FFF;
                font-size: 18px;
                border-radius: 20px;    
            }
            
            .loginBox input[type="submit"]:hover {
                cursor: pointer;
                background: #998636;
            }
            
            .loginBox a {
                text-decoration: none;
                font-size: 12px;
                line-height: 20px;
                color: navy;
            }
            
            .loginBox a:hover {
                color: #998636;
            }

@media (max-width: 768px){
    .calendar{
        
          transform: translate(-40%, -80%);
    }
    .contenedorlogincalendar{
    border-radius: 3em;
        margin:3em;
        height: 100%;
        width: auto;
}

.containerCredi{
    transform: translate(0%, 80%);
}


         }


.title {
  text-align: center;
  color: #FFFFFF; }

.calendar {
  background: #fff;
  width: 100%;
  max-width: 600px;
        border-radius: 25px;
                border: 0.5em solid #2B307C;
 }

  .calendar__info {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 0 2em;
    font-size: 1.2em;
    text-transform: uppercase; }

  .calendar__prev, .calendar__next {
    color: #C7F464;
    cursor: pointer;
    font-size: 1.3em; }

  .calendar__prev {
    margin-right: auto; }

  .calendar__next {
    margin-left: auto; }

  .calendar__week, .calendar__dates {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    grid-gap: 10px; }

  .calendar__month, .calendar__year {
    padding: .5em 1em; }

  .calendar__item {
    text-align: center;
    line-height: 2; }

  .calendar__today {
    background: lightcoral;
    color: white;
    width: 50%;
    border-radius: 50%;
    margin: auto; }

  .calendar__last-days {
    opacity: .3; }
/*Aqui Empieza el css de estilos de la pagina de cada uno*
-------------
------------
------------*/          

.ContenedorPrincipal{
    border-radius: 3em;
    border: 0.3em solid #2B307C;
        margin:3em;
        height: 40%;
        width: auto;
}
.contenedorlogincalendar{
    border-radius: 3em;
        margin:3em;
        height: 60%;
        width: 50%;
}

  .box {
    margin-left: 25%;
  }
    
   .calendar {
    transform: translate(10%, 5%);
    margin-left: 80%;
  }
}


 .slider{
                width: 92%;
                height: 500px;
                border-radius: 10px;
                overflow: hidden;
                margin-top: 3em;
                margin-bottom: -1.5em;
            }

            .slides{
                width: 500%;
                height: 500px;
                display: flex;
            }

            .slides input{
              display: none;
            }

            .slide{
              width: 20%;
              transition: 2s;
            }

            .slide img{
              width: 100%;
              height: 500px;
            }

            .navigation-manual{
              position: absolute;
              width: 92%;
              margin-top: -40px;
              display: flex;
              justify-content: center;
            }

            .manual-btn{
              border: 2px solid #40D3DC;
              padding: 5px;
              border-radius: 10px;
              cursor: pointer;
              transition: 1s;
            }

            .manual-btn:not(:last-child){
              margin-right: 40px;
            }

            .manual-btn:hover{
              background: #40D3DC;
            }

            #radio1:checked ~ .first{
              margin-left: 0;
            }

            #radio2:checked ~ .first{
              margin-left: -20%;
            }

            #radio3:checked ~ .first{
              margin-left: -40%;
            }

            #radio4:checked ~ .first{
              margin-left: -60%;
            }

            .navigation-auto{
              position: absolute;
              display: flex;
              width: 92%;
              justify-content: center;
              margin-top: 460px;
            }

            .navigation-auto div{
              border: 2px solid #40D3DC;
              padding: 5px;
              border-radius: 10px;
              transition: 0.5s;
            }

            .navigation-auto div:not(:last-child){
              margin-right: 40px;
            }
            
            #radio1:checked ~ .navigation-auto .auto-btn1{
              background: #40D3DC;
            }

            #radio2:checked ~ .navigation-auto .auto-btn2{
              background: #40D3DC;
            }

            #radio3:checked ~ .navigation-auto .auto-btn3{
              background: #40D3DC;
            }

            #radio4:checked ~ .navigation-auto .auto-btn4{
              background: #40D3DC;
            }
            
            .slider{
                background: rgb(224,243,250); /* Old browsers */
                background: -moz-linear-gradient(45deg,  rgba(224,243,250,1) 0%, rgba(216,240,252,1) 50%, rgba(184,226,246,1) 51%, rgba(182,223,253,1) 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(45deg,  rgba(224,243,250,1) 0%,rgba(216,240,252,1) 50%,rgba(184,226,246,1) 51%,rgba(182,223,253,1) 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(45deg,  rgba(224,243,250,1) 0%,rgba(216,240,252,1) 50%,rgba(184,226,246,1) 51%,rgba(182,223,253,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e0f3fa', endColorstr='#b6dffd',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
                border-radius:10px;
            }

  
          

        </style>

    </head>
    <body>
        <!--
Encabezado de la página */
        */banner, menu, carrusel, cuadro iniciar, cuadro fechas, -->
                
       <!-- Barra de menu -->
        
         <div id="wrapper" > <center> <img src="img/banpru.jpg" class="baner"/> </center>  </div>
         
       <!-- Barra de menu -->
         <div>
            <header>  
                <input type="checkbox" id="btn-menu"> 
                <label for="btn-menu"><img src="img/menuicono11.png"> </label>
                <nav class="menu" style="z-index: 1;">
                    <ul>
                        <li> <a href="">Inicio</a></li>
                        <li> <a href="">Memorias</a></li>
                        <li> <a href="">Convocatoria</a></li> 
                        <li> <a href="">Inscripción y Costos</a></li>
                        <li> <a href="ComiteOrg">Comité Organizador</a></li>
                        <li> <a href=""><img class="alineadoicono" src="img/iniciaricono.png">&nbsp;Iniciar Sesión</a></li>
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
       <br>
       <!-- Cuadritos, inicio sesión y calendario  -->
         <!-- Inicio sesión  -->
         <div class="contenedorlogincalendar">
         <div class="row justify-content-start">
    <div class="col-4">   
         <div class="box">
			<div class="loginBox">
				<img class="avatar" src="img/Recurso1.png" alt="user">
				<h1>Iniciar Sesión</h1>
				<form method="POST">
					<!******USERNAME*******>
					<label for="Username">Correo</label>
					<input type="text" placeholder="Ingresa Correo" name="user">

					<!******PASSWORD*******>
					<label for="Password">Contraseña</label>
					<input type="password" placeholder="Ingresa Contraseña" name="pass">

					<input type="submit" value="Iniciar Sesión">

					<a href="#">¿Olvidaste tu contraseña?</a>
					<br>
					<a href="registro.php">¿No tienes una cuenta?</a>
				</form>
			</div>
		</div>
        
          </div>
    <div class="col-13"> 
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
 </div>
  </div> </div>
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
 <div>  
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
   </div>
    </body>
</html>
