<?php



$name=isset($_POST['name']) ? clean_data($_POST['name']) : "";

echo "<pre>";
var_dump($_POST);
echo "</pre>";	



if($_POST){



if(strlen($name)<4){
	$error=true;
	$arr_errors["name"]["message"] = 'Your name should have at least 4 letters';
	$arr_errors["name"]["boolen"] = true;
}


}


function clean_data($input){

$input = trim($input);
$input = stripslashes($input);

return $input;


}

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

<div class="container">
	<div class="row">
		<form action="index.php" method="POST">
		<h1>Form Validation</h1>


<?php
if(isset($arr_errors["name"]["message"])):

echo '
	<div class="alert-warning" style="padding: 20px 20px;">
		<p>There are some errors in your form</p>
		</div>
';

?>

<p style="color:red"><?php echo $arr_errors["name"]["message"]?></p>

<?php
endif
?>
	
		<br>
		<p>Name:</p>
		<input type="text" name="name" value="<?php echo $name?>">	
		<br><br>
		<input class="btn btn-primary" type="submit" value="submit">
		</form>	
	</div>
</div>

	
</body>
</html>








