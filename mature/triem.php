<?php 

set_time_limit(0);
$dt=@file_get_contents("https://www.youtube.com/get_video_info?video_id=".$_GET['id']."&el=embedded&ps=default&eurl=&gl=US&hl=en");



$ho =urldecode($dt);
$g= str_replace("\u0026", "&",$ho);
$ec= urldecode($g);



$gsg=explode(",\"url\":\"", $ec);
$hf=$gsg[1];
$hdg=explode("\"", $hf);
$path=$hdg[0];




$handle = fopen($path, "r");
$contents = stream_get_contents($handle);
fclose($handle);

header("Content-Type: video/mp4");
header('Accept-Ranges: bytes');
header('Content-Length:'.strlen($contents));
header("Content-Disposition: inline;");
header("Content-Transfer-Encoding: binary\n");
header('Connection: close');

echo $contents;
die();
?>