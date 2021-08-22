<?php
$file = 'Documents/CSC 210 Chapter ONE.pdf';
$filename ='Documents/CSC 210 Chapter ONE.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline: filename= "' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');

@readfile($file);
?>
