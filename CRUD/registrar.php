<?php
   require_once "../CRUD/model/conexion.php";
if (isset($_POST)) {
    if (!empty($_POST)) {
        $nombre = $_POST['nombre'];
        $cantidad = $_POST['cantidad'];
        $categoria = $_POST['categoria'];
        
        $query = mysqli_query($conexion, "INSERT INTO productos(nombreProducto, Cantidad, id_categoria) VALUES ('$nombre', '$cantidad', $categoria)");
        if ($query) {
                header('Location: ../CRUD/index.php');
        }else{
            die("Query Failed");
        }
    }
}
?>