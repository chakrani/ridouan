<div id='ff'></div>
<div  style='display:none' id='trackcount'>0</div>
<script>
<?php
$sss="";
if(file_exists("conf/t.el")){
	$file_handle = fopen("conf/t.el", "r");
while (!feof($file_handle)) {
   $line = fgets($file_handle);
   $sss.=$line;
}
fclose($file_handle);
$tel=intval($sss);

$tel=$tel+1;

$sff=@fopen("conf/t.el", "w");
@fwrite($sff, "".$tel);
@fclose($sff);
}
else{
$tel=0;
	$sff=@fopen("conf/t.el", "w");
@fwrite($sff, "".$tel);
@fclose($sff);
}
?>
var stylez="east|hiphop|house|strings|ishu|hardrock|experiment|symfony|music|piano|asia|country|ambient|jazz|signal";
var gamez="0|1|2|~|3|4|5|A|B|C|D|E|F";
var stylezz=stylez.split('|');
var gamezz=gamez.split('|');

	sf=window.location.href;

	fs=sf.split("style=");
	if(fs.length>1){
		
			fsf=fs[1];
			wert=fsf.split('&');
			stylez=wert[0];	
			
			stylezz=stylez.split('|');

	}

		fs=sf.split("game=");
	if(fs.length>1){
		
			fsf=fs[1];
			wert=fsf.split('&');
			gameze=wert[0];	
			fsg=gameze.split('-');
			qfssf="";
			for(d=0;d<fsg.length;d++){
				qfssf+=fsg[d];
			}
			games="";
			dsf=qfssf.length;
			for(r=0;r<dsf;r++){
			games=games+qfssf.charAt(r)+"|";
			}
			dgdhg=games.substring(0,(games.length-1));
			gamez=dgdhg;




			 gamezz=gamez.split('|');
	}
function jo(){
}
function iffrree(){

		stw=stylezz[Math.floor(stylezz.length*Math.random())];
		sty=stw+"|"+stw;
	
		gtw=gamezz[Math.floor(gamezz.length*Math.random())];
		gty=gtw+"|"+gtw;

sfe=window.location.href;
fsff="";
		fse=sfe.split("ins=");
	if(fse.length>1){
		fsvv=fse[1];
		fhfh=fsvv.split('&');
		fsff="&ins="+fhfh[0];
	
	}
		document.getElementById('ff').innerHTML="<iframe src='general.html.html?style="+stylez+"&game="+gamez+fsff+"&randos="+randos+"' style='display:none'></iframe>";

}

</script>
<audio style='display:none' id='ad' onended='volgendes()'></audio>
<div id='a0' style='overflow:hidden;position:fixed;top:0;left:0;width:100%;height:100%;'>
</div>
<div id='a10' style='overflow:hidden;position:fixed;top:0;left:0;width:100%;height:100%;display:none'>
</div>
<div id='a11' style='overflow:hidden;position:fixed;top:0;left:0;width:100%;height:100%;display:none'>
</div>
<div id='tti' style='position:fixed;left:69.9%;top:4%'></div>
<div id='rtti' style='position:fixed;left:70.1%;top:4%'></div>
<div id='uti' style='position:fixed;left:69.9%;top:3.9%'></div>
<div id='ruti' style='position:fixed;left:70.1%;top:4.1%'></div>
<div id='utti' style='position:fixed;left:70%;top:4%'></div>
<script>
var fsop=0;
var title="0%0";
var trackcountt=0;
function fokl(){
	if(document.getElementById('ad')){
		title=Math.round(100*(document.getElementById('ad').currentTime / document.getElementById('ad').duration))+"%"+fsop;
		rrf=document.getElementById('ad').duration-document.getElementById('ad').currentTime;
		if(document.getElementById('ad').currentTime>0){
			mins=Math.floor(rrf/60);
			fdgh="";
			if(mins<1){
				fdgh="0:";
			}
			else{
				fdgh=mins+":";
			}
			rfv=Math.floor(rrf-(60*mins));
			if(rfv<10){
				fdgh=fdgh+"0"+rfv;
			}
			else{
				fdgh=fdgh+rfv;
			}
			if( document.getElementById('textu')  ){
				document.getElementById('textu').innerHTML="<span style='color:white'><b>LIVE</b> </span> &nbsp; <span style='background-color:black;color:white'> "+fdgh+" </span>";
			}
		}
	}
	setTimeout("fokl()",1000);
}
fokl();
var cntcnt=0;
var counttrr=0;
function fc(){
	for(r=0;r<1;r++){
		t=Math.floor(xc.length*Math.random());
		xc[t]=Math.floor(Math.random()*screen.width);
		yc[t]=Math.floor(Math.random()*screen.height*.5);
		if(Math.random()>.4){
			document.getElementById('st'+t).style.display='';
			document.getElementById('st'+t).style.left=xc[t]+"px";
			document.getElementById('st'+t).style.top=yc[t]+"px";
		}
		else{
			document.getElementById('st'+t).style.display='none';
		}
	}
	setTimeout("fc()", Math.ceil(1000+(4000*Math.random())))
}
sf=window.location.href;
fs=sf.split("?");
function volgendes(){
datehh=new Date();	
document.getElementById('diovs').style.backgroundImage="url(maps/"+((Math.floor(datehh.getHours()/6)<?php echo "+".($tel-$tel); ?> ) %8)+".jpg)";
	
ifrm =document.getElementById('ifrr0');
document.getElementById("gonxx").style.display='none';
if((cntcnt%14 )==13 && false){
document.getElementById('ad').src='filmx/news00.mp3?c='+Math.random();
}
else{
document.getElementById('ad').src='guestbook/n/Track.'+randos+'.'+cntcnt+'.mp3?v='+Math.random();
}
document.getElementById('trackcount').innerHTML="<a href='#' title='"+trackcountt+"' style='text-decoration:none'><span style='color:white'>"+cntcnt+"</span></a>";
document.getElementById('textud').innerHTML="<table  style='z-index:9999999;width:100%;height:100%;'><tr><td style='width:80%'><a href='guestbook/n/Track."+randos+"."+cntcnt+".mid' download style='text-decoration:none'><span style='color:black'><b>"+musicsvg+"</b></span></a></td><td align='center' valign='middle' style='background-color:green'><a href='#' title='"+trackcountt+"' style='text-decoration:none'><span style='color:white'>"+cntcnt+"</span></a></td><tr></table>";
cntcnt=cntcnt+1;
document.getElementById('ad').play();
fsop++;
}
function voriges(){
cntcnt=cntcnt-2;
document.getElementById('ad').src='guestbook/n/Track.'+randos+'.'+cntcnt+'.mp3?v='+Math.random();
document.getElementById('trackcount').innerHTML="<a href='#' title='"+trackcountt+"' style='text-decoration:none'><span style='color:white'>"+cntcnt+"</span></a>";
cntcnt=cntcnt+1;
document.getElementById('ad').play();
}
function fsas(){}
function cw(){
	d=new Array();
	d[0]="window.png?aa";
	d[1]="window2.png?aaa";
	d[2]="window4.png?aaaa";
	d[3]="window8.png?aaaa"
	document.getElementById('w').src=d[Math.floor(Math.random()*d.length)];
	setTimeout("cw()", 15000);
}
var oldnr=0;
var items=new Array();
items[0]="sports2.html";
items[1]="freame.php?page=indexclclbxz.html";
<?php
$con="conf/default.ch";


if(isset($_GET['channel']))
{
	
$con=$_GET['channel'];	
}

$fol="";
$file_handle = fopen($con, "r");
while (!feof($file_handle)) {
   $line = fgets($file_handle);
   $fol.=$line;
}
fclose($file_handle);




$fold=explode("\n", $fol);
for($i=0;$i<count($fold);$i++){
	echo " items[".($i+2)."]=\"".str_replace("\r", "", str_replace("\n","", $fold[$i]))."\"; ";
}


?>





