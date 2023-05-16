<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, height=device-height, viewport-fit=cover">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Twittor</title>

        <link
            href='https://fonts.googleapis.com/css?family=Quicksand:300,400'
            rel='stylesheet'
            type='text/css'>
        <link
            href='https://fonts.googleapis.com/css?family=Lato:400,300'
            rel='stylesheet'
            type='text/css'>
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

        <link
            rel="stylesheet"
            href="<?php echo constant('URL'); ?>public/css/style.css">
        <link
            rel="stylesheet"
            href="<?php echo constant('URL'); ?>public/css/animate.css">
        <!-- <link rel="stylesheet" href="<?php echo constant('URL');
        ?>public/css/convocatorias.css"> -->
        <link rel="shortcut icon" type="image/ico" href="img/favicon.ico"/>

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
        <link
            rel="apple-touch-startup-image"
            media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)"
            href="img/icons-ios/apple-launch-1125x2436.png">
        <!-- iPhone 8, 7, 6s, 6 (750px x 1334px) -->
        <link
            rel="apple-touch-startup-image"
            media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)"
            href="img/icons-ios/apple-launch-750x1334.png">
        <!-- iPhone 8 Plus, 7 Plus, 6s Plus, 6 Plus (1242px x 2208px) -->
        <link
            rel="apple-touch-startup-image"
            media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3)"
            href="img/icons-ios/apple-launch-1242x2208.png">
        <!-- iPhone 5 (640px x 1136px) -->
        <link
            rel="apple-touch-startup-image"
            media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)"
            href="img/icons-ios/apple-launch-640x1136.png">

        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

        <meta name="apple-mobile-web-app-title" content="Twittor!">

    </head>
    <body>
        <?php include "views/header.php"; ?>
        <!-- Lista de mensajes -->

        <div id="seleccion" class="seleccion animated fadeIn fast" align="center">
        <a href="<?php echo constant('URL'); ?>alumno"><span id="btn-volver" class="fa fa-elevator animated fadeIn fast" style="cursor:pointer;" title="Inscribirme a un programa">Volver</span></a>
        <span id="btn-registrarse" class="fa fa-marker animated fadeIn fast" style="cursor:pointer;" title="Inscribirme a un programa">Inscribirme</span>
        <a href="<?php echo constant('URL'); ?>reporte"><span id="btn-registrarse" class="fa fa-marker animated fadeIn fast" style="cursor:pointer;" title="Inscribirme a un programa">Crear reporte</span></a>

            <h2>Te puedes inscribir en los siguientes programas:
            </h2>
            
            <div class="container">
                <div class="item">
                    <h2 class="texto">Programa 1</h2>
                    <img
                        src="https://hospitalyolombo.gov.co/wp-content/uploads/2021/02/logo-convocatoria-900x506.png"
                        width="200px">
                    <p class="convo">Alumnos requeridos: 3</p>
                    <p class="textconvocatoria">Actividades: Apoyar en el area administrativa,
                        creando reportes y mediante la elaboracion de documentos contables</p>
                    <p class="textconvocatoria">Fecha de publicacion: 29/04/23</p>
                    <p class="textconvocatoria">Fecha de cierre: 8/05/23</p>
                    <button
                        class="button"
                        onclick="alert('No puedes inscribirte porque ya perteneces a un programa')">Inscribirme</button>
                </div>

                <div class="item">
                    <h2>Programa 2</h2>
                    <img
                        src="https://hospitalyolombo.gov.co/wp-content/uploads/2021/02/logo-convocatoria-900x506.png"
                        width="200px">
                    <p class="convo">Alumnos requeridos: 2</p>
                    <p class="textconvocatoria">Actividades: Administrar servidores y conexiones
                        entrantes en la red de la empresa
                    </p>
                    <p class="textconvocatoria">Fecha de publicacion: 29/04/23</p>
                    <p class="textconvocatoria">Fecha de cierre: 18/05/23</p>
                    <button
                        class="button"
                        onclick="alert('No puedes inscribirte porque ya perteneces a un programa')">Inscribirme</button>
                </div>
                <div class="item"><h2>Programa 3</h2>
                    <img
                        src="https://hospitalyolombo.gov.co/wp-content/uploads/2021/02/logo-convocatoria-900x506.png"
                        width="200px">
                    <p class="convo">Alumnos requeridos: 3</p>
                <p class="textconvocatoria">Actividades: Apoyar en el area administrativa,
                    creando reportes y mediante la elaboracion de documentos contables</p>
                <p class="textconvocatoria">Fecha de publicacion: 29/04/23</p>
                <p class="textconvocatoria">Fecha de cierre: 18/05/23</p>
                <button
                    class="button"
                    onclick="alert('No puedes inscribirte porque ya perteneces a un programa')">Inscribirme</button></div>
            </div>
        </div>

   

</body>
</html>