
<?php

	header('Access-Control-Allow-Origin: *');
include_once('idi.php');
$mid="guestbook/n/Track".$_GET['m'].".mid";
$midi = new Midi();
$midi->importMid($mid);

$duration = $midi->getDuration();
echo $duration;

?>