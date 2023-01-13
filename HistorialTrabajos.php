<?php
include 'credentials.php';
session_start();
error_reporting(0);
$varsec=$_SESSION['nombre_usuario'];
if($varsec == null || $varsec = '') {
    header('Location:404.php');
    session_destroy();
    session_unset();
    die();
}?>


<html lang="es">
<head>
  <link href="icono.ico" type="image/x-icon" rel="shortcut icon" />
  <title>Historial de Trabajos</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
  <link rel="stylesheet" href="icon.css">
  <link rel="stylesheet" href="css/estilosmenuarriba.css">
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <!---banderas--->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

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


    .nav-bar {
      display: none;
    }

    .feature-icon {
      width: 4rem;
      height: 4rem;
      border-radius: .75rem;
    }

    .icon-link>.bi {
      margin-top: .125rem;
      margin-left: .125rem;
      fill: currentcolor;
      transition: transform .25s ease-in-out;
    }

    .icon-link:hover>.bi {
      transform: translate(.25rem);
    }

    .icon-square {
      width: 3rem;
      height: 3rem;
      border-radius: .75rem;
    }

    .text-shadow-1 {
      text-shadow: 0 .125rem .25rem rgba(0, 0, 0, .25);
    }

    .text-shadow-2 {
      text-shadow: 0 .25rem .5rem rgba(0, 0, 0, .25);
    }

    .text-shadow-3 {
      text-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .25);
    }

    .card-cover {
      background-repeat: no-repeat;
      background-position: center center;
      background-size: cover;
    }

    .feature-icon-small {
      width: 3rem;
      height: 3rem;
    }

    

    /*Aqui Empieza el css de estilos de la pagina de cada uno*
-------------
------------
------------*/

    button {
      background: #2B307C;
      color: #FFF;
      font-size: 20px;
      border-radius: 9px;
      padding: 5px 30px;
      margin-bottom: -30px;
      position: relative;
      top: 60%;


    }

    .register label {
      margin: 0;
      margin-top: 50px;
      padding: 0;
      color: #2B307C;
    }

    .register input {

      border-radius: 9px;

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
      border: 0.15em solid #B18904;
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
      font-size: 18px;
    }

    .inputNombreC2 {
				border: 0.15em solid #B18904;
				width: 500px;
        border-radius: 3em;
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
      text-align: left;
    }

    @media (max-width: 600px) {
      .inputP {
        width: 150px;
        text-align: left;
        left: 55%;
      }

      .temaCentral {
        font-size: 13px;

      }
     
    }

    .ContenedorPrincipal {
      border-radius: 3em;
      border: 0.3em solid #2B307C;
      margin: 3em;
    }

    .table-responsive{

margin:1em;
height: 60%;

border-radius: 1em;

width: auto;
}
  </style>
</head>


<body>
  <!--