var forwardsvg="<svg style='width:44px;height:44px' xmlns='http://www.w3.org/2000/svg' class='svg-inline--fa fa-forward fa-w-16 fa-2x' role='img' aria-hidden='true' viewBox='0 0 512 512' focusable='false' data-prefix='fas' data-icon='forward'><path class='' fill='#fff' d='M 500.5 231.4 l -192 -160 C 287.9 54.3 256 68.6 256 96 v 320 c 0 27.4 31.9 41.8 52.5 24.6 l 192 -160 c 15.3 -12.8 15.3 -36.4 0 -49.2 Z m -256 0 l -192 -160 C 31.9 54.3 0 68.6 0 96 v 320 c 0 27.4 31.9 41.8 52.5 24.6 l 192 -160 c 15.3 -12.8 15.3 -36.4 0 -49.2 Z' /></svg>"
var backwardsvg="<svg style='width:44px;height:44px'   xmlns='http://www.w3.org/2000/svg' class='svg-inline--fa fa-backward fa-w-16 fa-2x' role='img' aria-hidden='true' viewBox='0 0 512 512' focusable='false' data-prefix='fas' data-icon='backward'><path class='' fill='#fff' d='M 11.5 280.6 l 192 160 c 20.6 17.2 52.5 2.8 52.5 -24.6 V 96 c 0 -27.4 -31.9 -41.8 -52.5 -24.6 l -192 160 c -15.3 12.8 -15.3 36.4 0 49.2 Z m 256 0 l 192 160 c 20.6 17.2 52.5 2.8 52.5 -24.6 V 96 c 0 -27.4 -31.9 -41.8 -52.5 -24.6 l -192 160 c -15.3 12.8 -15.3 36.4 0 49.2 Z' /></svg>";
var musicsvg="<svg style='width:14px;height:14px' xmlns='http://www.w3.org/2000/svg' class='svg-inline--fa fa-music fa-w-16 fa-2x' role='img' aria-hidden='true' viewBox='0 0 512 512' focusable='false' data-prefix='fas' data-icon='music'><path class='' fill='#fff' d='M 470.38 1.51 L 150.41 96 A 32 32 0 0 0 128 126.51 v 261.41 A 139 139 0 0 0 96 384 c -53 0 -96 28.66 -96 64 s 43 64 96 64 s 96 -28.66 96 -64 V 214.32 l 256 -75 v 184.61 a 138.4 138.4 0 0 0 -32 -3.93 c -53 0 -96 28.66 -96 64 s 43 64 96 64 s 96 -28.65 96 -64 V 32 a 32 32 0 0 0 -41.62 -30.49 Z' /></svg>";
var streamsvg="<svg style='width:14px;height:14px'   xmlns='http://www.w3.org/2000/svg' class='svg-inline--fa fa-stream fa-w-16 fa-2x' role='img' aria-hidden='true' viewBox='0 0 512 512' focusable='false' data-prefix='fas' data-icon='stream'><path class='' fill='#fff' d='M 16 128 h 416 c 8.84 0 16 -7.16 16 -16 V 48 c 0 -8.84 -7.16 -16 -16 -16 H 16 C 7.16 32 0 39.16 0 48 v 64 c 0 8.84 7.16 16 16 16 Z m 480 80 H 80 c -8.84 0 -16 7.16 -16 16 v 64 c 0 8.84 7.16 16 16 16 h 416 c 8.84 0 16 -7.16 16 -16 v -64 c 0 -8.84 -7.16 -16 -16 -16 Z m -64 176 H 16 c -8.84 0 -16 7.16 -16 16 v 64 c 0 8.84 7.16 16 16 16 h 416 c 8.84 0 16 -7.16 16 -16 v -64 c 0 -8.84 -7.16 -16 -16 -16 Z' /></svg>";

var aitems=new Array();
aitems[1]="<i class='fas fa-tv'></i>"
aitems[2]="<i class='fas fa-business-time'></i>";
aitems[3]="<i class='fas fa-satellite-dish'></i>";
aitems[4]="<i class='fas fa-meteor'></i>";
aitems[5]="<i class='fas fa-photo-video'></i>";
aitems[6]="<i class='fas fa-newspaper'></i>";
aitems[7]="<i class='fas fa-globe'></i>";
aitems[8]="<i class='fas fa-file-alt'></i>";
aitems[9]="<i class='fas fa-sun'></i>l"
aitems[10]="<i class='fas fa-portrait'></i>";
aitems[11]="<i class='fas fa-cloud-sun-rain'></i>";
aitems[0]="<i class='fas fa-satellite'></i>";





var svgs= new Array();


svgs[0]="<svg style='width:20px;height:20px' xmlns='http://www.w3.org/2000/svg' class='svg-inline--fa fa-tv fa-w-20 fa-2x' role='img' aria-hidden='true' viewBox='0 0 640 512' focusable='false' data-prefix='fas' data-icon='tv'><path class='' fill='currentColor' d='M 592 0 H 48 A 48 48 0 0 0 0 48 v 320 a 48 48 0 0 0 48 48 h 240 v 32 H 112 a 16 16 0 0 0 -16 16 v 32 a 16 16 0 0 0 16 16 h 416 a 16 16 0 0 0 16 -16 v -32 a 16 16 0 0 0 -16 -16 H 352 v -32 h 240 a 48 48 0 0 0 48 -48 V 48 a 48 48 0 0 0 -48 -48 Z m -16 352 H 64 V 64 h 512 Z' /></svg>";
svgs[1]="<svg style='width:20px;height:20px' xmlns='http://www.w3.org/2000/svg' class='svg-inline--fa fa-business-time fa-w-20 fa-2x' role='img' aria-hidden='true' viewBox='0 0 640 512' focusable='false' data-prefix='fas' data-icon='business-time'><path class='' fill='currentColor' d='M 496 224 c -79.59 0 -144 64.41 -144 144 s 64.41 144 144 144 s 144 -64.41 144 -144 s -64.41 -144 -144 -144 Z m 64 150.29 c 0 5.34 -4.37 9.71 -9.71 9.71 h -60.57 c -5.34 0 -9.71 -4.37 -9.71 -9.71 v -76.57 c 0 -5.34 4.37 -9.71 9.71 -9.71 h 12.57 c 5.34 0 9.71 4.37 9.71 9.71 V 352 h 38.29 c 5.34 0 9.71 4.37 9.71 9.71 v 12.58 Z M 496 192 c 5.4 0 10.72 0.33 16 0.81 V 144 c 0 -25.6 -22.4 -48 -48 -48 h -80 V 48 c 0 -25.6 -22.4 -48 -48 -48 H 176 c -25.6 0 -48 22.4 -48 48 v 48 H 48 c -25.6 0 -48 22.4 -48 48 v 80 h 395.12 c 28.6 -20.09 63.35 -32 100.88 -32 Z M 320 96 H 192 V 64 h 128 v 32 Z m 6.82 224 H 208 c -8.84 0 -16 -7.16 -16 -16 v -48 H 0 v 144 c 0 25.6 22.4 48 48 48 h 291.43 C 327.1 423.96 320 396.82 320 368 c 0 -16.66 2.48 -32.72 6.82 -48 Z' /></svg>";
svgs[2]="<svg style='width:20px;height:20px' xmlns='http://www.w3.org/2000/svg' class='svg-inline--fa fa-satellite-dish fa-w-16 fa-2x' role='img' aria-hidden='true' viewBox='0 0 512 512' focusable='false' data-prefix='fas' data-icon='satellite-dish'><path class='' fill='currentColor' d='M 305.45 462.59 c 7.39157 7.29792 6.18829 20.0966 -3.00038 25.0036 c -77.713 41.8028 -176.726 29.9105 -242.343 -35.7082 C -5.49624 386.282 -17.404 287.362 24.4138 209.554 c 4.89125 -9.095 17.6898 -10.2983 25.0032 -3.00043 L 166.229 323.367 l 27.3941 -27.3945 c -0.68759 -2.60974 -1.594 -5.00071 -1.594 -7.81361 a 32.0041 32.0041 0 1 1 32.0041 32.0046 c -2.79723 0 -5.20378 -0.89075 -7.79786 -1.594 l -27.4097 27.4102 Z M 511.976 303.067 a 16.1034 16.1034 0 0 1 -16.002 17.0024 H 463.86 a 15.9696 15.9696 0 0 1 -15.8926 -15.0021 C 440.467 175.549 336.453 70.5343 207.031 63.5333 a 15.8449 15.8449 0 0 1 -15.0019 -15.9085 V 16.0265 A 16.0939 16.0939 0 0 1 209.031 0.02425 C 372.255 8.61922 503.475 139.841 511.976 303.067 Z m -96.0122 -0.29692 a 16.2109 16.2109 0 0 1 -16.1114 17.2993 H 367.645 a 16.0686 16.0686 0 0 1 -15.8926 -14.7052 c -6.90712 -77.0109 -68.118 -138.91 -144.925 -145.224 a 15.94 15.94 0 0 1 -14.7988 -15.8929 V 112.134 a 16.134 16.134 0 0 1 17.2991 -16.096 C 319.451 104.539 407.556 192.645 415.964 302.77 Z' /></svg>";

svgs[3]="<svg style='width:20px;height:20px' xmlns='http://www.w3.org/2000/svg' class='svg-inline--fa fa-meteor fa-w-16 fa-2x' role='img' aria-hidden='true' viewBox='0 0 512 512' focusable='false' data-prefix='fas' data-icon='meteor'><path class='' fill='currentColor' d='M 511.328 20.8027 c -11.6076 38.7026 -34.3072 111.702 -61.3031 187.701 c 6.99893 2.09372 13.4042 4 18.6065 5.59368 a 16.0616 16.0616 0 0 1 9.49854 22.906 c -22.106 42.2963 -82.6905 152.795 -142.478 214.404 c -0.99984 1.09373 -1.99969 2.5 -2.99954 3.49995 A 194.83 194.83 0 1 1 57.085 179.41 c 0.99985 -1 2.40588 -2 3.49947 -3 c 61.5999 -59.9055 171.974 -120.405 214.373 -142.498 a 16.058 16.058 0 0 1 22.9027 9.49988 c 1.59351 5.09368 3.49947 11.5936 5.5929 18.5935 C 379.348 35.0056 452.431 12.3028 491.128 0.70921 A 16.1833 16.1833 0 0 1 511.328 20.8027 Z M 319.951 320.002 A 127.98 127.98 0 1 0 191.971 448 A 127.976 127.976 0 0 0 319.951 320.002 Z m -127.98 -31.9996 a 31.9951 31.9951 0 1 1 -31.9951 -31.9996 A 31.959 31.959 0 0 1 191.971 288.002 Z m 31.9951 79.999 a 15.9976 15.9976 0 1 1 -15.9976 -15.9998 A 16.0497 16.0497 0 0 1 223.966 368.001 Z' /></svg>";

