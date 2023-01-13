<?php
session_start();
error_reporting(0);
$varsec=$_SESSION['nombre_usuario'];
if($varsec == null || $varsec = '') {
    header('Location:404.php');
    session_destroy();
    session_unset();
    die();
}
date_default_timezone_set("America/Mexico_City");
       $fechaActual = date ( 'Y-m-d' );
       $fechaid = date('myhis');
       $horaActual = date("H:i:s");      
       $numid = intval($fechaid); 


?>

<html lang="es">
    <head>
        <link href="icono.ico" type="image/x-icon" rel="shortcut icon" />
        <title>Asignar evaluador</title>
       <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="icon.css">
         <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
           <link rel="stylesheet" href="css/estilosmenuarriba.css">

            <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
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


.nav-bar {
      display: none;
    }


.containerBoton {
    width: 100%;
    height: 12vh;
    position: relative;
    text-align: center; 
    background-color: transparent;
    margin-top: 10px;
    margin-bottom: -10px;
     
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
      transition: background-position 0.5s

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
      transition: background-position 0.5s
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
      transition: background-position 0.5s

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
      transition: background-position 0.5s

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
      transition: background-position 0.5s
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
      transition: background-position 0.5s

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
.contenedorregistroI{
    border-radius: 3em;
  border: 0.3em solid #B18904;
    margin:2em;
    flex-direction: row;
}

.contenedorregistroI2{
    border-radius: 3em;
  border: 0.3em solid #B18904;
    margin:2em;
    flex-direction: row;
}
     

/*Estilos de los elementos del contenedor de registro*
-------------
------------
------------*/

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
  font-size: 20px;        
}

      .datosP {
  border-top: 0.25em solid #B18904; 
}

.C1 {
  text-align: right;
  width: 180px;
  
}