Encabezado de la página */
        */banner, menu, carrusel, cuadro iniciar, cuadro fechas, -->
  <!-- Baner -->


  <div id="wrapper">
    <center> <img src="img/banpru.jpg" class="baner" /> </center>
  </div>

  <!-- Barra de menu -->
  <div>
    <header>
      <input type="checkbox" id="btn-menu">
      <label for="btn-menu"><img src="img/menuicono11.png" alt=""> </label>
      <nav class="menu" style="z-index: 1;">
        <ul>
        <li> <a href="indexSesion.php">Inicio</a></li>
                        <li> <a href="memoriascarruselSesion.php">Memorias</a></li>
                        <li> <a href="convocatoriaSesion.php">Convocatoria</a></li> 
                        <li>  <a href="inscripcionYcostosSesion.php">Inscripción y Costos</a></li>
                        <li> <a href="ComiteOrgSesion">Comité Organizador</a></li>
                        <li> <a href="ComiteEvaSesion">Comité Evaluador</a></li>
                        <li> <a href="destroySesion.php"><img class="alineadoicono" src="img/iniciaricono.png">&nbsp;Cerrar  Sesión</a></li>
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
                      <li> <a href="ponencias_infoSesion.php">Ponencias</a></li>  
                        <li> <a href="carteles_infoSesion.php">Carteles</a></li>
                        <li> <a href="talleres_infoSesion.php">Talleres</a></li>
                    </ul>  
                </nav>         
    </header>
  </div>

  <div class="ContenedorPrincipal">
    <div class="px-4 pt-5 my-5 text-center border-bottom">

      <div class="col-lg-6 mx-auto">

        <form action="#" method="POST">
          <!-- Aqui va el codigo de cada uno-->

          <p class="Tema">Trabajos</p>

          <!--DATOS-->
          <div class="datosP">
            <div class="D1">
              <table>
                <center>
                  <tr>
                    <p class="temaSec">Aqui podras visualizar los trabajos que tienes registrados y su estado.</p> 
                    <p>Desliza las barras para poder ver todos los datos de tus trabajos. </p>
                  </tr>
                </center>
               </table>
               
               <input name = "id" class="datosP" type="text" value="<?= $varId ?>" readonly>
               <br> <br>
               <p class="temaCentral">Ponencias </p>
				<div class="datosP">					                                        
                                        <div class="D1">

               <div class="table-responsive">

      <table class="table table-bordered border border-secondary"  ><center>

               <table class="inputNombreC" > 

