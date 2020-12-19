<?php
 header('Access-Control-Allow-Origin: *');
die();
?>
<table border=0 width='100%'><tr> <?php
error_reporting(E_ALL ^E_NOTICE);
/*
$u="https://www.freeshell.de/~trans1/quant.php?&offset=1&q=".urlencode($_GET['p']." site:youtube");


$ready=false;
$pp=$_GET['p'];
$gd=explode(" ",$pp);
$zoe="";

for($v=0;$v<count($gd);$v++){
$zoe.="intitle:".$gd[$v]." ";
}


$uee="https://www.bing.com/search?q=".urlencode($_GET['p']." Creative Commons site:youtube.com")."&count=40";
$dates= file_get_contents($uee);

$fc=@fopen("log.html", "w");
@fwrite($fc, $dates);
@fclose($fc);
@exec(" chmod 755 log.html");

//echo $dat;
/*
$edi="wget -O out.html \"".$u."\"";
@exec($edi);
//$dat="";
$file_handle = fopen("out.html", "r");
while (!feof($file_handle)) {
   $line = fgets($file_handle);
  // $dat.=$line;
}
fclose($file_handle);
*/

$nrs=2;
$dp=str_replace(" ", "+", $_GET['p']);
@exec("curl -k -sA \"Chrome\" 'https://www.google.com/search?hl=en&q=".$dp."+site:youtube.com+creative+commons&num=30' -o search.html");
$dates=file_get_contents("search.html");
$eg=explode("</div><div><div class", $dates);

//$eg=explode("<li class=\"b_algo\"", $dates);


for($s=0;$s<count($eg);$s++){
$eeg[$s]=$s;
}
shuffle($eeg);


for($ix=2;$ix<count($eg);$ix++){
$i=$eeg[$ix];

$fdg=explode("watch%3Fv%3D", $eg[$i]);
$saa=explode("&amp", $fdg[1]);
$st=$saa[0];

$ftu=explode("Duration: ", $eg[$i]);
$ffv=explode("Posted", $ftu[1]);
$fto=explode(":", $ffv[0]);
if(count($fto)==2){

	if($fto[0]>3 && $fto[0]<25){
		$noot=1;
	}
	else{
		$noot=0;
	}
}
else{
$noot=0;
}


//$fds=explode("\"", $eg[$i]);

//$titt=explode("<h2>",$eg[$i]);


//$tit=$titt[1];
//$tb=explode("</h2>", $titt[1]); 
//$thetit=strip_tags($tb[0]);
  //      $end=explode("youtube.com/watch?v=", $eg[$i]);
//		$reft=explode("\"", $end[1]);



  //      $st=  $reft[0];
        $title2= "http://img.youtube.com/vi/".$st."/mqdefault.jpg";
        $p=$thetit;

if($st!="" && $ready==false){
  echo "<td align=center><font size=1> ".$p."</font><br><a title='Click for Preview' onclick=playYou('".$st."')>Play..
 </a><br><a onClick=down('".$st."') target=_blank hre='".$title2q       ."'><img title='Click to Grab & use' width=80 src='".$title2."'></a></td>";

@exec("rm tempo/*");
@exec("rm temp/*");
@exec(" mkdir temp");
@exec("chmod 755 temp/");
@exec("chmod 755 tempo/");


exec("./youtube-dl -f 'best[filesize<80M]' -o temp/".$_GET['fn']." ".$st);
@exec("chmod -R 755 temp/*");
$fd=scandir("temp/");
$ffss='';
for($b=0;$b<count($fd);$b++){
	if($fd[$b]=='' || $fd[$b]=='..'){

	}
	else{
		$ffss=$fd[$b];
	}	

}

@unlink("inde.txt");
exec("ffmpeg -i temp/".$ffss." 2>inde.txt" );
$dsf=file_get_contents("inde.txt");
$fh=explode("Duration", $dsf);

if(count($fh)>1){
$ready=true;
@exec("ffmpeg -i temp/".$ffss ." -ss 0:0:30 -an -y tempo/".$_GET['fn'] );
@chmod("tempo/", 0755);
@chmod("tempo/".$_GET['fn'], 0755);
@chmod("temp/", 0755);
@chmod("temp/".$_GET['fn'], 0755);

@exec("rm temp/*");
@exec("chmod -R 755 tempo/*");
@exec("chmod -R 755 temp/*");

echo " Nice Nice Nice ";
}

}



if($i==5){
echo "</tr><tr>";
}
}


?> </tr> </table>
