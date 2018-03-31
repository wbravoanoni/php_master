<?php

include("./MPDF60/mpdf.php");
$html = file_get_contents("contents.html");
//$html = utf8_encode($html);

$mpdf=new mPDF();

$mpdf->WriteHTML($html);
$mpdf->Output();exit;

?>