svgs[4]="<svg style='width:20px;height:20px' xmlns='http://www.w3.org/2000/svg' class='svg-inline--fa fa-photo-video fa-w-20 fa-2x' role='img' aria-hidden='true' viewBox='0 0 640 512' focusable='false' data-prefix='fas' data-icon='photo-video'><path class='' fill='currentColor' d='M 608 0 H 160 a 32 32 0 0 0 -32 32 v 96 h 160 V 64 h 192 v 320 h 128 a 32 32 0 0 0 32 -32 V 32 a 32 32 0 0 0 -32 -32 Z M 232 103 a 9 9 0 0 1 -9 9 h -30 a 9 9 0 0 1 -9 -9 V 73 a 9 9 0 0 1 9 -9 h 30 a 9 9 0 0 1 9 9 Z m 352 208 a 9 9 0 0 1 -9 9 h -30 a 9 9 0 0 1 -9 -9 v -30 a 9 9 0 0 1 9 -9 h 30 a 9 9 0 0 1 9 9 Z m 0 -104 a 9 9 0 0 1 -9 9 h -30 a 9 9 0 0 1 -9 -9 v -30 a 9 9 0 0 1 9 -9 h 30 a 9 9 0 0 1 9 9 Z m 0 -104 a 9 9 0 0 1 -9 9 h -30 a 9 9 0 0 1 -9 -9 V 73 a 9 9 0 0 1 9 -9 h 30 a 9 9 0 0 1 9 9 Z m -168 57 H 32 a 32 32 0 0 0 -32 32 v 288 a 32 32 0 0 0 32 32 h 384 a 32 32 0 0 0 32 -32 V 192 a 32 32 0 0 0 -32 -32 Z M 96 224 a 32 32 0 1 1 -32 32 a 32 32 0 0 1 32 -32 Z m 288 224 H 64 v -32 l 64 -64 l 32 32 l 128 -128 l 96 96 Z' /></svg>";

svgs[5]="<svg style='width:20px;height:20px' xmlns='http://www.w3.org/2000/svg' class='svg-inline--fa fa-newspaper fa-w-18 fa-2x' role='img' aria-hidden='true' viewBox='0 0 576 512' focusable='false' data-prefix='fas' data-icon='newspaper'><path class='' fill='currentColor' d='M 552 64 H 88 c -13.255 0 -24 10.745 -24 24 v 8 H 24 c -13.255 0 -24 10.745 -24 24 v 272 c 0 30.928 25.072 56 56 56 h 472 c 26.51 0 48 -21.49 48 -48 V 88 c 0 -13.255 -10.745 -24 -24 -24 Z M 56 400 a 8 8 0 0 1 -8 -8 V 144 h 16 v 248 a 8 8 0 0 1 -8 8 Z m 236 -16 H 140 c -6.627 0 -12 -5.373 -12 -12 v -8 c 0 -6.627 5.373 -12 12 -12 h 152 c 6.627 0 12 5.373 12 12 v 8 c 0 6.627 -5.373 12 -12 12 Z m 208 0 H 348 c -6.627 0 -12 -5.373 -12 -12 v -8 c 0 -6.627 5.373 -12 12 -12 h 152 c 6.627 0 12 5.373 12 12 v 8 c 0 6.627 -5.373 12 -12 12 Z m -208 -96 H 140 c -6.627 0 -12 -5.373 -12 -12 v -8 c 0 -6.627 5.373 -12 12 -12 h 152 c 6.627 0 12 5.373 12 12 v 8 c 0 6.627 -5.373 12 -12 12 Z m 208 0 H 348 c -6.627 0 -12 -5.373 -12 -12 v -8 c 0 -6.627 5.373 -12 12 -12 h 152 c 6.627 0 12 5.373 12 12 v 8 c 0 6.627 -5.373 12 -12 12 Z m 0 -96 H 140 c -6.627 0 -12 -5.373 -12 -12 v -40 c 0 -6.627 5.373 -12 12 -12 h 360 c 6.627 0 12 5.373 12 12 v 40 c 0 6.627 -5.373 12 -12 12 Z' /></svg>";

svgs[6]="<svg style='width:20px;height:20px' xmlns='http://www.w3.org/2000/svg' class='svg-inline--fa fa-globe fa-w-16 fa-2x' role='img' aria-hidden='true' viewBox='0 0 496 512' focusable='false' data-prefix='fas' data-icon='globe'><path class='' fill='currentColor' d='M 336.5 160 C 322 70.7 287.8 8 248 8 s -74 62.7 -88.5 152 h 177 Z M 152 256 c 0 22.2 1.2 43.5 3.3 64 h 185.3 c 2.1 -20.5 3.3 -41.8 3.3 -64 s -1.2 -43.5 -3.3 -64 H 155.3 c -2.1 20.5 -3.3 41.8 -3.3 64 Z m 324.7 -96 c -28.6 -67.9 -86.5 -120.4 -158 -141.6 c 24.4 33.8 41.2 84.7 50 141.6 h 108 Z M 177.2 18.4 C 105.8 39.6 47.8 92.1 19.3 160 h 108 c 8.7 -56.9 25.5 -107.8 49.9 -141.6 Z M 487.4 192 H 372.7 c 2.1 21 3.3 42.5 3.3 64 s -1.2 43 -3.3 64 h 114.6 c 5.5 -20.5 8.6 -41.8 8.6 -64 s -3.1 -43.5 -8.5 -64 Z M 120 256 c 0 -21.5 1.2 -43 3.3 -64 H 8.6 C 3.2 212.5 0 233.8 0 256 s 3.2 43.5 8.6 64 h 114.6 c -2 -21 -3.2 -42.5 -3.2 -64 Z m 39.5 96 c 14.5 89.3 48.7 152 88.5 152 s 74 -62.7 88.5 -152 h -177 Z m 159.3 141.6 c 71.4 -21.2 129.4 -73.7 158 -141.6 h -108 c -8.8 56.9 -25.6 107.8 -50 141.6 Z M 19.3 352 c 28.6 67.9 86.5 120.4 158 141.6 c -24.4 -33.8 -41.2 -84.7 -50 -141.6 h -108 Z' /></svg>";

svgs[7]="<svg style='width:20px;height:20px' xmlns='http://www.w3.org/2000/svg' class='svg-inline--fa fa-file-alt fa-w-12 fa-2x' role='img' aria-hidden='true' viewBox='0 0 384 512' focusable='false' data-prefix='fas' data-icon='file-alt'><path class='' fill='currentColor' d='M 224 136 V 0 H 24 C 10.7 0 0 10.7 0 24 v 464 c 0 13.3 10.7 24 24 24 h 336 c 13.3 0 24 -10.7 24 -24 V 160 H 248 c -13.2 0 -24 -10.8 -24 -24 Z m 64 236 c 0 6.6 -5.4 12 -12 12 H 108 c -6.6 0 -12 -5.4 -12 -12 v -8 c 0 -6.6 5.4 -12 12 -12 h 168 c 6.6 0 12 5.4 12 12 v 8 Z m 0 -64 c 0 6.6 -5.4 12 -12 12 H 108 c -6.6 0 -12 -5.4 -12 -12 v -8 c 0 -6.6 5.4 -12 12 -12 h 168 c 6.6 0 12 5.4 12 12 v 8 Z m 0 -72 v 8 c 0 6.6 -5.4 12 -12 12 H 108 c -6.6 0 -12 -5.4 -12 -12 v -8 c 0 -6.6 5.4 -12 12 -12 h 168 c 6.6 0 12 5.4 12 12 Z m 96 -114.1 v 6.1 H 256 V 0 h 6.1 c 6.4 0 12.5 2.5 17 7 l 97.9 98 c 4.5 4.5 7 10.6 7 16.9 Z' /></svg>";

svgs[8]="<svg style='width:20px;height:20px' xmlns='http://www.w3.org/2000/svg' class='svg-inline--fa fa-sun fa-w-16 fa-2x' role='img' aria-hidden='true' viewBox='0 0 512 512' focusable='false' data-prefix='fas' data-icon='sun'><path class='' fill='currentColor' d='M 256 160 c -52.9 0 -96 43.1 -96 96 s 43.1 96 96 96 s 96 -43.1 96 -96 s -43.1 -96 -96 -96 Z m 246.4 80.5 l -94.7 -47.3 l 33.5 -100.4 c 4.5 -13.6 -8.4 -26.5 -21.9 -21.9 l -100.4 33.5 l -47.4 -94.8 c -6.4 -12.8 -24.6 -12.8 -31 0 l -47.3 94.7 L 92.7 70.8 c -13.6 -4.5 -26.5 8.4 -21.9 21.9 l 33.5 100.4 l -94.7 47.4 c -12.8 6.4 -12.8 24.6 0 31 l 94.7 47.3 l -33.5 100.5 c -4.5 13.6 8.4 26.5 21.9 21.9 l 100.4 -33.5 l 47.3 94.7 c 6.4 12.8 24.6 12.8 31 0 l 47.3 -94.7 l 100.4 33.5 c 13.6 4.5 26.5 -8.4 21.9 -21.9 l -33.5 -100.4 l 94.7 -47.3 c 13 -6.5 13 -24.7 0.2 -31.1 Z m -155.9 106 c -49.9 49.9 -131.1 49.9 -181 0 c -49.9 -49.9 -49.9 -131.1 0 -181 c 49.9 -49.9 131.1 -49.9 181 0 c 49.9 49.9 49.9 131.1 0 181 Z' /></svg>";

