<?php
$file = 'Documents/csc 303 lecture on computer oirganisation and architecture.pdf';
$filename ='Documents/csc 303 lecture on computer oirganisation and architecture.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline: filename= "' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');

@readfile($file);
?>
