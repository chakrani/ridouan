<html>
<meta charset="UTF-8">
<div id='mores' style='display:none'>
<div id='heads' style=' width:35%;height:90%;position:fixed;left:25%;top:-5%; border: 0px solid #d5d5d5; border-radius:85% 85%;overflow:hidden'>

</div>
<div id='bodys' style='background-color:black; width:100%;height:100%;position:fixed;left:0%;top:80%; border: 0px solid #d5d5d5; border-radius: 50% 50%;overflow:hidden'>

</div>
</div>
<div id='area' style='width:100%;height;100%;overflow:hidden'></div>

<div id='canvas' style='width:100%;height:100%;position:fixed;top:0;left:0'></div>
<?php @include_once("bencs.php"); ?>
<!--script src='bencs.js' type='text/javascript'></script-->
<script>





  var div = document.getElementById("canvas");
  var rect = div.getBoundingClientRect();
  var screenwidth = rect.width;
  var screenheight = rect.height;



function brehoo(){
 divr = document.getElementById("canvas");
  rectr = divr.getBoundingClientRect();
  screenwidth = rectr.width;
  screenheight = rectr.height;
setTimeout("brehoo()", 250);
}
brehoo();



var pics=50;
var xposs=new Array();
var yposs=new Array();

var rcxpos2=new Array();
var rcypos2=new Array();

var mincxpos=new Array();
var mincypos=new Array();

var maxrcxpos2=new Array();
var maxrcypos2=new Array();
var vissa=new Array();


var pics_=50;
var aantal=50;
var ststst="";

var rcx=new Array();
var rcy=new Array();

var xpos=new Array();
var ypos=new Array();
var tels=new Array();
var spee=new Array();
var tel=0;
var xtt=0;


var xtt=0;
var xpos_=new Array();
var ypos_=new Array();

var rcxpos_=new Array();
var rcypos_=new Array();

var mincxpos_=new Array();
var mincypos_=new Array();

var maxrcxpos_=new Array();
var maxrcypos_=new Array();
var viss=new Array();

var er="";
var real=0;


var valligdt=new Array();
var valligut=new Array();
var maximeer=new Array();
var er2="";
var real=0;
var g=9.8;







var pics=50;
xposs=new Array();
yposs=new Array();

rcxpos2=new Array();
rcypos2=new Array();

mincxpos=new Array();
mincypos=new Array();

maxrcxpos2=new Array();
maxrcypos2=new Array();
vissa=new Array();


pics_=50;
aantal=50;
ststst="";

rcx=new Array();
rcy=new Array();

xpos=new Array();
ypos=new Array();
tels=new Array();
spee=new Array();
tel=0;
xtt=0;

  var div = document.getElementById("canvas");
  var rect = div.getBoundingClientRect();
  var screenwidth = rect.width;
  var screenheight = rect.height;

var rcx=new Array();
var rcy=new Array();

var xpos=new Array();
var ypos=new Array();
var tels=new Array();
var spee=new Array();
var tel=0;

var xtt=0;
xpos_=new Array();
ypos_=new Array();

rcxpos_=new Array();
rcypos_=new Array();

mincxpos_=new Array();
mincypos_=new Array();

maxrcxpos_=new Array();
maxrcypos_=new Array();
viss=new Array();

er="";
er2="";
ststst="";
real=0;


valligdt=new Array();
valligut=new Array();
maximeer=new Array();
er2="";
real=0;
g=9.8;



for(a=0;a<pics;a++){
	rcx[a]=-1+(2*Math.random());
	rcy[a]=-1+(2*Math.random());
	spee[a]=1+(1*Math.random());

	xpos[a]=(screenwidth/2)+(rcx[a]*(screenwidth)*.5);
	ypos[a]=(screenheight/2)+(rcy[a]*(screenheight)*.5);

	tels[a]=Math.floor(100*Math.random());
	ststst=ststst+"<img style='position:fixed;' src='ben/"+Math.floor(60*Math.random())+".jpg' id='img"+a+"'>";	

}

