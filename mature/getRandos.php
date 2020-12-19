<?php
 header('Access-Control-Allow-Origin: *');


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
if(file_exists($tmp."/".$_GET['randos']."ready.txt")){
echo " ".file_get_contents($tmp."/".$_GET['randos']."ready.txt")." ";
}
?>