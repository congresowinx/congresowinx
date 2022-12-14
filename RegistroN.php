<?php
ini_set("display_errors", 0);
session_start();
?>

<html lang="es">
    <head>
        <link href="icono.ico" type="image/x-icon" rel="shortcut icon" />
        <title>Registro Nuevo Usuario</title>
       <meta charset="UTF-8"> 
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="icon.css">
           <link rel="stylesheet" href="css/estilosmenuarriba.css">
           <link rel="stylesheet" href="css/font-awesome.min.css">
           
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">  
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>
<script src="https://www.google.com/recaptcha/api.js"></script>
  
  <script type="text/javascript" src="js/mostrar.js"></script>
        
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
   
    <meta http-equiv="XX-UA-Compatible" content="ie=edge">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <!-- jQuery Modal -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

    <script>
    function onSubmit(token) {
      document.getElementById("demo-form").submit();
      
    }
    </script>
        
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

      .nav-bar{
      display: none;
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


.boton1 {
    padding: 15px 25px;
    margin: 1px;
    font-size: 16px;
    border: 2px solid #876E13;
    border-radius: 1em;
    color: black;
    cursor: pointer; 
    background: linear-gradient(to right, transparent 50%, #876E13 50%);
    background-size: 200%;
    background-position: left;
    transition: background-position 0.5s;
}

.boton1:hover {
    background-position: right;
    color: white;
    font-weight: 700;
}

.boton2 {
    padding: 15px 25px;
    margin: 1px;
    font-size: 16px;
    border: 2px solid #876E13;
    border-radius: 1em;
    color: black;
    cursor: pointer; 
    background: linear-gradient(to right, transparent 50%, #876E13 50%);
    background-size: 200%;
    background-position: left;
    transition: background-position 0.5s;
}

.boton2:hover {
    background-position: right;
    color: white;
    font-weight: 700;
}

.boton3 {
   padding: 15px 25px;
    margin: 1px;
    font-size: 16px;
    border: 2px solid #876E13;
    border-radius: 1em;
    color: black;
    cursor: pointer; 
    background: linear-gradient(to right, transparent 50%, #876E13 50%);
    background-size: 200%;
    background-position: left;
    transition: background-position 0.5s;
}

.boton3:hover {
    background-position: right;
    color: white;
    font-weight: 700;
}

.boton4 {
    padding: 15px 25px;
    margin: 1px;
    font-size: 16px;
    border: 2px solid #876E13;
    border-radius: 1em;
    color: black;
    cursor: pointer; 
    background: linear-gradient(to right, transparent 50%, #876E13 50%);
    background-size: 200%;
    background-position: left;
    transition: background-position 0.5s;
}

.boton4:hover {
    background-position: right;
    color: white;
    font-weight: 700;
}

.boton5 {
  padding: 15px 25px;
    margin: 1px;
    font-size: 16px;
    border: 2px solid #876E13;
    border-radius: 1em;
    color: black;
    cursor: pointer; 
    background: linear-gradient(to right, transparent 50%, #876E13 50%);
    background-size: 200%;
    background-position: left;
    transition: background-position 0.5s;
}

.boton5:hover {
    background-position: right;
    color: white;
    font-weight: 700;
}

.boton6 {
   padding: 15px 25px;
    margin: 1px;
    font-size: 16px;
    border: 2px solid #876E13;
    border-radius: 1em;
    color: black;
    cursor: pointer; 
    background: linear-gradient(to right, transparent 50%, #876E13 50%);
    background-size: 200%;
    background-position: left;
    transition: background-position 0.5s;
}

.boton6:hover {
    background-position: right;
    color: white;
    font-weight: 700;
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

    .icond {
    color: white;
    text-decoration: none;
    padding: .7rem;
    display: flex;
    transition: all .5s; 
    }

    .menuRB{
        display: none;
    }

    .icon-book {
        background: #876E13;
    }

    .icon-file-text2 {
        background: #2b507c;
    }

    .icon-mic {
        background: #876E13;
    }

    .icon-stack {
        background: #2b507c;
    }

    .icon-key {
        background: #876E13;
    }

    .icon-hearth {
        background: #2b507c;
    }

    .icond:first-child{
        border-radius: 1rem 0 0 0;
    }

    .icond:last-child{
        border-radius: 0 0 0 1rem;
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

/*Aqui Empieza el css de estilos de la pagina de cada uno*
-------------
------------
------------*/			


button{
	background: #2B307C;
	color: #FFF;
	font-size: 20px;
	border-radius: 9px;
	padding: 5px 30px;	
	margin-bottom: -30px; 
	position: relative;
	   top:60%; 
}

.Tema {
	margin: -10px;
	padding: 0 0 50px;
	text-align: center;
	font-size: 50px;
	font-style: normal;
	color: #2B307C;
}

.inputP {
	border: 0.15em solid #2B307C;
        border-radius: 3em;
        margin: 0.25em;
    width: 250px;
}
			

.temaCentral {
	margin: 0;
	padding: 0;
	color: #2B307C;
	background: white;
	border: 0.25em solid #FFF;
	position: absolute;
	transform: translate(0%, -50%);
	font-size: 20px;				
}

			.datosP {
	border-top: 0.25em solid #2B307C;	
}

.C1 {
	text-align: right;
	width: 180px;
	
}

.D1 {
	margin-bottom: 6%;
	margin-top: 3%;
}

.inputNombreC {
        border: 0.15em solid #2B307C;
        width: 500px;
        border-radius: 3em;
      }

@media (max-width: 560px) {
        .inputP {
          width: 75px;
        }

        .content-select {
          width: 160px;
        }

        .temaCentral{
          font-size: 13px;
          
        }
        .contenedorregistroI{
        margin:1em;

      }
    }
      @media (max-width: 370px) {
        .inputP {
          width: 52px;
        }
        .inputNombreC {
          width: 130px;
        }
        .content-select {
          width: 60px;
        }

        .temaCentral{
          font-size: 13px;
          
        }

        .Tema{
          font-size: 40px;
          
        }

        .contenedorregistroI{
        margin:1em;
}
      }


.contenedorregistroI{
    border-radius: 3em;
	border: 0.3em solid #2B307C;
        margin:3em;
}
        </style>
    </head>


<body>
    <!--
Encabezado de la p??gina */
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
                        <li> <a href="memoriascarrusel.php">Memorias</a></li>
                        <li> <a href="convocatoria.php">Convocatoria</a></li> 
                        <li> <a href="inscripcionYcostos.php">Inscripci??n y Costos</a></li>
                        <li> <a href="ComiteOrg.php">Comit?? Organizador</a></li>
                        <li> <a href="ComiteEva">Comit?? Evaluador</a></li>
                        <li> <a href="InicioSesion.php"><img class="alineadoicono" src="img/iniciaricono.png">&nbsp;Iniciar Sesi??n</a></li>
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
   

<div class="contenedorregistroI"> 
  <div class="px-4 pt-5 my-5 text-center border-bottom">
   
    <div class="col-lg-6 mx-auto">
        <?php
          require './PHPMailerAutoload.php';
            if (isset($_POST['uploadBtn'])) {
                $captcha_response = true;
                $recaptcha = $_POST['g-recaptcha-response'];

                $url = 'https://www.google.com/recaptcha/api/siteverify';
                $data = array(
                    'secret' => '6LdLWGcjAAAAAMjwcwR3BYPmMdOzWSFEDh3BZVOR',
                    'response' => $recaptcha
                );
                $options = array(
                    'http' => array (
                        'method' => 'POST',
                        'content' => http_build_query($data)
                    )
                );
                $context  = stream_context_create($options);
                $verify = file_get_contents($url, false, $context);
                $captcha_success = json_decode($verify);
                $captcha_response = $captcha_success->success;

                if ($captcha_response) {

$message = '';
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Enviar') {
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // CON ENCRIPTACI??N
    $newFileName =  strtoupper($_POST["nombre"]) . strtoupper($_POST["apellido"]) . time();
    // $newFileName = hash('md5', $newFileNameSin). '.' . $fileExtension;

    $allowedfileExtensions = array('pdf');


    $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
    $fechaActual = date('Y-m-d');
    /*  echo $fechaActual;
           if($conexion){
            echo "CONEXI??N EXITOSA <br>";
        }else{
            echo "CONEXI??N FALLIDA";
        }  */

    if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["Correo"]) && isset($_POST["pais"]) && isset($_POST["phone"]) && isset($_POST["grado"]) && isset($_POST["institucion"]) && isset($_POST["contrase??a"]) && isset($_POST["contrase??a2"])) {
      $nombre1 = $_POST["nombre"];
      $nombre = strtoupper($nombre1);
      $apellido1 = $_POST["apellido"];
      $apellido = strtoupper($apellido1);

      $Correo = $_POST["Correo"];
      $pais = $_POST["pais"];
      $grado = $_POST["grado"];
      $institucion = $_POST["institucion"];
      $contrase??a = $_POST["contrase??a"];
      $contrase??a = hash('sha512', $contrase??a);
      $contrase??a2 = $_POST["contrase??a2"];
      $contrase??a2 = hash('sha512', $contrase??a2);
      $semblanza =  strval($newFileName);

      $tel = $_POST["phone"];

      $query = "SELECT email, telefono FROM contacto WHERE email='$Correo' OR telefono= '$tel' ";
      $consultaR = pg_query($conexion, $query);
      $cantidad = pg_num_rows($consultaR);
      if ($cantidad > 0) {
        echo "<script>alert('Ya existe un usuario registrado con el mismo email y telefono. Verifica tus datos e intenta nuevamente');</script>";
      } else {

        if ($contrase??a == $contrase??a2) {


          if (in_array($fileExtension, $allowedfileExtensions)) {
            $uploadFileDir = './Semblanza/';
            $dest_path = $uploadFileDir . $newFileName;

            if (move_uploaded_file($fileTmpPath, $dest_path)) {


              $query = ("INSERT INTO usuario (nombre_usuario, apellido_usuario, pais_usuario, usuario, contrase??a, fecha_registro)
                      VALUES('$nombre','$apellido', '$pais', '$Correo', '$contrase??a', '$fechaActual')");
              $consulta1 = pg_query($conexion, $query);

              $query2 = ("Select id_usuario from usuario where usuario='$Correo' ");
              $conn2 = pg_query($conexion, $query2);

              if (!$conn2) {
                die(pg_error($conexion));
              }

              if (pg_num_rows($conn2) > 0) {
                while ($rowData = pg_fetch_array($conn2)) {
                  $conn3 = intval($rowData["id_usuario"]);
                }
              }
              $query3 = ("INSERT INTO contacto (email, telefono, usuario_id) 
                      VALUES('$Correo', '$tel', '$conn3')");
              $consulta2 = pg_query($conexion, $query3);


              $query4 = ("INSERT INTO trayectoria (semblanza_pdf, usuario_id) 
                      VALUES('$semblanza', '$conn3')");
              $consulta4 = pg_query($conexion, $query4);

              $query5 = ("Select id_trayectoria from trayectoria where usuario_id='$conn3' ");
              $conn5 = pg_query($conexion, $query5);

              if (!$conn5) {
                die(pg_error($conexion));
              }

              if (pg_num_rows($conn5) > 0) {
                while ($rowData = pg_fetch_array($conn5)) {
                  $conn4 = intval($rowData["id_trayectoria"]);
                }
              }


              $query6 = ("Select id_grado from grado_academico where titulo= '$grado' ");
              $conn6 = pg_query($conexion, $query6);

              if (!$conn6) {
                die(pg_error($conexion));
              }

              if (pg_num_rows($conn6) > 0) {
                while ($rowData = pg_fetch_array($conn6)) {
                  $conn66 = intval($rowData["id_grado"]);
                }
              }


              $query7 = ("INSERT INTO grado_trayectoria (grado_id, trayectoria_id) 
                      VALUES('$conn66', '$conn4')");
              $consulta7 = pg_query($conexion, $query7);


              $query8 = ("Select id_institucion from institucion where nombre_institucion= '$institucion' ");
              $conn8 = pg_query($conexion, $query8);

              if (!$conn8) {
                die(pg_error($conexion));
              }

              if (pg_num_rows($conn8) > 0) {
                while ($rowData = pg_fetch_array($conn8)) {
                  $conn88 = intval($rowData["id_institucion"]);
                }
              }

              $query9 = ("INSERT INTO trayectoria_institucion (trayectoria_id, institucion_id) 
                      VALUES('$conn4', '$conn88')");
              $consulta9 = pg_query($conexion, $query9);

              $enviarCorreo = false;
              if ($conn66 == 1) {
                $query10 = ("INSERT INTO permisos (permiso_id_rol, usuario_id, estado) 
                      VALUES('0', '$conn3', '1')");
                $consulta10 = pg_query($conexion, $query10);
                $enviarCorreo = true;
              } else if ($conn66 >= 2) {
                $query10 = ("INSERT INTO permisos (permiso_id_rol, usuario_id, estado) 
                      VALUES('1', '$conn3', '1')");
                $consulta10 = pg_query($conexion, $query10);
                $enviarCorreo = true;
              }
              if ($enviarCorreo) {
                // ENVIO DE CORREO  
                $contrase??aSinHash = $_POST["contrase??a"];

                // Create a new PHPMailer instance
                $mail = new PHPMailer();
                $mail->IsSMTP();

                //Configuracion servidor mail
                $mail->From = "pruebascongresomatexv@gmail.com"; //remitente
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'tls'; //seguridad
                $mail->Host = "smtp.gmail.com"; // servidor smtp
                $mail->Port = 587; //puerto
                $mail->Username = 'pruebascongresomatexv@gmail.com'; //nombre usuario
                $mail->Password = 'yttrlwqkltwcpyme'; //contrase??a

                //Agregar destinatario
                $mail->AddAddress($Correo);
                $mail->Subject = "Registro Congreso de Matematicas FES Cuautitlan";
                $mail->Body = "Bienvenid@ {$nombre}, se ha registrado de manera exitosa, esta es su clave: {$contrase??aSinHash}";

                // Enviar
                $mail->Send();

                // Alerta de registro exitoso
                echo "<script>alert('Registrado Exitosamente !!!');</script>";
              }
            } else {
              $message = 'Subida fallida. Tipos de archivo permitidos: ' . implode(',', $allowedfileExtensions);
            }
          } else {
            $message = 'Hay alg??n error en la carga del archivo. Por favor revise el siguiente error.<br>';
            $message .= 'Error:' . $_FILES['uploadedFile']['error'];
          }
        } else {
          echo "<script>alert('Las contrase??as no coinciden. El Registro no se Pudo Realizar. Intenta nuevamente!!');</script>";
          return false;
        }
      }
    }
  }
  
}

$_SESSION['sms'] = $message; 
                   

                   
                } else {
                    echo '<p class="alert alert-danger">Debes indicar que no eres un robot.';
                }
            }
            ?>


      <p class="Tema">Reg??strate</p>
      <form method="POST" enctype="multipart/form-data" >
      <p class="temaCentral">Datos personales</p>


 <div class="datosP">
<br>
  <p class="temaSec">Introducir sus datos correctos, ya que ser??n utilizados para las contancias.</p>

  <div class="D1">
    <!--******DATOS PERSONALES*******-->

    <table>

      <center>
        <tr>
          <td class="C1">
            <label for="Name">Nombre (S):</label>
          </td>
          <td class="C2">
            <input class="inputP" style="text-transform:uppercase;" type="text" name="nombre" placeholder="Ingresa Nombre(s)" required value="<?php echo $_POST["nombre"] ?>"/>
          </td>
        </tr>
      </center>

      <center>
        <tr>
          <td class="C1">
            <label for="Last">Apellido (S):</label>
          </td>
          <td class="C2">
            <input class="inputP" style="text-transform:uppercase;" type="text" name="apellido" placeholder="Ingresa Apellido(s)" required value="<?php echo $_POST["apellido"] ?>"/>
          </td>
        </tr>
      </center>

      <center>
        <tr>
          <td class="C1">
            <label for="Emails">Correo:</label>
          </td>
          <td class="C2">
            <input class="inputP" type="Email" name="Correo" placeholder="Ingresa Correo" required value="<?php echo $_POST["Correo"] ?>"/>
          </td>
        </tr>
      </center>

      <center>
        <tr>
          <td class="C1">
            <label class="C1" for="Country">Pa??s:</label>
          </td>
          <td>
            <select name="pais" class="inputP" required value="<?php echo $_POST["pais"] ?>"/>

              <option value="M??xico">M??xico</option>
              <option value="Afganist??n">Afganist??n</option>
              <option value="Albania">Albania</option>
              <option value="Alemania">Alemania</option>
              <option value="Algeria">Algeria</option>
              <option value="Andorra">Andorra</option>
              <option value="Angola">Angola</option>
              <option value="Anguila">Anguila</option>
              <option value="Ant??rtida">Ant??rtida</option>
              <option value="Antigua y Barbuda">Antigua y Barbuda</option>
              <option value="Antillas Neerlandesas">Antillas Neerlandesas</option>
              <option value="Arabia Saudita">Arabia Saudita</option>
              <option value="Argentina">Argentina</option>
              <option value="Armenia">Armenia</option>
              <option value="Aruba">Aruba</option>
              <option value="Australia">Australia</option>
              <option value="Austria">Austria</option>
              <option value="Azerbay??n">Azerbay??n</option>
              <option value="B??lgica">B??lgica</option>
              <option value="Bahamas">Bahamas</option>
              <option value="Bahrein">Bahrein</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Barbados">Barbados</option>
              <option value="Belice">Belice</option>
              <option value="Ben??n">Ben??n</option>
              <option value="Bhut??n">Bhut??n</option>
              <option value="Bielorrusia">Bielorrusia</option>
              <option value="Birmania">Birmania</option>
              <option value="Bolivia">Bolivia</option>
              <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
              <option value="Botsuana">Botsuana</option>
              <option value="Brasil">Brasil</option>
              <option value="Brun??i">Brun??i</option>
              <option value="Bulgaria">Bulgaria</option>
              <option value="Burkina Faso">Burkina Faso</option>
              <option value="Burundi">Burundi</option>
              <option value="Cabo Verde">Cabo Verde</option>
              <option value="Camboya">Camboya</option>
              <option value="Camer??n">Camer??n</option>
              <option value="Canad??">Canad??</option>
              <option value="Chad">Chad</option>
              <option value="Chile">Chile</option>
              <option value="China">China</option>
              <option value="Chipre">Chipre</option>
              <option value="Ciudad del Vaticano">Ciudad del Vaticano</option>
              <option value="Colombia">Colombia</option>
              <option value="Comoras">Comoras</option>
              <option value="Congo">Congo</option>
              <option value="Corea del Norte">Corea del Norte</option>
              <option value="Corea del Sur">Corea del Sur</option>
              <option value="Costa de Marfil">Costa de Marfil</option>
              <option value="Costa Rica">Costa Rica</option>
              <option value="Croacia">Croacia</option>
              <option value="Cuba">Cuba</option>
              <option value="Dinamarca">Dinamarca</option>
              <option value="Dominica">Dominica</option>
              <option value="Ecuador">Ecuador</option>
              <option value="Egipto">Egipto</option>
              <option value="El Salvador">El Salvador</option>
              <option value="Emiratos ??rabes Unidos">Emiratos ??rabes Unidos</option>
              <option value="Eritrea">Eritrea</option>
              <option value="Eslovaquia">Eslovaquia</option>
              <option value="Eslovenia">Eslovenia</option>
              <option value="Espa??a">Espa??a</option>
              <option value="Estados Unidos de Am??rica">Estados Unidos de Am??rica</option>
              <option value="Estonia">Estonia</option>
              <option value="Etiop??a">Etiop??a</option>
              <option value="Filipinas">Filipinas</option>
              <option value="Finlandia">Finlandia</option>
              <option value="Fiyi">Fiyi</option>
              <option value="Francia">Francia</option>
              <option value="Gab??n">Gab??n</option>
              <option value="Gambia">Gambia</option>
              <option value="Georgia">Georgia</option>
              <option value="Ghana">Ghana</option>
              <option value="Gibraltar">Gibraltar</option>
              <option value="Granada">Granada</option>
              <option value="Grecia">Grecia</option>
              <option value="Groenlandia">Groenlandia</option>
              <option value="Guadalupe">Guadalupe</option>
              <option value="Guam">Guam</option>
              <option value="Guatemala">Guatemala</option>
              <option value="Guayana Francesa">Guayana Francesa</option>
              <option value="Guernsey">Guernsey</option>
              <option value="Guinea">Guinea</option>
              <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
              <option value="Guinea-Bissau">Guinea-Bissau</option>
              <option value="Guyana">Guyana</option>
              <option value="Hait??">Hait??</option>
              <option value="Honduras">Honduras</option>
              <option value="Hong kong">Hong kong</option>
              <option value="Hungr??a">Hungr??a</option>
              <option value="India">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Ir??n">Ir??n</option>
              <option value="Irak">Irak</option>
              <option value="Irlanda">Irlanda</option>
              <option value="Isla Bouvet">Isla Bouvet</option>
              <option value="Isla de Man">Isla de Man</option>
              <option value="Isla de Navidad">Isla de Navidad</option>
              <option value="Isla Norfolk">Isla Norfolk</option>
              <option value="Islandia">Islandia</option>
              <option value="Islas Bermudas">Islas Bermudas</option>
              <option value="Islas Caim??n">Islas Caim??n</option>
              <option value="Islas Cocos (Keeling)">Islas Cocos (Keeling)</option>
              <option value="Islas Cook">Islas Cook</option>
              <option value="Islas de ??land">Islas de ??land</option>
              <option value="Islas Feroe">Islas Feroe</option>
              <option value="Islas Georgias del Sur y Sandwich del Sur">Islas Georgias del Sur y Sandwich del Sur</option>
              <option value="Islas Heard y McDonald">Islas Heard y McDonald</option>
              <option value="Islas Maldivas">Islas Maldivas</option>
              <option value="Islas Malvinas">Islas Malvinas</option>
              <option value="Islas Marianas del Norte">Islas Marianas del Norte</option>
              <option value="Islas Marshall">Islas Marshall</option>
              <option value="Islas Pitcairn">Islas Pitcairn</option>
              <option value="Islas Salom??n">Islas Salom??n</option>
              <option value="Islas Turcas y Caicos">Islas Turcas y Caicos</option>
              <option value="Islas Ultramarinas Menores de Estados Unidos">Islas Ultramarinas Menores de Estados Unidos</option>
              <option value="Islas V??rgenes Brit??nicas">Islas V??rgenes Brit??nicas</option>
              <option value="Islas V??rgenes de los Estados Unidos">Islas V??rgenes de los Estados Unidos</option>
              <option value="Israel">Israel</option>
              <option value="Italia">Italia</option>
              <option value="Jamaica">Jamaica</option>
              <option value="Jap??n">Jap??n</option>
              <option value="Jersey">Jersey</option>
              <option value="Jordania">Jordania</option>
              <option value="Kazajist??n">Kazajist??n</option>
              <option value="Kenia">Kenia</option>
              <option value="Kirgizst??n">Kirgizst??n</option>
              <option value="Kiribati">Kiribati</option>
              <option value="Kuwait">Kuwait</option>
              <option value="L??bano">L??bano</option>
              <option value="Laos">Laos</option>
              <option value="Lesoto">Lesoto</option>
              <option value="Letonia">Letonia</option>
              <option value="Liberia">Liberia</option>
              <option value="Libia">Libia</option>
              <option value="Liechtenstein">Liechtenstein</option>
              <option value="Lituania">Lituania</option>
              <option value="Luxemburgo">Luxemburgo</option>
              <option value="M??xico">M??xico</option>
              <option value="M??naco">M??naco</option>
              <option value="Macao">Macao</option>
              <option value="Maced??nia">Maced??nia</option>
              <option value="Madagascar">Madagascar</option>
              <option value="Malasia">Malasia</option>
              <option value="Malawi">Malawi</option>
              <option value="Mali">Mali</option>
              <option value="Malta">Malta</option>
              <option value="Marruecos">Marruecos</option>
              <option value="Martinica">Martinica</option>
              <option value="Mauricio">Mauricio</option>
              <option value="Mauritania">Mauritania</option>
              <option value="Mayotte">Mayotte</option>
              <option value="Micronesia">Micronesia</option>
              <option value="Moldavia">Moldavia</option>
              <option value="Mongolia">Mongolia</option>
              <option value="Montenegro">Montenegro</option>
              <option value="Montserrat">Montserrat</option>
              <option value="Mozambique">Mozambique</option>
              <option value="Namibia">Namibia</option>
              <option value="Nauru">Nauru</option>
              <option value="Nepal">Nepal</option>
              <option value="Nicaragua">Nicaragua</option>
              <option value="Niger">Niger</option>
              <option value="Nigeria">Nigeria</option>
              <option value="Niue">Niue</option>
              <option value="Noruega">Noruega</option>
              <option value="Nueva Caledonia">Nueva Caledonia</option>
              <option value="Nueva Zelanda">Nueva Zelanda</option>
              <option value="Om??n">Om??n</option>
              <option value="Pa??ses Bajos">Pa??ses Bajos</option>
              <option value="Pakist??n">Pakist??n</option>
              <option value="Palau">Palau</option>
              <option value="Palestina">Palestina</option>
              <option value="Panam??">Panam??</option>
              <option value="Pap??a Nueva Guinea">Pap??a Nueva Guinea</option>
              <option value="Paraguay">Paraguay</option>
              <option value="Per??">Per??</option>
              <option value="Polinesia Francesa">Polinesia Francesa</option>
              <option value="Polonia">Polonia</option>
              <option value="Portugal">Portugal</option>
              <option value="Puerto Rico">Puerto Rico</option>
              <option value="Qatar">Qatar</option>
              <option value="Reino Unido">Reino Unido</option>
              <option value="Rep??blica Centroafricana">Rep??blica Centroafricana</option>
              <option value="Rep??blica Checa">Rep??blica Checa</option>
              <option value="Rep??blica Dominicana">Rep??blica Dominicana</option>
              <option value="Reuni??n">Reuni??n</option>
              <option value="Ruanda">Ruanda</option>
              <option value="Ruman??a">Ruman??a</option>
              <option value="Rusia">Rusia</option>
              <option value="Sahara Occidental">Sahara Occidental</option>
              <option value="Samoa">Samoa</option>
              <option value="Samoa Americana">Samoa Americana</option>
              <option value="San Bartolom??">San Bartolom??</option>
              <option value="San Crist??bal y Nieves">San Crist??bal y Nieves</option>
              <option value="San Marino">San Marino</option>
              <option value="San Mart??n (Francia)">San Mart??n (Francia)</option>
              <option value="San Pedro y Miquel??n">San Pedro y Miquel??n</option>
              <option value="San Vicente y las Granadinas">San Vicente y las Granadinas</option>
              <option value="Santa Elena">Santa Elena</option>
              <option value="Santa Luc??a">Santa Luc??a</option>
              <option value="Santo Tom?? y Pr??ncipe">Santo Tom?? y Pr??ncipe</option>
              <option value="Senegal">Senegal</option>
              <option value="Serbia">Serbia</option>
              <option value="Seychelles">Seychelles</option>
              <option value="Sierra Leona">Sierra Leona</option>
              <option value="Singapur">Singapur</option>
              <option value="Siria">Siria</option>
              <option value="Somalia">Somalia</option>
              <option value="Sri lanka">Sri lanka</option>
              <option value="Sud??frica">Sud??frica</option>
              <option value="Sud??n">Sud??n</option>
              <option value="Suecia">Suecia</option>
              <option value="Suiza">Suiza</option>
              <option value="Surin??m">Surin??m</option>
              <option value="Svalbard y Jan Mayen">Svalbard y Jan Mayen</option>
              <option value="Swazilandia">Swazilandia</option>
              <option value="Tadjikist??n">Tadjikist??n</option>
              <option value="Tailandia">Tailandia</option>
              <option value="Taiw??n">Taiw??n</option>
              <option value="Tanzania">Tanzania</option>
              <option value="Territorio Brit??nico del Oc??ano ??ndico">Territorio Brit??nico del Oc??ano ??ndico</option>
              <option value="Territorios Australes y Ant??rticas Franceses">Territorios Australes y Ant??rticas Franceses</option>
              <option value="Timor Oriental">Timor Oriental</option>
              <option value="Togo">Togo</option>
              <option value="Tokelau">Tokelau</option>
              <option value="Tonga">Tonga</option>
              <option value="Trinidad y Tobago">Trinidad y Tobago</option>
              <option value="Tunez">Tunez</option>
              <option value="Turkmenist??n">Turkmenist??n</option>
              <option value="Turqu??a">Turqu??a</option>
              <option value="Tuvalu">Tuvalu</option>
              <option value="Ucrania">Ucrania</option>
              <option value="Uganda">Uganda</option>
              <option value="Uruguay">Uruguay</option>
              <option value="Uzbekist??n">Uzbekist??n</option>
              <option value="Vanuatu">Vanuatu</option>
              <option value="Venezuela">Venezuela</option>
              <option value="Vietnam">Vietnam</option>
              <option value="Wallis y Futuna">Wallis y Futuna</option>
              <option value="Yemen">Yemen</option>
              <option value="Yibuti">Yibuti</option>
              <option value="Zambia">Zambia</option>
              <option value="Zimbabue">Zimbabue</option>

            </select>
          </td>
        </tr>
      </center>

      <center>
        <tr>
          <td class="C1">
            <label for="Phone">Tel??fono:</label>
          </td>
          <td class="C2">
            <!--   <label for="Lad" id="ladaT" class="ladaS"><input class="inputP" list="tel" type="text" name="tel" placeholder="Ingresa Tel??fono" required  minlength="12" maxlength="14" pattern="[0-9]" ></label>
            -->
            <input id="phone" class="inputP" type="tel" name="phone" required pattern="+[0-9]{14}" maxlength="14" onkeypress="numfinal()" value="<?php echo $_POST["phone"] ?>"/>



          </td>
        </tr>
      </center>

      <center>
        <tr>
          <td class="C1">
            <label for="Password">Contrase??a:</label>
          </td>
          <td class="C2">
            <input class="inputP" id="passwordV1" type="password" name="contrase??a" placeholder="M??ximo 10 caracteres" required minlength="8" maxlength="10" value="<?php echo $_POST["contrase??a"] ?>"/>
            <img src="img/icono_ojo.png" id=M1 name="Q1" type="button" width:="22" height="20" onclick="MostrarP1()">
          </td>
        </tr>
      </center>

      <center>
        <tr>
          <td class="C1">
            <label for="SPassword">Repetir Contrase??a:</label>
          </td>
          <td class="C2">
            <input class="inputP" id="passwordV2" type="password" name="contrase??a2" placeholder="M??ximo 10 caracteres" required minlength="8" maxlength="10" value="<?php echo $_POST["contrase??a2"] ?>"/>
            <img src="img/icono_ojo.png" id=M2 name="Q2" type="button" width:="22" height="20" onclick="MostrarP2()">
          </td>
        </tr>
      </center>

    </table>

  </div>

 </div>

 <p class="temaCentral">Trayectoria Acad??mica</p>

 <div class="datosP">

  <center>
    <div class="D1">
      <td class="C1">
        <label for="GradoA">Grado Ac??demico:</label>
      </td>
      <select name="grado" class="inputP" required value="<?php echo $_POST["grado"] ?>"/>

        <option value="Estudiante">Estudiante</option>
        <option value="Licenciatura">Licenciatura</option>
        <option value="Maestr??a">Maestr??a</option>
        <option value="Doctorado">Doctorado</option>



      </select>

    </div>
  </center>
  <!--******TRAYECTORIA ACADEMICA*******-->



 </div>

 <p class="temaCentral">Trayectoria Laboral</p>

 <div class="datosP">

  <!--******TRAYECTORIA LABORAL*******-->

  <div class="D1">

    <table>
      <center>
        <tr>
          <td class="C1">
            <label for="Institucion">Instituci??n:</label>
          </td>

          <td>
            <select name="institucion" class="inputP" required value="<?php echo $_POST["institucion"] ?>"/>
  
        <option>FES Cuautitl??n</option>
   <?php 
     $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
      $query1 = ("Select * from institucion");
            $conn1 = pg_query($conexion, $query1);

            if (!$conn1) {
              die(pg_error($conexion));
            }

            if (pg_num_rows($conn1) > 0) {
              while ($rowData = pg_fetch_array($conn1)) {
               ?>   
    <option><?php echo $rowData["nombre_institucion"] ?></option>  
               
     <?php } }  ?>
              

            </select>
          </td>

        </tr>
      </center>
    </table>

  </div>
 </div>

 <p class="temaCentral">Semblanza</p>

 <div class="datosP">

  <!--******SEMBLANZA*******-->

<br>
  <p class="temaTer">En una cuartilla formato PDF, en Arial 12 interlineado sencillo, destacando estudios, participaciones en congresos y publicaciones. El archivo deber?? ser nombrado de la siguiente manera: NombrePrimerapellido_semblanza, ejemplo: JuanHernandez_semblanza.pdf </p>

  <input type="file" name="uploadedFile" accept="application/pdf" required value="<?php echo $_POST["uploadedFile"] ?>"/>

 </div>

 <div class="final">

<br>
  <p class="temaF"><input type="checkbox" name="File" required>"He le??do y Acepto" las <a href="#ex1" rel="modal:open">Pol??ticas de privacidad.</a></p>

  <div id="ex1" class="modal">
    <p>
      <center>
        <h3>Aviso de Privacidad Integral</h3>
      </center> <br>
      La Facultad de Estudios Superiores Cuautitl??n, con domicilio Carretera Cuautitl??n-Teoloyucan Km. 2.5, San Sebasti??n Xhala, Cuautitl??n Izcalli, Edo. de M??x., con c??digo postal 54714, es el responsable del tratamiento de los datos personales que nos proporcione, los cuales ser??n protegidos conforme a lo dispuesto por la <b><i>Ley General De Transparencia Y Acceso A La Informaci??n P??blica de M??xico</i></b>, y dem??s normatividad que resulte aplicable.<br>

    <h4>Finalidades del tratamiento</h4>
    Esta es responsable del tratamiento de sus datos personales para el registro de usted en calidad de alumno, docente, personal de la entidad acad??mica, conferencista o invitado externo (nacional o extranjero), los cuales ser??n utilizados para las siguientes finalidades:<br>
    <br><b>a)</b> Registrar su inscripci??n a conferencia, talleres, etc.<br>
    <b>b)</b> Generar listas de asistencias y validaci??n de las mismas.<br>
    <b>c)</b> Emisi??n de constancia de participaci??n o asistencia de acuerdo a la modalidad de que se trate.<br>
    <b>d)</b> Establecer comunicaci??n para dar seguimiento de las ponencias, talleres y trabajos adem??s de aclaraci??n de dudas sobre sus datos, notificaci??n de cancelaci??n o cambio de horario, fecha o sede.<br>
    Y <b>e)</b> Generar estad??sticas para informes obligatorios del Instituto ante otros organismos p??blicos o privados, Realizar estad??sticas y an??lisis para informes obligatorios del congreso para la planeaci??n y evaluaci??n.<br>

    <br>De manera adicional, utilizaremos su informaci??n personal para las siguientes finalidades que no son necesarias, pero que nos permiten y facilitan brindarle una mejor atenci??n:<br>

    <br>??? Env??o de material de exposici??n o apoyo.<br>
    ??? Invitaciones a futuros congresos.<br>

    <h4>Datos personales recabados</h4>
    Para las finalidades antes se??aladas se solicitar??n los siguientes datos personales: nombre completo, lugar o instituci??n de procedencia, tel??fono y correo electr??nico.<br>
    Se informa que no se recaban datos personales sensibles.<br>

    <h4>Fundamento legal</h4>
    El fundamento para el tratamiento de datos personales son los art??culos:<br>
    <br><b>a)</b> Art??culo 13. En la generaci??n, publicaci??n y entrega de informaci??n se deber?? garantizar que ??sta sea accesible, confiable, verificable, veraz, oportuna y atender?? las necesidades del derecho de acceso a la informaci??n de toda persona.<br>
    <b>b)</b> Los art??culos 6??, Base A y 16, segundo p??rrafo, de la Constituci??n Pol??tica de los Estados Unidos Mexicanos; el 3??, fracci??n XXXIII, 4??, 16, 17, 18, 20, 21, 22, 23, 26, 27 y 28 de la Ley General de Protecci??n de Datos Personales en Posesi??n de Sujetos Obligados, as?? como los numerales del 5 al 19 de los Lineamientos para la Protecci??n de Datos Personales en Posesi??n de la Universidad Nacional Aut??noma de M??xico, publicados en la Gaceta UNAM el 25 de febrero de 2019.<br>

    <h4>Transferencia de datos personales</h4>
    Se informa que no realizar??n transferencias que requieran su consentimiento, salvo aquellas que sean necesarias para atender requerimientos de informaci??n de una autoridad competente, debidamente fundados y motivados.<br>

    <h4>Derechos ARCO</h4>
    Usted tiene derecho a conocer qu?? datos personales se tienen de usted, para qu?? se utilizan y las condiciones del uso que les damos (Acceso). Asimismo, es su derecho solicitar la correcci??n de su informaci??n personal en caso de que est?? desactualizada, sea inexacta o incompleta (Rectificaci??n); que la eliminemos de nuestros registros o bases de datos cuando considere que la misma no est?? siendo utilizada conforme a los principios, deberes y obligaciones previstas en la ley (Cancelaci??n); as?? como oponerse al uso de sus datos personales para fines espec??ficos (Oposici??n). Estos derechos se conocen como derechos ARCO.<br>

    <br>Para ejercer sus derechos de acceso, rectificaci??n, cancelaci??n y oposici??n lo podr?? hacer en la Unidad de Transparencia de la UNAM, o a trav??s de la Plataforma Nacional de Transparencia <i>(http://www.plataformadetransparencia.org.mx/)</i>.<br>

    <br>La determinaci??n adoptada, se le comunicar?? en un plazo m??ximo de veinte d??as h??biles contados desde la fecha en que se recibi?? la solicitud, a efecto de que, si resulta procedente, haga efectiva la misma dentro de los quince d??as h??biles siguientes a que se comunique la respuesta.<br>
    <br>Puede revocar el consentimiento que, en su caso, nos haya otorgado para el tratamiento de sus datos personales. Sin embargo, es importante que tenga en cuenta que no en todos los casos podremos atender su solicitud o concluir el uso de forma inmediata, ya que es posible que por alguna obligaci??n legal requiramos seguir tratando sus datos personales. Asimismo, usted deber?? considerar que, para ciertos fines, la revocaci??n de su consentimiento implicar?? que no le podamos seguir prestando el servicio del sistema en l??nea que nos solicit??, o la conclusi??n de su relaci??n con nosotros.<br>


    <h4>Modificaciones al Aviso de Privacidad</h4>
    El presente aviso de privacidad puede sufrir modificaciones o actualizaciones. Dichas actualizaciones o modificaciones estar??n disponibles al p??blico, por lo que el Titular podr?? consultarlas en el sitio web ???insertar sitio web???, en la secci??n Aviso de Privacidad. Se recomienda y requiere al Titular consultar el Aviso de Privacidad, por lo menos semestralmente para estar actualizado de las condiciones y t??rminos de este.<br>
    </p>
    <a href="#" rel="modal:close">Cerrar Ventana</a>

  </div>
 <center> 
<div class="g-recaptcha" required data-sitekey="6LdLWGcjAAAAAKPWsfyRYT5BposgMdreUWztAlb_" data-callback="correctCaptcha"></div>

</center>

  <div class="container px-4 py-5" id="hanging-icons">
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

      
      <div class="col d-flex align-items-start">
        <div class="icon-square  d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
        </div>
        <div>
           <button name="uploadBtn" class="enviarBtn" class="fs-5" value="Enviar">Registrarse</button>
        </div>
      </div>

      <div class="col d-flex align-items-start">
        <div class="icon-square  d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
        </div>
        <div>
        <button name="salirboton" class="fs-5"><a href="RegistroN.php" style="color: white;">Limpiar</a></button>
        </div>
      </div>

      <div class="col d-flex align-items-start">
        <div class="icon-square  d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
        </div>
        <div>
          <button name="limpiarboton" class="fs-5"> <a href="index3.php" style="color: white;">Salir</a></button>
        </div>
      </div>
    </div>
  </div>
 
  

  <!--******CAMPO 1*******-->           
                           
      </form>                          
       </div>
  </div>
 </div>
  

</div>

<div class="alert alert-info" style="display: none;"></div>

  <div>
    </div>

    
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
          <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted">Facultad de Estudios Superiores Cuautitl??n</li>
        </ul>
        </div>

        <div class="col-6 col-md-2 mb-3">
        <h5 style="color: #FFFFFF;">UBICACI??N</h5>
        <ul class="nav flex-column">
          <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted">Km 2.5 carretera Cuautitl??n-Teoloyucan, San Sebasti??n Xhala, Cuautitl??n Izcalli, Estado de M??xico. C.P. 54714.</li>
        </ul>
        </div>
        
        <div class="col-6 col-md-2 mb-3">
        <h5 style="color: #FFFFFF;">TEL??FONO</h5>
        <ul class="nav flex-column">
          <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> (55) 56 23 18 86 / (55) 56 23 18 90</li>
          <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted">Para mayores informes o dudas comunicarse al Departamento de Matem??ticas Edificio A8 Campo 4.</li>
        </ul>
        </div>

  <div class="containerCredi">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li style="color: #FFFFFF;"class="nav-item" class="nav-link px-2 text-muted">Sitio Web administrado por: Departamento de Matem??ticas</li>
       <li style="color: #FFFFFF;" class="nav-item" class="nav-link px-2 text-muted">Esta p??gina puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente
        completa y su direcci??n electr??nica.</li>
         <li style="color: #FFFFFF;" class="nav-item" class="nav-link px-2 text-muted">De otra forma requiere permiso previo por escrito de la instituci??n</li>
    </ul>
    <center>
      <p style="color: #FFFFFF;">&copy; <?php echo date('Y'); ?> Hecho en M??xico, todos los derechos reservados. </p>
    </center>
  </footer>
</div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
           
</body>

<script>
  const phoneInputField = document.querySelector("#phone");
  const phoneInput = window.intlTelInput(phoneInputField, {
    preferredCountries: ["mx"],
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    autoHideDialCode: false,
    nationalMode: false
  });
</script>

</html>