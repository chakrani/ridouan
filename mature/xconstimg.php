<?php
 header('Access-Control-Allow-Origin: *');

header('Content-Type: text/html; charset=utf-8');

$dats=explode("<next>", $_POST['data']);


for($wr=1;$wr<count($dats);$wr++){
	$fe=fopen("java/Imas".$wr.".jpg", "w");

	$gfh=explode("data:image/jpeg;base64,", $dats[$wr]);
	@fwrite($fe, "data:image/jpeg;base64,".base64_decode($gfh[1]) );
	@fclose($fe);





}

?>
