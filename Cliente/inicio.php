<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header>
      
        <!--encabezado-->
        <?php include_once("include/encabezado.php") ?>
        <!--fin encabezado-->
    </header>
    <div class="container"></div>
    <p><?php echo $_SESSION['nombre']; echo " "; $_SESSION['paterno']  ?></p>

    <!--inicia el cuerpo de  la  página-->
    <div class="container">
        <h2>Inicio</h2>
    </div>
    <!--termina  cuerpo de  la  pagina-->


    <div class="container">
    <!--INICIA CARRUSEl-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/p1.jpg" class="d-block w-100" alt="fondo" width="400px" height="250">
    </div>
    <div class="carousel-item">
      <img src="img/p2.jpg" class="d-block w-100" alt="fondo2" width="400px" height="250">
    </div>
    <div class="carousel-item">
      <img src="img/p3.jpg" class="d-block w-100" alt="p1" width="400px" height="250">
    </div>
    <div class="carousel-item">
      <img src="img/p4.jpg" class="d-block w-100" alt="p1" width="400px" height="250">
    </div>
    <div class="carousel-item">
      <img src="img/p5.jpg" class="d-block w-100" alt="p1" width="400px" height="250">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <!--termina CARRUSEL-->
  </div>
</div>



    <footer>
        <!-- inicia pie-->
        <?php include_once("include/pie.php") ?>
        <!--fin pie-->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>