svgs[9]="<svg style='width:20px;height:20px' xmlns='http://www.w3.org/2000/svg' class='svg-inline--fa fa-portrait fa-w-12 fa-2x' role='img' aria-hidden='true' viewBox='0 0 384 512' focusable='false' data-prefix='fas' data-icon='portrait'><path class='' fill='currentColor' d='M 336 0 H 48 C 21.5 0 0 21.5 0 48 v 416 c 0 26.5 21.5 48 48 48 h 288 c 26.5 0 48 -21.5 48 -48 V 48 c 0 -26.5 -21.5 -48 -48 -48 Z M 192 128 c 35.3 0 64 28.7 64 64 s -28.7 64 -64 64 s -64 -28.7 -64 -64 s 28.7 -64 64 -64 Z m 112 236.8 c 0 10.6 -10 19.2 -22.4 19.2 H 102.4 C 90 384 80 375.4 80 364.8 v -19.2 c 0 -31.8 30.1 -57.6 67.2 -57.6 h 5 c 12.3 5.1 25.7 8 39.8 8 s 27.6 -2.9 39.8 -8 h 5 c 37.1 0 67.2 25.8 67.2 57.6 v 19.2 Z' /></svg>";

svgs[10]="<svg style='width:20px;height:20px' xmlns='http://www.w3.org/2000/svg' class='svg-inline--fa fa-cloud-sun-rain fa-w-18 fa-2x' role='img' aria-hidden='true' viewBox='0 0 576 512' focusable='false' data-prefix='fas' data-icon='cloud-sun-rain'><path class='' fill='currentColor' d='M 510.5 225.5 c -6.9 -37.2 -39.3 -65.5 -78.5 -65.5 c -12.3 0 -23.9 3 -34.3 8 c -17.4 -24.1 -45.6 -40 -77.7 -40 c -53 0 -96 43 -96 96 c 0 0.5 0.2 1.1 0.2 1.6 C 187.6 233 160 265.2 160 304 c 0 44.2 35.8 80 80 80 h 256 c 44.2 0 80 -35.8 80 -80 c 0 -39.2 -28.2 -71.7 -65.5 -78.5 Z m -386.4 34.4 c -37.4 -37.4 -37.4 -98.3 0 -135.8 c 34.6 -34.6 89.1 -36.8 126.7 -7.4 c 20 -12.9 43.6 -20.7 69.2 -20.7 c 0.7 0 1.3 0.2 2 0.2 l 8.9 -26.7 c 3.4 -10.2 -6.3 -19.8 -16.5 -16.4 l -75.3 25.1 l -35.5 -71 c -4.8 -9.6 -18.5 -9.6 -23.3 0 l -35.5 71 l -75.3 -25.1 c -10.2 -3.4 -19.8 6.3 -16.4 16.5 l 25.1 75.3 l -71 35.5 c -9.6 4.8 -9.6 18.5 0 23.3 l 71 35.5 l -25.1 75.3 c -3.4 10.2 6.3 19.8 16.5 16.5 l 59.2 -19.7 c -0.2 -2.4 -0.7 -4.7 -0.7 -7.2 c 0 -12.5 2.3 -24.5 6.2 -35.9 c -3.6 -2.7 -7.1 -5.2 -10.2 -8.3 Z m 69.8 -58 c 4.3 -24.5 15.8 -46.4 31.9 -64 c -9.8 -6.2 -21.4 -9.9 -33.8 -9.9 c -35.3 0 -64 28.7 -64 64 c 0 18.7 8.2 35.4 21.1 47.1 c 11.3 -15.9 26.6 -28.9 44.8 -37.2 Z m 330.6 216.2 c -7.6 -4.3 -17.4 -1.8 -21.8 6 l -36.6 64 c -4.4 7.7 -1.7 17.4 6 21.8 c 2.5 1.4 5.2 2.1 7.9 2.1 c 5.5 0 10.9 -2.9 13.9 -8.1 l 36.6 -64 c 4.3 -7.7 1.7 -17.4 -6 -21.8 Z m -96 0 c -7.6 -4.3 -17.4 -1.8 -21.8 6 l -36.6 64 c -4.4 7.7 -1.7 17.4 6 21.8 c 2.5 1.4 5.2 2.1 7.9 2.1 c 5.5 0 10.9 -2.9 13.9 -8.1 l 36.6 -64 c 4.3 -7.7 1.7 -17.4 -6 -21.8 Z m -96 0 c -7.6 -4.3 -17.4 -1.8 -21.8 6 l -36.6 64 c -4.4 7.7 -1.7 17.4 6 21.8 c 2.5 1.4 5.2 2.1 7.9 2.1 c 5.5 0 10.9 -2.9 13.9 -8.1 l 36.6 -64 c 4.3 -7.7 1.7 -17.4 -6 -21.8 Z m -96 0 c -7.6 -4.3 -17.4 -1.8 -21.8 6 l -36.6 64 c -4.4 7.7 -1.7 17.4 6 21.8 c 2.5 1.4 5.2 2.1 7.9 2.1 c 5.5 0 10.9 -2.9 13.9 -8.1 l 36.6 -64 c 4.3 -7.7 1.7 -17.4 -6 -21.8 Z' /></svg>";

svgs[11]="<svg style='width:20px;height:20px' xmlns='http://www.w3.org/2000/svg' class='svg-inline--fa fa-satellite fa-w-16 fa-2x' role='img' aria-hidden='true' viewBox='0 0 512 512' focusable='false' data-prefix='fas' data-icon='satellite'><path class='' fill='currentColor' d='M 502.61 310.042 l -96.7039 96.7162 a 31.8815 31.8815 0 0 1 -45.0076 0 L 280.572 326.341 l -9.89231 9.90759 a 190.563 190.563 0 0 1 -5.40716 168.523 c -4.50077 8.50115 -16.3934 9.59505 -23.2071 2.79725 L 134.547 400.054 l -17.7999 17.7993 c 0.70324 2.60972 1.60965 5.00067 1.60965 7.79793 a 32.0054 32.0054 0 1 1 -32.0054 -32.0043 c 2.79735 0 5.18838 0.90637 7.7982 1.60959 l 17.7999 -17.7993 L 4.43129 269.943 c -6.798 -6.81342 -5.70409 -18.6119 2.79735 -23.2063 a 190.582 190.582 0 0 1 168.529 -5.407 l 9.79854 -9.79821 l -80.3105 -80.4172 a 32.002 32.002 0 0 1 0 -45.0999 L 201.965 9.29814 A 31.6264 31.6264 0 0 1 224.469 0 a 31.9995 31.9995 0 0 1 22.5976 9.29814 l 80.3261 80.3078 l 47.805 -47.8971 a 33.6075 33.6075 0 0 1 47.5081 0 l 47.5081 47.5065 a 33.6331 33.6331 0 0 1 0 47.5064 l -47.805 47.8971 L 502.719 265.036 A 31.7894 31.7894 0 0 1 502.61 310.042 Z M 219.562 197.433 l 73.8251 -73.8225 l -68.918 -68.9 l -73.8094 73.8069 Z m 237.744 90.106 l -68.9023 -68.9156 l -73.825 73.8225 l 68.918 68.9 Z' /></svg>";




var itel=0;





                        itel++;
             document.getElementById('a0').innerHTML="<iframe onload='fsas()' src='"+items[(itel%items.length)]+"' style='width:100%;height:100%;position:fixed;top:0%;left:0%' frameborder=0 border=0 scrollbars='no' scrolling='no' id='ifififif'></iframe>";


        document.getElementById('tti').innerHTML=svgs[(itel%svgs.length)];
document.getElementById('rtti').innerHTML=svgs[(itel%svgs.length)];
document.getElementById('uti').innerHTML=svgs[(itel%svgs.length)];
document.getElementById('ruti').innerHTML=svgs[(itel%svgs.length)];


rgw=svgs[(itel%svgs.length)];
dgf=rgw.replace("currentColor", "#fff");
document.getElementById('utti').innerHTML=dgf;


var telav=0;

