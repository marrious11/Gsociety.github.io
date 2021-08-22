 <?php
$file = 'Documents/csc205 lecture notes 2020-2021 Part 2.pdf';
$filename ='Documents/csc205 lecture notes 2020-2021 Part 2.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline: filename= "' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');

@readfile($file);
?>