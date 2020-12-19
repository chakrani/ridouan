<?php
 header('Access-Control-Allow-Origin: *');
 
 $s=scandir("guestbook/im/hs/2222/aud-io");
 for($i=0;$i<count($s);$i++){
	if($s[$i]=="." || $s[$i]=='..'){
	
	}
	else{
		$fg=explode("rack", $s[$i]);
		$fg2=explode(".mp", $s[$i]);
		$fgn=explode("tx", $s[$i]);
		if(count($fg)==2 && count($fg2)==2 && count($fgn)<2){
			echo "guestbook/im/hs/2222/aud-io/".$s[$i]."<br>";
		}
		

	}	
 
 }
 
?>