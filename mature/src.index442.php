<html>
<style type='text/css'>
html,body{
margin:0;
padding:0;
overflow:hidden;
width:100%;
height:100%;
}
body{
background-color:black;
opacity:.9;
}

.ximg{
width:100%;
height:100%;
position:fixed;
left:0;
top:0;
}

</style>
<body onload="cf()">
<script type="text/javascript">

var capital=new Array();





<?php

$gfh=scandir($_GET['dir']);
echo " var imimim=new Array();  ";
$gop=0;
for($h=0;$h<count($gfh);$h++){
	if($gfh[$h]=='..' || $gfh[$h]=='.'){
	}
	else{
	echo " imimim[".$gop."]='".$_GET['dir']."/".$gfh[$h]."';  "; 
		$gop++;
	}
}

?>
</script>
<img class='ximg' id='xbd' src='<?php $ft=ceil(count($gfh)/2);   $fds=rand(0,$ft); echo $_GET['dir']."/".$gfh[$fds]; ?>' alt='fimage' />
<img class='ximg' id='xbd2' src='<?php  $fds=rand(($ft+1), count($gfh)); echo $_GET['dir']."/".$gfh[$fds]; ?>' alt='gimage' />
<script>
var qopa=0;
var qte=110;
var qdrg=1;
var qtel=5;
var qdrgs=1;
var qotel=5;
var qodrgs=1;
var myde=1;
function cf(){
d=document.getElementById('xbd');
d2=document.getElementById('xbd2');
d.style.width=qte+'%';
d.style.height=qte+'%';
d2.style.width=qte+'%';
d2.style.height=qte+'%';
d2.style.left=-qtel+'%';
d2.style.top=-qotel+'%';
d.style.left=-qtel+'%';
d.style.top=-qotel+'%';
d.style.opacity=.77111*qopa/1.14;
d2.style.opacity=.7711*(1-qopa)/1.14;

qopa=qopa+(myde*(2/50));
if(qopa>=(1-(1/50))){

	d2.src=d.src;
	myde=-1;
}
if(qopa<=(1/50)){
	myde=1;
	d.src=imimim[(Math.floor(imimim.length*Math.random()))];

}


qte+=(qdrg*0.1);
if(qte<105|| qte>125){

qdrg*=-1;
}

qtel+=(qdrgs*0.012115);
if(qtel<2 || qtel>5){

qdrgs*=-1;
}


qotel+=(qodrgs*0.01115);
if(qotel<2 || qotel>5){

qodrgs*=-1;
}

setTimeout('cf()', 640);
}

</script>
</body>
</html>



