<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- Se mustre correctamente en dispositivos mobiles -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Archivo Bootstrap4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- CSS PERSONALIZADO -->
    <link type="text/css" rel="stylesheet" href="sesion/formulario.css">

    <!-- ARCHIVOS DE BOOTSTRAP4 JavaScript -->
    <!-- 1jQuery , 2Popper.js, 3Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body>


    <!-- barra de navegacion -->
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><img src="sesion/home.png" width="30" height="30"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " style="color: white;" href="#">Contactanos</a>
                    </li>

                </ul>

            </div>
        </nav>

    </header>

    <!-- Formilario para logearse -->


    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 m-1">
            <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">

                <form action="productos.php" method="POST">

                    <div class="form-group text-center pt-3">
                        <h1 class="text-light">Iniciar Sesión</h1>
                    </div>
                    <div class="form-group mx-sm-4 pt-3">

                        <input type="text" name="email" class="form-control " placeholder="Ingrese su Correo">
                    </div>
                    
                    <div class="form-group mx-sm-4 pt-3">

                        <input type="password" name="clave" class="form-control" placeholder="Ingrese su Contraseña">
                    </div>
                    <div class="form-group mx-sm-4 pt-2">
                        <input type="submit" class="btn btn-block ingresar" value="Ingresar">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>

</html>