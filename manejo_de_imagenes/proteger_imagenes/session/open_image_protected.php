<?php
session_start();
$code = isset($_SESSION['auth']) ? $_SESSION['auth'] : 0;

if($code){

header("Content-Type:image/jpg");
readfile("../attractions.jpg");

}else{

header("Content-Type:image/png");
readfile("../350x150.png");	

}

?>