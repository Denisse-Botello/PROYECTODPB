<?php
session_start();

// Check if this is the first activity, if so, set session start time
if (!isset($_SESSION['tiempo'])) {
    $_SESSION['tiempo'] = time();
} 
// Check if more than 360 seconds have passed since the last activity
else if (time() - $_SESSION['tiempo'] > 360) {
    // Session timeout, destroy session and redirect to login page
    session_unset();  // Clear session variables
    session_destroy();  // Destroy the session
    header("Location:../index.php");  // Redirect to login
    die();  // Ensure no further code is executed
}

// Reset session time on user activity
$_SESSION['tiempo'] = time();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4zWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="font-family: 'Times New Roman', Times, serif;">
    <div class="container" style="text-align: center; background-color: rgb(183,228,199);">
        <div class="row">
            <div class="col-3">
                <img src="img/logo.jpg" height="200px" width="200px" style="padding-top: 30px;">
            </div>
            <div class="col" style="padding-top: 80px; font-family: 'Times New Roman', Times, serif; font-weight:800;">
                <div class="btn-group" role="group" aria-label="Basic example">

                    <!-- Role 1 buttons -->
                    <?php if( $_SESSION['rol'] == 1) { ?>
                        <a href="inicio.php"><button type="button" class="btn btn-light">Inicio</button></a>
                        <a href="usuarios.php"><button type="button" class="btn btn-light">Usuarios</button></a>
                        <a href="categorias.php"><button type="button" class="btn btn-light">Categorias</button></a>
                        <a href="promociones.php"><button type="button" class="btn btn-light">Promociones</button></a>
                        <a href="productos.php"><button type="button" class="btn btn-light">Productos</button></a>
                        <a href="reportes.php"><button type="button" class="btn btn-light">Reportes</button></a>
                        <a href="salir.php"><button type="button" class="btn btn-dark">Salir</button></a>
                    <?php } ?>

                    <!-- Role 2 buttons -->
                    <?php if( $_SESSION['rol'] == 2) { ?>
                        <a href="inicio.php"><button type="button" class="btn btn-success">Inicio</button></a>
                        <a href="usuarios.php"><button type="button" class="btn btn-light">Usuarios</button></a>
                        <a href="categorias.php"><button type="button" class="btn btn-success">Categorias</button></a>
                        <a href="promociones.php"><button type="button" class="btn btn-success">Promociones</button></a>
                        <a href="productos.php"><button type="button" class="btn btn-success">Productos</button></a>
                        <a href="salir.php"><button type="button" class="btn btn-success">Salir</button></a>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
