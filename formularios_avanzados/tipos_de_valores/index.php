<?php

$genero  = isset($_POST["genero"])?$_POST["genero"]:"";
$name    = isset($_POST["name"])?$_POST["name"]:"";
$area    = isset($_POST["area"])?$_POST["area"]:"";
$check   = isset($_POST["check"])?$_POST["check"]:"";
$radio   = isset($_POST["radio"])?$_POST["radio"]:"";
$hidde   = isset($_POST["hidde"])?$_POST["hidde"]:"";

echo "<pre>";
var_dump($_POST);
echo "</pre>";

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tipos de valores</title>
</head>
<body>
<form action="index.php" method="POST">
<h1 style="text-align: center;">Filed Types</h1>

<select name="genero" id="">
	<option selected value="1">Hombre</option>
	<option value="2">Mujer</option>

</select>



<br><br>
Text:
<input type="text" name="name">

<br>
Textarea:
<textarea name="area" id="" cols="30" rows="10">
</textarea>
<br><br>

checkbox:
<input type="checkbox" name="check">

<br><br>

Radio:
<input type="radio" name="radio" value=true>
<input type="radio" name="radio" value="false">

<input type="hidden">
<br><br>
<input type="submit">

</form>
</body>
</html>