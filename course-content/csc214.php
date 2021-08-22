 <?php
$file = 'Documents/csc 2021 notes.pdf';
$filename ='Documents/csc 2021 notes.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline: filename= "' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');

@readfile($file);
?>