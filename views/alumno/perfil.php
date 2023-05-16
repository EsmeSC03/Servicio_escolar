<!-- Se deben definir las variables a mostrar, como id, nombre, carrera, etc 
los datos se obtienen obteniendo datos del controlador -->
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
   <!-- Lista de mensajes -->
   <ul id="timeline" class="timeline">
   <a href="<?php echo constant('URL'); ?>alumno"><span id="btn-volver" class="fa fa-elevator animated fadeIn fast" style="cursor:pointer;" title="Inscribirme a un programa">Volver</span></a>
        <a href="<?php echo constant('URL'); ?>inscripcion"><span id="btn-registrarse" class="fa fa-marker animated fadeIn fast" style="cursor:pointer;" title="Inscribirme a un programa">Inscribirme</span></a>
        <a href="<?php echo constant('URL'); ?>reporte"><span id="btn-registrarse" class="fa fa-marker animated fadeIn fast" style="cursor:pointer;" title="Inscribirme a un programa">Crear reporte</span></a>
        <!-- Mensaje -->
        <li class="animated fadeIn fast">
            <div class="avatar">
                 <img src="https://cdn-icons-png.flaticon.com/512/53/53083.png"> 
            </div>
            <div class="bubble-container">
                <div class="bubble">
                    <h3>Estudiante, tus datos son:</h3>
                    <br /><br  />
                    <strong><p>Nombre:</strong> <?php echo $dato ?></p>
                    <strong><p>Carrera:</strong> Ingeniería en Sistemas</p>
                    <strong><p>Telefono:</strong> 4881787735</p>
                    <strong><p>Correo electronico:</strong> L20660044@matehuala.tecnm.mx</p>
                    <strong><p>Contraseña:</strong> PASSWORD</p>
                    <strong><p>Escuela:</strong> ITMH</p>
                    <strong><p>Haciendo servicio en:</strong> CFE</p>
                    <strong><p>Reportes entregados:</strong> 2 reportes</p>
                    <strong><p>Horas actuales de servicio:</strong> 336 horas</p>
                    <strong><p>Tu progreso actual es: </strong></p>
                    <div class="progress-bar">
  <div class="progress">
    <div class="progress-text">70%</div>
  </div>
</div>

            <div class="arrow"></div>
            </div>
        </li>
        <!-- Fin del mensaje -->

    </ul>
    <!-- Fin Lista de mensajes -->

</body>
</html>