function dofr(){
	if(telav==4 ){
		if(document.getElementById('ifrr'+((rrr+1)%2))){
			document.getElementById('a0').style.display='none';
			document.getElementById('a1'+(rrr%2)).innerHTML="";	
			document.getElementById('ifrr'+((rrr+1)%2)).style.opacity=1;			
		}
	}
	telav++;
	setTimeout("dofr()",4200);
}
var rrr=0;
function loops(){
	ds=title;
	axa=ds.split('%');
	if(axa.length>1){
		rechts=""+axa[1];
		ni=parseInt(rechts);
		if(ni>oldnr){
			oldnr=ni;
			cbn=(itel%14);
			if(!(cbn==8 || cbn==0)){
				document.getElementById('rstuv').style.display='';				
			}
			else{
				 document.getElementById('rstuv').style.display='none';
			}
			if((itel%14)==1){
				runVids(3);
			}
                       if((itel%14)==2){
                                runVids(0);
                        }
                       if((itel%14)==3){
                                runVids(4);
                        }
                       if((itel%14)==4){
                                runVids(5);
                        }
		 if((itel%14)==5){
			akio4();			
		}
			itel++;
			telav=0;		
			document.getElementById('a1'+(rrr%2)).innerHTML="<iframe id='ifrr"+(rrr%2)+"' onload='jo()'  src='"+items[(itel%items.length)]+"' style='opacity:0;width:100%;height:100%;position:fixed;top:0pz;left:0%;overflow:hidden' frameborder=0 border=0 scrolling='no' scrolbars='no'></iframe>";






			rrr++;

        document.getElementById('tti').innerHTML=svgs[(itel%svgs.length)];
document.getElementById('rtti').innerHTML=svgs[(itel%svgs.length)];
document.getElementById('uti').innerHTML=svgs[(itel%svgs.length)];
document.getElementById('ruti').innerHTML=svgs[(itel%svgs.length)];
rgw=svgs[(itel%svgs.length)];
dgf=rgw.replace("currentColor", "#fff");
document.getElementById('utti').innerHTML=dgf;
			if((cntcnt%items.length)==8 ){
				akio();
			}			
		}
		if(ni>0){
			document.getElementById('a10').style.display='';
			 document.getElementById('a11').style.display='';
		}
	}
	setTimeout("loops()", 2000);
}
var nonp="Stars Universe|Galaxy Stars|Stars Cosmos"; //"3x3 Basketball|Acrobatic Gymnastics|Alpine Skiing|Archery|Artistic Gymnastics|Artistic Swimming|Athletics|Badminton|Baseball|Basketball|Beach Handball|Beach Volleyball|Biathlon|BMX|Bobsleigh|Boxing|Breaking|Canoe|Cross Country Skiing|Curling|Diving|Equestrian Dressage|Equestrian Eventing|Equestrian Jumping|Fencing|Figure Skating|Football|Freestyle Skiing|Futsal|Golf|Handball|Hockey|Ice Hockey|Judo|Karate|Luge|Modern Pentathlon|Mountain Bike|Nordic Combined|Paralympic|Rhythmic Gymnastics|Road Cycling|Roller Speed Skating|Rowing|Rugby|Sailing|Shooting|Short Track Speed Skating|Skateboarding|Skeleton|Ski Jumping|Snowboarding|Softball|Speed skating|Sport Climbing|Surfing|Swimming|Table Tennis|Taekwondo|Tennis|Track Cycling|Trampoline|Triathlon|Volleyball|Water polo|Weightlifting|Wrestling";
var xmlhttpR = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
var xmlhttpo = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
function triggerber() {
        if ((xmlhttpo.readyState == 4) && (xmlhttpo.status == 200)) {	
	}
}
function triggerb() {
        if ((xmlhttpR.readyState == 4) && (xmlhttpR.status == 200)){
		dioee=  xmlhttpR.responseText;
	        var datacc = "data="+dioee;
	        xmlhttpo = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
		xmlhttpo.onreadystatechange=triggerber;
        	xmlhttpo.open("POST","ximconst.php",true);
        	xmlhttpo.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        	xmlhttpo.send(datacc);
	}
}
var ik_player;
function getdataRe(dest) {
        xmlhttpR = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");      
        xmlhttpR.onreadystatechange = triggerb;
        xmlhttpR.open("GET", dest, true);
        xmlhttpR.send(null);
}
var xmlhttpR0= window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
var xmlhttpR0t= window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
var xmlhttpR1= window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
var xmlhttpR2= window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
var xmlhttpR3= window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
var xmlhttpR3t= window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
var xmlhttpR3a= window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
var xmlhttpR3d= window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
var xmlhttpR2a= window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
var xmlhttpR3a= window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
var xmlhttpR0m= window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
function pRx(){
        if (xmlhttpR3.readyState==4 && xmlhttpR3.status==200){
        }
}
function pRxa(){
        if (xmlhttpR3a.readyState==4 && xmlhttpR3a.status==200){
        }
}
function pR0(){
	if (xmlhttpR0.readyState==4 && xmlhttpR0.status==200){
	}
}
function pR0t(){
        if (xmlhttpR0t.readyState==4 && xmlhttpR0t.status==200){
        }
}
function pR0m(){
        if (xmlhttpR0m.readyState==4 && xmlhttpR0m.status==200){
        }
}
function pR1(){
        if (xmlhttpR1.readyState==4 && xmlhttpR1.status==200){
        }
}
function pR2(){
        if (xmlhttpR2.readyState==4 && xmlhttpR2.status==200){
        }
}
function pR2a(){
        if (xmlhttpR2a.readyState==4 && xmlhttpR2a.status==200){
        }
}
function pRxd(){
        if (xmlhttpR3d.readyState==4 && xmlhttpR3d.status==200){
        }
}
function pR3Ka(){
        if (xmlhttpR3a.readyState==4 && xmlhttpR3a.status==200){
        }
}
function pR3K(){
        if (xmlhttpR3.readyState==4 && xmlhttpR3.status==200){
        }
}
function runVids(intt){
	if(intt==0){
		xmlhttpR0= window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
		xmlhttpR0.onreadystatechange=pR0;
		xmlhttpR0.open("GET", "thr.php?f=se0.txt&v=1&t="+Math.random());
		xmlhttpR0.send(null);
	}
	if(intt==3){
		xmlhttpR2a= window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
		xmlhttpR2a.onreadystatechange=pR2a;	         
		xmlhttpR2a.open("GET", "thr.php?f=am0.txt&v=1&t="+Math.random());
		xmlhttpR2a.send(null);
	}
	if(intt==4){
        	xmlhttpR0t= window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
		xmlhttpR0t.onreadystatechange=pR0t;
		xmlhttpR0t.open("GET", "https://freeshell.de/~trans1/to0.php", true);
		xmlhttpR0t.open("GET", "thr.php?f=to0.txt&v=1&t="+Math.random());
		xmlhttpR0t.send(null);
	}
	if(intt==5){
        	xmlhttpR0m= window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
	        xmlhttpR0m.onreadystatechange=pR0m;
		xmlhttpR0m.open("GET", "thr.php?f=me0.txt&v=1&t="+Math.random());
		xmlhttpR0m.send(null);
	}
}
function stopVids(){
	xmlhttpR3= window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
 	xmlhttpR3.onreadystatechange=pR3K;
        xmlhttpR3.open("GET", "https://freeshell.de/~trans1/seaoff.php", true);
        xmlhttpR3.send(null);
}
var  xmlhttpS= window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
var kickklaar=false;
function pS3(){
        if (xmlhttpS.readyState==4 && xmlhttpS.status==200){
        	fdghhj=xmlhttpS.responseText;
		ghkj=fdghhj.split(1);
		if(ghkj.length>1 ){
			document.getElementById('pngpng').style.display='';
			kickklaar=true;
			document.getElementById('wai').innerHTML='';
			document.getElementById('wai').style.display='none';
			items[1]="indexclclbxz.html";
		}
	}
}

function klaarkick(){
        xmlhttpS= window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
        xmlhttpS.onreadystatechange=pS3;
        xmlhttpS.open("GET", "getRandos.php?randos="+randos+"&h="+Math.random(), true);
        xmlhttpS.send(null);
	if(kickklaar==false){
		setTimeout("klaarkick()", 6000);
	}
}
function stopVidt(){
        xmlhttpR3t= window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
        xmlhttpR3t.onreadystatechange=pR3Kt;
        xmlhttpR3t.open("GET", "https://freeshell.de/~trans1/tooff.php", true);
        xmlhttpR3t.send(null);
}
function stopVidsa(){
        xmlhttpR3a= window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
        xmlhttpR3a.onreadystatechange=pR3Ka;
         xmlhttpR3a.open("GET", "https://freeshell.de/~trans1/amoff.php", true);
        xmlhttpR3a.send(null);
}
function getdataReadyr(urf){
        xmlhttpR3d= window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
        xmlhttpR3d.onreadystatechange=pRxd;
        xmlhttpR3d.open("GET", urf, true);
        xmlhttpR3d.send(null);
}
function akio(){
	getdataRe("https://maghreb.sourceforge.io/uploads/randimg.php?mc"+Math.random());
}
function akio2(){
        ds=nonp.split('|');
        sff=ds[Math.floor(ds.length*Math.random())];
        getdataReady("https://freeshell.de/~trans1/ond00.php?ery6uutthtx="+Math.random());
}
function akio3(){
        getdataReady("https://freeshell.de/~trans1/java/src/ds.php?ery6uutthtx="+Math.random());
}

function akio4(){
}
function akios(){
	ds=nonp.split('|');
	sff=ds[Math.floor(ds.length*Math.random())];
	//getdataReady("https://www.freeshell.de/~trans1/SearchYouTube.php?md=6&p="+encodeURIComponent(sff)+"&fn=sportss.mp4&xx="+Math.random());
}





</script>
<table style='position:fixed;left:9%;top:85%;height:10%;display:none'><tr><td valign="middle" align="left"><a onclick='voriges()'><span   id='vor'></span></a></td>
</tr>
</table>
<!--table style='position:fixed;right:10%;top:85%;height:10%;display:none'><tr>
<td align="left" valign="middle"><a onclick='volgendes()'> <span   id='vol'>
<script>document.write(forwardsvg);</script>
</span></a></td></tr></table-->
<table style='position:fixed;left:1%;top:5%;width:7%;height:3%;background-color:red;border-radius: 5px;border:0' cellspacing=0 cellpadding=0><tr>
<td align='center' valign='middle' id='textu'> </td></tr></table>

