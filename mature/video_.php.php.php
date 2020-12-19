<?php




function youtube_info($id){



return $id."";

	}



?> 
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
html,body{
width:100%;
height:100%;
overflow:hidden;
}
</style>

<style>


</style>
<script>
var telw=0;

function gef(){
video=document.getElementById('v0');

//fsf=Math.round(89*Math.random());
//video.src="https://akki.sourceforge.io/videos/"+fsf+"/video.mp4?d=4";

fsf=Math.round(55*Math.random());
video.src="https://akki.sourceforge.io/videos/g"+fsf+"/video.mp4?d=4";

video.play();
video=document.getElementById('v1');


//document.getElementById(v).style.display='none';
}


function pla(vy){
vy.play();
//document.getElementById(v).style.display='';

}


function switches(){

d=document.getElementById('dv'+(telw%2));
dd=document.getElementById('v'+(telw%2));

dd.play();
d.style.display='';
telw++;
e=document.getElementById('dv'+(telw%2));
ee=document.getElementById('v'+(telw%2));
e.style.display='none';
fsf=Math.round(55*Math.random());
ee.src="https://akki.sourceforge.io/videos/g"+fsf+"/video.mp4?d=4";

}


function ase(){
d=document.getElementById('dv'+(telw%2));
dd=document.getElementById('v'+(telw%2));

dd.play();
}

</script>
</head>

<body>
<div id='cnner' style='width:100%;height:100%'>
<?php
echo "<script>var vidz=new Array(); </script>";
echo "<script>var vidt=new Array(); </script>";

$dww=$_GET['q'];


$qqq=explode(",", $_GET['q']);
for($a=0;$a<count($qqq);$a++){




$pa= $qqq[$a];
$tm=0;

$bbb=explode("@", $pa);
if(count($bbb)>1){
$pa=$bbb[0];
$tm=rand(0, ($bbb[1]*60));;
}

$sd=explode("rl:", $pa);
if(count($sd)>1){
	
}
else{
	
}



echo "<script>vidz[".$a."]='".$pa."'; </script>";
echo "<script>vidt[".$a."]=".$tm."; </script>";

}




?>
<script>

for(c=0;c<vidz.length;c++){
	t=Math.round(vidt[c]*Math.random());
document.write("<iframe  border=\"0\"  id='dv"+c+"' src=\"videox.php?id="+vidz[c]+"&start=<?php  echo $_GET['t']; ?>\" frameborder=\"0\" allowfullscreen=\"\" style=\"width:100%;height:100%;left:-0%;top:-0%;position:fixed\" ></iframe>");


}
var maint=0;
function loopes(){
	for(v=0;v<vidz.length;v++){
	document.getElementById('dv'+v).style.visibility='hidden';
	}
	document.getElementById('dv'+(maint%vidz.length)).style.visibility='visible';
	
	   
     
   
	maint++;
	setTimeout("loopes()", 10000);
}
loopes();


function resiii(){

setTimeout("resiii()", 1000);
}
//resiii();

</script>
</div>
<?php
if($_GET['sound']!=""){
	echo "<iframe src='".$_GET['sound']."' style='position:fixed;top:0;left:0;top:0;width:100%;height:100%;dispdlay:none' border=0 frameborder=0 scrolling='no' scrollbars='no'></iframe>";

}
?>
</body>
</html>