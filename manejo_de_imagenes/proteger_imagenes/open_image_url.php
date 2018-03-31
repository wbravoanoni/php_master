<?php

$code = isset($_GET["code"]) ? $_GET["code"] : "";

if($code == 12345){

header("Content-Type:image/jpg");
readfile("./attractions.jpg");

}else{

header("Content-Type:image/png");
readfile("./350x150.png");	

}

?>




