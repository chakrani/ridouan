<!DOCTYPE html>
<script data-ad-client="ca-pub-6178941883318632" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<?php
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
           
            $min = (int)$min;
            $max = (int)$max;
        }
       
        if ($min > $max) {
          
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
@mkdir("guestbook/im");
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

        $fb=@fopen( $tmp."/".$randos."ready.txt", "w");
        @fwrite($fb, "-1");
        @fclose($fb);



?><html lang="nl-nl">
<title>6178941883318632 AdSense - Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta charset="UTF-8">
<style>
html,body{
overflow:hidden;
}
#div1 {
  position: relative;
  height: 2050px;
  width: 5000px;
  top:-2050px;
  left:-1000px;
  margin-left: 375px;
  border: 0px solid blue;
  -webkit-perspective: 2200px; /* Safari 4-8  */
  perspective: 1100px;	
}
#diovs, #div4 {
  overflow;hidden;
  width:5000px;
  height:2500px;
  position: fixed;
  left:0;
  top:0;
}

</style>

<script>
var randos=0;
<?php 
$randos=rand(0,532456006);
$_GET['randos']=$randos;
echo " var randos=".$randos."; ";
   echo " var nogenera=".$randos."; ";



?>
var al=2500-Math.ceil(500*Math.random());
var ho=700-Math.ceil(100*Math.random());
var ddx=1;
var ddy=1;
var dx=1;
var dy=1;

if(Math.random()>.5){
dx*=-1;
}

if(Math.random()>.5){
dy*=-1;
}
var fwf=0;
var t=0;
function zwervers(){
d=document.getElementById('diovs');
m=Math.random();
if(m>.99746 ){
dx=dx*-1;

}
m=Math.random();
if(m>.99746 ){
dy=dy*-1;

}

al=al+(dx*1);
ho=ho+(dy*1);


if(al>(5000-screen.width)){
dx=-1;
}
if(al<1){
dx=1;
}
if(ho<1){
dy=1;
}
if(ho>(2500-screen.height)){
dy=-1;
}



d.style.backgroundPosition=(-al)+"px "+(-ho)+"px";

setTimeout("zwervers()", 200);
}

function activest(){
d=document.getElementById('stream');
d.play();
}


function zw(){
	klaarkick();
	loops();
	dofr();
	fokl();
	iffrree();
	zwervers();
	datehh=new Date();	
	document.getElementById('diovs').style.backgroundImage="url(maps/"+Math.round(3*Math.random())+".jpg)";
	
}

</script>
<body onload='zw()'  id='zw'>
<div id="diovs" style="background-repeat:no-repeat;" scrollbars='no' scrolling='no'></div>
<?php


        $fb=@fopen( "guestbook/n/next.".$randos."count.txt", "w");
        @fwrite($fb, "0");
        @fclose($fb);



	include_once('indexyl.php');


?>
</body>
</html>
