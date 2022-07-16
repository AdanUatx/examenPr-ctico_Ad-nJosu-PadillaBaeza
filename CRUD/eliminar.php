<?php

require_once "../CRUD/model/conexion.php";

if(isset($_POST['id'])) {
  $id = $_POST['id'];
  $query = "DELETE FROM productos WHERE id = $id";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }
  header('Location: ../CRUD/index.php');
}

?>