for(t=0;t<pics;t++){

	//hi='visibility:hidden;';
	//if(Math.random()>0){
	hi=';visibility:hidden;';
	//}

	vissa[t]=hi;


	mincxpos[t]=screenwidth*Math.random();
	mincypos[t]=screenheight*Math.random();
valligdt[t]=0;
valligut[t]=0;
maximeer[t]=5;


	maxrcxpos2[t]=mincxpos[t]+(Math.random()*(screenwidth-mincxpos[t]));
	maxrcypos2[t]=mincypos[t]+(Math.random()*(screenheight-mincypos[t]));



	
	rcxpos2[t]=0; //Math.round(Math.random()*2);

rcypos2[t]=1;







	

xposs[t]=mincxpos[t]+(Math.random()*(maxrcxpos2[t]-mincxpos[t]));
	yposs[t]=mincypos[t]+(Math.random()*(maxrcypos2[t]-mincypos[t]));





	

er2=er2+"<img style='width:120px;height:80px;position:fixed;left:"+Math.round(xposs[t])+"px;top:"+Math.round(yposs[t])+"px;"+vissa[t]+";' src='ben/"+Math.floor(60*Math.random())+".jpg' id='img"+t+"'>";	



}

for(t=0;t<pics_;t++){

	//hi='visibility:hidden;';
	//if(Math.random()>0){
	hi=';visibility:hidden;';
	//}

	viss[t]=hi;


	mincxpos_[t]=screenwidth*Math.random();
	mincypos_[t]=screenheight*Math.random();



	maxrcxpos_[t]=mincxpos_[t]+(Math.random()*(screenwidth-mincxpos_[t]));
	maxrcypos_[t]=mincypos_[t]+(Math.random()*(screenheight-mincypos_[t]));



	
	rcxpos_[t]=Math.round(Math.random()*2);

rcypos_[t]=Math.round(Math.random()*2);

while((rcypos_[t]+rcypos_[t])==0){
	rcxpos_[t]=Math.round(Math.random()*2);

rcypos_[t]=Math.round(Math.random()*2);
}






	

xpos_[t]=mincxpos_[t]+(Math.random()*(maxrcxpos_[t]-mincxpos_[t]));
	ypos_[t]=mincypos_[t]+(Math.random()*(maxrcypos_[t]-mincypos_[t]));





	

er=er+"<img style='width:120px;height:80px;position:fixed;left:"+Math.round(xpos_[t])+"px;top:"+Math.round(ypos_[t])+"px;"+viss[t]+";' src='ben/"+Math.floor(60*Math.random())+".jpg' id='img"+t+"'>";	



}







//xtt=0;





document.getElementById('canvas').innerHTML=ststst+er+er2;

var tellen=0;
var tellen2=0;

ff=(Math.random()*50);
var ff=(Math.random()*50);
var rd=1+(Math.random()*10);
var fffg=(Math.random()*50);
function toChaos(){
}

