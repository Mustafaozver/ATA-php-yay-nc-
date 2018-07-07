<?php
$rapor = "API\n";
$degiskenler = array();
$ip = $_SERVER['REMOTE_ADDR'];
foreach($_POST as $anahtar=>$deger) {
$rapor .= $anahtar."_POST : ".$deger."\n";
array_push($degiskenler, array($anahtar, $deger));
}

switch (strtolower($sayfa[1])) {

}
?>