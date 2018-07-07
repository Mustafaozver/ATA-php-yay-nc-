<?php
mysqli_close($_db);

$rapor .= "ZAMAN : ".$ata["zaman"]."\n";
$rapor .= "IP : ".$_SERVER['REMOTE_ADDR']."\n";
$rapor .= "URL : ".$_SERVER["REQUEST_URI"]."\n";
$rapordosya = fopen("0/_raporlar/RAPOR_".str_replace(array(":","."),"-",$_SERVER['REMOTE_ADDR'])."_".$ata["zaman"].".txt", "w+");
fwrite($rapordosya, $rapor);
fclose($rapordosya);
?>