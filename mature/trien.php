<?php  header('Access-Control-Allow-Origin: *');

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

//set_time_limit(4);
@mkdir("yotu");
@chmod("yotu", 0755);

$src="trieo.php?id=".urlencode($_GET['id']);
//$fsrc=file_get_contents($src);
//$pagge=strlen($fsrc);;

//$gfh=@getimagesize($src);
if(false ) {
/*$dt=file_get_contents("https://www.youtube.com/get_video_info?video_id=".$_GET['id']."&el=embedded&ps=default&eurl=&gl=US&hl=en");
$ho =urldecode($dt);
$g= str_replace("\u0026", "&",$ho);
$ec= urldecode($g);
$gsg=explode(",\"url\":\"", $ec);
$hf=$gsg[1];
$hdg=explode("\"", $hf);
*/
$path=$_GET['id'];
$handle = fopen($path, "r");
$contents = stream_get_contents($handle);
fclose($handle);

@mkdir("yotu");
$path="yotu/".$ip."img.jpg";
$handl = @fopen($path, "w");
@fwrite($handl, $contents);
@fclose($handl);
@chmod($path, 0755);

@exec("ffmpeg -i yotu/".$ip."img.jpg -vf \"scale=640:360\" -q 0 -y yotu/".$ip."img2.jpg");
@chmod("yotu/".$ip."img2.jpg", 0755);

$path="yotu/".$ip."img2.jpg";
$handle = fopen($path, "r");
$contents = stream_get_contents($handle);
fclose($handle);



//$g=@fopen("yotu/".$ip."img.jpg", "w");
//@fwrite($g, $contents);
//@fclose($g);
//@chmod("yotu/".$ip."img.jpg", 0755 );

header("Content-Type: image/jpeg");
header('Content-Length:'.strlen($contents));
header("Content-Disposition: inline;");
header("Content-Transfer-Encoding: binary\n");
header('Connection: close');
echo $contents;
exit;
}
else{


/*
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
*/

//$dag=file_get_contents("useo/".$ip);

//$ref=explode("<br>", $dag);
//$nn=rand(0, (count($ref)-3));

//$nn=rand(0,1);
//$handle = fopen($ref[$nn], "r");
$sl=rand(0,31243215);


$contents = file_get_contents($_GET['id']);
//fclose($handle);
@unlink('a'.$sl.'.jpg');


header("Content-Type: image/jpeg");
header('Content-Length:'.strlen($contents));
header("Content-Disposition: inline;");
header("Content-Transfer-Encoding: binary\n");
header('Connection: close');
echo $contents;
exit;


}
?>