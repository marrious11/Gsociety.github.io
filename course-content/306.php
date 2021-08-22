<?php
$file = 'Documents/csc 306 Sem2 2018-2019 - 10 Java GUI Programming I.pdf';
$filename ='Documents/csc 306 Sem2 2018-2019 - 10 Java GUI Programming I.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline: filename= "' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');

@readfile($file);
?>
