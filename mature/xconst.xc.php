
<?php

set_time_limit(0);

function int_andom(){

$loas=$_SERVER['REMOTE_ADDR'];
if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
	$loas=$loas.$_SERVER['HTTP_X_FORWARDED_FOR'];
}
$loas=str_replace(".", "", $loas);
$q_s[0]=6; $q_s[1]=4; $q_s[2]=3; 
$q_s[3]=7; $q_s[4]=0; $q_s[5]=5; 
$q_s[6]=2; $q_s[7]=1; $q_s[8]=8; 
$q_s[9]=9;
$gdww=strlen($loas);
$stw="";
for($i=0;$i<$gdww;$i++){
	$dgfw=$loas[$i];
	if($dgfw!=""){
		if($dgfw>=0){
			$stw.="".$q_s[$dgfw];
		}
	}
}
return "2222"; //"".$stw;
}

if (!function_exists('random_int')) {
    function random_int($min, $max) {
        if (!function_exists('mcrypt_create_iv')) {
            trigger_error(
                'mcrypt must be loaded for random_int to work',
                E_USER_WARNING
            );
            return null;
        }
       
        if (!is_int($min) || !is_int($max)) {
            //trigger_error('$min and $max must be integer values', E_USER_NOTICE);
            $min = (int)$min;
            $max = (int)$max;
        }
       
        if ($min > $max) {
            //trigger_error('$max can\'t be lesser than $min', E_USER_WARNING);
            return null;
        }
       
        $range = $counter = $max - $min;
        $bits = 1;
       
        while ($counter >>= 1) {
            ++$bits;
        }
       
        $bytes = (int)max(ceil($bits/8), 1);
        $bitmask = pow(2, $bits) - 1;

        if ($bitmask >= PHP_INT_MAX) {
            $bitmask = PHP_INT_MAX;
        }

        do {
            $result = hexdec(
                bin2hex(
                    mcrypt_create_iv($bytes, MCRYPT_DEV_URANDOM)
                )
            ) & $bitmask;
        } while ($result > $range);

        return $result + $min;
    }
}



$gg="guestbook/im/hs/".int_andom()."/";
$sghrrdh= $gg;
@mkdir("guestbook");
@mkdir("pls");
@mkdir("guestbook/im");
@mkdir("guestbook/n");

@chmod("guestbook", 0755);
@chmod("pls", 0755);
@chmod("guestbook/im", 0755);
@chmod("guestbook/n", 0755);


@mkdir("guestbook/im/hs");
@mkdir($sghrrdh);

$bih=$sghrrdh;


@mkdir("guestbook/im/hs/");
@mkdir($sghrrh);

$gof="ch/tmp";
$fh=@fopen("guestbook/im/hs/".int_andom()."/tmp.cfg.php", "w");
@fwrite($fh, $bih);
@fclose($fh);
$fhr=@fopen("guestbook/im/hs/".int_andom()."/tmp.cfg", "w");
@fwrite($fhr, $bih);
@fclose($fhr);
$fhr=@fopen("guestbook/im/hs/".int_andom()."/temp.cfg", "w");
@fwrite($fhr, $bih);
@fclose($fhr);









$tmp=file_get_contents("guestbook/im/hs/".int_andom()."/tmp.cfg.php");

$dats=explode("|", $_POST['data']);

$rando=rand(0,45325);
$randos=$dats[1];

$mid=$dats[0];
/*
$mid=str_replace("~", " ch=", $mids);
$mids=str_replace("!"," n=", $mid);
$mid=str_replace("#", " v=0", $mids);
$mids=str_replace("%", " v=100", $mid);
*/
//$mids=$dats[0];


@include_once('idi.php');
@mkdir($tmp);
@mkdir("guestbook/im/hs");
@mkdir("guestbook/im/hs/2222");
@mkdir("guestbook/im/hs/2222/aud-io");
@mkdir("guestbook/im/hs/2222/n");
//@exec("chmod 777 -R guestbook/ ");




//session_start();
$sess="aa".rand(0,43254656);
@mkdir($tmp.'/'.$sess);
$save_dir = $tmp.'/'.$sess.'/';




        $midi = new Midi();

	$midi->importTxt($mid);


