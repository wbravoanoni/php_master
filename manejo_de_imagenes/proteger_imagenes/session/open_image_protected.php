<?php
session_start();
$code = isset($_SESSION['auth']) ? $_SESSION['auth'] : 0;

if($code){

header("Content-Type:image/jpg");
readfile("../attractions.jpg");

$counter=file_get_contents('views.log');
$counter=(int)$counter;
$counter++;

file_put_contents('views.log', $counter);
$stadisticts=$_SERVER["HTTP_USER_AGENT"].';'.$_SERVER["REMOTE_ADDR"];
$stadisticts.="\n=======================\n";
file_put_contents('stadistics.log', $stadisticts,FILE_APPEND);

}else{

header("Content-Type:image/png");
readfile("../350x150.png");	

}

?>