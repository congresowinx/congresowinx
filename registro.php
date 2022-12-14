
<?php
ini_set("display_errors", 0);
session_start();
?>

<html lang="es">

<head>
  <title>Registro de cuenta</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
  <link rel="stylesheet" href="css/estilosregistro.css">
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
  <link rel="icon" href="img/favicon.png" type="image/x-icon">
  <script type="text/javascript" src="js/mostrar.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <!-- jQuery Modal -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

  <script src="https://www.google.com/recaptcha/api.js"></script>

  <script>
    function onSubmit(token) {
      document.getElementById("demo-form").submit();
      
    }
  </script>


  <meta http-equiv="XX-UA-Compatible" content="ie=edge">
</head>

<body>
  <?php
  if (isset($_SESSION['sms']) && $_SESSION['sms']) {
    printf('<b>%s</b>', $_SESSION['sms']);
    unset($_SESSION['sms']);
  }
  ?>

  <!-- Baner -->
  <div class="bannerRes">
    <center> <img src="img/banpru.jpg" /> </center>
  </div>
  <!-- Barra de menu -->
  <div>
    <header>
      <input type="checkbox" id="btn-menu">
      <label for="btn-menu"><img src="img/menuicono.png" alt=""> </label>
      <nav class="menu">
        <ul>
          <li> <a href="index3.php">Inicio</a></li>
          <li> <a href="">Memorias</a></li>
          <li> <a href="">Convocatoria</a></li>
          <li> <a href="">Inscripción</a></li>
          <li> <a href="">Comité Organizador</a></li>
          <li> <a href="InicioSesion"><img class="alineadoicono" src="img/iniciaricono.png">&nbsp;Iniciar Sesión</a></li>
        </ul>
      </nav>
    </header>
  </div>
  <br>
  <!-- comment -->
  <div class="register">
    <p class="Tema">Regístrate</p>
    <form method="POST" enctype="multipart/form-data">

      <p class="temaCentral">Datos personales</p>


      <div class="datosP">

        <p class="temaSec">Introducir sus datos correctos, ya que serán utilizados para las contancias.</p>

        <div class="D1">
          <!--******DATOS PERSONALES*******-->

          <table>

            <center>
              <tr>
                <td class="C1">
                  <label for="Name">Nombre (S):</label>
                </td>
                <td class="C2">
                  <input class="inputP" style="text-transform:uppercase;" type="text" name="nombre" placeholder="Ingresa Nombre(s)" required>
                </td>
              </tr>
            </center>

            <center>
              <tr>
                <td class="C1">
                  <label for="Last">Apellido (S):</label>
                </td>
                <td class="C2">
                  <input class="inputP" style="text-transform:uppercase;" type="text" name="apellido" placeholder="Ingresa Apellido(s)" required>
                </td>
              </tr>
            </center>

            <center>
              <tr>
                <td class="C1">
                  <label for="Emails">Correo:</label>
                </td>
                <td class="C2">
                  <input class="inputP" type="Email" name="Correo" placeholder="Ingresa Correo" required>
                </td>
              </tr>
            </center>

            <center>
              <tr>
                <td class="C1">
                  <label class="C1" for="Country">País:</label>
                </td>
                <td>
                  <select name="pais" class="content-select" required>

                    <option value="México">México</option>
                    <option value="Afganistán">Afganistán</option>
                    <option value="Albania">Albania</option>
                    <option value="Alemania">Alemania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguila">Anguila</option>
                    <option value="Antártida">Antártida</option>
                    <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                    <option value="Antillas Neerlandesas">Antillas Neerlandesas</option>
                    <option value="Arabia Saudita">Arabia Saudita</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbayán">Azerbayán</option>
                    <option value="Bélgica">Bélgica</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrein">Bahrein</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belice">Belice</option>
                    <option value="Benín">Benín</option>
                    <option value="Bhután">Bhután</option>
                    <option value="Bielorrusia">Bielorrusia</option>
                    <option value="Birmania">Birmania</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
                    <option value="Botsuana">Botsuana</option>
                    <option value="Brasil">Brasil</option>
                    <option value="Brunéi">Brunéi</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cabo Verde">Cabo Verde</option>
                    <option value="Camboya">Camboya</option>
                    <option value="Camerún">Camerún</option>
                    <option value="Canadá">Canadá</option>
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
                    <option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Eslovaquia">Eslovaquia</option>
                    <option value="Eslovenia">Eslovenia</option>
                    <option value="España">España</option>
                    <option value="Estados Unidos de América">Estados Unidos de América</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Etiopía">Etiopía</option>
                    <option value="Filipinas">Filipinas</option>
                    <option value="Finlandia">Finlandia</option>
                    <option value="Fiyi">Fiyi</option>
                    <option value="Francia">Francia</option>
                    <option value="Gabón">Gabón</option>
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
                    <option value="Haití">Haití</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong kong">Hong kong</option>
                    <option value="Hungría">Hungría</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Irán">Irán</option>
                    <option value="Irak">Irak</option>
                    <option value="Irlanda">Irlanda</option>
                    <option value="Isla Bouvet">Isla Bouvet</option>
                    <option value="Isla de Man">Isla de Man</option>
                    <option value="Isla de Navidad">Isla de Navidad</option>
                    <option value="Isla Norfolk">Isla Norfolk</option>
                    <option value="Islandia">Islandia</option>
                    <option value="Islas Bermudas">Islas Bermudas</option>
                    <option value="Islas Caimán">Islas Caimán</option>
                    <option value="Islas Cocos (Keeling)">Islas Cocos (Keeling)</option>
                    <option value="Islas Cook">Islas Cook</option>
                    <option value="Islas de Åland">Islas de Åland</option>
                    <option value="Islas Feroe">Islas Feroe</option>
                    <option value="Islas Georgias del Sur y Sandwich del Sur">Islas Georgias del Sur y Sandwich del Sur</option>
                    <option value="Islas Heard y McDonald">Islas Heard y McDonald</option>
                    <option value="Islas Maldivas">Islas Maldivas</option>
                    <option value="Islas Malvinas">Islas Malvinas</option>
                    <option value="Islas Marianas del Norte">Islas Marianas del Norte</option>
                    <option value="Islas Marshall">Islas Marshall</option>
                    <option value="Islas Pitcairn">Islas Pitcairn</option>
                    <option value="Islas Salomón">Islas Salomón</option>
                    <option value="Islas Turcas y Caicos">Islas Turcas y Caicos</option>
                    <option value="Islas Ultramarinas Menores de Estados Unidos">Islas Ultramarinas Menores de Estados Unidos</option>
                    <option value="Islas Vírgenes Británicas">Islas Vírgenes Británicas</option>
                    <option value="Islas Vírgenes de los Estados Unidos">Islas Vírgenes de los Estados Unidos</option>
                    <option value="Israel">Israel</option>
                    <option value="Italia">Italia</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japón">Japón</option>
                    <option value="Jersey">Jersey</option>
                    <option value="Jordania">Jordania</option>
                    <option value="Kazajistán">Kazajistán</option>
                    <option value="Kenia">Kenia</option>
                    <option value="Kirgizstán">Kirgizstán</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Líbano">Líbano</option>
                    <option value="Laos">Laos</option>
                    <option value="Lesoto">Lesoto</option>
                    <option value="Letonia">Letonia</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libia">Libia</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lituania">Lituania</option>
                    <option value="Luxemburgo">Luxemburgo</option>
                    <option value="México">México</option>
                    <option value="Mónaco">Mónaco</option>
                    <option value="Macao">Macao</option>
                    <option value="Macedônia">Macedônia</option>
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
                    <option value="Omán">Omán</option>
                    <option value="Países Bajos">Países Bajos</option>
                    <option value="Pakistán">Pakistán</option>
                    <option value="Palau">Palau</option>
                    <option value="Palestina">Palestina</option>
                    <option value="Panamá">Panamá</option>
                    <option value="Papúa Nueva Guinea">Papúa Nueva Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Perú">Perú</option>
                    <option value="Polinesia Francesa">Polinesia Francesa</option>
                    <option value="Polonia">Polonia</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Reino Unido">Reino Unido</option>
                    <option value="República Centroafricana">República Centroafricana</option>
                    <option value="República Checa">República Checa</option>
                    <option value="República Dominicana">República Dominicana</option>
                    <option value="Reunión">Reunión</option>
                    <option value="Ruanda">Ruanda</option>
                    <option value="Rumanía">Rumanía</option>
                    <option value="Rusia">Rusia</option>
                    <option value="Sahara Occidental">Sahara Occidental</option>
                    <option value="Samoa">Samoa</option>
                    <option value="Samoa Americana">Samoa Americana</option>
                    <option value="San Bartolomé">San Bartolomé</option>
                    <option value="San Cristóbal y Nieves">San Cristóbal y Nieves</option>
                    <option value="San Marino">San Marino</option>
                    <option value="San Martín (Francia)">San Martín (Francia)</option>
                    <option value="San Pedro y Miquelón">San Pedro y Miquelón</option>
                    <option value="San Vicente y las Granadinas">San Vicente y las Granadinas</option>
                    <option value="Santa Elena">Santa Elena</option>
                    <option value="Santa Lucía">Santa Lucía</option>
                    <option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leona">Sierra Leona</option>
                    <option value="Singapur">Singapur</option>
                    <option value="Siria">Siria</option>
                    <option value="Somalia">Somalia</option>
                    <option value="Sri lanka">Sri lanka</option>
                    <option value="Sudáfrica">Sudáfrica</option>
                    <option value="Sudán">Sudán</option>
                    <option value="Suecia">Suecia</option>
                    <option value="Suiza">Suiza</option>
                    <option value="Surinám">Surinám</option>
                    <option value="Svalbard y Jan Mayen">Svalbard y Jan Mayen</option>
                    <option value="Swazilandia">Swazilandia</option>
                    <option value="Tadjikistán">Tadjikistán</option>
                    <option value="Tailandia">Tailandia</option>
                    <option value="Taiwán">Taiwán</option>
                    <option value="Tanzania">Tanzania</option>
                    <option value="Territorio Británico del Océano Índico">Territorio Británico del Océano Índico</option>
                    <option value="Territorios Australes y Antárticas Franceses">Territorios Australes y Antárticas Franceses</option>
                    <option value="Timor Oriental">Timor Oriental</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad y Tobago">Trinidad y Tobago</option>
                    <option value="Tunez">Tunez</option>
                    <option value="Turkmenistán">Turkmenistán</option>
                    <option value="Turquía">Turquía</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Ucrania">Ucrania</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Uzbekistán">Uzbekistán</option>
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
                  <label for="Phone">Teléfono:</label>
                </td>
                <td class="C2">
                  <!--   <label for="Lad" id="ladaT" class="ladaS"><input class="inputP" list="tel" type="text" name="tel" placeholder="Ingresa Teléfono" required  minlength="12" maxlength="14" pattern="[0-9]" ></label>
									-->
                  <input id="phone" class="inputP" type="tel" name="phone" required pattern="+[0-9]{14}" maxlength="14" onkeypress="numfinal()" />



                </td>
              </tr>
            </center>

            <center>
              <tr>
                <td class="C1">
                  <label for="Password">Contraseña:</label>
                </td>
                <td class="C2">
                  <input class="inputP" id="passwordV1" type="password" name="contraseña" placeholder="Máximo 10 caracteres" required minlength="8" maxlength="10">
                  <img src="img/icono_ojo.png" id=M1 name="Q1" type="button" width:="22" height="20" onclick="MostrarP1()">
                </td>
              </tr>
            </center>

            <center>
              <tr>
                <td class="C1">
                  <label for="SPassword">Repetir Contraseña:</label>
                </td>
                <td class="C2">
                  <input class="inputP" id="passwordV2" type="password" name="contraseña2" placeholder="Máximo 10 caracteres" required minlength="8" maxlength="10">
                  <img src="img/icono_ojo.png" id=M2 name="Q2" type="button" width:="22" height="20" onclick="MostrarP2()">
                </td>
              </tr>
            </center>

          </table>

        </div>

      </div>

      <p class="temaCentral">Trayectoria Académica</p>

      <div class="datosP">

        <center>
          <div class="D1">
            <td class="C1">
              <label for="GradoA">Grado Acádemico:</label>
            </td>
            <select name="grado" class="content-select" required>

              <option value="Estudiante">Estudiante</option>
              <option value="Licenciatura">Licenciatura</option>
              <option value="Maestría">Maestría</option>
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
                  <label for="Institucion">Institución:</label>
                </td>

                <td>
                  <select name="institucion" class="content-select" required>
        
              <option>FES Cuautitlán</option>
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


        <p class="temaTer">En una cuartilla formato PDF, en Arial 12 interlineado sencillo, destacando estudios, participaciones en congresos y publicaciones. El archivo deberá ser nombrado de la siguiente manera: NombrePrimerapellido_semblanza, ejemplo: JuanHernandez_semblanza.pdf </p>

        <input type="file" name="uploadedFile" accept="application/pdf" required />

      </div>

      <div class="final">


        <p class="temaF"><input type="checkbox" name="File" required>"He leído y Acepto" las <a href="#ex1" rel="modal:open">Políticas de privacidad.</a></p>

        <div id="ex1" class="modal">
          <p>
            <center>
              <h3>Aviso de Privacidad Integral</h3>
            </center> <br>
            La Facultad de Estudios Superiores Cuautitlán, con domicilio Carretera Cuautitlán-Teoloyucan Km. 2.5, San Sebastián Xhala, Cuautitlán Izcalli, Edo. de Méx., con código postal 54714, es el responsable del tratamiento de los datos personales que nos proporcione, los cuales serán protegidos conforme a lo dispuesto por la <b><i>Ley General De Transparencia Y Acceso A La Información Pública de México</i></b>, y demás normatividad que resulte aplicable.<br>

          <h4>Finalidades del tratamiento</h4>
          Esta es responsable del tratamiento de sus datos personales para el registro de usted en calidad de alumno, docente, personal de la entidad académica, conferencista o invitado externo (nacional o extranjero), los cuales serán utilizados para las siguientes finalidades:<br>
          <br><b>a)</b> Registrar su inscripción a conferencia, talleres, etc.<br>
          <b>b)</b> Generar listas de asistencias y validación de las mismas.<br>
          <b>c)</b> Emisión de constancia de participación o asistencia de acuerdo a la modalidad de que se trate.<br>
          <b>d)</b> Establecer comunicación para dar seguimiento de las ponencias, talleres y trabajos además de aclaración de dudas sobre sus datos, notificación de cancelación o cambio de horario, fecha o sede.<br>
          Y <b>e)</b> Generar estadísticas para informes obligatorios del Instituto ante otros organismos públicos o privados, Realizar estadísticas y análisis para informes obligatorios del congreso para la planeación y evaluación.<br>

          <br>De manera adicional, utilizaremos su información personal para las siguientes finalidades que no son necesarias, pero que nos permiten y facilitan brindarle una mejor atención:<br>

          <br>• Envío de material de exposición o apoyo.<br>
          • Invitaciones a futuros congresos.<br>

          <h4>Datos personales recabados</h4>
          Para las finalidades antes señaladas se solicitarán los siguientes datos personales: nombre completo, lugar o institución de procedencia, teléfono y correo electrónico.<br>
          Se informa que no se recaban datos personales sensibles.<br>

          <h4>Fundamento legal</h4>
          El fundamento para el tratamiento de datos personales son los artículos:<br>
          <br><b>a)</b> Artículo 13. En la generación, publicación y entrega de información se deberá garantizar que ésta sea accesible, confiable, verificable, veraz, oportuna y atenderá las necesidades del derecho de acceso a la información de toda persona.<br>
          <b>b)</b> Los artículos 6º, Base A y 16, segundo párrafo, de la Constitución Política de los Estados Unidos Mexicanos; el 3º, fracción XXXIII, 4º, 16, 17, 18, 20, 21, 22, 23, 26, 27 y 28 de la Ley General de Protección de Datos Personales en Posesión de Sujetos Obligados, así como los numerales del 5 al 19 de los Lineamientos para la Protección de Datos Personales en Posesión de la Universidad Nacional Autónoma de México, publicados en la Gaceta UNAM el 25 de febrero de 2019.<br>

          <h4>Transferencia de datos personales</h4>
          Se informa que no realizarán transferencias que requieran su consentimiento, salvo aquellas que sean necesarias para atender requerimientos de información de una autoridad competente, debidamente fundados y motivados.<br>

          <h4>Derechos ARCO</h4>
          Usted tiene derecho a conocer qué datos personales se tienen de usted, para qué se utilizan y las condiciones del uso que les damos (Acceso). Asimismo, es su derecho solicitar la corrección de su información personal en caso de que esté desactualizada, sea inexacta o incompleta (Rectificación); que la eliminemos de nuestros registros o bases de datos cuando considere que la misma no está siendo utilizada conforme a los principios, deberes y obligaciones previstas en la ley (Cancelación); así como oponerse al uso de sus datos personales para fines específicos (Oposición). Estos derechos se conocen como derechos ARCO.<br>

          <br>Para ejercer sus derechos de acceso, rectificación, cancelación y oposición lo podrá hacer en la Unidad de Transparencia de la UNAM, o a través de la Plataforma Nacional de Transparencia <i>(http://www.plataformadetransparencia.org.mx/)</i>.<br>

          <br>La determinación adoptada, se le comunicará en un plazo máximo de veinte días hábiles contados desde la fecha en que se recibió la solicitud, a efecto de que, si resulta procedente, haga efectiva la misma dentro de los quince días hábiles siguientes a que se comunique la respuesta.<br>
          <br>Puede revocar el consentimiento que, en su caso, nos haya otorgado para el tratamiento de sus datos personales. Sin embargo, es importante que tenga en cuenta que no en todos los casos podremos atender su solicitud o concluir el uso de forma inmediata, ya que es posible que por alguna obligación legal requiramos seguir tratando sus datos personales. Asimismo, usted deberá considerar que, para ciertos fines, la revocación de su consentimiento implicará que no le podamos seguir prestando el servicio del sistema en línea que nos solicitó, o la conclusión de su relación con nosotros.<br>


          <h4>Modificaciones al Aviso de Privacidad</h4>
          El presente aviso de privacidad puede sufrir modificaciones o actualizaciones. Dichas actualizaciones o modificaciones estarán disponibles al público, por lo que el Titular podrá consultarlas en el sitio web “insertar sitio web”, en la sección Aviso de Privacidad. Se recomienda y requiere al Titular consultar el Aviso de Privacidad, por lo menos semestralmente para estar actualizado de las condiciones y términos de este.<br>
          </p>
          <a href="#" rel="modal:close">Cerrar Ventana</a>

        </div>
        <div class="g-recaptcha" data-sitekey="6LdLWGcjAAAAAKPWsfyRYT5BposgMdreUWztAlb_" data-callback="correctCaptcha"></div> 


        <button name="uploadBtn" class="enviarBtn" value="Enviar">Enviar</button>

        <!--******CAMPO 1*******-->
    </form>
  </div>
  <div class="alert alert-info" style="display: none;"></div>
  <div>



    <?php

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

        // CON ENCRIPTACIÓN
        $newFileName =  strtoupper($_POST["nombre"]) . strtoupper($_POST["apellido"]) . time();
        // $newFileName = hash('md5', $newFileNameSin). '.' . $fileExtension;

        $allowedfileExtensions = array('pdf');


        $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
        $fechaActual = date('Y-m-d');
        /*  echo $fechaActual;
               if($conexion){
                echo "CONEXIÓN EXITOSA <br>";
            }else{
                echo "CONEXIÓN FALLIDA";
            }  */

        if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["Correo"]) && isset($_POST["pais"]) && isset($_POST["phone"]) && isset($_POST["grado"]) && isset($_POST["institucion"]) && isset($_POST["contraseña"]) && isset($_POST["contraseña2"])) {
          $nombre1 = $_POST["nombre"];
          $nombre = strtoupper($nombre1);
          $apellido1 = $_POST["apellido"];
          $apellido = strtoupper($apellido1);

          $Correo = $_POST["Correo"];
          $pais = $_POST["pais"];
          $grado = $_POST["grado"];
          $institucion = $_POST["institucion"];
          $contraseña = $_POST["contraseña"];
          $contraseña = hash('sha512', $contraseña);
          $contraseña2 = $_POST["contraseña2"];
          $contraseña2 = hash('sha512', $contraseña2);
          $semblanza =  strval($newFileName);

          $tel = $_POST["phone"];

          $query = "SELECT email, telefono FROM contacto WHERE email='$Correo' OR telefono= '$tel' ";
          $consultaR = pg_query($conexion, $query);
          $cantidad = pg_num_rows($consultaR);
          if ($cantidad > 0) {
            echo "<script>alert('Ya existe un usuario registrado con el mismo email y telefono. Verifica tus datos e intenta nuevamente');</script>";
          } else {

            if ($contraseña == $contraseña2) {


              if (in_array($fileExtension, $allowedfileExtensions)) {
                $uploadFileDir = './Semblanza/';
                $dest_path = $uploadFileDir . $newFileName;

                if (move_uploaded_file($fileTmpPath, $dest_path)) {


                  $query = ("INSERT INTO usuario (nombre_usuario, apellido_usuario, pais_usuario, usuario, contraseña, fecha_registro)
                          VALUES('$nombre','$apellido', '$pais', '$Correo', '$contraseña', '$fechaActual')");
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

                  if ($conn66 == 1) {
                    $query10 = ("INSERT INTO permisos (permiso_id_rol, usuario_id, estado) 
                          VALUES('0', '$conn3', '1')");
                    $consulta10 = pg_query($conexion, $query10);
                  } else if ($conn66 >= 2) {
                    $query10 = ("INSERT INTO permisos (permiso_id_rol, usuario_id, estado) 
                          VALUES('1', '$conn3', '1')");
                    $consulta10 = pg_query($conexion, $query10);
                    echo "<script>alert('Registrado Exitosamente !!!');</script>";
                  }
                } else {
                  $message = 'Subida fallida. Tipos de archivo permitidos: ' . implode(',', $allowedfileExtensions);
                }
              } else {
                $message = 'Hay algún error en la carga del archivo. Por favor revise el siguiente error.<br>';
                $message .= 'Error:' . $_FILES['uploadedFile']['error'];
              }
            } else {
              echo "<script>alert('Las contraseñas no coinciden. El Registro no se Pudo Realizar. Intenta nuevamente!!');</script>";
              return false;
            }
          }
        }
      }
      
    }

    $_SESSION['sms'] = $message; 
      ?>

  </div>

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




<footer>
  <center>
    <p>
      <b> CRÉDITOS </b> <br><br>
      Hecho en México, todos los derechos reservados 2014-2022. ©<br>
      Esta página puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica. De otra forma requiere permiso previo por escrito de la institución.
      Sitio Web administrado por: Departamento de Matemáticas

    </p>
  </center>
</footer>


</html>