<tr class="inputNombreC2" >
<thead>
					<th rowspan="2"class="inputNombreC2"><center>Titulo Trabajo</center></th>
          <th  rowspan="2" class="inputNombreC2"><center>Categoria</center></th>
              <th rowspan="2" class="inputNombreC2"><center>Fecha del Trabajo </center></th>
					<th colspan="3" class="inputNombreC2"><center>RESUMEN</center></th>
          <th colspan="3" class="inputNombreC2"><center>EXTENSO</center></th>
          <th colspan="2" class="inputNombreC2"><center>VIDEO</center></th>
				</tr>
				<tr>
        <th class="inputNombreC2"><center>Estado Actual de la Evaluacion</center></th>
        <th class="inputNombreC2"><center>Fecha de la Evaluacion</center></th>
        <th class="inputNombreC2"><center>Opción</center></th>
				
        <th class="inputNombreC2"><center>Estado Actual de la Evaluacion</center></th>
        <th class="inputNombreC2"><center>Fecha de la Evaluacion</center></th>
        <th class="inputNombreC2"><center>Opción</center></th>

        <th class="inputNombreC2"><center>Estado Actual de la Evaluacion</center></th>
        <th class="inputNombreC2"><center>Fecha de la Evaluacion</center></th>
				</tr>
			</thead>
		
               <?php 
           $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
            $query3 = ("Select * from ponente_trabajos WHERE ponente_id='$varId'");
                  $conn3 = pg_query($conexion, $query3);
                  if (!$conn3) {
                    die(pg_error($conexion));
                  }
                  if (pg_num_rows($conn3) > 0) {
                    while ($rowData3 = pg_fetch_array($conn3)) {
                $id_tra= $rowData3["trabajos_id"];


                $queryP = ("Select * from ponencia WHERE id_trabajos='$id_tra'");
                  $connP = pg_query($conexion, $queryP);
                  if (!$connP) {
                    die(pg_error($conexion));
                  }
                  if (pg_num_rows($connP) > 0) {
                    while ($rowDataPon = pg_fetch_array($connP)) {
                $id_Pon= $rowDataPon["id_trabajos"];


                $query1P = ("Select * from trabajos WHERE id_trabajo='$id_Pon'");
                  $conn1P = pg_query($conexion, $query1P);
                  if (!$conn1P) {
                    die(pg_error($conexion));
                  }
                  if (pg_num_rows($conn1P) > 0) {
                    while ($rowDataPon = pg_fetch_array($conn1P)) {
                $id_trabajo= $rowDataPon["id_trabajo"];
              
//evaluacion resumen de ponencia
                $queryERP = ("Select * from evaluacion_resumen ");
                  $connERP = pg_query($conexion, $queryERP);
                  if (!$connERP) {
                    die(pg_error($conexion));
                  }
                  if (pg_num_rows($connERP) > 0) {
                    while ($rowDataEvaResP = pg_fetch_array($connERP)) {
                $id_EvResP= $rowDataEvaResP["evaluacion_id"];

                $queryERP2 = ("Select * from evaluacion WHERE id_evaluacion='$id_EvResP'");
                $connERP2 = pg_query($conexion, $queryERP2);
                if (!$connERP2) {
                  die(pg_error($conexion));
                }
                if (pg_num_rows($connERP2) > 0) {
                  while ($rowDataEvaResP2 = pg_fetch_array($connERP2)) {
              $id_EvResP2= $rowDataEvaResP2["id_evaluacion"];

              $queryERP3 = ("Select * from evaluacion_trabajos WHERE trabajos_id='$id_tra' and evaluacion_id = '$id_EvResP2' ");
              $connERP3 = pg_query($conexion, $queryERP3);
                if (!$connERP3) {
                  die(pg_error($conexion));
                }
                if (pg_num_rows($connERP3) > 0) {
                  while ($rowDataEvaResP3 = pg_fetch_array($connERP3)) {

              //EVALUACION EXTENSO DE PONENCIA
               $queryEXP = ("Select * from evaluacion_extenso ");
                    $connEXP = pg_query($conexion, $queryEXP);
                    if (!$connEXP) {
                      die(pg_error($conexion));
                    }
                    if (pg_num_rows($connEXP) > 0) {
                      while ($rowDataEvaExP = pg_fetch_array($connEXP)) {
                  $id_EvExP= $rowDataEvaExP["evaluacion_id"];
  
                  $queryEXP2 = ("Select * from evaluacion WHERE id_evaluacion='$id_EvExP'");
                  $connEXP2 = pg_query($conexion, $queryEXP2);
                    if (!$connEXP2) {
                      die(pg_error($conexion));
                    }
                    if (pg_num_rows($connEXP2) > 0) {
                      while ($rowDataEvaExP2 = pg_fetch_array($connEXP2)) {
                  $id_EvExP2= $rowDataEvaExP2["id_evaluacion"];
  
                $queryEXP3 = ("Select * from evaluacion_trabajos WHERE trabajos_id='$id_tra' and evaluacion_id = '$id_EvExP2' ");
                $connEXP3 = pg_query($conexion, $queryEXP3);
                  if (!$connEXP3) {
                    die(pg_error($conexion));
                  }
                  if (pg_num_rows($connEXP3) > 0) {
                    while ($rowDataEvaExP3 = pg_fetch_array($connEXP3)) {

                      //EVALUACION VIDEO DE PONENCIA
               $queryEVP = ("Select * from evaluacion_video ");
               $connEVP = pg_query($conexion, $queryEVP);
               if (!$connEVP) {
                 die(pg_error($conexion));
               }
               if (pg_num_rows($connEVP) > 0) {
                 while ($rowDataEvaVP = pg_fetch_array($connEVP)) {
             $id_EvViP= $rowDataEvaVP["evaluacion_id"];

             $queryEVP2 = ("Select * from evaluacion WHERE id_evaluacion='$id_EvViP'");
             $connEVP2 = pg_query($conexion, $queryEVP2);
             if (!$connEVP2) {
               die(pg_error($conexion));
             }
             if (pg_num_rows($connEVP2) > 0) {
               while ($rowDataEvaVP2 = pg_fetch_array($connEVP2)) {
           $id_EvViP2= $rowDataEvaVP2["id_evaluacion"];

           $queryEVP3 = ("Select * from evaluacion_trabajos WHERE trabajos_id='$id_tra' and evaluacion_id = '$id_EvViP2' ");
           $connEVP3 = pg_query($conexion, $queryEVP3);
             if (!$connEVP3) {
               die(pg_error($conexion));
             }
             if (pg_num_rows($connEVP3) > 0) {
               while ($rowDataEvaVP3 = pg_fetch_array($connEVP3)) {

                 ?>       
           <tr class="inputNombreC2">
            <!-- tabla trabajos PONENCIAS -->
           <th class="inputNombreC2"><center><?php echo $rowDataPon["titulo"] ?></center></th>
           <th class="inputNombreC2"><center><?php echo $rowDataPon["categoria"] ?></center></th>
           <th class="inputNombreC2"><center><?php echo $rowDataPon["fecha_trabajos"] ?></center></th>
              <!-- tabla evaluacion_trabajos RESUMEN PONENCIAS --> 
              <th class="inputNombreC2"><center><?php echo $rowDataEvaResP3["estado"] ?> </center></th>
           <th class="inputNombreC2"><center><?php echo $rowDataEvaResP3["fecha"] ?></center></th>

              <td class="inputNombreC2">
                 <button class="button2" onclick="getElementsByTagName('textareaa').readonly:false;" value="<?php echo $rowDataEvaResP3["estado"]?>" <?php echo ($rowDataEvaResP3["estado"]=="ACEPTADO"?"disabled":"")?>>Corregir Resumen</button> </a>
                 <br> <br> <br>
                 <a href="registrotrabajoponencias.php?id=<?php echo $rowDataPon["id_trabajo"];?>"> 
                  <button class="button2" onclick="getElementsByTagName('textareaa').readonly:false;">Enviar Extenso</button> </a> 
            </td>
             <!-- tabla evaluacion_trabajos EXTENSO PONENCIAS --> 
             <th class="inputNombreC2"><center><?php echo $rowDataEvaExP3["estado"] ?> </center></th>
           <th class="inputNombreC2"><center><?php echo $rowDataEvaExP3["fecha"] ?></center></th>
              <th class="inputNombreC2">
                 <button class="button2" onclick="getElementsByTagName('textareaa').readonly:false;">Corregir Extenso</button> </a>
                 <br> <br> <br>
                 <button class="button2" onclick="getElementsByTagName('textareaa').readonly:false;">Enviar Video</button> </a> 
            </th>
            <!-- tabla evaluacion_trabajos VIDEO PONENICAS --> 
            <th class="inputNombreC2"><center><?php echo $rowDataEvaVP3["estado"] ?> </center></th>
           <th class="inputNombreC2"><center><?php echo $rowDataEvaVP3["fecha"] ?></center></th>
            </tr>  
                 
            <?php } }  } } } } } } } } } } } } } } } } } } } } } }?>
       
