<?php
$bing = "https://www.bing.com/HPImageArchive.aspx?format=js&idx=1&n=1";
$Pinfo = json_decode(file_get_contents($bing));
$img = $Pinfo->{"images"}[0]->{"url"};
$imgcopyright = $Pinfo->{"images"}[0]->{""};
$imgurl = "https://cn.bing.com".$img;
header("Location: $imgurl");
exit;
echo $imgurl;
echo $imgcopyright;
?>