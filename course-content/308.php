<?php
$file = 'Documents/csc316-functionalProgrammingNotes-pages1to8of96-2up-STUD-23052019.pdf';
$filename ='Documents/csc316-functionalProgrammingNotes-pages1to8of96-2up-STUD-23052019.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline: filename= "' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');

@readfile($file);
?>
