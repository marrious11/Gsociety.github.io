 <?php
$file = 'Documents/CSC 212 Sem2 2014-2015 - 6 computers in education.pdf';
$filename ='Documents/CSC 212 Sem2 2014-2015 - 6 computers in education.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline: filename= "' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');

@readfile($file);
?>