</table> </center></table>
            </div>
           </div>

           <p class="temaCentral">Carteles </p>
				<div class="datosP">					                                        
                                        <div class="D1">

               <div class="table-responsive">

      <table class="table table-bordered border border-secondary"  ><center>

               <table class="inputNombreC" > 

<tr class="inputNombreC2" >
<thead>
<th rowspan="2"class="inputNombreC2"><center>Titulo Trabajo</center></th>
          <th  rowspan="2" class="inputNombreC2"><center>Categoria</center></th>
              <th rowspan="2" class="inputNombreC2"><center>Fecha del Trabajo </center></th>
					<th colspan="3" class="inputNombreC2"><center>RESUMEN</center></th>
          <th colspan="3" class="inputNombreC2"><center>CARTEL</center></th>
          <th colspan="2" class="inputNombreC2"><center>VIDEO</center></th>
				</tr>
				<tr>
        <th class="inputNombreC2"><center>Estado Actual de la Evaluacion</center></th>
        <th class="inputNombreC2"><center>Fecha de la Evaluacion</center></th>
        <th class="inputNombreC2"><center>Opción</center></th>
				
        <th class="inputNombreC2"><center>Estado Actual de la Evaluacion</center></th>
        <th class="inputNombreC2"><center>Fecha de la Evaluacion</center></th>
        <th class="inputNombreC2"><center>Opción</center></th>

        <th class="inputNombreC2"><center>Estado Actual de la Evaluacion</center></th>
        <th class="inputNombreC2"><center>Fecha de la Evaluacion</center></th>
				</tr>
			</thead>
		
      <?php 
           $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
            $query3 = ("Select * from ponente_trabajos WHERE ponente_id='$varId'");
                  $conn3 = pg_query($conexion, $query3);
                  if (!$conn3) {
                    die(pg_error($conexion));
                  }
                  if (pg_num_rows($conn3) > 0) {
                    while ($rowData3 = pg_fetch_array($conn3)) {
                $id_tra= $rowData3["trabajos_id"];


                $queryP = ("Select * from carteles WHERE id_trabajos='$id_tra'");
                  $connP = pg_query($conexion, $queryP);
                  if (!$connP) {
                    die(pg_error($conexion));
                  }
                  if (pg_num_rows($connP) > 0) {
                    while ($rowDataPon = pg_fetch_array($connP)) {
                $id_Pon= $rowDataPon["id_trabajos"];


                $query1P = ("Select * from trabajos WHERE id_trabajo='$id_Pon'");
                  $conn1P = pg_query($conexion, $query1P);
                  if (!$conn1P) {
                    die(pg_error($conexion));
                  }
                  if (pg_num_rows($conn1P) > 0) {
                    while ($rowDataPon = pg_fetch_array($conn1P)) {
                $id_trabajo= $rowDataPon["id_trabajo"];
              
//evaluacion resumen de carteles
                $queryERP = ("Select * from evaluacion_resumen ");
                  $connERP = pg_query($conexion, $queryERP);
                  if (!$connERP) {
                    die(pg_error($conexion));
                  }
                  if (pg_num_rows($connERP) > 0) {
                    while ($rowDataEvaResP = pg_fetch_array($connERP)) {
                $id_EvResP= $rowDataEvaResP["evaluacion_id"];

                $queryERP2 = ("Select * from evaluacion WHERE id_evaluacion='$id_EvResP'");
                $connERP2 = pg_query($conexion, $queryERP2);
                if (!$connERP2) {
                  die(pg_error($conexion));
                }
                if (pg_num_rows($connERP2) > 0) {
                  while ($rowDataEvaResP2 = pg_fetch_array($connERP2)) {
              $id_EvResP2= $rowDataEvaResP2["id_evaluacion"];

              $queryERP3 = ("Select * from evaluacion_trabajos WHERE trabajos_id='$id_tra' and evaluacion_id = '$id_EvResP2' ");
              $connERP3 = pg_query($conexion, $queryERP3);
                if (!$connERP3) {
                  die(pg_error($conexion));
                }
                if (pg_num_rows($connERP3) > 0) {
                  while ($rowDataEvaResP3 = pg_fetch_array($connERP3)) {

              //EVALUACION CARTEL
               $queryEXP = ("Select * from evaluacion_cartel ");
                    $connEXP = pg_query($conexion, $queryEXP);
                    if (!$connEXP) {
                      die(pg_error($conexion));
                    }
                    if (pg_num_rows($connEXP) > 0) {
                      while ($rowDataEvaExP = pg_fetch_array($connEXP)) {
                  $id_EvExP= $rowDataEvaExP["evaluacion_id"];
  
                  $queryEXP2 = ("Select * from evaluacion WHERE id_evaluacion='$id_EvExP'");
                  $connEXP2 = pg_query($conexion, $queryEXP2);
                    if (!$connEXP2) {
                      die(pg_error($conexion));
                    }
                    if (pg_num_rows($connEXP2) > 0) {
                      while ($rowDataEvaExP2 = pg_fetch_array($connEXP2)) {
                  $id_EvExP2= $rowDataEvaExP2["id_evaluacion"];
  
                $queryEXP3 = ("Select * from evaluacion_trabajos WHERE trabajos_id='$id_tra' and evaluacion_id = '$id_EvExP2' ");
                $connEXP3 = pg_query($conexion, $queryEXP3);
                  if (!$connEXP3) {
                    die(pg_error($conexion));
                  }
                  if (pg_num_rows($connEXP3) > 0) {
                    while ($rowDataEvaExP3 = pg_fetch_array($connEXP3)) {

                      //EVALUACION VIDEO DE CARTEL
               $queryEVP = ("Select * from evaluacion_video ");
               $connEVP = pg_query($conexion, $queryEVP);
               if (!$connEVP) {
                 die(pg_error($conexion));
               }
               if (pg_num_rows($connEVP) > 0) {
                 while ($rowDataEvaVP = pg_fetch_array($connEVP)) {
             $id_EvViP= $rowDataEvaVP["evaluacion_id"];

             $queryEVP2 = ("Select * from evaluacion WHERE id_evaluacion='$id_EvViP'");
             $connEVP2 = pg_query($conexion, $queryEVP2);
             if (!$connEVP2) {
               die(pg_error($conexion));
             }
             if (pg_num_rows($connEVP2) > 0) {
               while ($rowDataEvaVP2 = pg_fetch_array($connEVP2)) {
           $id_EvViP2= $rowDataEvaVP2["id_evaluacion"];

           $queryEVP3 = ("Select * from evaluacion_trabajos WHERE trabajos_id='$id_tra' and evaluacion_id = '$id_EvViP2' ");
           $connEVP3 = pg_query($conexion, $queryEVP3);
             if (!$connEVP3) {
               die(pg_error($conexion));
             }
             if (pg_num_rows($connEVP3) > 0) {
               while ($rowDataEvaVP3 = pg_fetch_array($connEVP3)) {

                 ?>       
           <tr class="inputNombreC2">
            <!-- tabla trabajos CARTEL -->
           <th class="inputNombreC2"><center><?php echo $rowDataPon["titulo"] ?></center></th>
           <th class="inputNombreC2"><center><?php echo $rowDataPon["categoria"] ?></center></th>
           <th class="inputNombreC2"><center><?php echo $rowDataPon["fecha_trabajos"] ?></center></th>
              <!-- tabla evaluacion_trabajos RESUMEN CARTEL --> 
              <th class="inputNombreC2"><center><?php echo $rowDataEvaResP3["estado"] ?> </center></th>
           <th class="inputNombreC2"><center><?php echo $rowDataEvaResP3["fecha"] ?></center></th>

              <th class="inputNombreC2">
                 <button class="button2" onclick="getElementsByTagName('textareaa').readonly:false;">Corregir Resumen</button> </a>
                 <br> <br> <br>
                 <a href="registrotrabajoponencias.php"> <button class="button2" onclick="getElementsByTagName('textareaa').readonly:false;">Enviar Cartel</button> </a> 
            </th>
             <!-- tabla evaluacion_trabajos CARTEL --> 
             <th class="inputNombreC2"><center><?php echo $rowDataEvaExP3["estado"] ?> </center></th>
           <th class="inputNombreC2"><center><?php echo $rowDataEvaExP3["fecha"] ?></center></th>
              <th class="inputNombreC2">
                 <button class="button2" onclick="getElementsByTagName('textareaa').readonly:false;">Corregir Cartel</button> </a>
                 <br> <br> <br>
                 <button class="button2" onclick="getElementsByTagName('textareaa').readonly:false;">Enviar Video</button> </a> 
            </th>
            <!-- tabla evaluacion_trabajos VIDEO CARTEL --> 
            <th class="inputNombreC2"><center><?php echo $rowDataEvaVP3["estado"] ?> </center></th>
           <th class="inputNombreC2"><center><?php echo $rowDataEvaVP3["fecha"] ?></center></th>
            </tr>  
                 
            <?php } }  } } } } } } } } } } } } } } } } } } } } } }?>              
       