$fgg=explode("NaN ",$mid);
if(count($fgg)>1){
echo "Nan";

$ff=@fopen("nana.txt", "w");
@fwrite($ff, $mid);
@fclose($ff);



}
else{

 $midi->saveMidFile("guestbook/n/Tracks".$rando.".mid");

$mids="guestbook/n/Tracks".$rando.".mid";

$midi = new Midi();
$midi->importMid($mids);

$dduration = $midi->getDuration();
$duration=intval($dduration );
if(!file_exists($tmp."/".$randos."count.txt")){

        $fb=@fopen( $tmp."/".$randos."count.txt", "w");
        @fwrite($fb, "-1");
        @fclose($fb);
	$next=-1;


}

$hh=fopen("guestbook/n/Track.".$randos.".".$next.".mid.html", "w");
@fwrite($hh, $mid);
@fclose($hh);



$mmid=$mid;

if( $duration>20){

$u=@fopen("u.txt", "w");
@fwrite($u, "".$duration);
@fclose($u);

$maa=0;


//0 PrCh ch=14 0 MTrk
//0 PrCh ch=14 p=100
/*


MkFile 0 1 480
MTrk
0 Tempo 488280
0 Meta TrkEnd
TrkEnd
MTrk
0 PrCh ch=14 p=0


*/

if( $duration>120 ){
$mm="";
$gfhw=explode('MTrk', $mid);
//$mm=$gfhw[0]."p=";

//$mm=$gfhw[0]."p=";
$sff=explode("",$gfhw[1]);
$pp=$sff[0];
$mm=$gfhw[0]."MTrk".$gfhw[1];



for($t=2;$t<count($gfhw);$t++){

$fdgh=explode("\n", $gfhw[$t]);
$gfegh=$fdgh[1];

$mm=$mm."MTrk";


$fa=ceil(120/$duration*count($fdgh));
$cc="";
for($v=0;$v<($fa-20);$v++){
$cc=$cc.$fdgh[$v]."\n";
$ends=explode(" ", $fdgh[$v]);
$end=$ends[0];
}

for($v=($fa-20);$v<($fa-1);$v++){
$cc=$cc.str_replace("On", "Off", str_replace("v=100", "v=0",  $fdgh[$v] ))."\n";
$ends=explode(" ", $fdgh[$v]);
$end=$ends[0];
}



$mm=$mm.$cc.$end." Meta TrkEnd\nTrkEnd\n";
//$mm=$mm.$cc.$end;

}

$mmid=$mm;

$u=@fopen("3uo.txt", "w");
@fwrite($u, "".$mm);
@fclose($u);





//$mii=$mii.$ends." Meta TrkEnd\nTrkEnd\n";
//$mmid=$mii;

}


$next=file_get_contents($tmp."/".$randos."count.txt" );

        $fb=@fopen( $tmp."/".$randos."count.txt", "w");
        @fwrite($fb, "".($next+1));
        @fclose($fb);
	$next=$next+1;

$ghj=explode("NaN ", $mid);
if(count($ghj)>1){
echo "ss";

}

        $midi = new Midi();

        $midi->importTxt($mmid);
$midi->saveMidFile("guestbook/n/Track.".$randos.".".$next.".mid.mid");



        $midi = new Midi();

        $midi->importTxt($mid);



$hh=fopen("guestbook/n/Track.".$randos.".".$next.".mid.html", "w");
@fwrite($hh, $mid);
@fclose($hh);



//$midi->saveMidFile("guestbook/n/Track".$next.".mid");
$midi->saveMidFile("guestbook/n/Track.".$randos.".".$next.".mid");
$progr="./";
$reste="";
if (strtoupper(substr(php_uname('s') , 0, 3)) === 'WIN')
{
$progr="";
$reste=".exe";
}


        @exec( $progr."timidity".$reste." -c default.cfg --output-mono  -Ow -o guestbook/n/".$rando.".wav guestbook/n/Track.".$randos.".".$next.".mid.mid");
        @exec( $progr."lame".$reste." guestbook/n/".$rando.".wav   guestbook/n/Track.".$randos.".".$next.".mp3");
	@exec("chmod 755 guestbook/n/Track.".$randos.".".$next.".mp3");
    @exec("chmod 755 guestbook/");
@exec("chmod 755 guestbook/n/");
 @exec("chmod 755 guestbook/n/Track.".$randos.".".$next.".mid");

@copy("guestbook/n/Track".$next.".mp3", "guestbook/im/hs/2222/aud-io/Track.".$rando.".".$next.".mp3" );
//@exec("chmod 777 -R guestbook/ ");

        @unlink("guestbook/n/".$rando.".wav");
 @copy("guestbook/n/Track.".$randos.".".$next.".mid", "pls/Track.".$randos.".".$next.".mid");
  @copy("guestbook/n/Track.".$randos.".".$next.".mp3", "pls/Track.".$randos.".".$next.".mp3");
  
  
  
  
  
  
  
  
  
$awc=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']==='on' ? "https" : "http")."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 $actink=explode("/", $awc);
$wws="";
for($aa=0;$aa<(count($actink)-1);$aa++){
$wws.=$actink[$aa]."/";
}

$str="<Asx Version = \"3.0\" >\n<Title > stream</Title>\n\n<Param Name = \"AllowShuffle\" Value = \"yes\" />\n\n";
 for($ar=0;$ar<$next;$ar++){
$str=$str. "<Entry>\n"; 
$str=$str."<Ref href = \"".$wws."pls/Track.".$randos.".".$ar.".mid\"/>\n";

$str=$str."</Entry>\n";
}

$str=$str."</Asx>";


$fe=@fopen("pls/".$randos.".mid.asx", "w");
@fwrite($fe, $str."");
@fclose($fe);
chmod("pls/".$randos.".mid.asx", 0755);




$str="<Asx Version = \"3.0\" >\n<Title > stream</Title>\n\n<Param Name = \"AllowShuffle\" Value = \"yes\" />\n\n";
 for($af=0;$af<$next;$af++){
$str=$str. "<Entry>\n"; 
$str=$str."<Ref href = \"".$wws."pls/Track.".$randos.".".$af.".mp3\"/>\n";

$str=$str."</Entry>\n";
}

$str=$str."</Asx>";


$fe=@fopen("pls/".$randos.".mp3.asx", "w");
@fwrite($fe, $str."");
@fclose($fe);
chmod("pls/".$randos.".mp3.asx", 0755);
  
  

$hh=fopen("guestbook/n/".$randos.".html", "w");
@fwrite($hh, $mid);
@fclose($hh);




/*
$hh=fopen("guestbook/n/Track.".$randos.".".$next.".mid.html", "w");
@fwrite($hh, $mid);
@fclose($hh);
*/


        $fb=@fopen( $tmp."/".$randos."ready.txt", "w");
        @fwrite($fb, "1");
        @fclose($fb);





@exec("chmod 777 guestbook/n/Track.".$randos.".mid.html");
echo "Track:".$next;

}
}
?>