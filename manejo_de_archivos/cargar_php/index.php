<?php
$file_contents=file_get_contents("personas.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
 
	<div class="container"> 
		<div class="row">
			<h1 class="text-center">Cargar PHP externo</h1>
				<h2 class="text-center">Mostrar el contenido</h2>

			<div class="col-lg-4 col-lg-offset-4">
				<pre><?php echo $file_contents;?></pre>
			</div>
			<div class="col-lg-4 col-lg-offset-4">
				<h3 class="text-center">Elementos en tablas</h3>
<?php
$fila     = explode("\n",$file_contents);
?>
				<table border="0" class="table table-striped">
					<thead>
						<tr><th>Nombre</th><th>Correo</th></tr>
					</thead>
					<tbody>					
						
							<?php
							foreach ($fila as $key) {
							$array_columnas=explode(",",$key);
							echo "
							<tr>
								<td>$array_columnas[0]</td>
								<td>$array_columnas[1]</td>
						    </tr>";
							}
							?>
						
					</tbody>
				</table>
			</div>
			
			
		</div>
	</div>
	
</body>
</html>