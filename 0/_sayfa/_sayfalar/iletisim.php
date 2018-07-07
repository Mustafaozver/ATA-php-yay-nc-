<?php
$rapor = "ILETISIM\n";
if (isset($_POST["ad"]) && isset($_POST["tel"]) && isset($_POST["eposta"]) && isset($_POST["konu"]) && isset($_POST["ileti"])) {
 $ileti = "ZAMAN : ".$ata["zaman"]."\n";
 $ileti .= "AD : ".$_POST["ad"]."\n";
 $ileti .= "TEL : ".$_POST["tel"]."\n";
 $ileti .= "E-POSTA : ".$_POST["eposta"]."\n";
 $ileti .= "KONU : \"".$_POST["konu"]."\"\n";
 $ileti .= "ILETI : \"".$_POST["ileti"]."\"";
 $iletidosya = fopen("0/_sayfa/_sayfalar/_iletiler/ILETISIM_".str_replace(array(":","."),"-",$_SERVER['REMOTE_ADDR'])."_".$ata["zaman"].".txt", "w+");
 fwrite($iletidosya, $ileti);
 fclose($iletidosya);
}
?><center>
<table style="text-align:center;width:100%;height:100%;">
<tr><td>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3112.16546842783!2d35.361342315170795!3d38.736964979595754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152b1ab4682856a9%3A0x49b8b41f96ed929!2sAspilsan+A.%C5%9E.!5e0!3m2!1str!2str!4v1458493018915" frameborder="0" style="border:0;width:100%;height:400px;" allowfullscreen></iframe>
<p>Organize Sanayi Bölgesi 12.cadde No:8 <br />Melikgazi/KAYSERİ<br /></td></tr>
<tr><td>Telefon :<br />0352 321 12 15-16</td></tr>
<tr><td>Fax :<br />0352 321 12 17</td></tr>
</table>
<a href="mailto:aspilsan@aspilsan.com">aspilsan@aspilsan.com</a>
</td></tr></table>

 <form style="text-align:center;width:100%;height:100%;" action="" method="POST">
  <table style="text-align:center;width:100%;height:100%;">
   <tr><td>Ad Soyad :<br />
   <input type="text" name="ad" style="width:100%;" /></td></tr>
   <tr><td>Tel :<br />
   <input type="text" name="tel" style="width:100%;" /></td></tr>
   <tr><td>E-Posta :<br />
   <input type="text" name="eposta" style="width:100%;" /></td></tr>
   <tr><td>Konu :<br />
   <input type="text" name="konu" style="width:100%;" /></td></tr>
   <tr><td>İleti :<br />
   <textarea type="text" name="ileti" style="width:100%;" rows=5></textarea></td></tr>
   <tr><td><input type="submit" value="Gönder" /></td></tr>
  </table>
 </form>
</center>