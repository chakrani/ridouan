<?php
	header('Access-Control-Allow-Origin: *');



		
	$fvg1=file_get_contents("nouns.txt");


	$sf11w = preg_split('/\r\n|\r|\n/', $fvg1);
	//echo count($sf11w);
	$dw=count($sf11w)-1;
	$r=rand(0, $dw);
	
	$_GET['search']=$sf11w[$r]; 
	echo $sf11w[$r]."<hr>";

$of=5;

set_time_limit(300);
$of=4;
if(isset($_GET['page'])){
  $of=$_GET['page'];
 }



function xxcopy($a, $br){

//@unlink("temp.jpg");
//copy($a, "temp.jpg");
//$fs=rand(0,32452);
//$b=$br.$fs.".jpg";
//exec($_SERVER['DOCUMENT_ROOT']."/ffmpeg -i temp.jpg -vf \"scale=800:600\" -q 0 \"".$b."\"");	
//$choo[]=$a."<br>";
  
} 


$u="https://www.bing.com/search?q=".urlencode($_GET['search'])."+site%3Aen.wikipedia.org&qs=n&form=QBLH&sp=-1";
$page=file_get_contents($u);
//echo $page;
$fs=explode("<div class=\"b_title\"><h2><a href=\"", $page);
$ds=-1;
for($d=0;$d<count($fs);$d++){
	$fg=explode("\"", $fs[$d]);
	$sf=explode("en.wikipedia.org", $fg[0]);
	if(count($sf)>1 && $ds==-1){
		//echo $fg[0];
		$ds=1;
		$gsf=$fg[0];
	}

}


$page=file_get_contents($gsf);
$fs=explode("<p>", $page);
$rrr="";
for($t=1;$t<(count($fs)-2);$t++){

	$da=explode("w-parser", $fs[$t]);
	if(count($da)<2){

	$rrr.= str_replace("'", "",str_replace("\"", "", str_replace("https://en.wikipedia.org/wiki/","",  str_replace("[edit]", "", strip_tags($fs[$t])))));
	}
}

//echo $rrr;
$fs=explode("&#91;", $rrr);


$st="";
for($r=0;$r<count($fs);$r++){
	$nl=$fs[$r];
	$fd=explode(" ", $nl);
	for($b=1;$b<count($fd);$b++){
	$st.=$fd[$b]. " ";
	}

}


echo $_GET['search']." ".$st."<hr>";

 $of=5;

set_time_limit(300);
$of=4;
if(isset($_GET['page'])){
  $of=$_GET['page'];
 }



 

for($f=0;$f<$of;$f++){
  $er=40*$f;

  $dfsf=$_GET['search'];
  $gds=explode(' ', $dfsf);
  if($f==1){
$cho= file_get_contents( "https://www.bing.com/images/search?count=40&first=".$er."&q=".urlencode($_GET['search']." -alamy -image  -photo -stock -lha -iha -time -tinypic -getty")."&qft=+filterui:photo-photo+filterui:aspect-wide&FORM=IRFLTR" );
  }
  else{
$cho= file_get_contents( "https://www.bing.com/images/search?count=40&first=".$er."&q=".urlencode($_GET['search']." -alamy -image  -photo -stock -lha -iha -time -tinypic -getty")."&qft=+filterui:photo-photo+filterui:aspect-wide&FORM=IRFLTR" );
  
  }

$arf=explode("<a class=\"thumb\" target=\"_blank\" href=\"",  $cho);




if($_GET['search']=='Preview'){
die();
}


$sexx=$_SERVER['DOCUMENT_ROOT']."/images/".str_replace(" ", "_", $_GET['search'])."/";
$exx=$_SERVER['DOCUMENT_ROOT']."/images/".str_replace(" ", "_", $_GET['search'])."__/";
$eyy=$_SERVER['DOCUMENT_ROOT']."/images/Preview/";



for($g=1;$g<count($arf);$g++){
  $fsc=explode( "\"" , $arf[$g]);
  //xxcopy($fsc[0],$sexx."image_".rand(0,3214343).".jpg" );
$lk[]=$fsc[0]."";
 }

 }
/*
 $uploaddir = $_SERVER['DOCUMENT_ROOT']."/images/Preview";
//echo $uploaddir;

$ud=scandir($uploaddir);
 $dd=count($ud);
$nr=11110+$dd-2;
$max=$nr;
 for($j=0;$j<0;$j++){
	
	if($ud[$j]=='.' || $ud[$j]=='..'){
	}
	else {
		$nf=$ud[$j];
		$udd=explode("_", $nf);
		$next = $udd[1];
		if($next>$max){
			$max=$next;
		}
	}
 }
 $max=$max+1;
$nr=$max;
*/


	
 //$ud=scandir($exx);
//echo count($ud);
 //for($df=$max;$df<(count($ud)+$max);$df++ ){

//$uploadfile = $uploaddir."/image_".$df."_-1.jpg";

//echo "images/Preview/image_".$df."_-1.jpg"."*#*";
 //}

//shuffle($lk);


for($f=0;$f<count($lk);$f++){

$ffg=explode("http://", $lk[$f]);

if(count($ffg)>1){
}else {
echo $lk[$f]."<br>";
//copy($choo[$lk[$f]], "clouds/Image".$f.".jpg");
}

}

/*
$jo=scandir("clouds");
for($j=0;$j<$jo;$j++){
	if($jo[$j]=='.' || $jo[$j]=='..'){
	}
	else{
	//	echo "clouds/".$jo[$j]."<br>";
	}
}
*/
 

?>
