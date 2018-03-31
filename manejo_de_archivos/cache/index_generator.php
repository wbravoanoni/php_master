<?php

ob_start();

sleep(2);
?>

<h1>Hola mundo</h1>


<?php

$contents = ob_get_contents();
ob_end_clean();
file_put_contents('index.html', $contents);
header('Location: ./');

?>