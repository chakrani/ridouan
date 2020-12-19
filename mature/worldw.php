<?php
 header('Access-Control-Allow-Origin: *');
header('Content-Type: text/html; charset=utf-8');

?>
<head>
  <meta charset="UTF-8">
</head> 
<div id='bg'><img style='position:fixed;left:0;top:0;width:100%;height:100%' src='clouds.jpg'>
<?php
@unlink("op.html");

$page=file_get_contents("https://www.timeanddate.com/weather/");

$d=explode("<table class=\"zebra fw tb-theme\">", $page);
$e=$d[1];
$dfs=explode("</table>", $e);
echo "<table id='tabl' style='width:100%' class=\"zebra fw tb-theme\">".$dfs[0];

?>
<script>
var tel=0;
function runs(){
tel=tel-3;

document.getElementById('tabl').style.position="fixed";
document.getElementById('tabl').style.left=0;
document.getElementById('tabl').style.top=tel+"px";



setTimeout("runs()", 180);

}
runs();
var bgs=new Array()

</script>
</div>
