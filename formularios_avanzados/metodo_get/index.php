<?php

echo "<pre>";
var_dump($_GET);
echo "</pre>";

$search_terms= isset($_GET["search_terms"])? $_GET["search_terms"]:'';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="GET">
		<input type="text" name="search_terms" value="<?php echo $search_terms?>">
		<input type="submit" value="enviar">
	</form>
	
</body>
</html>