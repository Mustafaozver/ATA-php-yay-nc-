<?php
$url = explode("/",substr($_SERVER["REQUEST_URI"],1));
if ($url[0] == "JQuery") {
 header("Content-Type: application/javascript");
 echo readfile("0/_eklentiler/JQuery/JQuery-1.21.1.JS");
 if (isset($url[1])) switch ($url[1]) {
 // echo "\n\n";
 // echo readfile("0/_eklentiler/JQuery/JQuery-1.21.1.JS");
 };
exit();
}
?>