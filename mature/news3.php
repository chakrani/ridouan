<?php
 header('Access-Control-Allow-Origin: *');
?>
<body style='backgroundd-image:url(EMA.jpg);background-size:100% 100%'>
<img src='EMA.jpg' style='position:fixed;left:0%;top:0%;width:100%;height:100%' id='mi'>
<table style='width:80%;height:100%;position:fixed;left:10%;top:0'>
<tr>
<td align='left' valign='middle'>
<h4>
<?php
@unlink("RSSWSJD.xml");

$page= file_get_contents("http://feeds.a.dj.com/rss/RSSWSJD.xml");


$ss=explode("<title>", $page);
for($t=3;$t<8;$t++){

	$fd=explode("</title>", $ss[$t]);

		$r=explode("CDATA[", $ss[$t]);
		$p=explode("]", $r[1]);
	$lin=explode("<link>", $ss[$t]);
	$neww=explode("</link>", $lin[1]);
	//$dat=file_get_contents($neww[0]);
	//$aaa=explode("<div class=\"wsj-snippet-body\">", $dat);
	//$ds=explode("</div>", $aaa[1]);
	$daaa=""; //strip_tags($ds[0]);

	echo $fd[0].". ".$p[0]." <br><br>".$daaa;

}

?>
</h3>
</td>
</tr>
</table>
<div id='area' ></div>
<script>
var wan=Math.round(3+12*Math.random());
var tins=Math.ceil(345*Math.random());
var wi=Math.round(screen.width/wan);
var he=Math.round(screen.height/wan);
var di=Math.round(4+Math.random()*8);
var dirsx=new Array();
var dirsy=new Array();
var dirsz=new Array();
var sx=new Array();
var sy=new Array();
var sz=new Array();

var kx=new Array();
var ky=new Array();
var kz=new Array();

var mx=new Array();
var my=new Array();
var mz=new Array();

ds="";
for(t=0;t<tins;t++){



kx[t]=Math.round(wi*1*Math.random());
ky[t]=Math.round(he*1*Math.random());
kz[t]=Math.round(di*1*Math.random());

mx[t]=kx[t]+Math.round(wi*Math.random());
my[t]=ky[t]+Math.round(he*Math.random());
mz[t]=kz[t]+Math.round(di*Math.random());



sx[t]=kx[t]+Math.round(mx[t]/2*Math.random());
sy[t]=ky[t]+Math.round(my[t]/2*Math.random());
sz[t]=kz[t]+Math.round(mz[t]/2*Math.random());



t0=Math.round(-1+(2*Math.random()));
t1=Math.round(-1+(2*Math.random()));
t2=Math.round(-1+(2*Math.random()));
dirsx[t]=t0;
dirsy[t]=t1;
dirsz[t]=t2;


ds=ds+"<div id='p"+t+"' style='width:"+wan+"px;height:"+wan+"px;background-color:#808080;position:fixed;left:"+(wan*sx[t])+"px;top:"+(wan*sy[t])+"px'></div>";



}
d=document.getElementById('area');
//d.innerHTML=ds;



function nci(){
wan=Math.round(3+12*Math.random());
tins=Math.ceil(345*Math.random());
wi=Math.round(screen.width/wan);
he=Math.round(screen.height/wan);
di=Math.round(4+Math.random()*8);
dirsx=new Array();
dirsy=new Array();
dirsz=new Array();
sx=new Array();
sy=new Array();
sz=new Array();

kx=new Array();
ky=new Array();
kz=new Array();

mx=new Array();
my=new Array();
mz=new Array();

ds="";
for(t=0;t<tins;t++){



kx[t]=Math.round(wi*1*Math.random());
ky[t]=Math.round(he*1*Math.random());
kz[t]=Math.round(di*1*Math.random());

mx[t]=kx[t]+Math.round(wi*Math.random());
my[t]=ky[t]+Math.round(he*Math.random());
mz[t]=kz[t]+Math.round(di*Math.random());



sx[t]=kx[t]+Math.round(mx[t]/2*Math.random());
sy[t]=ky[t]+Math.round(my[t]/2*Math.random());
sz[t]=kz[t]+Math.round(mz[t]/2*Math.random());



t0=Math.round(-1+(2*Math.random()));
t1=Math.round(-1+(2*Math.random()));
t2=Math.round(-1+(2*Math.random()));
dirsx[t]=t0;
dirsy[t]=t1;
dirsz[t]=t2;


ds=ds+"<div id='p"+t+"' style='width:"+wan+"px;height:"+wan+"px;background-color:#808080;position:fixed;left:"+(wan*sx[t])+"px;top:"+(wan*sy[t])+"px'></div>";



}
d=document.getElementById('area');
d.innerHTML=ds;

}


function doSt(){


	if(Math.random()<.006){
		nci();
	}



	for(v=0;v<tins;v++){
		d=document.getElementById('p'+v);

		nx=sx[v]+dirsx[v];
		if(nx==mx[v] || nx==kx[v]){
			dirsx[v]=dirsx[v]*-1;	
		}
		else{
			sx[v]=nx;
		}

		ny=sy[v]+dirsy[v];
		if(ny==my[v] || ny==ky[v]){
			dirsy[v]=dirsy[v]*-1;	
		}
		else{
			sy[v]=ny;
		}

		nz=sz[v]+dirsz[v];
		if(nz==mz[v] || nz==kz[v]){
			dirsz[v]=dirsz[v]*-1;	
		}
		else{
			sz[v]=nz;
		}

		d.style.left=(sx[v]*wan)+"px";
		d.style.top=(sy[v]*wan)+"px";
		if(sz[v]<1){	
		//d.style.backgroundColor="#"+(di*10)-(sz[v]*10)+"0000";
	d.style.backgroundColor="white";	

	}
	if(sz[v]==5){
		//if(sz[v]>1){	
//		d.style.backgroundColor="#00"+(di*10)+(sz[v]*10)+"AA";

		re=Math.floor(10+(Math.random()*90));
		ge=Math.floor(10+(Math.random()*90));
		be=Math.floor(10+(Math.random()*90));
	d.style.backgroundColor="#"+re+""+ge+""+be;

		}
		if(sz[v]==1){	
		d.style.backgroundColor="#000000";
		}
	
		

	}

	setTimeout("doSt()", 120);

}
//doSt();


var terc=0;
function mm(){

terc=terc+(Math.PI/45);
img=document.getElementById('mi');
img.style.transform = 'rotate('+terc+'deg)';
img.style.width=(250+(50*Math.sin(terc/8)))+'%';
img.style.height=Math.floor((250+(50*Math.sin(terc/8)))*screen.width/screen.height)+'%';
//img.style.left=-((250+(50*Math.sin(terc/8)))/4 )+'%';
//img.style.top=-( Math.floor((250+(50*Math.sin(terc/8)))*screen.width/screen.height)/4 )+'%'
setTimeout("mm()", 138);
}
//mm();


function fos(){
document.getElementById('mi').src=''+Math.floor(2*Math.random())+'.jpg';
setTimeout("fos()", 10000);

}
fos();

</script>
