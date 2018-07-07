<?php
include("0/_0.php");
include("0/Ayarlar.php");

$_db = mysqli_connect($ata["Veri Tabanı"]["HOST"], $ata["Veri Tabanı"]["Kullanıcı Adı"], $ata["Veri Tabanı"]["Kullanıcı Şifresi"], $ata["Veri Tabanı"]["Ad"]);

mysqli_query($_db,"SET NAMES utf8");

include("0/_oturum.php");
include("0/_diller/".$ata["Dil"].".php");

$dizin = opendir($eklentiler);
while (($dosya = readdir($dizin)) !== false) {
 if (file_exists($eklentiler.$dosya."/index.php")) include($eklentiler.$dosya."/index.php");
}
closedir($dizin);

$sayfa = explode("/",substr($_SERVER["REQUEST_URI"],1));
switch(strtolower($sayfa[0])) {
 case $ata["Dilce"]["yonetim"]:
  include("0/_yonetim.php");
 break;
 case $ata["Dilce"]["indir"]:
  include("0/_indir.php");
 break;
 case "api":
  include("0/_api.php");
 break;
 case $ata["Dilce"]["oturum"]:
  include("0/_oturum_.php");
 break;
 case $ata["Dilce"]["gorev"]:
 
 break;
 case $ata["Dilce"]["git"]:
  include("0/_git.php");
 break;
 case "rss":
 
 break;
 case "":
 case $ata["Dilce"]["anasayfa"]:
  include("0/_anasayfa.php");
 default:
  include("0/_sayfa/_bas.php");
  include("0/_sayfa/_icerik.php");
  
 break;
 
}
?>