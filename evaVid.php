<?php
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
        <title>Evaluacion de Video</title>
       <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="icon.css">
 
           <link rel="stylesheet" href="css/estilosmenuarriba.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">  

        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
<link rel="icon" href="img/favicon.png" type="image/x-icon"> 
       
                   

       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     

    <script src="js/jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('input[type=checkbox]').live('click', function(){
            var parent = $(this).parent().attr('id');
            $('#'+parent+' input[type=checkbox]').removeAttr('checked');
            $(this).attr('checked', 'checked');
    });
    });</script>
<style>[_nghost-vnh-c52]{font-family:Open Sans,sans-serif;color:#121212}</style>
       

        
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

.D1 {
	margin-bottom: 6%;
	margin-top: 3%;
    text-align: center;
}
.inputNombreC {
				border: 0.15em solid #B18904;
				width: 500px;
        border-radius: 3em;
			}

      @media (max-width: 560px) {
        .inputP {
          width: 160px;
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
          width: 60px;
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

        .contenedorregistroI{
        margin:1em;
}
      }

 /*     @media (max-width: 2388px) {
        .inputP {
          width: 95px;
        }
        .inputNombreC {
          width: 220px;
        }
        .content-select {
          width: 120px;
        }

        .temaCentral{
          font-size: 13px;
          
        }

        .contenedorregistroI{
        margin:1em;
}
      }*/

.contenedorregistroI{
    border-radius: 3em;
	border: 0.3em solid #B18904;
        margin:3em;
}
            
            
/***** Estilos *****/

.contenido {
    text-align: center;
    max-width: 500px;
    min-height: 400px;
    padding: 5px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

embed {
    margin-top: 15px;
    z-index: 1000;
    margin-left: 60%;
}

.table1{
    margin-top: 50px;
}

.table2{
    margin-top: 50px;
    align-items: center;
    width: 100%;
}

.table3{
    margin-top: 50px;
}

.con1{
    background: #FFC300;
    border-radius: 25px;
}

.b1{
    background: green;
    font-size: 25px;
}

.b2{
    background: red;
    font-size: 25px;
}

.b3{
    background: #33B5FF;
    font-size: 25px;
}

.txa1{
    resize: none;
    width: 350%;
    height: 35%;
    border-radius: 5px;
    margin-left: 50%;
    align-content: center;
}      
.C3{
    text-align: left; 
    width: 650px;
    left: 50px;
    margin-left: 10%;
    }    
            
.C5{
    text-align: center; 
    width: 50px;
    }             
/***** Fin     *****/


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
 
       <div class="containerBoton">
        <label for="btn-menu3"></label>
        <nav class="menu3" style="z-index: 2;">  
        <button class="boton1" type="button">Alumno</button>
        <button class="boton2" type="button">Ponente</button>
        <button class="boton3" type="button">Evaluador</button>
        <button class="boton4" type="button">Memorias</button>
        <button class="boton5" type="button">Admin</button>
        <button class="boton6" type="button">Comite Orga</button>
        </nav>
    </div>

    <!-- Barra de menu Secundario - Movil-->

       <div class="nav-bar" >
       <a href="#" class="icond icon-book" target="_blank"> <img src="img/icons8-usuario-16.png"/> </a>
            <a href="#" class="icond icon-file-text2" target="_blank"> <img src="img/icons8-expositor-16.png"/> </a>
            <a href="#" class="icond icon-mic" target="_blank"> <img src="img/icons8-lectura-16.png"/> </a>
            <a href="#" class="icond icon-stack" target="_blank"> <img src="img/icons8-foto-16.png"/> </a>
            <a href="#" class="icond icon-key" target="_blank"> <img src="img/icons8-configuración-del-administrador-16.png"/> </a>
            <a href="#" class="icond icon-hearth" target="_blank"> <img src="img/icons8-llamada-de-conferencia-16.png"/> </a>
        </div>   
    


<div class="contenedorregistroI"> 
  <div class="px-4 pt-5 my-5 text-center border-bottom">
    <div class="col-lg-6 mx-auto justify-content: center;">
           
          <p class="Tema">Video a evaluar</p>
			<form action="#" method="POST" >
               
              
               <div class="contenido">
        <form>
            <input type="file" name="pdffFile" id="pdffFile" required>
            <embed id="vistaPrevia" type="application/pdf" width="150%" height="500">
        </form>
    </div>
                         
                         
                          
                            <br>
				<p class="temaCentral">Aspecto a evaluar </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>	
						
												
							<tr>
								<td class="C3">
									<label for="Name">Aspecto</label>
								</td>
								
								<td class="C5"><div id="product1">
                                    SI
                                    </div></td>
                                    <td class="C5"><div id="product1">
                                    NO
                                    </div>
                                </td>
							</tr>											
																
							<tr>
								<td class="C3">
									<label for="Name">1. Título (máximo 15 palabras). El título deberá reflejar el contenido del trabajo: 	 </label>
								</td>
								
								<td class="C5"><div id="product1">
                                    <input type="checkbox" value="1" id="product-1-1" name="check">
                                    </div></td>
                                    <td class="C5"><div id="product1">
                                    <input type="checkbox" value="2" id="product-1-2" name="check">
                                    </div>
                                </td>
							</tr>	
							
                                        
							<tr>
								<td class="C3">
									<label for="Name">2. Contenido acorde al trabajo: </label>
								</td>
								
								<td class="C5"><div id="product2">
                                    <input type="checkbox" value="1" id="product-2-1" name="check">
                                    </div></td>
                                    <td class="C5"><div id="product2">
                                    <input type="checkbox" value="2" id="product-2-2" name="check">
                                    </div>
                                </td>
							</tr>					
                            
                            																		<tr>
								<td class="C3">
									<label for="Name">3. Duracion del video:  </label>
								</td>
								
								<td class="C5"><div id="product3">
                                    <input type="checkbox" value="1" id="product-3-1" name="check">
                                    </div></td>
                                    <td class="C5"><div id="product3">
                                    <input type="checkbox" value="2" id="product-3-2" name="check">
                                    </div>
                                </td>
							</tr>	
							
																									                            <tr>
								<td class="C3">
									<label for="Name">4. Calidad del video:  </label>
								</td>
								
								<td class="C5"><div id="product4">
                                    <input type="checkbox" value="1" id="product-4-1" name="check">
                                    </div></td>
                                    <td class="C5"><div id="product4">
                                    <input type="checkbox" value="2" id="product-4-2" name="check">
                                    </div>
                                </td>
							</tr>																			
						</table>
					</div> 
				</div>

                          <p class="temaCentral">Observaciones Generales </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C4">
									<td ><textarea class="txa1" rows="5"></textarea>
								</td>
							</tr>	
												
						</table>
					</div> 
				</div>
                            <button>Aceptar</button> 
                            <button>Rechazar</button> 
        
			</form>
        
       </div>
       <br><br>
        <div> <a  href="menu.php"  > <center> <button > Regresar </button>  </center></a> </div>  
  </div>
</div>

       <br>
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
          
    <script>
        document.querySelector('#pdffFile').addEventListener('change', () => {

    let pdffFile = document.querySelector('#pdffFile').files[0];
    let pdffFileURL = URL.createObjectURL(pdffFile) + "#toolbar=0";

    document.querySelector('#vistaPrevia').setAttribute('src', pdffFileURL);
})    
    </script>
           
</body>
</html>