<?php

include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$talla = $_POST['talla'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];

$sql = "UPDATE productos SET
nombre='$nombre',
tipo='$tipo',
talla='$talla',
precio='$precio',
stock='$stock'
WHERE id=$id";

mysqli_query($conexion, $sql);

header("Location:index.php");

?>
