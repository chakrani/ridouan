<?php
header('Access-Control-Allow-Origin: *');
ini_set('default_charset', 'utf-8');


//set_time_limit(0);


$hhoo=$_POST['data'];
$hho=substr($hhoo, 0, (strlen($hhoo)-0) );
$gh=explode('|', $hho);
for($t=0;$t<count($gh);$t++){
$im=$gh[$t];

$dat=base64_decode($im);
$v=@fopen("java/IM".$t.".jpg", "w");
@fwrite($v, $dat);
@fclose($v);
}

$cx=0;
for($rr=0;$rr<200;$rr=$rr+2){



        $ix="java/IM".(($cx%17)+1).".jpg";
	$r=2*$cx;
       exec("./ffmpeg -i \"".$ix."\" -vf \"convolution=0 1 0 1 -4 1 0 1 0:0 1 0 1 -4 1 0 1 0:0 1 0 1 -4 1 0 1 0:0 1 0 1 -4 1 0 1 0:5:5:5:1:0:128:128:128\" -q 0 -y java/src/XX".$r.".jpg");
       chmod("java/src/XX".$r.".jpg", 0777);
	$r=$r+1;
	copy($ix, "java/src/XX".$r.".jpg");
 chmod("java/src/XX".$r.".jpg", 0777);
$cx++;


}



?>
