<?php
ini_set("display_errors",1);
session_start();
?>
<html lang="es">
    <head>
        <link href="icono.ico" type="image/x-icon" rel="shortcut icon" />
        
        <title>Registro de Nuevo Congreso de Matemáticas</title>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="icon.css">
           <link rel="stylesheet" href="css/estilosmenuarriba.css">
           
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">   
        
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
<link rel="icon" href="img/favicon.png" type="image/x-icon">      
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
}
.inputNombreC {
				border: 0.15em solid #B18904;
				width: 500px;
        border-radius: 3em;
			}

      @media (max-width: 560px) {
        .inputP {
          width: 80px;
        }
        .inputNombreC {
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
          width: 65px;
        }
        .inputNombreC {
          width: 150px;
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
                        <li> <a href="convocatoria.php">Convocatoria</a></li> 
                        <li> <a href="inscripcionYcostos.php">Inscripción y Costos</a></li>
                        <li> <a href="ComiteOrg.php">Comité Organizador</a></li>
                        <li> <a href="InicioSesion.php"><img class="alineadoicono" src="img/iniciaricono.png">&nbsp;Iniciar Sesión</a></li>
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
                
                <!-- Barra de menu Secundario-->       
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
    <div class="col-lg-6 mx-auto">
           
    <p class="Tema">Regístro de Congreso</p>
			<form action="#" method="POST" >
                             <div class="D1">
                            <table>
                                <tr>
						<td class="C1">
					<label for="Name">Nombre del Congreso:</label>
                                                </td>
						<td class="C2">
					<input class="inputNombreC" type="text" name="NombreC" placeholder="Ingresa el Nombre del Congreso" required>
								</td>
                                                                
							</tr>
                            </table>
                             </div>
                            <div> 
                                <table>
                                                        <tr>
                                                        <td class="C1">
									<label for="Registro">Identificador :</label>
								</td>
								<td class="C2">                
									<select class="inputP" type="text" name="Iden" placeholder="Tipo de Registro" required>
                  <?php 
           $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
            $query1 = ("Select n_referencia, tipo from identificador");
                  $consulta = pg_query($conexion, $query1); ?>

          <?php 
          while($obj=pg_fetch_object($consulta)){        
          ?>
         <option value="<?php echo $obj->n_referencia ?>"><?php echo $obj->tipo;?> <?php echo $obj->n_referencia;?></option>
         <?php
          }
           ?>      

                    </select>
								
							</tr>
              <tr>
              <td class="C1">
									<label for="Numero">Número de Congreso:</label>
								</td>
								<td class="C2">
                                                                    <select name="NumeroC" class="inputP" required>
                                                                        <option class="inputP"> 1° Primero I</option>
                                                                        <option class="inputP"> 2° Segundo  II</option>
                                                                        <option class="inputP"> 3° Tercero  III</option>
                                                                        <option class="inputP"> 4° Cuarto  IV</option>
                                                                        <option class="inputP"> 5° Quinto  V</option> 
                                                                        <option class="inputP"> 6° Sexto  VI</option>
                                                                        <option class="inputP"> 7° Séptimo  VII</option>
                                                                        <option class="inputP"> 8° Octavo VIII</option>
                                                                        <option class="inputP"> 9° Noveno  IX</option>
                                                                        <option class="inputP"> 10° Décimo  X</option>
                                                                        <option class="inputP"> 11° Décimoprimero  XI</option>
                                                                        <option class="inputP"> 12° Décimosegundo  XII</option>
                                                                        <option class="inputP"> 13° Décimotercero  XIII</option>
                                                                        <option class="inputP"> 14° Décimocuarto  XIV</option>
                                                                        <option class="inputP"> 15° Décimoquinto  XV</option>
                                                                        <option class="inputP"> 16° Décimosexto  XVI</option>
                                                                        <option class="inputP"> 17° Décimoséptimo  XVII</option>
                                                                        <option class="inputP"> 18° Décimooctavo  XVIII</option>
                                                                        <option class="inputP"> 19° Décimonoveno  XIX</option>
                                                                        <option class="inputP"> 20° Vigésimo  XX</option>
                                                                        <option class="inputP"> 21° Vigésimoprimero  XXI</option>
                                                                        <option class="inputP"> 22° Vigésimosegundo  XXII</option>
                                                                        <option class="inputP"> 23° Vigésimotercero  XXIII</option>
                                                                        <option class="inputP"> 24° Vigésimocuarto  XXIV</option>
                                                                        <option class="inputP"> 25° Vigésimoquinto  XXV</option>
                                                                        <option class="inputP"> 26° Vigésimosexto  XXVI</option>
                                                                        <option class="inputP"> 27° Vigésimoseptimo  XXVII</option>
                                                                    </select>
								</td>
        </tr>                                      
            <tr>                                         
								<td class="C1">
									<label for="Email">Correo del Congreso:</label>
								</td>
								<td class="C2">
									<input class="inputP" type="email" name="CorreoC" placeholder="Ingresa el Correo del Congreso" required>
								</td>
							</tr>
                                
                            </table>
                             </div>
                            <br>
				<p class="temaCentral">Envio Invitaciones de la Convocatoria </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
                                                                       <input  class="inputP" type ="date" name ="InviI" required>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="InviF" required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>

                          <p class="temaCentral">Fechas del Congreso: </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="IniC" required/>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="FinC" required/>
								</td>
							</tr>						
						</table>
					</div> 
				</div>
                          
                          <p class="temaCentral">Recepción de Pagos </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="PagI" required>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="PagF" required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>  
                                
				<p class="temaCentral">Recepción de Resumenes </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="ResuI" required>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="ResuF" required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>
                                
                                <p class="temaCentral">Evaluación de Resumenes </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="EvaRI" required>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="EvaRF" required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>
                                
                           <p class="temaCentral">Resultado Evaluación de Resumenes </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="ResEvRI" required>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="ResEvRF" required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>
                           
                           <p class="temaCentral">Recepción Corrección de Resumenes </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="CorRI" required>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="CorRF" required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>
                           
                           <p class="temaCentral">Recepción de Extensos </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="ExtI" required>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="ExtF" required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>  
                             
                           <p class="temaCentral">Notificación de Observaciones de Extensos </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="NotObExI" required>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="NotObExF" required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>                             
                           
                           <p class="temaCentral">Recepción de Extensos Finales</p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="ReExtFI" required>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="ReExtFF" required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>  
                           
                           <p class="temaCentral">Recepción de Videos de Ponencias Aceptadas  </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="VidPonAI" required>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="VidPonAF" required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>  
                           
                           <p class="temaCentral">Publicación del Programa del Evento  </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha de Publicación del Evento:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="ProgEven" required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>  
                           
                           <p class="temaCentral">Impartición de Talleres </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="TallI" required>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="TallF" required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>  
                           
                           <p class="temaCentral">Envio de Constancias </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="EnvConsI" required>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="EnvConsF" required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>
                           
                           <p class="temaCentral">Publicación de Memorias </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha de Publicación de Memorias del Congreso:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="Pmemo" required>
								</td>
							</tr>						
						</table>
					</div> 
				</div> 
                           
                            <button name="uploadBtn" class="enviarBtn" value="Registrar Congreso">Registrar Congreso</button> 
			</form>
      <br>
        <br>
        <div> <a  href="Perfiladmin.php"  > <button > Regresar</button> </a> </div> 
        
       </div>
  </div>
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

  <div>
  <?php
$message = '';
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Registrar Congreso') {
    

    $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
   

    if (isset($_POST["NombreC"]) && isset($_POST["Iden"]) && isset($_POST["NumeroC"]) && isset($_POST["CorreoC"])&& isset($_POST["InviI"]) && isset($_POST["InviF"])) {

      $NombreC = $_POST["NombreC"];
      $Identi = $_POST["Iden"];
      $NumeroC = $_POST["NumeroC"];
      $CorreoC = $_POST["CorreoC"];
      $InvitacionesI = $_POST["InviI"];
      $InvitacionesF = $_POST["InviF"];
      $CongresoI = $_POST["IniC"];
      $CongresoF = $_POST["FinC"];
      $PagoI = $_POST["PagI"];
      $PagoF = $_POST["PagF"];
      $ResumI = $_POST["ResuI"];
      $ResumF = $_POST["ResuF"];
      $EvalResI = $_POST["EvaRI"];
      $EvalResF = $_POST["EvaRF"];
      $RestEvaResI = $_POST["ResEvRI"];
      $RestEvaResF = $_POST["ResEvRF"];
      $CorResI = $_POST["CorRI"];
      $CorResF = $_POST["CorRF"];
      $ExtenI = $_POST["ExtI"];
      $ExtenF = $_POST["ExtF"];
      $NotObsExtI = $_POST["NotObExI"];
      $NotObsExtF = $_POST["NotObExF"];
      $RecExtenFinI = $_POST["ReExtFI"];
      $RecExtenFinF = $_POST["ReExtFF"];
      $VideoPonAcI = $_POST["VidPonAI"];
      $VideoPonAcF = $_POST["VidPonAF"];
      $ProgramEvent = $_POST["ProgEven"];
      $TallerI = $_POST["TallI"];
      $TallerF = $_POST["TallF"];
      $EnvioConstI = $_POST["EnvConsI"];
      $EnvioConstF = $_POST["EnvConsF"];
      $PublicMemor = $_POST["Pmemo"];

      $query="SELECT id_congreso, email FROM congreso WHERE id_congreso='$NumeroC' AND email='$CorreoC'";
      $consulta= pg_query($conexion,$query);
      $cantidad= pg_num_rows($consulta);
      if ($cantidad>0){
       echo "<script>alert('Ya existe este un Congreso registrado con este número. Intenta Nuevamente!!!'); 
       window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/WinxCongreso/ReferenciaCongr.php');</script>";
      } else{
        $query = ("INSERT INTO congreso (id_congreso, email,  fecha_inicio_envio_invitaciones_convocatoria,  fecha_fin_envio_invitaciones_convocatoria, fecha_inicio_recepcion_resumenes, fecha_fin_recepcion_resumenes, fecha_inicio_evaluacion_resumenes, fecha_fin_evaluacion_resumenes, fecha_inicio_resultado_evaluacion_resumenes, fecha_fin_resultado_evaluacion_resumenes, fecha_inicio_recepcion_correcion_resumenes, fecha_fin_recepcion_correcion_resumenes,  fecha_inicio_recepcion_extensos,  fecha_fin_recepcion_extensos, fecha_inicio_notificacion_observaciones_extensos, fecha_fin_notificacion_observaciones_extensos, fecha_inicio_recepcion_pagos,  fceha_fin_recepcion_pagos,  fecha_inicio_recepcion_extensos_finales,  fecha_fin_recepcion_extensos_finales,  fecha_inicio_recepcion_videos_ponencias_aceptadas,  fecha_fin_recepcion_videos_ponencias_aceptadas, fecha_publicacion_programa_evento, fecha_inicio_congreso, fecha_fin_congreso, fecha_inicio_imparticion_talleres, fecha_fin_imparticion_talleres, fecha_inicio_envio_contancias, fecha_fin_envio_contancias, fecha_publicacion_memorias, nombre_congreso, numero_congreso, identificador_numero_registro) 
        VALUES('$NumeroC','$CorreoC','$InvitacionesI','$InvitacionesF', '$ResumI', '$ResumF', '$EvalResI', '$EvalResF', '$RestEvaResI', '$RestEvaResF', '$CorResI', '$CorResF', '$ExtenI', '$ExtenF', '$NotObsExtI', '$NotObsExtF', '$PagoI', '$PagoF', '$RecExtenFinI', '$RecExtenFinF', '$VideoPonAcI', '$VideoPonAcF', '$ProgramEvent', '$CongresoI', '$CongresoF', '$TallerI', '$TallerF', '$EnvioConstI', '$EnvioConstF', '$PublicMemor', '$NombreC', '$NumeroC', '$Identi' )");
      $consulta = pg_query($conexion, $query);
      if($consulta){
      echo "<script>alert('Congreso Registrado Exitosamente !!!'); 
       window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/WinxCongreso/ReferenciaCongr.php');</script>";
      }
      }
     }}
     $_SESSION['sms'] = $message;  ?>  
        </div>
</div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>