</table> </center></table>
                  </div> </div>
        </form> 

        <p class="temaCentral">Talleres</p>
				<div class="datosP">					                                        
                                        <div class="D1">

               <div class="table-responsive">

      <table class="table table-bordered border border-secondary"  ><center>

               <table class="inputNombreC" > 

<tr class="inputNombreC2" >
<thead>
					<th rowspan="2"class="inputNombreC2"><center>Titulo Trabajo</center></th>
          <th  rowspan="2" class="inputNombreC2"><center>Categoria</center></th>
              <th rowspan="2" class="inputNombreC2"><center>Fecha del Trabajo </center></th>
					<th colspan="3" class="inputNombreC2"><center>RESUMEN</center></th>
          <th colspan="3" class="inputNombreC2"><center>TALLER</center></th>
				</tr>
				<tr>
        <th class="inputNombreC2"><center>Estado Actual de la Evaluacion</center></th>
        <th class="inputNombreC2"><center>Fecha de la Evaluacion</center></th>
        <th class="inputNombreC2"><center>Opción</center></th>
        <th class="inputNombreC2"><center>Estado Actual de la Evaluacion</center></th>
        <th class="inputNombreC2"><center>Fecha de la Evaluacion</center></th>
        <th class="inputNombreC2"><center>Opción</center></th>
				</tr>
			</thead>
		
               <?php 
           $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
            $query3 = ("Select * from ponente_trabajos WHERE ponente_id='$varId'");
                  $conn3 = pg_query($conexion, $query3);

                  if (!$conn3) {
                    die(pg_error($conexion));
                  }
                  if (pg_num_rows($conn3) > 0) {
                    while ($rowData3 = pg_fetch_array($conn3)) {
                $id_tra= $rowData3["trabajos_id"];


                $queryT = ("Select * from talleres WHERE id_trabajos='$id_tra'");
                  $connT = pg_query($conexion, $queryT);
                  if (!$connT) {
                    die(pg_error($conexion));
                  }
                  if (pg_num_rows($connT) > 0) {
                    while ($rowDataTall = pg_fetch_array($connT)) {
                $id_Tall= $rowDataTall["id_trabajos"];


                $query1 = ("Select * from trabajos WHERE id_trabajo='$id_Tall'");
                  $conn1 = pg_query($conexion, $query1);

                  if (!$conn1) {
                    die(pg_error($conexion));
                  }
                  if (pg_num_rows($conn1) > 0) {
                    while ($rowDataT = pg_fetch_array($conn1)) {
                $id_trabajo= $rowDataT["id_trabajo"];

                //evaluacion resumen de talleres
                $queryERP = ("Select * from evaluacion_resumen ");
                  $connERP = pg_query($conexion, $queryERP);
                  if (!$connERP) {
                    die(pg_error($conexion));
                  }
                  if (pg_num_rows($connERP) > 0) {
                    while ($rowDataEvaResP = pg_fetch_array($connERP)) {
                $id_EvResP= $rowDataEvaResP["evaluacion_id"];

                $queryERP2 = ("Select * from evaluacion WHERE id_evaluacion='$id_EvResP'");
                $connERP2 = pg_query($conexion, $queryERP2);
                if (!$connERP2) {
                  die(pg_error($conexion));
                }
                if (pg_num_rows($connERP2) > 0) {
                  while ($rowDataEvaResP2 = pg_fetch_array($connERP2)) {
              $id_EvResP2= $rowDataEvaResP2["id_evaluacion"];

              $queryERP3 = ("Select * from evaluacion_trabajos WHERE trabajos_id='$id_tra' and evaluacion_id = '$id_EvResP2' ");
              $connERP3 = pg_query($conexion, $queryERP3);
                if (!$connERP3) {
                  die(pg_error($conexion));
                }
                if (pg_num_rows($connERP3) > 0) {
                  while ($rowDataEvaResP3 = pg_fetch_array($connERP3)) {

                    //EVALUACION TALLER
               $queryEXP = ("Select * from evaluacion_taller ");
               $connEXP = pg_query($conexion, $queryEXP);
               if (!$connEXP) {
                 die(pg_error($conexion));
               }
               if (pg_num_rows($connEXP) > 0) {
                 while ($rowDataEvaExP = pg_fetch_array($connEXP)) {
             $id_EvExP= $rowDataEvaExP["evaluacion_id"];

             $queryEXP2 = ("Select * from evaluacion WHERE id_evaluacion='$id_EvExP'");
             $connEXP2 = pg_query($conexion, $queryEXP2);
               if (!$connEXP2) {
                 die(pg_error($conexion));
               }
               if (pg_num_rows($connEXP2) > 0) {
                 while ($rowDataEvaExP2 = pg_fetch_array($connEXP2)) {
             $id_EvExP2= $rowDataEvaExP2["id_evaluacion"];

           $queryEXP3 = ("Select * from evaluacion_trabajos WHERE trabajos_id='$id_tra' and evaluacion_id = '$id_EvExP2' ");
           $connEXP3 = pg_query($conexion, $queryEXP3);
             if (!$connEXP3) {
               die(pg_error($conexion));
             }
             if (pg_num_rows($connEXP3) > 0) {
               while ($rowDataEvaExP3 = pg_fetch_array($connEXP3)) {

                 ?>       
           <tr class="inputNombreC2">
            <!-- tabla trabajos TALLERES  -->
           <th class="inputNombreC2"><center><?php echo $rowDataT["titulo"] ?></center></th>
           <th class="inputNombreC2"><center><?php echo $rowDataT["categoria"] ?></center></th>
           <th class="inputNombreC2"><center><?php echo $rowDataT["fecha_trabajos"] ?></center></th>
              <!-- tabla evaluacion_trabajos RESUMEN TALLER --> 
              <th class="inputNombreC2"><center><?php echo $rowDataEvaResP3["estado"] ?> </center></th>
           <th class="inputNombreC2"><center><?php echo $rowDataEvaResP3["fecha"] ?></center></th>
              <th class="inputNombreC2">
                 <button class="button2" onclick="getElementsByTagName('textareaa').readonly:false;">Corregir Resumen</button> </a>
                 <br> <br> <br>
                 <button class="button2" onclick="getElementsByTagName('textareaa').readonly:false;">Enviar Materiales y Contenido de Taller</button> </a> 
            </th>
            <!-- tabla evaluacion_trabajos TALLER --> 
            <th class="inputNombreC2"><center><?php echo $rowDataEvaExP3["estado"] ?> </center></th>
           <th class="inputNombreC2"><center><?php echo $rowDataEvaExP3["fecha"] ?></center></th>
              <th class="inputNombreC2">
                 <button class="button2" onclick="getElementsByTagName('textareaa').readonly:false;">Corregir Contenido de Taller</button> </a>
               </th>
            </tr>  
                 
            <?php } }  } } } } } } } } } } } } } } } }?>
       
