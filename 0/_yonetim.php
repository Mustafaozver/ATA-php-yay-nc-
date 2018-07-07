<?php
if ($ata["Oturum"]["İzin"]) {
 if (isset($_SESSION["Oturum"])) {
  $yetkili = mysqli_fetch_array(mysqli_query($_db,"SELECT * FROM kisiler WHERE yetki='1' AND id='".$_SESSION["_Kim"]."' AND eposta='".$_SESSION["EPosta"]."' AND sifre='".$_SESSION["Şifre"]."'"));
  if ($yetkili) {
?><html>
<body style="background-color:black;color:white;">
<h3><?php echo $ata["Domain"]; ?> Yönetim Paneli</h3>
<?php
if (isset($sayfa[1])) switch (strtolower($sayfa[1])) {
 case "sayfalar":
  include("0/_yonetim/_sayfalar.php");
  break;
 case "eklentiler":
  include("0/_yonetim/_eklentiler.php");
  break;
 case "kullanicilar":
 case "kullanıcılar":
  include("0/_yonetim/_kullanicilar.php");
  break;
 case "yüklemeler":
 case "yuklemeler":
  include("0/_yonetim/_yuklemeler.php");
  break;
 case "gorunum":
 case "görünüm":
  include("0/_yonetim/_postalar.php");
  break;
 case "ayarlar":
 default:
  include("0/_yonetim/_ayarlar.php");
  break;
} else echo "AaA";
?>
</body>
</html><?php
  } else echo "Kullanıcı Yok veya Yetkili Değil!";
 } else echo "Oturum Aç!";
} else echo "Oturum İzni Yok!";
?>