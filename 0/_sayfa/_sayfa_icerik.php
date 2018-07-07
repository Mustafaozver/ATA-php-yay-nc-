			<div class="infographic-box">
				<div class="container">
					<?php
$rapor = "SAYFA\n";
$rapor .= "ID : ".$icerik["id"]."\n";

if ($url[0] == "") include("0/_sayfa/_sayfalar/_anasayfa.php");

echo $icerik["icerik"];
$url = explode("/",substr($_SERVER["REQUEST_URI"],1));
if (file_exists("0/_sayfa/_sayfalar/".$url[0].".php")) include("0/_sayfa/_sayfalar/".$url[0].".php");
?>
					
				</div>
			</div>