</table> </center></table>
                  </div> </div>

      </div>
    </div>
  </div>
                    </div>
                    </div>
                    <div> <a  href="menu.php"  > <button > Regresar</button> </a> </div>  
                   </div>
                    </div> </div>
  <br>
  <br>

  <!---Creditos--->

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
            <li style="color: #FFFFFF;" class="nav-item mb-2" class="nav-link p-0 text-muted">Facultad de Estudios Superiores Cuautitlán</li>
          </ul>
        </div>

        <div class="col-6 col-md-2 mb-3">
          <h5 style="color: #FFFFFF;">UBICACIÓN</h5>
          <ul class="nav flex-column">
            <li style="color: #FFFFFF;" class="nav-item mb-2" class="nav-link p-0 text-muted">Km 2.5 carretera Cuautitlán-Teoloyucan, San Sebastián Xhala, Cuautitlán Izcalli, Estado de México. C.P. 54714.</li>
          </ul>
        </div>

        <div class="col-6 col-md-2 mb-3">
          <h5 style="color: #FFFFFF;">TELÉFONO</h5>
          <ul class="nav flex-column">
            <li style="color: #FFFFFF;" class="nav-item mb-2" class="nav-link p-0 text-muted"> (55) 56 23 18 86 / (55) 56 23 18 90</li>
            <li style="color: #FFFFFF;" class="nav-item mb-2" class="nav-link p-0 text-muted">Para mayores informes o dudas comunicarse al Departamento de Matemáticas Edificio A8 Campo 4.</li>
          </ul>
        </div>

        <div class="containerCredi">
          <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
              <li style="color: #FFFFFF;" class="nav-item" class="nav-link px-2 text-muted">Sitio Web administrado por: Departamento de Matemáticas</li>
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

</body>

</html>