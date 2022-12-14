<?php

/////////////ENLISTAR LAS FOTOS EXISTENTES///////////////////////////////////////////////
$listar = null;
$directorio=opendir("memorias/memorias0/");

while ($elemento = readdir($directorio))
{
  if ($elemento != '.' && $elemento != '..')
  {
  if (is_dir("memorias/memorias0/".$elemento))
  {
    $listar .="<a class=' col-md-6' href='memorias/memorias0/$elemento'target='_blank'> 
    $elemento/</a>
    <br><br>";
  }
  else
  {
     $listar .="<a class=' col-md-6' href='memorias/memorias0/$elemento'target='_blank'> 
    $elemento</a>
    <br><br>";
  }
  }
}


///////////////////////// SUBIR UNA NUEVA FOTO /////////////////////////////////////////////



if(isset($_POST["subir"]))   {
   $subir = $_POST["subir"] ;

if ($subir  == "Cargar archivo")
{
  
$folder = "memorias/memorias0/";
move_uploaded_file($_FILES["formato"]["tmp_name"] , "$folder".$_FILES["formato"]["name"]);
echo "<div class='alert alert-success'><p class='hidd' align=center>El archivo  ".$_FILES["formato"]["name"]." se ha cargado correctamente. <a href='perfilmemorias.php' class='btn btn-default'>Clic aquí </a> para verificar.</div>";
  }

}

/////////////////////////////// BORRAR FOTO ////////////////////////////////////




if (isset($_POST['borrarFor']))
{
$borrarFor=($_POST['borrarFor']);
@unlink('memorias/memorias0/'.$borrarFor);
echo "<div class='alert alert-danger'><p class='hidd' align=center>El archivo  ".$borrarFor." ha sido eliminado correctamente. <a href='perfilmemorias.php' class='btn btn-default'>Clic aquí </a> para verificar.</div>";
}
?>


<html lang="es">
    <head>
      
        <title>Perfil Memorias</title>
       <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale">
           <link rel="stylesheet" href="css/estilosmemorias.css">
          <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
<link rel="icon" href="img/favicon.png" type="image/x-icon"> 
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
    top: 7%;
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

