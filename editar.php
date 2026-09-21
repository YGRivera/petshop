<?php

include("conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM productos WHERE id=$id";

$resultado = mysqli_query($conexion, $sql);

$fila = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html>
<head>
<title>Editar Producto</title>
</head>
<body>

<h2>Editar Producto</h2>

actualizar.php

<input type="hidden" name="id"
value="<?php echo $fila['id']; ?>">

<label>Nombre:</label>
<input type="text"
name="nombre"
value="<?php echo $fila['nombre']; ?>"
required>

<br><br>

<label>Tipo:</label>
<input type="text"
name="tipo"
value="<?php echo $fila['tipo']; ?>"
required>

<br><br>

<label>Talla:</label>
<input type="text"
name="talla"
value="<?php echo $fila['talla']; ?>"
required>

<br><br>

<label>Precio:</label>
<input type="number"
step="0.01"
name="precio"
value="<?php echo $fila['precio']; ?>"
required>

<br><br>

<label>Stock:</label>
<input type="number"
name="stock"
value="<?php echo $fila['stock']; ?>"
required>

<br><br>

<button type="submit">
Actualizar
</button>

</form>

<br>

index.phpVolver</a>

</body>
</html>
