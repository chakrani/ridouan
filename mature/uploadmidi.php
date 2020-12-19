<?php
header('Access-Control-Allow-Origin: *');

// SET THE DESTINATION FOLDER
$source = $_POST["upimage"];



$destination = "tempos/Track".$_POST['tel'].".mid";

$fil=base64_decode($source );
$fs=@fopen($destination , "w");
@fwrite($fs, $fil);
@fclose($fs);


// MOVE UPLOADED FILE TO DESTINATION
@mkdir('tempos');
@chmod('tempos', 0777);


@chmod($destination, 0755);

if(!file_exists("tempos/Track".$_POST['tel'].".".filesize($destination).".log")){

@exec("./timidity -c default.cfg -Ow --output-mono -o tempos/Track".$_POST['tel'].".wav ".$destination);
@exec("./ffmpeg -i tempos/Track".$_POST['tel'].".wav -y tempos/Track".$_POST['tel'].".mp3 ");
@unlink("tempos/Track".$_POST['tel'].".wav" );

$f=@fopen("tempos/Track".$_POST['tel'].".".filesize($destination).".log", "w");
@fwrite($f, "200");
@fclose($f);


}
echo "OK";
?>
