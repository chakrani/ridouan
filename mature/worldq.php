<body id='bg'>
<?php

$pagew=file_get_contents("https://www.freeshell.de/~trans1/quotes.php?ds=a".rand(0,321314));

echo ("<table id='tabl' style='width:100%;position:fixed;left:0;top:0'><tr><td>".$pagw."</td></tr></table>");

?>
<script>
var tel=0;
function runs(){
tel=tel-3;

document.getElementById('tabl').style.position="fixed";
document.getElementById('tabl').style.left=0;
document.getElementById('tabl').style.top=tel+"px";



setTimeout("runs()", 100);

}
runs();
var bgs=new Array()
bgs[0]="clouds.jpg"; bgs[1]="clouds.jpg"; bgs[2]="clouds.jpg"; bgs[3]="clouds.jpg";
document.getElementById('bg').style.backgroundImage="url("+bgs[Math.floor(Math.random()*bgs.length)]+")";
document.getElementById('bg').style.backgroundPosition="center center";
a=Math.floor(200+(200*Math.random()));
document.getElementById('bg').style.backgroundSize="100%";
document.getElementById('bg').style.backgroundRepeat="no-repeat";

</script>
