<!DOCTYPE HTML>
<html lang="tr-TR" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
 <head>
<?php
$where_ = "";
if ($sayfa[0] == "") {
 $where_ = "";
} else {
 $where_ = " WHERE adi='".($sayfa[0])."'";
}
$icerikler = mysqli_query($_db,"SELECT * FROM sayfalar".$where_) or die("Veritabanı hatası : ".mysqli_error($_db)." :(((");
if ($where_ == "") {
 $icerik = array();
 $icerik["id"] = "ANASAYFA";
 $icerik["icerik"] = "";
 $icerik["tanim"] = "";
 $icerik["baslik"] = "";
 $icerik["resim"] = "";
 $icerik["anahtarlar"] = "";
 $icerik["yazar"] = "";
 while ($vicerik = mysqli_fetch_array($icerikler)) {
  $icerik["icerik"] .= "<p>".$vicerik["icerik"]."</p><br />";
 }
}
else $icerik = mysqli_fetch_array($icerikler);



include("_head.php");
?>
  <script lang="javascript">
<?php
include("_javascript.php");
?>
  </script>
  <style>
<?php
include("_css.php");
?>
  </style>
 </head>