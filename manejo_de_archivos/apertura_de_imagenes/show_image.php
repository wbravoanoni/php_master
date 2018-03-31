<?php
$counter = file_get_contents('counter.txt');
settype($counter, 'integer');
$counter++;
file_put_contents('counter.txt', $counter);
header('Content-Type: image/jpeg');
echo file_get_contents('gato.jpg');
?>