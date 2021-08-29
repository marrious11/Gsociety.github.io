<?php
$file = 'Documents/Thomas__Calculus_11th_Edition.pdf';
$filename ='Documents/Thomas__Calculus_11th_Edition.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline: filename= "' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');

@readfile($file);
?>
