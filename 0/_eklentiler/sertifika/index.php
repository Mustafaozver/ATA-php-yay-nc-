<?php
$url = explode("/",substr($_SERVER["REQUEST_URI"],1));
if ($url[0] == "sertifika") {
$veriler = mysqli_query($_db,"SELECT * FROM sertifika WHERE adi='".(@$url[1])."' OR id='".(@$url[1])."'") or die("Error: " . mysqli_error($_db));
$veri = mysqli_fetch_array($veriler);
if ($veri) {
 $sertifika_sahip_veri = mysqli_fetch_array(mysqli_query($_db,"SELECT * FROM kisiler WHERE id='".$veri["sahip"]."'"));
 $sertifika_egitmen_veri = mysqli_fetch_array(mysqli_query($_db,"SELECT * FROM kisiler WHERE id='".$veri["egitmen"]."'"));
 header("Content-type: image/png");
 $im = @imagecreatefrompng($veri["arkaplan"]);
 if(!$im) $im = imagecreatefrompng("0/_eklentiler/sertifika/sertifika_mavi.png");
 $durum = "Başarısız";
 if ($veri["puan"] >= 85) $durum = "Çok İyi Derece Başarı";
 else if ($veri["puan"] >= 75) $durum = "İyi Derece Başarı";
 else if ($veri["puan"] >= 60) $durum = "Orta Derece Başarı";
 else if ($veri["puan"] >= 50) $durum = "Şartlı Başarı";
 
 // başlık
 imagettftext($im, 52, 0, 330, 170, imagecolorallocate($im,240,200,0), "0/_eklentiler/sertifika/fonts/CygnetRound.ttf", " Sertifika");
 
 // içerik
 $satir_aralik = 30;
 imagettftext($im, 18, 0, 100, 220, imagecolorallocate($im,0,0,0), "0/_eklentiler/sertifika/fonts/CygnetRound.ttf", "Sayın ".$sertifika_sahip_veri["ad"]." ".$sertifika_sahip_veri["soyad"]);
 imagettftext($im, 18, 0, 100, 230 + $satir_aralik, imagecolorallocate($im,0,0,0), "0/_eklentiler/sertifika/fonts/CygnetRound.ttf", " ".date("d.m.Y H:i:s",$veri["tarih"])." tarihinde AnladikMi.com tarafından organize edilen");
 imagettftext($im, 18, 0, 100, 230 + 2*$satir_aralik, imagecolorallocate($im,0,0,0), "0/_eklentiler/sertifika/fonts/CygnetRound.ttf", " ".$veri["ders"]." eğitiminden ".$veri["puan"]." puan ile başarı gösterdiniz.");
 imagettftext($im, 18, 0, 100, 230 + 5*$satir_aralik, imagecolorallocate($im,0,0,0), "0/_eklentiler/sertifika/fonts/CygnetRound.ttf", "Eğitmen : ".$sertifika_egitmen_veri["ad"]." ".$sertifika_egitmen_veri["soyad"]);
 imagettftext($im, 18, 0, 100, 230 + 4*$satir_aralik, imagecolorallocate($im,0,0,0), "0/_eklentiler/sertifika/fonts/CygnetRound.ttf", "Puan : ".$veri["puan"]." (".$durum.")");
 imagettftext($im, 18, 0, imagesx($im)-450, 230 + 4*$satir_aralik, imagecolorallocate($im,0,0,0), "0/_eklentiler/sertifika/fonts/CygnetRound.ttf", "Onaylayan : AnaldikMi.com");

  // AnladikMi.com logo
 $img_mad = imagecreatefrompng("0/_eklentiler/sertifika/_imgs/logo.png");
 imagecopy($im, $img_mad, imagesx($im)-420, 220 + 5*$satir_aralik, 0, 0, imagesx($img_mad), imagesy($img_mad));
 imagedestroy($img_mad);

 // AnladikMi.com madalya
 $img_mad = imagecreatefrompng("0/_eklentiler/sertifika/_imgs/genel.png");
 imagecopy($im, $img_mad, imagesx($im)-imagesx($img_mad)-20, imagesy($im)-imagesy($img_mad)-20, 0, 0, imagesx($img_mad), imagesy($img_mad));
 imagedestroy($img_mad);
 
 // madalya 1
 $img_mad = imagecreatefrompng("0/_eklentiler/sertifika/_imgs/birinci.png");
 imagecopy($im, $img_mad, 20, imagesy($im)-imagesy($img_mad)-20, 0, 0, imagesx($img_mad), imagesy($img_mad));
 imagedestroy($img_mad);
 
 imagepng($im);
 imagedestroy($im);
} else echo "Sertikifa Geçersiz !";
exit();
}
?>