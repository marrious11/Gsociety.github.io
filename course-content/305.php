<?php
$file = 'Documents/CSC 305-Slides-W2.pdf';
$filename ='Documents/CSC 305-Slides-W2.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline: filename= "' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');

@readfile($file);
?>
