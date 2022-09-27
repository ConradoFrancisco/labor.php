<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="../estilos/admin.css">
    <title>Document</title>
</head>
<body>
    <div class="d-flex">
        <div class="bg-primary text-centered" id="sidebar-container">
            <div class="logo text-centered">
                <h4 class="text-light font-weight-bold text-centered">Panel de Control</h4>
            </div>
            <div class="menu">
                <a href="#" class="d-block p-3 text-light"><i class="icon-home me-2 lead"></i>Inicio</a>
                <a href="#" class="d-block p-3 text-light"><i class="icon-group me-2 lead"></i>Legisladores</a>
                <a href="#" class="d-block p-3 text-light"><i class="icon-group me-2 lead"></i>Cargos Parlamentarios</a>
                <a href="#" class="d-block p-3 text-light"><i class="icon-bookmark-empty me-2 lead"></i>Comisiones</a>
                <a href="#" class="d-block p-3 text-light"><i class="icon-bookmark me-2 lead"></i>Bloque</a>
                <a href="laborUsuarios.php" class="d-block p-3 text-light"><i class="icon-user me-2 lead"></i>Labor Usuario</a>
                <a href="#" class="d-block p-3 text-light"><i class="icon-leaf me-2 lead"></i>Editar Expedientes</a>
                <a href="#" class="d-block p-3 text-light"><i class="icon-list me-2 lead"></i>Ver Movimientos</a>
                <a href="#" class="d-block p-3 text-light"><i class="icon-edit me-2 lead"></i>Tipo Movimientos</a>
                <a href="#" class="d-block p-3 text-light"><i class="icon-cog me-2 lead"></i>Numeraciones</a>
                <a href="#" class="d-block p-3 text-light"><i class="icon-inbox me-2 lead"></i>Bandejas</a>
            </div>
        </div>
        <div class ="w-100">
            <nav class="navbar bg-light">
                <div class="container-fluid" id="nav">
                    <h3 class="text-light fw-light"> <i class="icon-wrench"></i> Sistema de Mantenimiento Parlamentario </h3>
                </div>
            </nav>
            <h1 class="h4 ms-3">Bienvenido al Sistema de  Mantenimiento de Labor</h1>
            <p class="ms-3 fw-light">Aquí podrá hacer tareas de mantenimiento y actualización de las bases de datos.</p>
            <h2 class="h4 ms-3" id="nov">Novedades</h2>
            <div class="well ms-3 w-75"><h4 class="blue smaller lighter fw-normal" id="leyenda">Guía para la Administración de Agenda</h4><a class="btn btn-info btn-small" href="javascript:mostrarContenidoInicio(5)">Leer mas...</a></div>
            <?php
            
        ?>
        </div>
        

        
    </div>
</body>
</html>