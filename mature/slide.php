<html>
<meta charset="UTF-8">
<style type='text/css'>
html,body{
width:100%;
height:100%;
overflow:hidden;
}
</style>
<body onload='loop()'>
<iframe src='slider2.php?q=<?php echo urlencode($_GET['q']); ?>' style='width:120%;height:120%;position:fixed;left:-10%;top:-10%' frameborder=0 border=0 scrolling='no' scrollbars='no' id='ifr'></iframe>
<script>
var ud=Math.round(Math.random()*1);
var lr=Math.round(Math.random()*2);
var to=-10;
var lef=-10;

function loop(){

if(to<=-19){
ud=1;
}
if(to>=-1){
ud=0;
}

if(Math.random()>.9881){
ud=Math.round(Math.random()*1);

}

if(ud==0){
to=to-.25;
}
if(ud==1){
to=to+.15;
}


if(lef<=-19){
lr=-1;
}
if(lef>=-1){
lr=1;
}

if(Math.random()>.981){
lr=Math.round(Math.random()*2);

}

if(lr==1){
lef=lef-.1;
}
if(lr==2){
lef=lef+.15;
}


document.getElementById('ifr').style.left=lef+"%";
document.getElementById('ifr').style.top=to+"%";

setTimeout("loop()",200);
}

</script>
</body>
</html>
