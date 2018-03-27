<?php
echo "<pre>";
var_dump($_FILES);
echo "</pre>";




if($_FILES && $_FILES["image_file"]['type']=="image/png"){

move_uploaded_file($_FILES["image_file"]['tmp_name'],
				  'uploads/'.basename($_FILES["image_file"]['name']));
}else{
	echo "formato incorrecto";
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1 style="text-align: center;">Subir archivos</h1>

<form action="index.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="image_file">
			<br><br>
		<input type="submit" value="Enviar">
</form>

</body>
</html>