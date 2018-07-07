<?php
$ata = array();
$ata["Dil"] = "TR";
$ata["mobil"] = preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
$ata["Domain"] = "www.sitem.com";
$ata["Oturum"] = array();
$ata["Oturum"]["İzin"] = true;
$ata["eklenti url"] = array();

$ata["Veri Tabanı"] = array();
$ata["Veri Tabanı"]["HOST"] = "localhost";
$ata["Veri Tabanı"]["Kullanıcı Adı"] = "root";
$ata["Veri Tabanı"]["Kullanıcı Şifresi"] = "";
$ata["Veri Tabanı"]["Ad"] = "deneme";

$ata["sayfa"] = array();
$ata["sayfa"]["En Baş"] = "";
$ata["sayfa"]["Baş"] = "";
$ata["sayfa"]["İçerik"] = "";
$ata["sayfa"]["Son"] = "";
$ata["zaman"] = time();

$eklentiler = "0/_eklentiler/";

?>