.D11 {
  margin-bottom: 6%;
  margin-top: 3%;
  display: none;
}
.D1 {
  margin-bottom: 6%;
  margin-top: 3%;
}
.inputNombreC {
        border: 0.15em solid #B18904;
        width: 500px;
        border-radius: 3em;
      }

      .inputNombreC2 {
        border: 0.15em solid #B18904;
        width: 500px;
        border-radius: 3em;
      }
      .inputNombreC3 {
        border: 0.15em solid #B18904;
        width: 500px;
        border-radius: 3em;
      }
       @media (max-width: 760px) {
        .inputP {
          width: 80px;
        }
        .inputNombreC {
          width: 160px;
          font-size: 0.9rem;
        }
        .inputNombreC2 {
          width: 160px;
          font-size: 0.6rem;
        }
        .inputNombreC3 {
          width: 90px;
          font-size: 0.6rem;
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
      .button2{
   font-size: 0.9rem;
  border-radius: 0.5rem;
  padding: 0.5px 1px;
  margin-bottom: -5px; 
  position: relative;
  top:10%; 
  margin-left: -10px;
  margin-right: -10px;
width: 90px;
}
    }
      @media (max-width: 370px) {
        .inputP {
          width: 60px;
        }
        .inputNombreC {
          width: 130px;
        }
        .inputNombreC2 {
          width: 130px;
           font-size: 0.6rem;
        }
        .inputNombreC3 {
          width: 20px;
          height: 10px;
          font-size: 0.6rem;
        }
        .content-select {
          width: 60px;
        }

        .temaCentral{
          font-size: 13px;
          
        }

.button2{
  font-size: 2px;
  border-radius: 0.5rem;
  padding: 0.5px 2px;
  margin-bottom: -5px; 
  position: relative;
  top:10%; 
  left: 90%;

}
        .contenedorregistroI{
        margin:1em;
}
      }
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
.button2{
  background: #2B307C;
  color: #FFF;
  font-size: 15px;
  border-radius: 1px;
  padding: 1px 10px;
  margin-bottom: 0.5px; 
  position: relative;
  top:10%; 
  left: 10%;

}

 .sinborde {
    border: 0;
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
                <label for="btn-menu"><img src="img/menuicono.png" alt=""> </label>
                <nav class="menu" style="z-index: 1;">
                    <ul>
                        <li> <a href="">Inicio</a></li>
                        <li> <a href="">Memorias</a></li>
                        <li> <a href="convocatoria.php">Convocatoria</a></li> 
                        <li>  <a href="inscripcionYcostos.php">Inscripción y Costos</a></li>
                        <li> <a href="ComiteOrg">Comité Organizador</a></li>
                        <li> <a href="destroySesion.php"><img class="alineadoicono" src="img/iniciaricono.png">&nbsp;Cerrar Sesión</a></li>
                    </ul>  
                </nav> 
                
            </header>
        </div>

        <div>
            <header>
            <input type="checkbox" id="btn-menu2"> 
                <label for="btn-menu2"><img src="img/icono_informacion.png" alt=""> </label>
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
      <!--<form  method="post"> -->
    <p class="Tema">Asignar evaluador</p>  


 <p class="temaCentral">Datos del trabajo</p>

        <div class="datosP">
<div class="D1"> 
     <?php
 $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
$id = $_GET['itt'];
    //hace un select de todos los trabajos
                     $queryT1 = ("Select * from trabajos where id_trabajo='$id' ");
                  $connT1 = pg_query($conexion, $queryT1);

                  if (!$connT1) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connT1) > 0) {
                    while ($rowDataT1 = pg_fetch_array($connT1)) {
                       $titulo = $rowDataT1["titulo"];  
               }}
                $queryT3 = ("Select * from ponente_trabajos where trabajos_id = '$id'");
                  $connT3 = pg_query($conexion, $queryT3);

                  if (!$connT3) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connT3) > 0) {
                    while ($rowDataT3 = pg_fetch_array($connT3)) {
                      //Guarda el id del autor en la variable $Idusuario
                          $Idusuario = $rowDataT3["ponente_id"];}}
                          $queryT4 = ("Select * from usuario where id_usuario = '$Idusuario'");
                                $connT4 = pg_query($conexion, $queryT4);

                                         if (!$connT4) {
                                       die(pg_error($conexion));
                                       }
                                                //Guarda datos del autor
                                               if (pg_num_rows($connT4) > 0) {
                                              while ($rowDataT4 = pg_fetch_array($connT4)) {
                                             $correo = $rowDataT4["usuario"];
                                              $nombre = $rowDataT4["nombre_usuario"];
                                              $apellido= $rowDataT4["apellido_usuario"];}}  ?>

                                      <table>
              
              <tr>
                <td class="C1">
                  <label for="Name">Titulo del trabajo:</label>
                </td>
                    
                <td class="C2">
                                     
                  <input class="inputP" style="text-transform:uppercase;" type="text" name="nombre" value=" <?php echo $titulo  ?>" readonly>
                </td>            
              </tr>
              <tr>
                <td class="C1">
                  <label for="Last">Correo del autor:</label>
                </td>
                <td class="C2">
                  <input class="inputP" style="" type="text" name="apellido" value="<?php echo $correo  ?>" readonly>
                </td>
              </tr>
              <tr>
                <td class="C1">
                  <label for="Last">Nombre (s) del autor:</label>
                </td>
                <td class="C2">
                  <input class="inputP" style="text-transform:uppercase;" type="text" name="apellido" value="<?php echo $nombre  ?>"readonly>
                </td>
              </tr>

              <tr>
                <td class="C1">
                  <label for="Last">Apellido (s) del autor:</label>
                </td>
                <td class="C2">
                  <input class="inputP" style="text-transform:uppercase;" type="text" name="apellido" value="<?php echo $apellido  ?>" readonly>
                </td>
              </tr>
               </table> </div></div>
           <p class="temaCentral">Asignar un evaluador</p>

        <div class="datosP">
              <form action="#" method="POST" >

          <div class="D1">

            <table>
             <tr>
                <td class="C1">
                  <label for="Country">Seleccione evaluador:</label>
                </td>
                                                                <td>
                                                                <select border-radius: 9px; input class="inputP" name ="corr">

                           <?php  //busca todos los usuarios
                               $queryE1 = ("Select * from usuario ");
                  $connE1 = pg_query($conexion, $queryE1);

                  if (!$connE1) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connE1) > 0) {
                    while ($rowDataE1 = pg_fetch_array($connE1)) {
                       $ideval = $rowDataE1["id_usuario"];  
                       $correeval = $rowDataE1["usuario"];  
         
                   //Evalua cual de ellos es evaluador
                    $queryE2 = ("Select * from permisos where usuario_id ='$ideval' and permiso_id_rol='3' and estado='true'");
                  $connE2 = pg_query($conexion, $queryE2);

                  if (!$connE2) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connE2) > 0) {
                    while ($rowDataE2 = pg_fetch_array($connE2)) {
                         ?>
                     <option value="<?php echo $correeval  ?>"><?php echo $correeval  ?></option>
                     
                      <?php
               }}}} 
                           ?>
                                                
                                                                </select>
              </tr>
 </table> </div></div>

