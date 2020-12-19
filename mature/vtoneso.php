<script type='text/javascript'><?php
		echo " var inx='".$_GET['inx']."'; ";
		$mid=$_GET['inx'].".mid";

?>
</script>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {


}

.hero-text {
  text-align: center;
  position: absolute;
top:0;
height:100%;

	
  left: 10%;
  color: white;
}
</style>
</head>
<body>


<div class="hero-image">
  <div class="hero-text">
<div  style='width:20%;text-align=center;align:center'><center>
<?php
echo "<table id='dss' style='width:60px;' cellspacing=0 cellpadding=0>";
for($r=19;$r>=0;$r--){
echo "<tr><td id='r".$r."' style='opacity:0.33;background-color:red'></td><td> </td><td id='s".$r."'  style='opacity:0.33;background-color:blue'></td><td> </td><td id='u".$r."'  style='opacity:0.33;background-color:green'></td><td> </td><td id='w".$r."'  style='opacity:0.33;background-color:white'></td><td> </td><td id='x".$r."'  style='opacity:0.33;background-color:orange'></td></tr>";
}
echo "</table>";

?>
</div>
<script>
var tim=new Array();
var uim=new Array();
var vim=new Array();
var wim=new Array();
var xim=new Array();
deeers = new Date();
var startat= Date.now()

 
<?php


include_once('idi.php');

$midi = new Midi();
$midi->importMid($mid);

$duration = $midi->getDuration();

echo " var duration=".$duration."; ";

$data = $midi->getTxt();




$fg=explode(" Off ch=15", $data);
$aan=array();
$timepm=0;
if(count($fg)>2){
for($t=1;$t<count($fg);$t++){

	$eg=$fg[$t];

	$fgo=explode(" On ch=15", $eg);
	$tim=$fgo[0];
	$et=explode("\n",$tim);
	$timepm=$et[(count($et)-1)];
	$aan[]=$timepm; 
}


}


echo " var max0= 0;  ";


for($k=0;$k<(count($aan)-1);$k++){
echo "tim[".$k."]=".$aan[$k].";  "."max0=".$aan[$k].";  ";
}

$aap=array();
$fg=explode(" Off ch=13", $data);
if(count($fg)>2){
for($t=1;$t<count($fg);$t++){

	$eg=$fg[$t];

	$fgo=explode(" On ch=13", $eg);
	$tim=$fgo[0];
	$et=explode("\n",$tim);
	$timepm=$et[(count($et)-1)];
	$aap[]=$timepm; 
}

}


echo " var max1= 0;  ";



for($k=0;$k<(count($aap)-1);$k++){
echo "vim[".$k."]=".$aap[$k]."; "." max1=".$aap[$k]."; ";
}
$aaq=array();
$fg=explode(" Off ch=14", $data);
if(count($fg)>2){
for($t=1;$t<count($fg);$t++){

	$eg=$fg[$t];

	$fgo=explode(" On ch=14", $eg);
	$tim=$fgo[0];
	$et=explode("\n",$tim);
	$timepm=$et[(count($et)-1)];
	$aaq[]=$timepm; 
}

}

echo " var max2= 0;  ";



for($k=0;$k<(count($aaq)-1);$k++){
echo "wim[".$k."]=".$aaq[$k]."; "." max2=".$aaq[$k]."; ";
}

$aax=array();
$fg=explode(" Off ch=10", $data);
if(count($fg)>2){
for($t=1;$t<count($fg);$t++){

	$eg=$fg[$t];

	$fgo=explode(" On ch=10", $eg);
	$tim=$fgo[0];
	$et=explode("\n",$tim);
	$timepm=$et[(count($et)-1)];
	$aax[]=$timepm; 
}


}



echo " var max3= 0;  ";



for($k=0;$k<(count($aax)-1);$k++){
echo "xim[".$k."]=".$aax[$k]."; "." max3=".$aax[$k]."; ";
}

$aao=array();
$fg=explode(" Off ch=11", $data);
for($t=1;$t<count($fg);$t++){

	$eg=$fg[$t];

	$fgo=explode(" On ch=11", $eg);
	$tim=$fgo[0];
	$et=explode("\n",$tim);
	$timepm=$et[(count($et)-1)];
	$aao[]=$timepm; 
}


