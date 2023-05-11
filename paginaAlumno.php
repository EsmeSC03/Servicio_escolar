<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi servicio social</title>
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <link href="estilo2.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
</head>

<body>
    <!-- Main Container -->
    <div class="container">
        <!-- Header -->
        <header>
            <img src="http://drive.google.com/uc?export=view&id=1PJ6FNAmcJksi15nqgU0jooI55c_fq-e2" height="100px">
            <div class="logo">Mi servicio social</div>
            <nav>
                <ul>
                    <button class="botonEncabezado" onclick="crearConvocatoria()">Mi perfil</button>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="#">Cerrar sesión</a></li>
                </ul>
            </nav>
        </header>
        <!--<div class="info">
            <p>En esta seccion puedes controlar los aspectos de tu servicio social</p>
        </div> 
        <div class="gallery">
            <button class="button" onclick="crearConvocatoria()">Mi informacion</button>
            <button class="button" onclick="mostrarConvocatoria()">Programas activos</button>
            <button class="button" onclick="mostrarAlumnos()">Progreso</button>
            <button class="button" onclick="mostrarReportes()">Reportes</button>
            <button class="button" onclick="mostrarInformacion()">Datos de servicio</button>
        </div>-->




        

    <div id="alumnos" style="display:none">
        <div class="progress-bar">
            <div class="progress" style="width: 75%;"></div>
        </div>
        <span id="progress-text"></span>
        <span id="progress-hours"></span>
    </div>




    <div style="display:flex;justify-content:center; margin-top: 2%;">
        <div style="flex:1;">
            <div class="gallery">
                <button class="button" onclick="crearConvocatoria()">Mi informacion</button>
                <button class="button" onclick="mostrarConvocatoria()">Programas activos</button>
                <button class="button" onclick="mostrarAlumnos()">Progreso</button>
                <button class="button" onclick="mostrarReportes()">Reportes</button>
                <button class="button" onclick="mostrarInformacion()">Datos de servicio</button>
            </div></div>


        <div id="crearConvocatoria"
             style="display:none;text-align:center;border-radius:100px;display:block;flex-direction:column;justify-content:center;align-items:center;width:70%;">
          <div style="padding:10px;">
            <h2>Mi informacion</h2>
            <img class="alumno" src="https://cdn-icons-png.flaticon.com/512/1046/1046270.png" width="120px"
                 height="120px" alt="imagen del alumno" style="display:block;margin:0 auto;">
            <p>Nombre: Juan Rodriguez</p>
            <p>Carrera: Ingeniería de Sistemas</p>
            <p>Escuela: ITMH</p>
            <p>Haciendo servicio en: CFE</p>
          </div>
          <p>Tu progreso actual es:</p>
          <div style="display:flex;justify-content:center;align-items:center;">
            <div class="progress-bar">
              <div class="progress" style="width:75%;"><span style="margin-left:45%">75%</span></div>
            </div>
            <span id="progress-text"></span>
            <span id="progress-hours"></span>
          </div>
          <br><br>
        </div>


        <div style="display:flex;justify-content:center; margin-top: 2%;">
        <div style="flex:1;">
        <div id="convocatorias" style="display:none; justify-content:center; margin-top: 2%;">
            <div class="contenedor">
                <center>
                    <div class="convocatoria1">
                        <h2 class="texto">Programa 1</h2>
                        <img src="https://hospitalyolombo.gov.co/wp-content/uploads/2021/02/logo-convocatoria-900x506.png"
                            width="200px">
                        <p class="convo">Alumnos requeridos: 3</p>
                    </div>
                </center>
                <div>
                    <p class="textconvocatoria">Actividades: Apoyar en el area administrativa, creando reportes y
                        mediante la elaboracion
                        de documentos contables</p>
                    <p class="textconvocatoria">Fecha de publicacion: 29/04/23</p>
                    <p class="textconvocatoria">Fecha de cierre: 8/05/23</p>
                    <button class="button"
                        onclick="alert('No puedes inscribirte porque ya perteneces a un programa')">Inscribirme</button>


                </div>
            </div>

            <div class="contenedor">
                <center>
                    <div class="convocatoria1">
                        <h2>Programa 2</h2>
                        <img src="https://hospitalyolombo.gov.co/wp-content/uploads/2021/02/logo-convocatoria-900x506.png"
                            width="200px">
                        <p class="convo">Alumnos requeridos: 2</p>
                    </div>
                </center>
                <div>
                    <p class="textconvocatoria">Actividades: Administrar servidores y conexiones entrantes en la red de
                        la empresa
                    </p>
                    <p class="textconvocatoria">Fecha de publicacion: 29/04/23</p>
                    <p class="textconvocatoria">Fecha de cierre: 18/05/23</p>
                    <button class="button"
                        onclick="alert('No puedes inscribirte porque ya perteneces a un programa')">Inscribirme</button>

                </div>
            </div>

            <div class="contenedor">
                <center>
                    <div class="convocatoria1">
                        <h2>Programa 3</h2>
                        <img src="https://hospitalyolombo.gov.co/wp-content/uploads/2021/02/logo-convocatoria-900x506.png"
                            width="200px">
                        <p class="convo">Alumnos requeridos: 3</p>
                    </div>
                </center>
                <div>
                    <p class="textconvocatoria">Actividades: Apoyar en el area administrativa, creando reportes y
                        mediante la
                        elaboracion de
                        documentos contables</p>
                    <p class="textconvocatoria">Fecha de publicacion: 29/04/23</p>
                    <p class="textconvocatoria">Fecha de cierre: 18/05/23</p>
                    <button class="button"
                        onclick="alert('No puedes inscribirte porque ya perteneces a un programa')">Inscribirme</button>

                </div>
            </div>

        </div>
    </div>
    </div>





        <div style="flex:1; justify-content:center;align-items:center;">
        
        <div id="misReportes">
            <h1>Mis reportes</h1>
            <div class="imagenes">
                <a href="reporte1" target="_blank">
                    <img src="https://cdn-icons-png.flaticon.com/512/3997/3997635.png" alt="Reporte 1">
                    <figcaption>Reporte 1</figcaption>
                </a>
                <a href="reporte2.pdf" target="_blank">
                    <img src="https://cdn-icons-png.flaticon.com/512/3997/3997635.png" alt="Reporte 2">
                    <figcaption>Reporte 2</figcaption>
                </a>
                <a href="reporte3.pdf" target="_blank">
                    <img src="https://cdn-icons-png.flaticon.com/512/3997/3997635.png" alt="Reporte 3">
                    <figcaption>Reporte final</figcaption>
                </a>
            </div>
        </div></div>
      </div>
      



    <div id="informacion" style="display:none">
        <h2>Haciendo servicio en: CFE</h2>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/Comisi%C3%B3n_Federal_de_Electricidad_%28logo%29_.svg/2560px-Comisi%C3%B3n_Federal_de_Electricidad_%28logo%29_.svg.png"
            alt="Logo de la empresa">
        <p>Horas actuales: 170 horas</p>
        <p>Horas totales: 480 horas</p>
        <p>Fecha inicio: 17/02/23</p>
        <p>Supervisor: Francisco Daniel</p>
    </div>


    <div id="pendientes" style="display:none">
        <button class="button" onclick="crearReporte()">Crear reporte</button>
        <button class="button" onclick="misReportes()">Mis reportes</button>
        <div id="crearReporte" style="display:none">
            <form>
                <div class="form-group">
                    <label for="horas">Número de horas:</label>
                    <input type="text" id="horas" name="horas">
                </div>
                <div class="form-group hidden">
                    <label for="descripcion">Descripción:</label>
                    <input type="text" id="descripcion" name="descripcion">
                </div>
                <div class="form-group hidden">
                    <label for="actividades">Actividades:</label>
                    <input type="text" id="actividades" name="actividades">
                </div>
                <div class="form-group hidden">
                    <label for="fecha">Fecha:</label>
                    <input type="date" id="fecha" name="fecha">
                </div>
                <button type="button" id="continuar-btn" class="botoncito">Continuar</button>
            </form>
        </div>
        

        <div id="misReportes" style="display:none">
            <h1>Mis reportes</h1>
            <p>A continuación se muestran los iconos de los reportes con los que se cuenta:</p>
            <div class="imagenes">
                <a href="reporte1" target="_blank">
                    <img src="https://cdn-icons-png.flaticon.com/512/3997/3997635.png" alt="Reporte 1">
                    <figcaption>Reporte 1</figcaption>
                </a>
                <a href="reporte2.pdf" target="_blank">
                    <img src="https://cdn-icons-png.flaticon.com/512/3997/3997635.png" alt="Reporte 2">
                    <figcaption>Reporte 2</figcaption>
                </a>
                <a href="reporte3.pdf" target="_blank">
                    <img src="https://cdn-icons-png.flaticon.com/512/3997/3997635.png" alt="Reporte 3">
                    <figcaption>Reporte final</figcaption>
                </a>
            </div>
        </div>
    </div>









    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script type="text/javascript">
        const continuarBtn = document.getElementById('continuar-btn');
        const campos = document.querySelectorAll('.form-group');
        let campoActual = 0;

        continuarBtn.addEventListener('click', () => {
            // Ocultar el campo actual
            campos[campoActual].classList.add('hidden');
            // Aumentar el índice del campo actual
            campoActual++;
            // Si no hay más campos por mostrar, enviar el formulario
            if (campoActual >= campos.length) {
                alert('Formulario enviado');
                return;
            }
            // Mostrar el siguiente campo
            campos[campoActual].classList.remove('hidden');
        });


        var percentage = 75; // Este es el porcentaje completado, puede ser una variable que se actualice dinámicamente

        var progressBar = document.querySelector(".progress");
        progressBar.style.width = percentage + "%";

        var progressText = document.querySelector("#progress-text");
        progressText.innerHTML = "Tu porcentaje completado es: " + percentage + "%";
        progresshours.innerHTML = "Te hacen falta: " + (480 * percentage) / 100 + "horas";



        function mostrarAlumnos() {
            document.getElementById("alumnos").style.display = "block";
            document.getElementById("pendientes").style.display = "none";
            document.getElementById("convocatorias").style.display = "none";
            document.getElementById("crearConvocatoria").style.display = "none";
            document.getElementById("informacion").style.display = "none";
        }

        /*function mostrarConvocatoria() {
            document.getElementById("convocatorias").style.display = "block";
            document.getElementById("alumnos").style.display = "none";
            document.getElementById("crearConvocatoria").style.display = "none";
        }*/

        function mostrarConvocatoria() {
            document.getElementById("convocatorias").style.display = "flex";
            document.getElementById("alumnos").style.display = "none";
            document.getElementById("crearConvocatoria").style.display = "none";
            document.getElementById("pendientes").style.display = "none";
            document.getElementById("informacion").style.display = "none";
            if (div.style.display === "none") {
                div.style.display = "flex";
            } else {
                div.style.display = "none";
            }
        }

        function mostrarReportes() {
            document.getElementById("pendientes").style.display = "block";
            document.getElementById("convocatorias").style.display = "none";
            document.getElementById("alumnos").style.display = "none";
            document.getElementById("informacion").style.display = "none";
            document.getElementById("crearConvocatoria").style.display = "none";
            if (div.style.display === "none") {
                div.style.display = "flex";
            } else {
                div.style.display = "none";
            }
        }



        function misReportes() {
            document.getElementById("pendientes").style.display = "block";
            document.getElementById("misReportes").style.display = "block";
            document.getElementById("crearReporte").style.display = "none";
            document.getElementById("convocatorias").style.display = "none";
            document.getElementById("alumnos").style.display = "none";
            document.getElementById("informacion").style.display = "none";
            document.getElementById("crearConvocatoria").style.display = "none";
            if (div.style.display === "none") {
                div.style.display = "flex";
            } else {
                div.style.display = "none";
            }
        }

        function crearReporte() {
            document.getElementById("pendientes").style.display = "block";
            document.getElementById("crearReporte").style.display = "block";
            document.getElementById("misReportes").style.display = "none";
            document.getElementById("convocatorias").style.display = "none";
            document.getElementById("alumnos").style.display = "none";
            document.getElementById("informacion").style.display = "none";
            document.getElementById("crearConvocatoria").style.display = "none";
            if (div.style.display === "none") {
                div.style.display = "flex";
            } else {
                div.style.display = "none";
            }
        }

        function crearConvocatoria() {
            document.getElementById("crearConvocatoria").style.display = "block";
            document.getElementById("alumnos").style.display = "none";
            document.getElementById("convocatorias").style.display = "none";
            document.getElementById("pendientes").style.display = "none";
            document.getElementById("informacion").style.display = "none";
        }

        function mostrarInformacion() {
            document.getElementById("informacion").style.display = "block";
            document.getElementById("crearConvocatoria").style.display = "none";
            document.getElementById("alumnos").style.display = "none";
            document.getElementById("convocatorias").style.display = "none";
            document.getElementById("pendientes").style.display = "none";
        }

        $('.your-class').slick({
            lazyLoad: 'ondemand',
            slidesToShow: 3,
            slidesToScroll: 1
        });
        $('#prev-btn').click(function () {
            $('.your-class').slick('slickPrev');
        });

        $('#next-btn').click(function () {
            $('.your-class').slick('slickNext');
        });

    </script>
</body>

</html>