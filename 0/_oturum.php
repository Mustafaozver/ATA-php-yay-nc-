<?php
if ($ata["Oturum"]["İzin"]) {
 session_start();
 if (isset($_SESSION["Oturum"])) {
  if (mysqli_fetch_array(mysqli_query($_db,"SELECT * FROM kisiler WHERE id='".$_SESSION["_Kim"]."' AND eposta='".$_SESSION["EPosta"]."' AND sifre='".$_SESSION["Şifre"]."'"))) {
   $ata["Oturum"]["Kimlik"] = $_SESSION["Oturum"];
   $ata["Oturum"]["EPosta"] = $_SESSION["EPosta"];
   $ata["Oturum"]["Şifre"] = $_SESSION["Şifre"];
   $ata["Oturum"]["_Kim"] = $_SESSION["_Kim"];
  } else {
   $ata["Oturum"]["_Kim"] = -1;
  }
 } else {
  $ata["Oturum"]["Kimlik"] = $ata["Domain"]."_ATA";
  $ata["Oturum"]["EPosta"] = "";
  $ata["Oturum"]["Şifre"] = "";
  $ata["Oturum"]["_Kim"] = 0;
 }
}
?>