<?php

require_once "../CRUD/model/conexion.php";
if (isset($_POST)) {
    if (!empty($_POST)) {
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $categoria = $_POST['categoria'];

	

	$consul = "UPDATE productos SET nombreProducto='$nombre' , Cantidad = $cantidad , id_categoria='$categoria' WHERE id = $id ";
	$resultado = mysqli_query($conexion,$consul);


	if ($resultado) {
		header('Location: ../CRUD/index.php');
		echo "Registro Exitoso";
	}else{
		echo "No se pudo completar el registro";
	}
	}	
}	

?>