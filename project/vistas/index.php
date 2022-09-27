<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../estilos/estilos.css">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <!-- Encabezado -->
    <div class="container well center" id="overlay">
        <h1 class="text-center h2">
            <i class="icon-wrench blue" class="azul"></i>
            <span>Sistema de mantenimiento de labor</span>
        </h1>
        <h4 class="white text-center">
            <img src="../imagenes/LogoAzul.png" alt="" >
            Legislatura de la Ciudad autonoma de Buenos Aires
        </h4>
    </div>
    <!-- Card con login -->
    <div class="container">
        <div class="row">
            <div class="col-4 text-center mx-auto">
                <div class="card" id="carta">
                    <div class="card-title mt-3">
                        <h4 class="azul">
                            <i class="icon-user primary">
                            </i>
                            Ingrese sus datos de acceso
                        </h4>               
                    </div>
                    <div class="card-body">
                        <form action="admin.php" id="validacion" method="POST">
                            <div class="input-group mb-3">
                                <input class="form-control form-control-lg" name="usuario" type="text" placeholder="Usuario" aria-label=".form-control-lg example">
                                <i class="icon-user h5 mt-1 p-1"></i>
                            </div>
                            <div class="input-group mb-3">
                                <input class="form-control form-control-lg" name="contraseña" type="text" placeholder="Contraseña" aria-label=".form-control-lg example">
                                <i class="icon-lock h5 mt-1 p-1"></i>
                            </div>
                            <button class="width-35 pull-right btn btn-sm btn-primary" type="Submit">Ingresar</button>
                            
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="../javascript/javas.js"></script>
</body>
</html>