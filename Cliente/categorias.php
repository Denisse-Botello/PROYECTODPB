<?php
$alert = "";

include_once("../Servidor/conexion.php");

if (!empty($_POST)) {

    if (empty($_POST['cam1'])) {
        $alert = '<div class="alert alert-primary" role="alert">TODOS LOS DATOS SON OBLIGATORIOS</div>';
    } else {
        // Solo se asigna si todos los campos están llenos
        $c1 = $_POST['cam1'];

        $query = mysqli_query($conexion, "SELECT * FROM categorias WHERE categoria = '$c1'");
        $result = mysqli_fetch_array($query);

        if ($result > 0) {

            $alert = '<div class = "alert alert-danger" role = "alert">La categoria ya existe!!!</div>';
        } else {

            $consulta = mysqli_query($conexion, "INSERT INTO categorias(categoria) 
                VALUES('$c1')");

            if ($consulta) {
                $alert = '<div class = "alert alert-danger" role = "alert">CATEGORIA REGISTRADA!!!</div>';
            } else {
                $alert = '<div class = "alert alert-danger" role = "alert">ERROR AL REGISTRAR!!!</div>';
            }
        }
    }
}
?>

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

    <!--inicia el cuerpo de  la  página-->

    <div class="container" style="text-align:center">
        <h2>CATEGORIAS</h2>

        <!--termina  cuerpo de  la  pagina-->

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Nueva categoria
        </button>

         <table class="table">
            <thead>
                <tr>
                    <th scope="col">Categorias</th>
                    <th scope="col">Acciones</th>


                </tr>
            </thead>
            <tbody>

                <?php
                include_once("../Servidor/conexion.php");
                $con = mysqli_query($conexion, "SELECT idcat,categoria FROM categorias");
                $res = mysqli_num_rows($con);
                while ($datos = mysqli_fetch_assoc($con)) {
                ?>

                    <tr>
                        <td><?php echo $datos['categoria']; ?></td>



                        <td><a href="../Servidor/editar_categoria.php ?id= <?php echo $datos['idcat'] ?>">
                                <button type="button" class="btn btn-secondary"><i class="fi fi-rr-blog-pencil"></i>
                                </button>
                            </a>
                        </td>
                        <td><a href="../Servidor/borrar_categoria.php ?id= <?php echo $datos['idcat'] ?>">
                                <button type="button" class="btn btn-danger"><i class="fi fi-rr-trash-xmark"></i>
                                </button>
                            </a>
                        </td>
                    <?php
                } ?>


                    </tr>



            </tbody>
        </table>
    </div>
    <!-- inicia Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registro de Categoria</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- INICIA FORM-->
                    <form style="padding: 25px;" method="POST">
                        <div>
                            <?php echo isset($alert) ? $alert : ""  ?>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Categoria</label>
                            <input type="text" class="form-control" id="cam1" name="cam1" placeholder="Example input">
                        </div>

                        </select>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Guardar Información</button>
                        </div>
                    </form>
                    <!-- FINALIZA FORM-->
                </div>
            </div>
        </div>
    </div>
    <!-- TERMINA MODAL -->
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