<script>
function gett(){
te=title;
qs=te.split('%');
if(document.getElementById("guestbook").contentWindow.mpccc<2){
document.getElementById('vor').style.display='none';
}
else{
document.getElementById('vor').style.display='';
}
if(document.getElementById("guestbook").contentWindow.mpccc>=(document.getElementById("guestbook").contentWindow.injuk-0) ){
document.getElementById('vol').style.display='none';
}
else{
document.getElementById('vol').style.display='';
}
setTimeout('gett()', 1000);
}
//xmlhttpReady1 = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
//xmlhttpReady1.open("GET", "https://freeshell.de/~trans1/quootes.php", true);
// xmlhttpReady1.send(null);
</script>

<img style="display: none;opacity: 0.125; position: fixed; left: 90%; top: 10%; width: 10%; height:80%" id="rstuv" src="white.jpg">
<img style="dispdlay: none;opacity: 0.333; position: fixed; left: 0%; top: 10%; width: 10%; height:80%" id="rstuvr" src="white.jpg">

<iframe frameborder=0 border=0 scrolling='no' scrollbars='no'
 style='width:50.5%;height:43%;position:fixed;left:25.5%;top:28%; border-right-style: solid;  border-right-width: 10px;
   border-right-color: #303030; border-left-style: solid;opacity:.9;  border-left-width: 10px;   border-left-color: #303030;' src='waiting.html' id='wai'></iframe>

<table style='position:fixed;left:90%;bottom:10%;width:10%;height:3%;border:0' cellspacing=0 cellpadding=0><tr>
<td align='center' valign='middle' id='textud'> 
</td></tr></table>
<div style='position:fixed;left:90%;top:0;width:10%;height:100%;display:none' id='mv'></div>

