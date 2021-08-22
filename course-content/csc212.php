 <?php
$file = 'Documents/CSC 210 NOTES3 New.pdf';
$filename ='Documents/CSC 210 NOTES3 New.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline: filename= "' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');

@readfile($file);
?>