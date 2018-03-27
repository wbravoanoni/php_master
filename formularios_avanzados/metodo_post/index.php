<?php

$nombre   = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
$apellido = isset($_POST["apellido"]) ? $_POST["apellido"] : "";
$opciones = isset($_POST["opciones"]) ? $_POST["opciones"] : "";

echo "<pre>";
var_dump($opciones);
var_dump($nombre);
var_dump($apellido);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Metodo POST</title>
</head>
<body>
	<h1>Metodo POST</h1>
	
	<form action="index.php" method="POST" >

		<select name="opciones" id="">

			<?php
			  if($opciones=="Hombre"):
					echo "<option selected value='Hombre'>Hombre</option>";
					echo "<option value='Mujer'>Mujer</option>";

				elseif($opciones=="Mujer"):
				    echo "<option value='Hombre'>Hombre</option>";
					echo "<option selected value='Mujer'>Mujer</option>";
				else:
					echo "<option value='Hombre'>Hombre</option>";
					echo "<option selected value='Mujer'>Mujer</option>";	
			  endif
			?>
		</select>
		<input type="text" name="nombre" value="<?php echo $nombre;?>">
		<input type="text" name="apellido" value="<?php echo $apellido;?>">
		<input type="submit">
	</form>
</body>
</html>