<table style='width:100%;height:100%;position:fixed;top:0;left:0' border=0 id='gonxx'><tr><td align='center' valign='middle'>
<img id='pngpng' style="display:none;width:150px;height:150px" onclick="volgendes()" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAO0AAADrCAMAAACyyuGgAAAAUVBMVEUBAQECAgIAAAABAQEAAAABAQEAAAACAgIBAQEAAAACAgIAAAD///8AAAAFBQUAAABHcEwAAAD5+fnCwsLe3t7t7e0EBAQAAACdnZ1cXFyBgYFE3FhZAAAAG3RSTlMZLgRfKEU0IQxQWD7+ZToSAGLtnsDahXCHe1MXaqBQAAAfyElEQVR42uyci3KzOBKFBcaAL1hrLmXw+z/ogqSWulstMLaTyuyOMv8tVZP48+nTFyFF/ef/aal/af+l/XDl6+t/hTbfs/7BtPm76x9HmySp2cfvEqtfIUV082+w3D+T3H+fVuYMhA6TrzyB/JdpJdSYLL1E5L9JK2hKlyarDh8C8g8Bq59g5agGSjPcaK0h/yXadPRGSAo+3IrEBmPnPwGsvsrKUGuvp0NTeGn4hMHHzAmF/wAtYZVEtUias0rLE2us8Bd51bdYnaw5EZWwVImlKqw88GpSm77Eq77FmvP4Na9er2GKzEDMgL/Dq74Ww1ZVLipFKpaV+Y9lVQVhhneIevhb+qrvxDCYtQZUjUiL57Pr+n4Y2mt7Xdb85zD0fdc9nxafQEPmgqz1RX3V94IYUHUQVc2c/XBdW0Pfjdm8rNAY2CrsUzTR91dpRV2drF7VTdCw2r57FgKwU1jy76/RSrqiYmNR+/a6bw290TgLxLgsfUdf9ZGwXFfLmnXD9b3VdxUBxnU41vcXaGNhjV+9rKrrrx+sdmAKu85Ejuefpo0MS1jV/gCWTDx7mPOi/PwBrnoXFrHaIJ77g+dw/c5yAmc4oOVy9IO0ctEBu3bt9Xur7RbYrGC8H7pXvQmbE9ZZ2K+yOt7SOpjy6g/kVR9GsckhX9aV6EtwZff+BC2DDUWn0j/CanjHsjQRvR7O36cVhDXJsvpebhLz1dPEc9DXpOd3cdW7+cmWnTkR99efXf2tLH1+/tC86i1hQ9UZ2+tPr3YsZt4iI/a17t2Lq3bB1p7WlZ3h+hurf5Y2nj+NZvWesj+YiWV5cTV6P1epvbC+yFZqt2PbeYg3q23fcW9pcRV17x5c9YaydoR9vv6K26HrxulwaPy6H87T2HVDuyM534K8vpXciaveCeM9NbbvxvOM93g0fD3m1UzTyzPTGORdeLXar67aF8YQxVX3kh7dJHHe3fJiT68NxB2rRXq3uq/RIs9ay77w6oZZ0wX07hA9JF2NYX4cxle+5M3xkk4S435GG3vWWHbYVvWxoN6ZnAf3+8HD+r89msO2wsPzUpbYvFHh/YRWhFWb+amfEpoe5nU+4HU/NPOHVXl28ZaH26eVF+GyYH6fVhoD5r54y15nr2dDQRdU/gHQzsfnbgv3YqMZctUuXLXXs1vKdhC7IYA96Nn/wguQ74vOh+bRbTQawbyq2uldtSOMjbLjOuuDZ15Lurkc8hLWTbPOa4K5dPtW+7y7RRt5dtWvZ1Jh7l5SWKfzia35U5737Hib5rDq3/Fyuy2dZBHUhS7ybVqotC97dpjmQhKapTsRNebEyEFiq/Bcgoc17x5vN0jNJFVtiateiePg2bUgDo2hybKelYEel/+O5r/l7xEzAK+F85yqbGoOqUrjJwl7af2Mhz27kqCG6YFZka4Au/DxZT4l8s75fEXeRd2SzIDWu1vWVVumzcGzs0fazUzcuO7BuhWDCqwUHBMvuM1adh6OTl2XmXli3kfLTbs+urdT8wi0QVeLGkgvxwtf8+e8ylhgI+99atO4N5OqiuDdehtXvRTH6+PscG4EVierQ53BbubX/AHL/MtBk6j2wE2TfIf7S8jMbERI46q1OHZhrNennu5BhSWyOtKLpSzth13uXws2EFNek63S33bBBe/G1n2ddlc6HkPV4awnYL1hyoz8MVN7ZGxhx7uSm58R7qa4atu0Rtks5aARlA3CIl0NKYBmtuPDy3zOIxNeH81TKlscF++argqV3dUypDaaqI2Btp0eorDAavxpSc0c7h7dmY/wbwNd3rDCmDeF2x+dd10P6RNzvYMWSbtl2nYi+YmwWllvAAonhorK7fubv5kjNYbaaGx5XZJ2vHNyTqXm2bqXsix5LKetq9IpyktbpUyLYUMUg10xKj8bVfg/C3+Iykoc9A3yNinc59FZN5Os+wotzcf20Wwijidk2RDEJ29Xt+eNTsqEk2/01FjlgBelkL5e3gTucHJdBo3lpLgybRjg7bPZdWV9foIotqymGBJWfLqPH5bDwCXmdbiJWD4evXXtPATT32u0Qj5+prJxrCyKYdj9pcdj5IVOBpqk5XkX967iThdXh2xi3khUaqXUulkgkY9HZlksrHvqyk4+wVFkJR7M9goD7o26d0x0kEchU6V2XFVS2jkmTBgX42oHBcmYsNqNMqaqVokj9hS4An1BXoM7zxmyn0aI5cxbNy2u2pZWTBBDQ8PYKetgrV/JAS+1fqlAaayw5UXyLsF8HxI9hkvMvAwJuGrFte6ojPg9HhHs0X3bEj1Lr2JUfkfEHkRGwJ63zJC8xrzi+96dlve4ZOLKDZVKJWQnbaLUTsGzARYJK7NGt2Gic/mIF0ezzVWJTDWBuFmBxHVVaI1WkLZf2VoMynrLhkTMQ5he/TH1PI+Jw8FQm64sLqQqMc76kwsqmHXTuEqQdrP69A+urP2GN/cEvUB3BRKsKJOwU7/hyK8tvkjduzjuttORxLImRTdNG4Z4vSotjWOvLHrgWMUxrAlr2Agid6Uo79JtGF4ovIezPB34HqNaF1etSFslpB1hExVgIZT8yUR2tYncYMvRTZAgb85PsJtvb5LVkpt9JRLL4XTy1sVVKBZXybXWSVv0YvF5OGVDgrqBZYNjUSKu40B2yubooipcsAlnHSBZ2UpkvTuknHspw6hrW4y45qpUQrbfrE3GceigTByRx+Zx0XHXZvgl1JyITE9327cbcG+AK+Xl1uYN3FG5XZsNWiptl0xRpIOCOSQc4Ip7Cbi66MUN8uL7Uzk9G+tyVYbU7eXhAOGGWahO00bSFlW6r7BxHGDx8R5/+WHoYmKscM5vrtVUX2/eEgdzmxT3RsWNOwy1Ju2YLLUhQ+HSjs/VLqu9Ds/onmaN7ulFuLnX1596CIXX1SEp4MbTS+KqNdcKGaFlYw8pdSyK89YcHtDCtUR8y4fw1vHxHVDXtRliAzmAc1EVEuZctSLtMy3tncEW9Myl19YY3Z1i1vheIvZwUl44c+dSFeB2Yvt4isXNubhKqj/mIK44DxjXRhmKnUAk2ppT1fTWbbiX6KtiWt7ljTeZOVhXEreLnSv0Uyrae4NJryjahLS4h4JvUETCem1NOFtrYGR8jlySF2ZsUNc1VUdZ3PYUOzfup5TUR9mXJgUyH99hkC5UJdSdFp/9iS9islsgtZCbNUpVLjEviUrsp1jN1YK4KgpkL22feHAJpj0S02JHQrtLgqNX8dVTemlNUtenTGLdXuqnnLioCEVpCtPWOc5RUiBPDvYQpKVP2TS6V60p7WzfAt9LVMI1gTqlrusywLqTGMr4BdEdKk6LBlubo6SMPLhSK5lWK9okLrHaRkfZqowCa2ZfGs4cF+ah02lIhfLSLds5V6u45Ko4kF2D2onDj3OtGWkvKCmAC8PPQVAskt0p8gzdelEVlRf9MJOaqKuDda24o5iVaRGyzTIJZcWSlPnS5o0c5GcDuNQu0hZopmTSivt33bMspEtNdFaow3wEm58olsVQHs7L6Ilek45DWTHb1jYHFlUmJAJffXxfgRIgxCPAVjLtbN/wIIxWaebfmu+jWFy7LyfkKecuM42hkitoG2XkbJQeDtxJQmYZQeNp3HyVNnWWFx7lFtKlxJCkyKNG2Lqx4kov7ww1kZZcJK6KAtl1psKbd7i7aQCkxXsjUDnR3oNq05dA/CMxy0uv2OJ4Rhv5NlFZcSfpNOnJb6JAxLGKq2hK9gmhGMSMnJZW1/Ta5vLa2rVz5GTnWbRv2KDziWr+H1wVGiTj+n7K72FACuC0wbbmq0qtBU/IrG1hGw9qjXa2rzmgQK69iPbNubiloe1E40qhHEUyktYaRKq204q0dO8fmr2Nn/0wlqCvfKcY/Vw1JK5Ly5NYcVnHw2uQCtKGajsHcif2yGGsdT1jyPR+l1j7waXaPKP+dI95qX1rtruBN/NDWpaNe4LtOLGdCtrW2LZZL9UfLm2BqrjbbAJtzQvbvkTTPYUNPNQ7wx8aWrzMp2XpFfJBSIXnfUIk1yCtEITd/U46i/gxEwSdgkz3wpWhFg4bc97wQ5fIk3PTUBltO2EwsOIGITSruETbUNfKVnoUjzoLOO0QxuY659Uie+mC1HIxgu68a+peYlxbcxdcoeLauEMmc8al2pIm2SSpm5SkcLEVEh89KVi8pq2vvtBtKMjONY1nL67LU5cpRetrULyBoSTbZtlT2n4LtiVvn9+Xr2mbV5Yv39LrnhfIzmR8jFK97zBmqPirT+d4MiAVV9GU7LwhpOSBSlvS8hM2k1zILedjyh33GrtLaDbYJUxWg3wRGsTe8XSMjVtvaCukgAfKyEcayOEZB3wNZSJuz11kW33ZJUxUi3QNZRyyci+UIBzKbAOD+tZ9weXdK4UuuaPbUVIg57gbW5q8fbds+2dJcDXDDXnK0gqKnENStnOQDlmZRjLeAip7aQAits0gD+Bdf7KPtMO3Yfbl19Z0ZNwCGoxRKLhU24oPfY6W2DaTyu0k2xYZg2qbvUFrmueM4eqaPRiCUB6FuUCuGFGWIrOt5Ljp3KBGigeyH8/Itsob1+qX2ZddStRstoI0FdeN4X4+szQVuimgpQPQnJFLwXFTw21bkIyMva/cQ/W3fojA8gMQ/CnNgKtpgzGHclxw21TsQSgrMSULr/PQNKTaFvGOfE0CZO543vyRCfZnxLHLEWhutpF8ucS0BxR8xX95uxJlR20gCAjb4IMbG/z/HxpA11wS2H6bl1SqtlLldb/RjEZzdOO4AtGuX9iF5OXT+FcA7RCWdheZu7LNh6yB/Uvb3g0dD9gnrmFNxDuulEzhZxANygm5gIxZQmhdhwAFAT8K5N+Myze6fc/9Mb5TPcHhznKNuySViFZdWf1ia1sz2/q7I5XQdiwkgwBf+Go3uICq6hfyj/ENS16A2dU1SYTUUfyGdchvXe1HtG0kJMNxHPMrS39De7+/E2hccJIv+hl0C57k4BUE/RbcHYJt3XPvBkMy3MABH/JTlDKh+SIZFwZl0bZXlikX3G9BTyQN+a21bSW7LXwi6+/zPdpuuuS5Hyf3LQhnj7NoW3UVml/Ub6HL7aK92XI8mW5AH/KTbU07AacYzLZylLrChABduCS78L85wePWNVM3+IY+Ctg2Q7+yb9EOFRqeZ7a96GnPU+C+xccvcQlBwLbiTTm3wesW9FxdqFs+5fYd2mE2jQi8flnDCbnNtm8R7VVKpkiUAvn88gpPq1HKHGm3yzxuYY8Z+O139203lSc+UlDjmKxPjpAnC9keSpStbWF5dfmLxj3b5jnpouFLO//uvu16pa6oygcdt8aFx0lEC+7bNOS32uW0bdeTLLxvdeJIUykAllzaX/jtOkJ5dY1Jt+OTUL/Vny6+b1Gi7P2WxGT8KBDQ9jiVYvVa4dL+EO2wNsMVynTzgN+uJ0eqJrkmla5RB2Oyt+2GVqpLkcrFnt9+eN928/O1VqxJdYScZGDbSrDIQx3xW/qYTyWfEGyb4MTxh/t2eq5MYg7tCYws1gG/FWqOD9lvt+lv+b5N17eaVE/WflveWC5V/Oy3/fP53IjTnG3Bbl7CYrKeaZVuyWBMjuVSN6mhKcbkIuy3h+/b8fnUaB9tS9P64H0rGOR+NQZhMTl834YO4WyT0FPlyrV/cd8uDmssS902xabFMVkIyXclhJbdXGoNAUKPD+bJuFHwy307acNit0WTxixPzgOBdGy/zJOFgDc+4M5EnvOduS/8tn+aH2Ra+20DbyCd3Er925ane4JtM2pb4TfXKXQXmsrAT+/b4SmAhTEqibxvpVG9g7aFZsnlJHRx3GukFE9awAfuW+2wHuxDwduSxahiN0jNV7Fyxius0CzbIZTGGhTsy6d0uI7VpXZqjtMzANYGhnhdSpqpUYFvmEm1iwK+lcdAJZ5WBgqh5mjDZnfAYQWwlI9FqjkK3YxRKSWcvkK4gWwy5aa8e7HGdY0kykWGpkJjfjs8w2BPCKxrFuy7ba+EylmsV+DqyedKGiRU5u5m/dECx2STkd3GXYc1Fy2ZeUbnWOoVpOcpFqRo6UKqOcKgLFUG1vbo1c+z0/4o2RML94GmJ7EsWhyrUJevlvtAZ2nw7IpCMnoCQb+lyZQu147hcm3FgrJrztcwI+t2HFZjBW8Batlwj+8uuq0C123Or1upW21GJ3sxKtMwBYlwin3bDrOM1c1OVoGGJuzNL589xdz2BPJOuTcP6oWm1S/uFTjHTckTwy1Ywly2izjsy0Qnn1OIYNFsrHdbaTD+IYZkVxWlti3g1IrUZlkTDDBcdyGPvr1JhOm1YdSB6YUNewLr2YExE/DJgiU6RUOyu4CyQpoyQTXW203aB+J9Ftf4gvOXkm372aEEdlWYF0RWYWAzNdI+0Is2M0g3ndkWvQtO0q5XIL8AQzU+lqB5qWF+eLCvh8NKwhNefywC81LSsM7ctqFq8u4sXOgo9wrsKuB2MNlnWU/I6KvECjC7v15wr6hEVBkX2bJ4Fk7a43tsS1mle5Lm0hArmIUjD5iblE510lEGfB1w2NTNOXb9RhjcKs1bClgfAeFLeiaGJcwnMEmWzNBKeSNdkrEzrA0YaLdhSty/bYN3kJtPJjOsg2HVUY4hWVG+F8IegexKxyelQT09c3rl9Uo/fC5P2vvyhTRJqI2Lg7wuPPJhU23b4e1YdTTiq6ctdawgKVsvgLq/B0w72tlpV5QSFwvw7DlMhMT5q4hxi4w5WLfKkUH+Psem7JgBK0h0zVdHcEQOm3ZCs9NSlZDalrxO1+E6KaX3keBMV0YwK2Kej/2Sld0wa7CjUYYMTbnosVlRUKrFXJ7x7h4PaZq4juwVgKO81ZSX7ynyXTyEOFVT2yaG9mwbkDhhwCfPbXnmyj9gJyjL6IERNx42pmrle7dnMCzl+svS9pN/GKSrbSvxvVbSX2FCcx7HZXDWJEI3RA99gmRUQYdF/CbeO0TmnPkRHYtvpM22gh5laQZ4Y1swiR4hsGK7XrmdkPBwITvrObg8ATldSIwa5d6gOPGThDfbyNiEHtIR2bqmkmajILIQDqHc8vdpZujbzTOWEn4mpD6X4WnC2FC8zqNaNE7j6hZ1dGtR77eAXQWZX4oat5Z3NA0/49nQJGuGaAM1DTos5SWCu5RiQX7dlFXXUN6T8T0+6rh2bKWUucPYKgVfSYXWNfyblSEXTrVZ5dQJUDHxXXJ5Vw6alr32oNtKu9UJ3KkqZV44kSOgABMSRr7Osm9aouTUbN7m9AwTh6UETOY7ybxwS96t0KSUjcg1jshktxpNX9hFlHsgLuPelF0CqIlsquFXRT+AnJUd4ozwTqHkTFYQUGwHjW6zyCwB4nqg+Psc+SxIzRggHHkfwuuphZOQw3qymgw9qmQ+xxdlzcnRxp3EEsDgukWUk/h3DCXj68I9DKDsbDmSDVV0rhmFE3LDYnKtglA4L+dYZuTrrOyFvKhU7DC30OzxFOBhPdGOTY0mm7BoN2WJvsiC1AWWsQckmqHL5z691EMFd9Cw28aYW7ZLaE0GAhy7rBvH4WL6XKImXzOHzbiyu3daGewIFr5tjEoP8tQUeJY1PYfWmDXc0wlTU3M2OId3i1gJohYOOCxlmLIRSv4S8+uhyPWDuT3kk8yiss5yA6uuJjDDs5wQmjTCFpwgjqm6DjmsKOcSFHTpuWlRabXY5Q7jcaocA3D9axyuozG4NWaLxgy0gsOiok/k7tloGkKmlYjhYrxwq3GD7BLIumh1VjZvLfMKZ0EaPL+lHZbqmTG5SkUKKoxEORF4SWvquaGzbKxLezc7xNAFtmvBadKwEuslDYFdr1rA8os7rXHOPxSniHHLctyBi9+pSRwsYeuUYjGkrwyBHR6cJAibtgjzOZJLCHtu2YXniTkxacC8qGaaSWydTDx5tWxwbuPVEpIgklngy1ZkJsXGtWQaIdfdaNahdRNL+8ZwQqsKYCFPJ3DZPKghMz8ISwOh6lw/sNlBmxXccze4YaEeubGRJISRlHHsIvIdz1sCuF+CScVd0w+2mERzlww8aaIku4DAqgxrP1UYbiJyReNyeAaJlSBYWPtYPiys/QTZB08i3V+cP5keZZMtp1WYjM160A0USwVu7IK0OTLEmeWuHKi+dInFp+U3/MIsmuT2OcKN3RDuOU9gpeFGNNs077krSTjzJpRqFtTEM0QC7s1a26dEWLOtu7Yt5UdNPe85mH2Js7w3zLiAWDCix1dR543hJXT2xlsLi1WXASIqu9384pSh55yYdoflnZxl0N40Z3mOrXuwEnEcL5NowPz9UXn3mbDB+m0pcvsc0aJgRQwbl2Nw7+M7oEVRIyphxlECazvueRiVT54pGexN0AgqDipvFELNxvLbTvG9ypttxaYpwZsQgmz3J/xY0nZNoxqpsxeGKMsQt+4R5Q14lB1rJyQev047DA5WCInq5dRJEkooiUxQnsb1b9dqRct5fuHWn3tsHFLMyVigcnE5epg3vJUzr5kYASocsGzh1IFqqIiU74m7zw/mtHjA15i2OYC24TWhz+AueN9Ol4JrP9UJEUEi2k9VvzPCPSuoleBmNqhInWjakIoZYdpDrPKxi0jjXQmjnPsiDbOIytVal3zvapLPTG3KL9PA5uonKmZEEIkoQpTzAb15qO3FNdvoz1ZyPqA3r1Xi0NiGoC4Z8NqI+mAhuK6De93ffenGyTby0hjmTclr+V/9sPuR91FtUueKCUNgpy0+Vh/MMk+1h6mp9QxFf2itqX9XQFUyd3KLroWghQff/aHNIUe6jgatQDgmW5Qf62jCzrM17iks5iL5cD9tLmx1NHMnnrnhf7/74eBKmJ4wwz5rFocIjX3xsWooi8u5VWIyEzLzBzxow9C/3xXWSF1w9uPx7eslNX7JOmJUmvxDjdQGbyF618XCU2q4f/jTjcvPsP7n463rwWpiRy1b78iwJ80xuV+QU3m4029kJR/8aJVdBpb2KWLx+JhuNZwrQJqAq/DU+L9gHdRab9vEzvkkKFU2lrOoA5rksKeYiCpq/4d57QAslsOT1oZ2BedjevMFdV2YZVgFxOvwrw07M51oPezv5CQvh1Sc99A2zHWh7zoFxPlfHudxfkGtKekYX3g4/hRtk7EMEln3huRLu392iBeYZKDZgsWWLdD6ZPMp2ibQWiTW1af52v8LvJ0VI2qpy4JofAEd/p1zHEPbyPoXTogJwo3Jwn+P1QYneIrd1cOP8T7YfbSeRB8d5jMW41Wqbf/Uvl2vVf8eiqmd+6QiR0OHWSRl3Efb0KEAJ8Rk9E2Q86rFv6a/ilfjtGBVDitX2E3J6rW5fJo42CjaRlDq0c2ZlMQqg7dt56H7kzvntUUn9VDwEJ+ktSFSrYiCjaMV4SZerZUJwy8GVj8aeNxUOluXFft7R1p+A8f4ANgdtA1V2UJynikQ4wV4fwA8TsqLJiOsRsYeNpsSGKAOgd1DywIzFOM9n/EcvVsLWTxu+vhId4NdkbJ3Do7E8vJbUX8A9iBa4TAbcVqjpF1quKXFu37luR/G40jnx8sj3aBih/VYvRAr89lf0QpwnXoplpb20XnDu0SZ5evP0x7kceinuQXn19yvfmuoxHsIroXIfXYP7D7aJuO+i29e5L3GvgZw2277//O0gB7gG77rxmGBuVhUr/a14MdvSJUcK17h/BDsAbQNExVzL0C4N3DyazB2x8kiXq382mqFOlFYI9m6wfjQ1DQKIzUn2GB1Dhtc4fwA7BG09DAXcNZaX72beb3/erwG8XJtOjzLLWr2F9c/mEe6A8qh6rWLMwf7sWWPoW0y2XmdUPr57PG6NScD1yBWHmyroSvzrzJAPVKHtTyA9ROwx9A2XN7Sw3XK4TJeiNj+QIweqIJIiV0DK5xgAKn5O7QNHWki3pt6+55OaI8N7ioq/Q8CCS0KsEa2pOrka7BH0fKbyMVmn0ki+1oXdlHa2vm/9s5tt2EQBsMNIm1SpJb3f9ppHH8fUo0A0TSNVOvFdsE3G0dV/cVHa38Kz89VSYqNh2o/sm203ii1GdI5lSsA3iswY1ZQudIY7zklroo5ZNphG2hFrSKW0wPzOXtsJMQktffwejJJFaLqXhhXq8xJas3iRlqvTWsl+inwvgquhixk3BrTnMGlNsVPAKoS1grbRKvgbiW8+XYU6vMSzD1HiFPtWveIvqYXiKoxqOg0LkId4ie2CbaN9qA2w8038oYAhxJNiPf0g7yHt++/cCmBw7f6qNKjEdYT2HZar/XDU/PHEuC7qzZqDN/KV7JUXZYaS1hJD5LK2gjbTOu1dmJWrkLBih/3I3F0UZ1L3GDixpU81fjNNpEaNdbzsO20yukVJlsJ8FKTOjNnB9eFPI/tVbkmFdLAamknrBz33L71E7TeHPHSxickLtD3VwK/p1f8RTmpOOlZU8KgL99fQ0vDSzvG36z/qRIvCSqTZ0zsUrC8v+r9lnOPT7OepWXHF+vzrWa0LXrmsoCSWkYbo5BLSB9ECdNUv5O7PkvrNatFAmdf0RYJ15Y+k9hkU9psuL4p49oNe56WpDO9H6G+h31R2DZU18Mq+ibT30zvge2nPYivAL4x/dbChUt3GofFtZuWlStj9F5yAU0Y0VMl3gU+v2UIazftQT5v2HKtSqmapXqTShgNq+ndbDctz2ckpqLmIfaBvsnDavq3OoAWeVmEKXGFhkuXN8uMv5Gsg2gB2G8CWCALl1ExGiegDqQlAcaUNh+huTVTn8RsxrOOpGXAOC5etZ02qrqhfDwHdTStBlwfrWzggqneZiPPL5mHOoFWAhdmQN02Og4M/zF+FuocWkLsWV6TyRXg4PI1Z1uTaEWMZbBVyImkk2k/MZurOS+i/Rn0Rbu4ivZ3rH/av7u+AGNiyMyHjndOAAAAAElFTkSuQmCC&#10;">
</td>
</tr>
</table>
