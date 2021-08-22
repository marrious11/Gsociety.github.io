<?php
$file = 'Documents/CSC 301 Sem1 2015-2016 - 3 Data Structures I.pdf';
$filename ='Documents/CSC 301 Sem1 2015-2016 - 3 Data Structures I.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline: filename= "' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');

@readfile($file);
?>
