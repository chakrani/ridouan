<?php
$tt="";
if(isset($_GET['sec'])){
$t=$_GET['sec'];
$tt="&t=".rand(0, $t);
}
exec("vlc -vvv  \"https://www.youtube.com/watch?v=".$_GET['id'].$tt."\" --start-time ".$t."  --stop-time ".($t+110)."   --qt-start-minimized --qt-notification=0 --sout=#transcode{vcodec=\"h264\",vb=\"512\",fps=\"10.97\",scale=\"1\",acodec=\"none\"}:standard{access=\"file\",dest=filmx/".$_GET['out']."} vlc://quit");

?>