
<?php
 header('Access-Control-Allow-Origin: *');
header('Content-Type: text/html; charset=utf-8');

?>

<?php

//exec("php worldw.php>worldw.html");
$r=file_get_contents("https://freeshell.de/~trans1/worldw.php?v=".rand(0,12344));
$f=@fopen("worldw.html", "w");
@fwrite($f, $r);
@fclose($r);
?>
