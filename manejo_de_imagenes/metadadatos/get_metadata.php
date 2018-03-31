<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<img src="../abrir_imagenes/open_image.php" width="600px" alt="">



<?php
$meta_data=exif_read_data("../abrir_imagenes/attractions.jpg");
//print_r($meta_data);
?>

<ul>
	<li>Name: <?php echo $meta_data["FileName"]?> </li>
	<li>Size: <?php echo $meta_data["FileSize"]?> </li>
	<li>Type: <?php echo $meta_data["MimeType"]?></li>
	<li>Company: <?php echo $meta_data["Company"]?></li>
	<li>Height: <?php echo $meta_data["COMPUTED"]["Height"]?></li>
	<li>Width: <?php echo $meta_data["COMPUTED"]["Width"]?></li>


</ul>
</body>
</html>
