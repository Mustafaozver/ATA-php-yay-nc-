<?php
$url = explode("/",substr($_SERVER["REQUEST_URI"],1));
if ($url[0] == "javascript") {
 header("Content-Type: application/javascript");
 include("0/_eklentiler/site_ayar/javascript.JS");
exit();
} else if ($url[0] == "css") {
 header("Content-Type: text/css");
 include("0/_eklentiler/site_ayar/style.css");
exit();
}
?>