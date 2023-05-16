<?php
$dato = $this->d['variable'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Twittor</title>

    <link href='https://fonts.googleapis.com/css?family=Quicksand:300,400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/animate.css">

    <link rel="shortcut icon" type="image/ico" href="img/favicon.ico" />

    <link rel="manifest" href="manifest.json">

    <!-- Android -->
    <meta name="theme-color" content="#3498db">

    <!-- IOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">


    <link rel="apple-touch-icon" href="img/icons/icon-192x192.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/icons/icon-192x192.png">
    <link rel="apple-touch-icon" sizes="167x167" href="img/icons/icon-152x152.png">

    <!-- iPhone X (1125px x 2436px) -->
    <link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" href="img/icons-ios/apple-launch-1125x2436.png">
    <!-- iPhone 8, 7, 6s, 6 (750px x 1334px) -->
    <link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" href="img/icons-ios/apple-launch-750x1334.png">
    <!-- iPhone 8 Plus, 7 Plus, 6s Plus, 6 Plus (1242px x 2208px) -->
    <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3)" href="img/icons-ios/apple-launch-1242x2208.png">
    <!-- iPhone 5 (640px x 1136px) -->
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" href="img/icons-ios/apple-launch-640x1136.png">

    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <meta name="apple-mobile-web-app-title" content="Twittor!">

</head>

<body>
    <?php include "views/header.php"; ?>
    <!-- Modal -->
    <div id="modal" class="oculto">
        <img src="https://cdn-icons-png.flaticon.com/512/53/53083.png" id="modal-avatar">
        <span class="first">
            <span id="titulo-modal">Nuevo mensaje</span>
            <span id="cancel-btn" class="fa fa-times"></span>
        </span>


        <div class="nuevo-mensaje">
            <input type="text" id="txtMensaje" placeholder="Datos de tu servicio: " rows="1"></textarea>
        </div>


        <!-- boton de enviar -->

        <div id="post-btn" class="fab">
            <i class="fa fa-paper-plane"></i>
        </div>

        <div id="post-btn" class="fab-marker">
            <i class="fa fa-map-marker-alt"></i>
        </div>

        <div id="post-btn" class="fab-photo">
            <i class="fa fa-image"></i>
        </div>

    </div>
    <!-- Fin Modal -->

    <!-- Perfil del alumno -->
    <div id="seleccion" class="seleccion animated fadeIn fast" align="center">
        <a href="<?php echo constant('URL'); ?>inscripcion"><span id="btn-registrarse" class="fa fa-marker animated fadeIn fast" style="cursor:pointer;" title="Inscribirme a un programa">Inscribirme</span></a>
        <a href="<?php echo constant('URL'); ?>reporte"><span id="btn-registrarse" class="fa fa-marker animated fadeIn fast" style="cursor:pointer;" title="Inscribirme a un programa">Crear reporte</span></a>

        <h2>Hola 'Microsft'</h2>
        <div>
            <a href="<?php echo constant('URL'); ?>perfil"><img data-user="spiderman" src="https://cdn-icons-png.flaticon.com/512/3891/3891710.png" alt="spiderman" class="seleccion-avatar" style="cursor:pointer" title="Consultar mi informacion"></a>
            <p>Cuentas con 7 alumnos registrados en tu empresa: </p>

            <div style="display: flex; align-items: center;">
                <div style="display: inline-block;">
                    <img src="https://cdn-icons-png.flaticon.com/512/53/53083.png" style="max-width: 100%;" width="20%" height="10%">
                    <p>Ashley Esmeralda Sanchez Castillo</p>
                    <button class="otroBoton">Ver informacion</button>
                </div>

                <div style="display: flex; align-items: center;">
                    <div style="display: inline-block;">
                        <img src="https://cdn-icons-png.flaticon.com/512/53/53083.png" style="max-width: 100%;" width="20%" height="10%">
                        <p>Aleida Rafaela Martinez Vazquez</p>
                        <button class="otroBoton">Ver informacion</button>
                    </div>

                    <div style="display: flex; align-items: center;">
                        <div style="display: inline-block;">
                            <img src="https://cdn-icons-png.flaticon.com/512/53/53083.png" style="max-width: 100%;" width="20%" height="10%">
                            <p>Juan Diego Castillo Estrada</p>
                            <button class="otroBoton">Ver informacion</button>
                        </div>
                    </div>

                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN del perfil del alumno -->



    <script src="views/user/js/libs/jquery.js"></script>
    <script src="views/user/js/app.js"></script>

</body>

</html>