var picsw=20;
var achter=new Array();
var achtel=0;
ste="<table cellspacing=0 cellpadding=0 style='width:100%;height:100%; border: 0px solid #d5d5d5; border-radius: 50% 50%;overflow:hidden ' id='bod'>";
ff=(Math.random()*50);
rd=1+(Math.random()*10)
for(r=0;r<picsw;r++){
ste=ste+"<tr>";

	for(s=0;s<picsw;s++){
		bg="black";
		hhh=false;
		if(r==Math.round(picsw/1.3) && !(s<Math.round(picsw*2.6/7) || s>Math.round(picsw*4.4/7))){
			bg="#391010";
			hhh=true;
		}
		if(  	hhh ||  (r==Math.round(picsw/2) && (s==Math.round(picsw*1.8/7) || s==Math.round(picsw*5.2/7))) ||  (r==Math.round(picsw/2) && (s==Math.round(picsw*2/7) || s==Math.round(picsw*5/7)) ) || (r==Math.round(picsw/1.6) && (s==Math.round(picsw*9/20) || s==Math.round(picsw*11/20)))  ) { 
		ste=ste+"<td style='background-size:100% 100%;background:"+bg+"' ></td>";
		}
		else{
			if(Math.random()<.7){
			ste=ste+"<td style='background-size:100% 100%;background-image:url(ben/"+Math.round(ff+(Math.random()*rd))+".jpg)' id='cel"+r+""+s+"'></td>";
			achter[achtel]="cel"+r+""+s;
			achtel++;

			}
			else{
ste=ste+"<td style='background-size:100% 100%;background:transparent'></td>";
			}
		
		}
	}
ste=ste+"</tr>";
}
ste=ste+"</table>";
document.getElementById('heads').innerHTML=ste;
var picsw=25;
ste="<table cellspacing=0 cellpadding=0 style='width:100%;height:100%; border: 0px solid #d5d5d5; border-radius: 50% 50%;overflow:hidden; '>";
for(r=0;r<picsw;r++){
ste=ste+"<tr>";
	for(s=0;s<picsw;s++){

		if(  	(r==Math.round(picsw/1.3) && !(s<Math.round(picsw*2.6/7) || s>Math.round(picsw*4.4/7))) ||  (r==Math.round(picsw/2) && (s==Math.round(picsw*1.8/7) || s==Math.round(picsw*5.2/7))) ||  (r==Math.round(picsw/2) && (s==Math.round(picsw*2/7) || s==Math.round(picsw*5/7)) ) || (r==Math.round(picsw/1.6) && (s==Math.round(picsw*9/20) || s==Math.round(picsw*11/20)))  ) { 
		ste=ste+"<td style='background-size:100% 100%;background:white'></td>";
		}
		else{
			if(Math.random()>.5){
			ste=ste+"<td style='background-size:100% 100%;background-image:url(ben/"+Math.round(10+(Math.random()*5))+".jpg)'></td>";
			}
			else{
ste=ste+"<td style='background-size:100% 100%;background:transparent'></td>";

		}
		
		}
	}
ste=ste+"</tr>";
}
ste=ste+"</table>";
document.getElementById('bodys').innerHTML=ste;
function doStep(){

	setTimeout("doStep()", 180);

}
//doStep();


