
<?php
include "../Cliente/include/encabezado.php";
include "conexion.php";

if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['categoria'])) {
        $alert = '<p class"error">Todo los campos son requeridos</p>';
    } else {
        $idcat = $_GET['id'];
        $categoria = $_POST['categoria'];
        

        $sql_update = mysqli_query($conexion, "UPDATE categorias SET categoria= '$categoria' WHERE idcat = $idcat");
        $alert = '<p>Categoria Actualizada</p>';
        header("Location:../Cliente/categorias.php");
        exit();
    }
}


// Mostrar Datos

if (empty($_REQUEST['id'])) {
    header("Location:../Cliente/categorias.php");
    exit();
}
$idcat = $_REQUEST['id'];
$sql = mysqli_query($conexion, "SELECT * FROM categorias WHERE idcat= $idcat");
$result_sql = mysqli_num_rows($sql);
if ($result_sql == 0) {
    header("Location:../Cliente/categorias.php");
    exit();
} else {
    if ($data = mysqli_fetch_array($sql)) {
        $idcat = $data['idcat'];
        $categoria = $data['categoria'];
        
    }
}



?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-6 m-auto">
            <form class="" action="" method="post">
                <?php echo isset($alert) ? $alert : ''; ?>
                <input type="hidden" name="id" value="<?php echo $idcat; ?>">
                <div class="form-group">
                    <label for="categoria">Categorias: </label>
                    <input type="text" placeholder="Ingrese categoria" class="form-control" name="categoria" id="categoria"
                        value="<?php echo $categoria; ?>">
                </div>
                
                
                
                <a href="../Cliente/categorias.php?"><button type="button" class="btn btn-primary"><i class="fas fa-user-edit"></i>
                        Cancelar</button></a>
                <button type="submit" class="btn btn-primary"><i class="fas fa-user-edit"></i> Editar
                    Usuario</button>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<footer style="position: absolute; bottom: 0; width: 100%; height: 40px;">
    <?php include_once("../Cliente/include/pie.php"); ?>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>