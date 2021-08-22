<?php
$file = 'Documents/Data_Communication_and_Networking_by_Behrouz.A.Forouzan_4th.edition.pdf';
$filename ='Documents/Data_Communication_and_Networking_by_Behrouz.A.Forouzan_4th.edition.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline: filename= "' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');

@readfile($file);
?>
