<?php
$nombre   = isset($_POST["nombre"])?$_POST["nombre"]:"";
$apellido = isset($_POST["apellido"])?$_POST["apellido"]:"";

echo "<pre>";
var_dump($_POST);
var_dump($_FILES);
echo "</pre>";

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>enciptacion</h1>
	
	<!--<form action="" method="POST" enctype="x-www-form-urlencoded">-->
	<!--<form action="" method="GET" enctype="text/plain">-->
	<form action="" method="POST" enctype="multipart/form-data">	
	Nombre:   <input type="text" name="nombre" value="<?php echo $nombre ?>"><br>
	Apellido: <input type="text" name="apellido" value="<?php echo $apellido ?>"><br>

<input type="file" name="image_file">
		<input type="submit" value="enviar">


	</form>
</body>
</html>