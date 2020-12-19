<?php header('Access-Control-Allow-Origin: *');

$drrr="";

//THE USE THE BELOW FUNCTION CALL



//$f=@fopen("useo/".$ip, "w");
//@fwrite($f, $_GET['q']);
//@fclose($f);
$ffh="";
$fffh="";
$r=0;
$of=4;
for($f=0;$f<$of;$f++){
  $er=40*$f;

  $dfsf=$_GET['q'];
  $gds=explode(' ', $dfsf);
  if($f==1){
$cho= file_get_contents( "http://www.bing.com/images/search?count=40&first=".$er."&q=".urlencode($_GET['q']." -alamy -image  -photo -stock -lha -iha -time -tinypic -getty")."&qft=+filterui:photo-photo+filterui:aspect-wide&FORM=IRFLTR" );
  }
  else{
$cho= file_get_contents( "http://www.bing.com/images/search?count=40&first=".$er."&q=".urlencode($_GET['q']." -alamy -image  -photo -stock -lha -iha -time -tinypic -getty")."&qft=+filterui:photo-photo+filterui:aspect-wide&FORM=IRFLTR" );
  
  }

$arf=explode("<a class=\"thumb\" target=\"_blank\" href=\"",  $cho);








for($g=2;$g<count($arf);$g++){
  $fsc=explode( "\"" , $arf[$g]);
  //xxcopy($fsc[0],$sexx."image_".rand(0,3214343).".jpg" );

if( true){


	$ds=explode("s://", $fsc[0]);
	if(count($ds)>1){
	$drrr.= $fsc[0]."<br>";

	}
		$r++;
}
 }




 }


$f=@fopen("yotu/".str_replace(" ","_", $_GET['q']), "w");
@fwrite($f, $drrr);
@fclose($f);
echo $drrr;
exit;


?>