<div class="contenedorregistroI2" id='usua1' > 
  <div class="px-4 pt-1 my-5 text-center border-bottom">
    <div class="col-lg-12 mx-auto">
      <div class="table-responsive">
      <table class="table table-bordered border border-secondary"  ><center>
      
      <table class="inputNombreC" > 
         <h1 class="Tema">Datos de evaluadores disponibles</h1>
            <tr class="inputNombreC2">
              <td class="inputNombreC2">Correo del evaluador</td>
              <td class="inputNombreC3">Nombre(s) del Evaluador</td>
              <td class="inputNombreC3">Apellido(s) del evaluador</td>
            </tr>


            <?php $queryE4 = ("Select * from usuario ");
                  $connE4 = pg_query($conexion, $queryE4);

                  if (!$connE4) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connE4) > 0) {
                    while ($rowDataE4 = pg_fetch_array($connE4)) {
                       $ideval4 = $rowDataE4["id_usuario"];  
                       $correeval4 = $rowDataE4["usuario"];  
         
                   //Evalua cual de ellos es evaluador
 $queryE3 = ("Select * from permisos where usuario_id ='$ideval4' and permiso_id_rol='3' and estado='true'");
                  $connE3 = pg_query($conexion, $queryE3);

                  if (!$connE3) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connE3) > 0) {
                    while ($rowDataE3 = pg_fetch_array($connE3)) {
                        $correoE = $rowDataE4["usuario"];
                        $nombreE = $rowDataE4["nombre_usuario"];
                       $apellidoE= $rowDataE4["apellido_usuario"];?>
<tr >  <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"readonly > <?php echo $correoE ?> </textarea></td> 
<td class="inputNombreC2"><textarea name="textareaa2" rows="mx-auto" cols="mx-auto" class="sinborde"readonly > <?php echo $nombreE ?> </textarea></td> 
<td class="inputNombreC2"><textarea name="textareaa3" rows="mx-auto" cols="mx-auto" class="sinborde"readonly > <?php echo $apellidoE ?> </textarea></td> 

</tr> <?php
}} }}?>

            </table></table>

      </div>

      </div></div>
  </div>


      <button name="uploadBtn" class="enviarBtn" value="Asignar_evaluador">Asignar evaluador</button> 
      
         </form><br><br><br><br> <a  href="AsignaEval.php"  > <button class="enviarBtn">Regresar</button> </a> <br><br><br><br> <a  href="menu.php"  > <button class="enviarBtn">Regresar al menú</button> </a>
  </div></div>
  </div>   
  <div>
  <?php 

  if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Asignar_evaluador') {
     $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
    
     if(isset($_POST["corr"])){
      $idcorr = $_POST['corr'];
        $queryA1 = ("Select * from usuario where usuario='$idcorr'");
                  $connA1 = pg_query($conexion, $queryA1);

                  if (!$connA1) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connA1) > 0) {
                    while ($rowData = pg_fetch_array($connA1)) {
               $idusuarioA1 = $rowData["id_usuario"];
                        }}

 $queryA2 = ("INSERT INTO evaluacion (fecha, usuario_id, id_evaluacion) VALUES ('$fechaActual','$Idusuario','$numid')");
                  $connA2 = pg_query($conexion, $queryA2);
     if (!$connA2) {
                    die(pg_error($conexion));
                  }else{

$queryA3 = ("INSERT INTO  evaluacion_trabajos (evaluacion_id,trabajos_id, estado)values('$numid','$id','POR EVALUAR')");
                  $connA3 = pg_query($conexion, $queryA3);



 echo "<script>alert('Se ha asignado el evaluador correctamente.');window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/WinxCongreso/AsignaEval.php');</script>";}

  }}
  if (isset($_POST['uploadBtn2']) && $_POST['uploadBtn2'] == 'Regresar') {
   echo "<script languaje='JavaScript'> 
                    
                    window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/WinxCongreso/AsignaEval.php');
                    </script>";
}
 ?>  </div>  

              <br><!-- -->
              <br>
<div class="containerCredi">
<footer class="py-5">
    <div class="row gx-0">
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
        
        <script type="text/javascript">
           function ico1(){
                document.getElementById('link').style.display = 'block';
                
            }



        </script>



</body>
</html>