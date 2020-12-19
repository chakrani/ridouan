<?php
header('Access-Control-Allow-Origin: *');

$ge=$_GET['genre'];
$gc=explode("|",$ge);


set_time_limit(0);

$dirto=scandir(getcwd()."/guestbook/im/hs/");
	for($d=0;$d<count($dirto);$d++){

	if($dirto[$d]=='.' || $dirto[$d]=='..'){
	}
	else{

	$dirt=scandir(getcwd()."/guestbook/im/hs/".$dirto[$d]."/aud-io");
	for($f=0;$f<count($dirt);$f++){
		if($dirt[$f]=='.' || $dirt[$f]=='..'){ 
		}
		else{
			$fg=$dirt[$f];
			$ds=explode(".mp", $fg);
			$dws=explode("rack", $fg);
			$ds0=explode(".htm", $fg);

			$ds1=explode(".wav", $fg);
			$s=filesize(getcwd()."/guestbook/im/hs/".$dirto[$d]."/aud-io/".$fg);

			if(count($ds)<2 && count($dws)==2 && count($ds0)<2 && count($ds1)<2 && $s>4000){



$fsf=getcwd()."/guestbook/im/hs/".$dirto[$d]."/aud-io/".$fg;

$target_file=str_replace(".mid", ".mp3s.txt", $fsf);
$gen=@file_get_contents($target_file);

$ok=false;
if(!isset($_GET['genre'])){
$ok=true;
}
else{

	for($n=0;$n<count($gc);$n++){
		if($gen==$gc[$n]){
		
			$ok=true;
		}
	}

}


	if($ok){
	echo "https://maghreb.sourceforge.io/n/guestbook/im/hs/".$dirto[$d]."/aud-io/".$fg."<br>";

}


			$ss++;
			}		
			
		}
	}
}
}
        
       
   


    ?>
