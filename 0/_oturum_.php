<?php
$rapor = "OTURUM\n";
if (!isset($sayfa[1])) $sayfa[1] = "";
if ($sayfa[1] != "xOturum") {
?>
<html>
 <head>
  <style>
  </style>
  <script>
  </script>
 </head>
 <body>
  <center>
   <table>
<?php
} else {
$kisiler = mysqli_query($_db,"SELECT * FROM kisiler WHERE eposta='".@$_POST["eposta"]."' AND sifre='".@$_POST["sifre"]."'") or die("Veritabanı hatası : \n\n".mysqli_error($_db)." :(((");
$kisi = mysqli_fetch_array($kisiler);
 if ($_POST["eposta"] == "" && $_POST["sifre"] == "") die("alert(\"E-Posta ve Şifre boş olamaz\");");
 else if ($_POST["sifre"] == "") die("alert(\"Şifre boş olamaz\");");
 else if ($_POST["eposta"] == "") die("alert(\"E-Posta boş olamaz\");");
 else {
  if (!filter_var($_POST["eposta"], FILTER_VALIDATE_EMAIL)) die("alert(\"E-Posta yanlış.\");");
 }
 if ($kisi) {
  $_SESSION["Oturum"] = $ata["Domain"]."_ATA_".$kisi["id"];
  $_SESSION["EPosta"] = $kisi["eposta"];
  $_SESSION["Şifre"] = $kisi["sifre"];
  $_SESSION["_Kim"] = $kisi["id"];
  $rapor .= "KIM:".$_SESSION["_Kim"]."\n";
  echo "window.location = \"/\";";
 } else echo "document.all.eposta.value = \"\";
document.all.sifre.value = \"\";
document.body.style.backgroundColor = \"#ffa087\";
alert(\"Kullanıcı adı veya şifre hatalı!\");";
exit();
}

switch(strtolower($sayfa[1])) {
 case "kapat":
  session_destroy();
 break;
 case "ac":
  if ($ata["Oturum"]["Kimlik"] == $ata["Domain"]."_ATA") {
   echo "<script src=\"http://".$ata["Domain"]."/JQuery\"></script><script>window.onerror=function(a,s,d){alert(a+s+d);};</script><script>
function oturum_ac() {
var xmlNesne = {};
xmlNesne.data = {};
xmlNesne.data.eposta = document.all.eposta.value;
xmlNesne.data.sifre = document.all.sifre.value;
xmlNesne.data.hatirla = document.all.hatirla.checked?\"1\":\"0\";
xmlNesne.type = \"POST\";
xmlNesne.url = \"http://".$ata["Domain"]."/".$ata["Dilce"]["oturum"]."/xOturum\";
xmlNesne.async = false;
var ajax = $.ajax(xmlNesne);
eval(ajax.responseText);
}
   </script>
   <tr><td>EPosta :<br />
    <input id=\"eposta\" type=\"text\" /></td></tr>
   <tr><td>Şifre :<br />
    <input id=\"sifre\" type=\"password\" /></td></tr>
   <tr><td><button onclick=\"oturum_ac();\">Giriş</button> <label><input id=\"hatirla\" type=\"checkbox\" checked /> Beni hatırla</label></td></tr>
	";
  } else {
   header("location: /");
  }
 break;
 case "":
 default:
 break;
}

if ($sayfa[1] != "xOturum") {
?>
   </table>
  </center>
 </body>
</html>
<?php
}
?>