echo " var max4= 0;  ";



for($k=0;$k<(count($aao)-1);$k++){
echo "uim[".$k."]=".$aao[$k]."; "." max4=".$aao[$k]."; ";
}

for($k=0;$k<(count($aan)-1);$k++){
echo "tim[".$k."]=".$aan[$k]."; ";
}

?>


mmmmax=Math.max(max0, max1);
mmmax=Math.max(mmmmax, max2);
mmax=Math.max(mmmax, max3);
maxx=Math.max(mmax, max4);


var te=0;
var te2=0;
var te3=0;
var te4=0;
var te5=0;
function ani(){


for(g=0;g<20;g++){
fd=document.getElementById('r'+g);
fd.style.visibility="hidden";

}
 startats=Date.now()+200;

vers = startats-startat;
perc=vers/duration/1000;
te=Math.round(perc*maxx/200);
for(f=0;f<20;f++){
ds=te%20;
bo=false;
for(t=0;t<tim.length;t++){
	if(tim[t]==((te+f)*200)){
	bo=true;
	}
	else{

	}
}
;
d=document.getElementById('r'+f);
if(bo){
d.style.visibility="visible";
}
else{

}

}

setTimeout("ani()", 300);
}
ani();


function ani2(){


for(g=0;g<20;g++){
fd=document.getElementById('s'+g);
fd.style.visibility="hidden";

}

 startats=Date.now()+200;

vers = startats-startat;
perc=vers/duration/1000;
te2=Math.round(perc*maxx/200);
for(f=0;f<20;f++){
ds=te%20;
bo=false;
for(t=0;t<uim.length;t++){
	if(uim[t]==((te2+f)*200)){
	bo=true;
	}
	else{

	}
}
;
d=document.getElementById('s'+f);
if(bo){
d.style.visibility="visible";
}
else{

}

}

setTimeout("ani2()", 300);
}
ani2();


function ani3(){


for(g=0;g<20;g++){
fd=document.getElementById('u'+g);
fd.style.visibility="hidden";

}
deeer = new Date();
 startats=Date.now()+200;

vers = startats-startat;
perc=vers/duration/1000;
te3=Math.round(perc*maxx/200);
for(f=0;f<20;f++){
ds=te%20;
bo=false;
for(t=0;t<vim.length;t++){
	if(vim[t]==((te3+f)*200)){
	bo=true;
	}
	else{

	}
}
;
d=document.getElementById('u'+f);
if(bo){
d.style.visibility="visible";
}
else{

}

}

setTimeout("ani3()", 300);
}
ani3();



function ani4(){


for(g=0;g<20;g++){
fd=document.getElementById('w'+g);
fd.style.visibility="hidden";

}

 startats=Date.now()+200;

vers = startats-startat;
perc=vers/duration/1000;
te4=Math.round(perc*maxx/200);
for(f=0;f<20;f++){
ds=te%20;
bo=false;
for(t=0;t<wim.length;t++){
	if(wim[t]==((te4+f)*200)){
	bo=true;
	}
	else{

	}
}
;
d=document.getElementById('w'+f);
if(bo){
d.style.visibility="visible";
}
else{

}

}

setTimeout("ani4()", 300);
}
ani4();






function ani5(){


for(g=0;g<20;g++){
fd=document.getElementById('x'+g);
fd.style.visibility="hidden";

}




 startats=Date.now()+200;

vers = startats-startat;
perc=vers/duration/1000;
te5=Math.round(perc*maxx/200);
for(f=0;f<20;f++){
ds=te%20;
bo=false;
for(t=0;t<xim.length;t++){
	if(xim[t]==((te5+f)*200)){
	bo=true;
	}
	else{

	}
}
;
d=document.getElementById('x'+f);
if(bo){
d.style.visibility="visible";
}
else{

}

}


ds=document.getElementById('dss');
ds.style.height=Math.floor((.5*screen.height)+(.5*perc*screen.height))+"px";

document.title=perc+"..";
if(perc>.98){
//window.location.href="vtonesm.php?inx="+(inx+1);
return true;
}



setTimeout("ani5()", 300);
}
ani5();




</script>
</div>
</div>
