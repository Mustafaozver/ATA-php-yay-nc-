<?php
$rapor = "GIT\n";
$veriler = mysqli_query($_db,"SELECT * FROM gitmeler WHERE adi='".(@$sayfa[1])."' OR id='".(@$sayfa[1])."'") or die("Error: " . mysqli_error($_db));
$veri = mysqli_fetch_array($veriler);
if ($veri) {
 header("Refresh: ".$veri["sure"]."; url='".$veri["link"]."'");
 $rapor = "LINK:".$veri["id"]."\n";
 echo $veri["icerik"]."<br />".$veri["sure"]." saniye sonra gidecek.<br />Eğer gitmezse tıklayın :<a href=\"".$veri["link"]."\">".$veri["link"]."</a>";
} else {
 echo "Link Bulunamadı!";
}

?>