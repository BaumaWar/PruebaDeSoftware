<html>
    <head>
        <meta charset="UTF-8">
        <title>Pruebas Registel</title>
        
        <link language="css" rel="stylesheet" href="./Lib/bootstrap-4.4.1-dist/css/datatables.min.css?<?php echo rand(0, 9999); ?>"/>
        <link language="css" rel="stylesheet" href="./Lib/bootstrap-4.4.1-dist/css/bootstrap-grid.css?<?php echo rand(0, 9999); ?>">
        <link language="css" rel="stylesheet" href="./Lib/bootstrap-4.4.1-dist/css/bootstrap-grid.min.css?<?php echo rand(0, 9999); ?>">
        <link language="css" rel="stylesheet" href="./Lib/bootstrap-4.4.1-dist/css/bootstrap-reboot.css?<?php echo rand(0, 9999); ?>">
        <link language="css" rel="stylesheet" href="./Lib/bootstrap-4.4.1-dist/css/bootstrap-reboot.min.css?<?php echo rand(0, 9999); ?>">
        <link language="css" rel="stylesheet" href="./Lib/bootstrap-4.4.1-dist/css/bootstrap.css?<?php echo rand(0, 9999); ?>">
        <link language="css" rel="stylesheet" href="./Lib/bootstrap-4.4.1-dist/css/bootstrap.min.css?<?php echo rand(0, 9999); ?>">
        <link language="css" rel="stylesheet" href="./Vista/StyleCSS/width_Form.css?<?php echo rand(0, 9999); ?>">
        <link language="css" rel="stylesheet" href="./Vista/StyleCSS/iconos.css?<?php echo rand(0, 9999); ?>">
        <link language="css" rel="stylesheet" href="./Vista/StyleCSS/botones.css?<?php echo rand(0, 9999); ?>">
        <link language="css" rel="stylesheet" href="./Vista/StyleCSS/Font-style.css?<?php echo rand(0, 9999); ?>">
        
    </head>
    <body align="center">
        <!--<a href="Web/index.html.php?carpeta=ControladorPHP&modulo=OrdenSeccionUno&controlador=OrdenSeccionUno&funcion=crear">Continuar A Ordenes de Trabajo</a>-->
        <?php
            require_once './Controlador/ControladorMasterHelper/ControladorMasterHelper.php';
            ControladorMasterHelper::getUrlII();
        ?>
    </body>
</html>
