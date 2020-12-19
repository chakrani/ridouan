<?php  header('Access-Control-Allow-Origin: *');

/*
@unlink("im.jpg");
@exec("curl/bin/curl -o im.jpg ".$_GET['url']);
list($w, $h)=@getimagesize("im.jpg");

if($w>100 && $h>100){

$out=file_get_contents("im.jpg");
header('Content-type: image/jpeg'); 
header('Content-disposition: inline'); 
header("Content-Transfer-Encoding:binary"); 
header("Content-Length: ".strlen($out)); 
echo $out; 
exit(); 
}
else{

$gd=file_get_contents("yotu/".str_replace(" ", "_", $_GET['sub']));

$w=0; $h =0;
$dd=explode("<br>", $gd);
while($w==0 && $h==0){
$pl=$dd[rand(0,count($dd)-1)];


exec("./curl --max-time 5 -o im.jpg ".$pl);
list($w, $h)=@getimagesize("im.jpg");





}

*/
$out=file_get_contents($_GET['url']);
header('Content-type: image/jpeg'); 
header('Content-disposition: inline'); 
header("Content-Transfer-Encoding:binary"); 
header("Content-Length: ".strlen($out)); 
echo $out; 
exit(); 


?>