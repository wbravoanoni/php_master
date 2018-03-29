<?php
echo "<pre>";
var_dump($_POST);
echo "</pre>";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<form action="index.php" method="POST">
	
	Name:     <input type="text" name="persona['name']"><br>
	Las Name: <input type="text" name="persona['last_name']"><br>
	Child N:  <input type="text" name="child[]"><br>
	Child N:  <input type="text" name="child[]"><br>
	Child N:  <input type="text" name="child[]"><br>
	Child N:  <input type="text" name="child[]"><br>

	<input type="submit">
</form>	
</body>
</html>