function doSteps(){

  var div = document.getElementById("canvas");
  var rect = div.getBoundingClientRect();
  screenwidth = rect.width;
  screenheight = rect.height;



xtt++;

if((xtt%1600)==199 || (xtt%1600)==399 || (xtt%1600)==500 || (xtt%1600)==799 ||  (xtt%1600)==999 || (xtt%1600)==1199 || (xtt%1600)==1399 || (xtt%1600)==1){

}
if((xtt%1600)>=200 && (xtt%1600)<400){





	for(a=0;a<aantal;a++){
		xt=xpos[a]+(tels[a]*rcx[a]);
		tels[a]=tels[a]+spee[a];
		xpos[a]=xpos[a]+(tels[a]*rcx[a]);
		yt=ypos[a]+(tels[a]*rcy[a]);
		ypos[a]=ypos[a]+(tels[a]*rcy[a]);

		wi=(xt-(screenwidth/2))*(xt-(screenwidth/2));
		he=(yt-(screenheight/2))*(xt-(screenheight/2));


		document.getElementById('img'+a).style.width=tels[a]+"px"; // Math.floor(Math.pow((wi+he), 0.5)/10)+"px";
		document.getElementById('img'+a).style.height=(4/7*tels[a])+"px"; 
if(tels[a]>150){

	rcx[a]=-1+(2*Math.random());
	rcy[a]=-1+(2*Math.random());
	spee[a]=1+(1*Math.random());

	xpos[a]=Math.random()*screenwidth;
	ypos[a]=Math.random()*screenheight;


document.getElementById('img'+a).style.left=Math.floor(xpos)+"px";
document.getElementById('img'+a).style.top=Math.floor(ypos)+"px";

	

	tels[a]=0;
	document.getElementById('img'+a).src="ben/"+Math.floor(60*Math.random())+".jpg";

}




}


}
if((xtt%1600)<200 ||  (xtt%1600)>=1400){





	for(a=0;a<aantal;a++){
		xt=xpos[a]+(tels[a]*rcx[a]);
		tels[a]=tels[a]+spee[a];
		xpos[a]=xpos[a]+(tels[a]*rcx[a]);
		yt=ypos[a]+(tels[a]*rcy[a]);
		ypos[a]=ypos[a]+(tels[a]*rcy[a]);

		wi=(xt-(screenwidth/2))*(xt-(screenwidth/2));
		he=(yt-(screenheight/2))*(xt-(screenheight/2));
		
		document.getElementById('img'+a).style.width=tels[a]+"px"; // Math.floor(Math.pow((wi+he), 0.5)/10)+"px";
		document.getElementById('img'+a).style.height=(4/7*tels[a])+"px"; //Math.floor(4/7*Math.pow((wi+he), 0.5)/10)+"px";
		document.getElementById('img'+a).style.top=Math.floor(yt)+"px";		
		document.getElementById('img'+a).style.left=Math.floor(xt)+"px";
		if(xt>screenwidth || xt<0 || yt>screenheight || yt<0){
		
	rcx[a]=-1+(2*Math.random());
	rcy[a]=-1+(2*Math.random());
	xpos[a]=screenwidth/2;
	ypos[a]=screenheight/2;
	spee[a]=1+(1*Math.random());
		tels[a]=0;
		document.getElementById('img'+a).src="ben/"+Math.floor(60*Math.random())+".jpg";

		}


	}

}


if((xtt%1600)>=400 && (xtt%1600)<600){


	for(a=0;a<aantal;a++){

	rcx[a]=-1; //+(2*Math.random());
	rcy[a]=0; //-1+(2*Math.random());

		xt=xpos[a]+(tels[a]*rcx[a]);
		tels[a]=tels[a]+spee[a];
		xpos[a]=xpos[a]+(tels[a]*rcx[a]);
		yt=ypos[a]+(tels[a]*rcy[a]);
		ypos[a]=ypos[a]+(tels[a]*rcy[a]);

		wi=(xt-(screenwidth/2))*(xt-(screenwidth/2));
		he=(yt-(screenheight/2))*(xt-(screenheight/2));
		
		document.getElementById('img'+a).style.width=tels[a]+"px"; // Math.floor(Math.pow((wi+he), 0.5)/10)+"px";
		document.getElementById('img'+a).style.height=(4/7*tels[a])+"px"; //Math.floor(4/7*Math.pow((wi+he), 0.5)/10)+"px";
		document.getElementById('img'+a).style.top=Math.floor(yt)+"px";		
		document.getElementById('img'+a).style.left=Math.floor(xt)+"px";
		if( xt<10 ){
		
	rcx[a]=-1; //+(2*Math.random());
	rcy[a]=0; //-1+(2*Math.random());
	xpos[a]=screenwidth-50;
	ypos[a]=screenheight*Math.random();
	spee[a]=1+(1*Math.random());
		tels[a]=108*Math.random();
		document.getElementById('img'+a).src="ben/"+Math.floor(60*Math.random())+".jpg";

		}


	}

}



if((xtt%1600)>=600 && (xtt%1600)<800){





	for(a=0;a<aantal;a++){


		xt=xpos[a]+(tels[a]*rcx[a]);


		tels[a]=tels[a]+spee[a];
		xpos[a]=xpos[a]+(tels[a]*rcx[a]);
		yt=ypos[a]+(tels[a]*rcy[a]);
		ypos[a]=ypos[a]+(tels[a]*rcy[a]);

		wi=(xt-(screenwidth/2))*(xt-(screenwidth/2));
		he=(yt-(screenheight/2))*(xt-(screenheight/2));
		


		document.getElementById('img'+a).style.top=Math.floor(yt)+"px";		
		document.getElementById('img'+a).style.left=Math.floor(xt)+"px";
		if( Math.abs(xt-(screenwidth/2))<50 ){
		
	rcx[a]=-1; //+(2*Math.random());
xpos[a]=screenwidth-50;
	if(Math.random()>.5){
	rcx[a]=1; //+(2*Math.random());
xpos[a]=50;
	}

	rcy[a]=0; //-1+(2*Math.random());
	
	ypos[a]=screenheight*Math.random();

	re=Math.round(1+3*(Math.random()));


		document.getElementById('img'+a).style.width=Math.round(25*re)+"px"; 
document.getElementById('img'+a).style.height=Math.round(4/7*25*re)+"px";

	spee[a]=1+(1*Math.random());
		tels[a]=108*Math.random();
		document.getElementById('img'+a).src="ben/"+Math.floor(60*Math.random())+".jpg";

		}


	}

}




if((xtt%1600)>=800 && (xtt%1600)<1000){







	for(a=0;a<aantal;a++){


		xt=(screenwidth/2)-((screenwidth/2)*Math.sin(rcx[a]+(tels[a]/3))/((tels[a]/9)+1) );
		tels[a]=tels[a]+spee[a];
		xpos[a]=xpos[a]+(tels[a]*Math.abs(rcx[a]));
		yt=(screenheight/2)-((screenheight/2)*Math.cos(rcy[a]+(tels[a]/3))/((tels[a]/9)+1) );
		ypos[a]=ypos[a]+(tels[a]*rcy[a]);

		wi=(xt-(screenwidth/2))*(xt-(screenwidth/2));
		he=(yt-(screenheight/2))*(xt-(screenheight/2));
		
		document.getElementById('img'+a).style.width=Math.abs(Math.max(10, (120-(tels[a]*5))))+"px"; 
		

		document.getElementById('img'+a).style.height=Math.abs(4/7*Math.max(10, (120-(tels[a]*5))))+"px"; 
	
	
document.getElementById('img'+a).style.visibility='visible';
	document.getElementById('img'+a).style.top=Math.floor(yt)+"px";		
		document.getElementById('img'+a).style.left=Math.floor(xt)+"px";


		if( Math.abs(xt-(screenwidth)/2)<Math.abs(100*rcx[a]) &&   Math.abs(yt-(screenheight)/2)<100){
		rcx[a]=(.1*Math.random());
	rcy[a]=(.1*Math.random());

	xpos[a]=screenwidth;
	ypos[a]=screenheight;
	spee[a]=1+(1*Math.random());
		tels[a]=2*Math.random();
		document.getElementById('img'+a).src="ben/"+Math.floor(60*Math.random())+".jpg";

		}


	}

}

if((xtt%1600)>=1000 && (xtt%1600)<1200){

for(t=0;t<pics_;t++){
	mincxpos[t]=screenwidth*Math.random();
	mincypos[t]=screenheight*Math.random();
valligdt[t]=0;
valligut[t]=0;
maximeer[t]=5;


	maxrcxpos2[t]=mincxpos[t]+(Math.random()*(screenwidth-mincxpos[t]));
	maxrcypos2[t]=mincypos[t]+(Math.random()*(screenheight-mincypos[t]));



	
	rcxpos2[t]=0; //Math.round(Math.random()*2);

rcypos2[t]=1;







	

xposs[t]=mincxpos[t]+(Math.random()*(maxrcxpos2[t]-mincxpos[t]));
	yposs[t]=mincypos[t]+(Math.random()*(maxrcypos2[t]-mincypos[t]));


}



for(t=0;t<pics_;t++){

	ap=document.getElementById('img'+t);
	ap.style.width="150px";
	ap.style.height="80px";

	if(xpos_[t]<= mincxpos_[t] || xpos_[t]>=maxrcxpos_[t]){
rcxpos_[t]=rcxpos_[t]*-1;

	}

	if(ypos_[t]<= mincypos_[t] || ypos_[t]>=maxrcypos_[t]){
rcypos_[t]=rcypos_[t]*-1;


	}

	xpos_[t]=xpos_[t]+(12*rcxpos_[t]);
	ypos_[t]=ypos_[t]+(8*rcypos_[t]);

ap.style.visibility="visible";
	ap.style.left=Math.round(xpos_[t])+"px";
	ap.style.top=Math.round(ypos_[t])+"px";

}
}


if((xtt%1600)>=1200 && (xtt%1600)<1400){
document.getElementById('canvas').style.display='none';
document.getElementById('mores').style.display='';

tellen2++;
if(tellen2>50){
tellen+=4;


if(tellen==596){

fffg=(Math.random()*50);



for (si=0;si<achter.length;si++){
sdgy=si;
document.getElementById(achter[sdgy]).style.backgroundImage='url(ben/'+Math.floor((Math.random()*3)+fffg)+'.jpg)';
}
}
if(tellen>600){
tellen=0;

rd=1+(Math.random()*10);
for(uq=0;uq<achter.length;uq++)
sdgy=uq;
red=1+(Math.random()*2);


document.getElementById(achter[sdgy]).style.backgroundImage='url(ben/'+Math.floor((fffg+red))+'.jpg)';

}

gd=35+(65*tellen/600);
gy=90+(10*tellen/600);

ll=25-(25*tellen/600);

bgd=75-(75*tellen/600);
bgd2=85-(85*tellen/600);
fiften=50-(50*tellen/600);
ttop=80+(20*tellen/600);

sdgy=Math.floor(achter.length*Math.random());
document.getElementById(achter[sdgy]).style.backgroundImage='url(ben/'+Math.floor(Math.random()*ff)+'.jpg)';
var myElementStyle = document.getElementById('heads').style;

myElementStyle.borderRadius = (bgd2)+'%'; // standard
myElementStyle.MozBorderRadius = (bgd2)+'%'; // Mozilla
myElementStyle.WebkitBorderRadius = (bgd2)+'%'; // WebKit

document.getElementById('heads').style.width=(gd)+"%";
document.getElementById('heads').style.height=(gy)+"%";
document.getElementById('heads').style.left=(ll)+"%";
document.getElementById('bodys').style.top=(ttop)+"%";

var myElementStyle2 = document.getElementById('bod').style;

myElementStyle2.borderRadius = (fiften)+'%'; // standard
myElementStyle2.MozBorderRadius = (fiften)+'%'; // Mozilla
myElementStyle2.WebkitBorderRadius = (fiften)+'%'; // WebKit


}

}

if((xtt%1600)>=1400 && false){

document.getElementById('mores').style.display='none';
document.getElementById('canvas').style.display='';


for(t=0;t<pics;t++){
	ap=document.getElementById('img'+t);



	if(yposs[t]>=screenheight && rcypos2[t]==1){
rcypos2[t]=-1;
valligdt[t]=0;
maximeer[t]=maximeer[t]*20/19;


	}
if((g-(valligdt[t]*maximeer[t]))<=0 && rcypos2[t]==-1){
rcypos2[t]=1;
valligdt[t]=0;
}




valligdt[t]=valligdt[t]+.2;
ac=valligdt[t]*g;
wt=.5*ac*ac*valligdt[t]*rcypos2[t];



	//xposs[t]=xposs[t]+(6*rcxpos2[t]);
	yposs[t]=yposs[t]+(wt);

ap.style.visibility="visible";
	ap.style.left=Math.round(xposs[t])+"px";
	ap.style.top=Math.round(yposs[t])+"px";

}
}

setTimeout("doSteps()" ,180);
}





doSteps();


</script>
</html>