.ContenedorPrincipal{
    border-radius: 3em;
    border: 0.3em solid #2B307C;
        margin:3em;
      
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
                <label for="btn-menu"><img src="img/menuicono11.png"> </label>
                <nav class="menu" style="z-index: 1;">
                    <ul>
                        <li> <a href="">Inicio</a></li>
                        <li> <a href="memoriascarrusel.php">Memorias</a></li>
                        <li> <a href="convocatoria.php">Convocatoria</a></li> 
                        <li> <a href="inscripcionYcostos.php">Inscripción y Costos</a></li>
                        <li> <a href="ComiteOrg.php">Comité Organizador</a></li>
                        <li> <a href=""><img class="alineadoicono" src="img/iniciaricono.png">&nbsp;Iniciar Sesión</a></li>
                    </ul>  
                </nav> 
                
            
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
 
       <div class="containerBoton">
        <label for="btn-menu3"></label>
        <nav class="menu3" style="z-index: 2;">  
        <button class="boton1" type="button" onClick="ico2()" >Usuario</button>
        <button class="boton4" type="button" onClick="ico()">Memorias</button>
    
        </nav>
    </div>

    <!-- Barra de menu Secundario - Movil-->

       <div class="nav-bar" >
            <a onClick="return ico2()"class="icond icon-book" target="_blank"> <img src="img/icons8-usuario-16.png"/> </a>
            <a href="#" class="icond icon-stack" target="_blank"> <img src="img/icons8-foto-16.png"/> </a>
            
        </div>   
<br>
<center>
<div class ="row align-items-start">
            <?php
$anioA1 = date('Y') - 1;
echo "<div class='col-6 col-sm-3'><p class='btn btn-warning'><a href='perfilmemorias1.php' class='btn btn-default'> ".$anioA1." </a></div>";

$anioA2 = date('Y') - 2;
echo "<div class='col-6 col-sm-6'><p class='btn btn-warning'><a href='perfilmemorias2.php' class='btn btn-default'> ".$anioA2." </a></div>";


$anioA3 = date('Y') - 3;
echo "<div class='col'><p class='btn btn-warning'><a href='perfilmemorias3.php' class='btn btn-default'> ".$anioA3." </a></div>";
?>
</div>
</center>

<main>
    
<div class="ContenedorPrincipal">
<br> 
  <h1><center>Memorias del Congreso de Matemáticas</center></h1>
          <h1><center> <?php echo date('Y'); ?> </center></h1>
          <h5><center>Para subir fotos y videos de congresos anteriores favor de solo seleccionar el año deseado.</center></h5>
     


<center> 
<div class="col-md-offset-4">
<?php
echo $listar;
?>
</div>
</center>

<center>
<form  method="post" enctype="multipart/form-data" class="col-md-offset-4 col-md-4" style="margin-right:2%; border-radius:20px;">

<div class="bg-secondary text-white" style="margin-top:2%; margin-bottom:20%; padding:3%; border-radius:20px; background: #2B307C;">
    <input  class="form-control" type="file" name="formato" id="formato" style="margin-bottom:2%;">
    <input  class="btn btn-default" type="submit" name="subir" value="Cargar archivo" style="width:100%; color: white;">
    </div>
</form>
<br>

<form method="post" class="col-md-offset-4 col-md-4"  style="margin-right:2%; margin-top:-7%; " >

   <div class="bg-dark text-white" style="margin-top:2%; margin-bottom:20%; padding:3%; border-radius:20px;">
    <input class="form-control"  name="borrarFor" size="50" placeholder=" Ejemplo: 1.Nombre_Del_Archivo.xls" style="margin-bottom:2%;"/>
    <input  class="btn btn-default" type="submit" name="borrar" value="Borrar archivo" style="width:100%; color: white;">

    <div class="col-md-6" style="margin-top:-6%;">

   

    <?php
    if (isset($_POST['mensajeOk']))
      {
        $mensajeOk=($_POST['mensajeOk']);
         echo $mensajeOk;
           }
    ?>
    </div>
    <br>
    <br>
    </div>
  </form>
</div>
  </center> 
</main>
</div>


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
</div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
         
      <script type="text/javascript">
           function ico1(){
                document.getElementById('User').style.display = 'none';
                document.getElementById('User2').style.display = 'none';
                document.getElementById('Pone').style.display = 'block';   
                document.getElementById('Pone1').style.display = 'block'; 
                document.getElementById('Pone2').style.display = 'block';
                
                document.getElementById('Admin').style.display = 'none';
                document.getElementById('Admin1').style.display = 'none';
                document.getElementById('Admin2').style.display = 'none';
                document.getElementById('Admin3').style.display = 'none';
                
                document.getElementById('Admin4').style.display = 'none';
                document.getElementById('Admin5').style.display = 'none';
                document.getElementById('Admin6').style.display = 'none';
                
                document.getElementById('Admin7').style.display = 'none';
                document.getElementById('Admin8').style.display = 'none';
                
                document.getElementById('Congre').style.display = 'none';
                document.getElementById('Congre1').style.display = 'none';
                return false;

            }
            
            function ico4(){
                document.getElementById('User').style.display = 'none';
                document.getElementById('User2').style.display = 'none';
                document.getElementById('Pone').style.display = 'none'; 
                document.getElementById('Pone1').style.display = 'none';
                document.getElementById('Pone2').style.display = 'none';
                
                document.getElementById('Admin').style.display = 'none';
                document.getElementById('Admin1').style.display = 'none';
                document.getElementById('Admin2').style.display = 'none';
                document.getElementById('Admin3').style.display = 'none';
                
                document.getElementById('Admin4').style.display = 'block';
                document.getElementById('Admin5').style.display = 'block';
                document.getElementById('Admin6').style.display = 'block';
                                
                document.getElementById('Admin7').style.display = 'none';
                document.getElementById('Admin8').style.display = 'none';
                
                document.getElementById('Congre').style.display = 'none';
                document.getElementById('Congre1').style.display = 'none';
                return false;
            }
            
           

        </script>
      
                      
</body>
</html>