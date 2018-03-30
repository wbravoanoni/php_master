<?php

if($_POST){

	$titulo=isset($_POST["titulo"]) ? $_POST["titulo"] : "";
	$nombre=isset($_POST["nombre"]) ? $_POST["nombre"] : "";
	$apellido=isset($_POST["apellido"]) ? $_POST["apellido"] : "";

$string_output= "\n".$titulo. "," . $nombre . "," . $apellido;
file_put_contents('datos.txt',$string_output,FILE_APPEND | LOCK_EX);
}

$file_contents=file_get_contents('datos.txt');


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>
<body>

	<h1 class="text-center">Crear archivos</h1>
<br><br>

	<form action="index.php" method="POST">
		Titulo: <input type="text" name="titulo"><br>
		Nombre: <input type="text" name="nombre"><br>
		Apellido: <input type="text" name="apellido"><br>
		<input type="submit" value="enviar">

	</form>

	<table border="0" class="table table-striped">

<?php

$fila=explode("\n",$file_contents);

?>
		<thead>
			<tr><th>Titulo</th><th>Nombre</th><th>Apellido</th></tr>
		</thead>

		<tbody>
			
			<?php
			foreach ($fila as $elemento) {
			$columna=explode(",", $elemento);
			echo "<tr><td>$columna[0]</td><td>$columna[1]</td><td>$columna[2]</td><tr>";
			}
			?>

		</tbody>

	</table>
	
</body>
</html>