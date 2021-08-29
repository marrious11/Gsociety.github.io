<?php
$file = 'Documents/Week 7-8 Memory Management.pdf';
$filename ='Documents/Week 7-8 Memory Management.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline: filename= "' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');

@readfile($file);
?>
