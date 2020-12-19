<html lang="nl-nl">
<head>
<style>html,body{ width:100%;height:100%; overflow:hidden; }
</style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome!</title>
</head>

<BODY  id='topper' onload = "lfo()">

<div id="bn"  style="width: 100%; height: 100%; background-color: black; background-size:100% 100%;">
<div id='canvas' style=';width:100%;height:100%;position:absolute;top:0;left:0'></div>
<div id='view' style='position:absolute;top:0;left:0%;width:100%;height:100%'></div>
<table id='row' cellspacing=0 cellpadding=0 style='width:100%;height:100%;top:0;left:0%;position:absolute;'></table>

<table id='rows' style='position:fixed;top:0;left:0;width:100%;height:100%'></table>
</div>


<?php

echo " <script> var imgg= new Array(); ";

$r=0;
$of=3;
for($f=0;$f<$of;$f++){
  $er=40*$f;

  $dfsf=$_GET['q'];
  $gds=explode(' ', $dfsf);
  if($f==1){
$cho= file_get_contents( "https://www.bing.com/images/search?count=40&first=".$er."&q=".urlencode($_GET['q']." -alamy -image  -photo -stock -lha -iha -time -tinypic -getty")."&qft=+filterui:photo-photo+filterui:aspect-wide&FORM=IRFLTR" );
  }
  else{
$cho= file_get_contents( "https://www.bing.com/images/search?count=40&first=".$er."&q=".urlencode($_GET['q']." -alamy -image  -photo -stock -lha -iha -time -tinypic -getty")."&qft=+filterui:photo-photo+filterui:aspect-wide&FORM=IRFLTR" );
  
  }

$arf=explode("<a class=\"thumb\" target=\"_blank\" href=\"",  $cho);








for($g=1;$g<count($arf);$g++){
  $fsc=explode( "\"" , $arf[$g]);
  //xxcopy($fsc[0],$sexx."image_".rand(0,3214343).".jpg" );
	echo " imgg[".$r."]='".$fsc[0]."'; ";
	$r++;
 }

 }
echo "</script>";




?>
<script>

var  xmlhttpos = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");

function triggerbewr(){
   if ( (xmlhttpos.readyState == 4) && (xmlhttpos.status == 200)){
				rscc=xmlhttpos.responseText;
				gdg=rscc.split("<br>");
				for(oe=0;oe<(gdg.length-1);oe++){
						imgg[oe]=gdg[oe];
				}
   }
   
}
		
function drgbi() {
     

	        xmlhttpos = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
		xmlhttpos.onreadystatechange=triggerbewr;
        	xmlhttpos.open("GET","https://freeshell.de/~trans1/imse.php?q=<?php echo urlencode($_GET['q']); ?>",true);
        
        	xmlhttpos.send(null);
	
}
if(imgg.length<5){
	drgbi();
}
</script>


<script>var music= new Array();
var notenden="or and a the aboard about above across after against along among around as at before behind below beneath beside between beyond but by despite down during except failing following for from in inside into like minus near next of off on onto opposite out outside over past plus regarding since than through throughout till to toward towards under underneath unlike until up upon via with within without";

notendnl="dat die of en een de het over boven over na tegen langs onder rond zoals bij voor achter onder onder naast tussen voorbij  door ondanks tijdens behalve falen volgen voor van in binnen in zoals minus dichtbij volgende van uit op op tegenover uit buiten over verleden plus met betrekking tot sinds dan door door tot tot naar naar onder onder tot omhoog op via met binnen zonder";

var notendge="der die order und a das an bord über über über über unter über wie zuvor hinter unter unter neben über aber durch trotz unter außer nicht folgen für von innen nach wie minus neben auf auf gegenüber aus außen über vergangenheit plus über seit als durchgehend bis nach zu nach unter unter zu bis nach über mit innerhalb außerhalb";

var glav=10;
var twwa=0;
function showIts(){
	twwa=0;

}

function turnOnz(){



}


 
function replaceSpace(stea){
//s=stea;

//result = s.split(" ").join("_");
//res=result.split("%20").join("_");

return stea;


}
var music= new Array();
var width=screen.width*1;
var height=screen.height*1;
atsess=Math.floor(Math.random()*19);
var gggggg=Math.round(195*Math.random());


var aallcoutries="AFGHANISTAN|ALBANIA|ALGERIA|ANDORRA|ANGOLA|ANTIGUA-BARBUDA|ARGENTINA|ARMENIA|AUSTRALIA|AUSTRIA|AZERBAIJAN|BAHRAIN|BANGLADESH|BARBADOS|BELARUS|BELGIUM|BELIZE|BENIN|BHUTAN|BOLIVIA|BOSNIA-HERZEGOVINA|BOTSWANA|BRAZIL|BRUNEI|BULGARIA|BURKINA_FASO|BURUNDI|CABO_VERDE|CAMBODIA|CAMEROON|CANADA|CENTRAL_AFRICAN_REPUBLIC|CHAD|CHILE|CHINA|COLOMBIA|COMOROS|COSTA_RICA|CROATIA|CUBA|CYPRUS|CZECH_REPUBLIC|DENMARK|DJIBOUTI|DOMINICA|DOMINICAN_REPUBLIC|ECUADOR|EGYPT|EL_SALVADOR|EQUATORIAL_GUINEA|ERITREA|ESTONIA|ESWATINI|ETHIOPIA|FEDERATED_STATES_OF_MICRONESIA|FIJI|FINLAND|FRANCE|GABON|GEORGIA|GERMANY|GHANA|GREECE|GRENADA|GUATEMALA|GUINEA|GUINEA-BISSAU|GUYANA|HAITI|HONDURAS|HUNGARY|ICELAND|INDIA|INDONESIA|IRAN|IRELAND|ISRAEL|ITALY|JAMAICA|JAPAN|JORDAN|KAZAKHSTAN|KENYA|KIRIBATI|KOSOVO|KUWAIT|KYRGYZSTAN|LAOS|LATVIA|LEBANON|LESOTHO|LIBERIA|LIBYA|LIECHTENSTEIN|LITHUANIA|LUXEMBOURG|MADAGASCAR|MALAWI|MALAYSIA|MALDIVES|MALI|MALTA|MARSHALL_ISLANDS|MAURITANIA|MAURITIUS|MEXICO|MOLDOVA|MONACO|MONGOLIA|MONTENEGRO|MOROCCO|MOZAMBIQUE|MYANMAR|NAMIBIA|NAURU|NEPAL|NETHERLANDS|NEW_ZEALAND|NICARAGUA|NIGER|NIGERIA|NORTH_KOREA|NORTH_MACEDONIA|NORWAY|OMAN|PAKISTAN|PALAU|PALESTINE|PANAMA|PAPUA_NEW_GUINEA|PARAGUAY|PERU|PHILIPPINES|PHOTOGRAPHY|POLAND|PORTUGAL|QATAR|REPUBLIC_OF_THE_CONGO|ROMANIA|RUSSIA|RWANDA|SAINT_LUCIA|SAINT_VINCENT-THE_GRENADINES|SAMOA|SAN_MARINO|SAUDI_ARABIA|SENEGAL|SERBIA|SEYCHELLES|SIERRA_LEONE|SINGAPORE|SLOVAKIA|SLOVENIA|SOLOMON_ISLANDS|SOMALIA|SOUTH_AFRICA|SOUTH_KOREA|SOUTH_SUDAN|SPAIN|SRI_LANKA|SUDAN|SURINAME|SWEDEN|SWITZERLAND|TAJIKISTAN|TANZANIA|THAILAND|TIMOR-LESTE|TOGO|TONGA|TRINIDAD-TOBAGO|TUNISIA|TURKEY|TURKMENISTAN|TUVALU|UGANDA|UKRAINE|UNITED_ARAB_EMIRATES|UNITED_KINGDOM|UNITED_STATES|URUGUAY|UZBEKISTAN|VANUATU|VATICAN_CITY|VENEZUELA|VIETNAM|ZAMBIA|ZIMBABWE";
var capital=aallcoutries.split("|");




var imglst=new Array();
for(t=0;t<19;t++){
imglst[t]=imgg[t];
}
function aImages(){



}

//aImages();

var music= new Array();





var width=screen.width*1;

var height=screen.height*1;



var aimg="";

var bimg="";

var dirdit=1;

var teldr=0;



var dirdit2=1;

var teldr2=0;



var zooot=0;

var zoood=1;



function bksz(){





dadte=new Date();

	sse=""+dadte.getSeconds();

	ssec=parseInt(sse);



	if(ssec>=0){

	zooot+=zoood*.00241;

	if(zooot<0 || zooot>.15){

		zoood*=-1;

	}





	}



	if(ssec>=0){

	teldr+=dirdit*.1;

	if(teldr<.1 || teldr>7.9){

		dirdit*=-1;

	}


sooww = 1*screen.width;

soohh = 1*screen.height;


	}



	if(ssec>=0){

	teldr2+=dirdit2*.15;

	if(teldr2<.1 || teldr2>7.9){

		dirdit2*=-1;

	}



	}



	cq=document.getElementById('canvas');
cq.style.top=(-teldr-(zooot*1))+"%";
cq.style.width=(sooww+(sooww*zooot*1))+"px";
cq.style.height=(soohh+(soohh*zooot*1))+"px";
cq.style.left=(-teldr2-.1-(zooot*1))+"%";

	cq=document.getElementById('row');
cq.style.top=(-teldr-(zooot*1))+"%";
cq.style.width=(sooww+(sooww*zooot*1))+"px";
cq.style.height=(soohh+(soohh*zooot*1))+"px";
cq.style.left=(-teldr2-.1-(zooot*1))+"%";


	cq=document.getElementById('table');
cq.style.top=(-teldr-(zooot*1))+"%";
cq.style.width=(sooww+(sooww*zooot*1))+"px";
cq.style.height=(soohh+(soohh*zooot*1))+"px";
cq.style.left=(-teldr2-.1-(zooot*1))+"%";

	cq=document.getElementById('rows');
cq.style.top=(-teldr-(zooot*1))+"%";
cq.style.width=(sooww+(sooww*zooot*1))+"px";
cq.style.height=(soohh+(soohh*zooot*1))+"px";
cq.style.left=(-teldr2-.1-(zooot*1))+"%";	





//	setTimeout("bksz()", 100);





}





//document.getElementById('bn').style.backgroundImage="url("+aimg+")";

var blckwhite =0;

var img=new Array();

for(v=0;v<22;v++){

img[v]=v+".jpg";


}


fsvv=Math.floor(capital.length*Math.random());
cec=capital[fsvv];
var aimg=imgg[0];
var aaaimg=imgg[1];

var bimg=imgg[2];
var dirdit=1;
var teldr=0;

var dirdit2=1;
var teldr2=0;

var zooot=0;
var zoood=1;
</script>
<script>


var blckwhite =0;
var img=new Array();
for(v=0;v<22;v++){
img[v]=v+".jpg";

}




function triggeredrrfyu() {
	if ((xmlhttprrffmu.readyState == 4) && (xmlhttprrffmu.status == 200)) {
		daf=xmlhttprrffmu.responseText;
		music = new Array();
		ext=daf.split('<br>');
		for(i=0;i<ext.length;i++){
			music[i]=ext[i];
		}
		
if(document.getElementById("btotn")){

		document.getElementById("btotn").disabled = false;
		document.getElementById("loading").style.display = 'none';
		document.getElementById("playn").style.display = '';
		//alert('c');
		
	}	
		
	}
}	
		

function getMus(dsax){

     

}

var inc=2;
var livem=false;




fw=document.getElementById('bn');


cap=new Array();
cap[0]="SPAIN";
cap[1]="ITALY";
cap[2]="BELGIUM";
cap[3]="SWITZERLAND";
cap[4]="PORTUGAL";
cap[5]="SWEDEN";
cap[6]="NORWAY";
cap[7]="IRELAND";

capi=cap[Math.floor(Math.random()*cap.length)];



aaimg="https://maghreb.sourceforge.io/nm2/"+capi.replace(" ","_")+"/Image"+(Math.round(19*Math.random()))+".jpg";


fw.style.backgroundImage="url("+aaimg+")";
fw.style.backgroundSize="100% 100%";

var imimim1=new Array();    var imimim2=new Array();    












var ate=0;



















function shuffle(a) {

    var j, x, i;

       for (i = a.length - 1; i > 0; i--) {

        j = Math.floor(Math.random() * (i + 1));

        x = a[i];

        a[i] = a[j];

        a[j] = x;

    }

    return a;

}

var tel=0;

var speed=(280*4);

var as=new Array();

for(r=0;r<(100);r++){

	as[r]=r;

}

as=shuffle(as);







var ast=new Array();

for(r=0;r<(100);r++){

	ast[r]=r;

}

ast=shuffle(ast);





var fbl=new Array();

for(t=0;t<11;t++){

fbl[t]=1+(1*Math.random());

}

function fb(){

	d=document.getElementById('canvas');

	d.style.backgroundImage='url('+bimg+')';

	d.style.backgroundSize=width+"px "+height+"px";

	r=document.getElementById('row');

	g="";

	t=0;

	for(f=0;f<10;f++){

		g=g+"<tr>";

			

				sfg="<table style='width:"+width+"px;height:"+height+"px' cellspacing=0 cellpadding=0><tr><td width='"+Math.floor(tel*fbl[f])+"%' style='background-image:url("+aimg+");background-size:"+width+"px "+height+"px;background-position:"+Math.floor(-fbl[f]*tel/200)+"px "+Math.floor(height/(f+1))+"'></td><td width='"+((100-tel)*fbl[f])+"%'  style='background-image:urrl("+bimg+");background-size:"+width+"px "+height+"px;background-position:"+Math.floor(-fbl[f]*tel/200)+"px "+Math.floor(height/(f+1))+"'></td></tr></table>";

				g=g+"<td>"+sfg+"</td>"; 

		

				t++;

			

		g=g+"</tr>";

	}



	r.innerHTML="<td><table style='width:"+width+"px;height:"+height+"px;' cellpadding=0 cellspacing=0>"+g+"</table></td>";

	if(tel>=100){



d=document.getElementById('canvas');

	d.style.backgroundImage='url('+aimg+')';

	d.style.backgroundSize=width+"px "+height+"px";

	r=document.getElementById('row');

r.innerHTML="";

	r=document.getElementById('rows');

r.innerHTML="";
	r=document.getElementById('view');

r.innerHTML="";

		ani();

	}

	else{

		 tel=tel+((3*inc));  inc=1+Math.ceil(tel/20);   

		setTimeout("fb()", (speed/4));

	}

	

	

}









var hassix=new Array();

for(o=0;o<100;o++){



hassi=1+(3*Math.random());

if(Math.random()>=.5){

hassi*=-1;

}

hassix[o]=hassi;









}



var dirr=1;





var hassix=new Array();

for(o=0;o<100;o++){

hassi=1+(2*Math.random());

if(Math.random()>=.5){

}

hassix[o]=hassi;

}







function ks(){

	d=document.getElementById('canvas');

	d.style.backgroundImage='url('+bimg+')';

	d.style.backgroundSize=width+"px "+height+"px";

	r=document.getElementById('row');

	g="";

	t=0;

ddsf=0;



	if(dirr==1){



	for(f=2;f<Math.round(10*tel/100);f++){

		g=g+"<tr>";

			for(h=0;h<Math.round(10*tel/100);h++){



				if((ast[(ddsf)]%2)==0){

				g=g+"<td style='background-image:url("+aimg+");background-size:100% 100%' id='td"+t+"'></td>";

				

}

else{

				g=g+"<td style='background-image:url("+bimg+");background-size:100% 100%' id='td"+t+"'></td>";



}

				ddsf++;				

				

			}

		g=g+"</tr>";





		if(f==50){

	dirr=-1;		

	}



	}



}

else{



	for(f=Math.round(10*(100-tel)/100);f>=0;f--){

		g=g+"<tr>";

	for(h=Math.round(10*(100-tel)/100);h>=0;h--){



				if((ast[(ddsf)]%2)==1){

				g=g+"<td style='background-image:url("+aimg+");background-size:100% 100%;' id='td"+t+"'></td>";

				

}

else{

				g=g+"<td style='background-image:url("+bimg+");background-size:100% 100%' id='td"+t+"'></td>";



}

				ddsf++;								

			}

		g=g+"</tr>";

	}



}

	r.innerHTML="<td><table style='width:100%;height:100%' cellpadding=0 cellspacing=0>"+g+"</table></td>";	

	if(tel==50){

dirr=-1;

	}

	if(tel>=100){

d=document.getElementById('canvas');

	d.style.backgroundImage='url('+aimg+')';

	d.style.backgroundSize=width+"px "+height+"px";

	r=document.getElementById('row');

r.innerHTML="";

	r=document.getElementById('rows');

r.innerHTML="";
	r=document.getElementById('view');

r.innerHTML="";

ani();

	}

	else{

		 tel=tel+((3*inc));  inc=1+Math.ceil(tel/20);   

		setTimeout("ks()", (speed/4));

	}		

}





















function newlnewr(){







	d=document.getElementById('canvas');

	d.style.backgroundImage="url("+aimg+")";

	d.style.backgroundSize="100% 100%";



	fs="";

	for(r=0;r<10;r++){

		li=(width/2)-(tel/100)*(width/2)*hassix[r];

		mi=(width/tel/100);

		re=width-(mi+li);

		fs=fs+"<tr><td><table cellspacing=0 cellpadding=0 style='width:100%;height:100%'><tr><td style='width:"+Math.floor(li)+"px;background-image:url("+bimg+");background-size:"+width+"px "+height+"px;background-position:0px "+(height-Math.round(height*r/10))+"px'></td><td style='width:"+Math.floor(width-(2*li))+"px'></td><td style='width:"+Math.floor(1*li)+"px;background-image:url("+bimg+");background-size:"+width+"px "+height+"px;background-position:"+Math.floor(li)+"px "+-Math.round(height*r/10)+"px'></td></tr></table></td></tr>";





	}

	fs+="	";





	c=document.getElementById('rows');

	c.innerHTML=fs;;



		if(tel>100){



d=document.getElementById('canvas');

	d.style.backgroundImage='url('+aimg+')';

	d.style.backgroundSize=width+"px "+height+"px";

	r=document.getElementById('row');

r.innerHTML="";

	r=document.getElementById('rows');

r.innerHTML="";
	r=document.getElementById('view');

r.innerHTML="";

ani();

	}

	else{

		 tel=tel+((3*inc));  inc=1+Math.ceil(tel/20);   

		setTimeout("newlnewr()", (speed/4));

	}



}









function leftrightslide(){

	r=document.getElementById('row');

	r.innerHTML="<td id='as'></td><td id='bs'></td>";

	d=document.getElementById('as');

	e=document.getElementById('bs');

	d.style.backgroundImage='url('+aimg+')';

	d.style.backgroundSize=width+"px "+height+"px";

	e.style.backgroundImage='url('+bimg+')';

	e.style.backgroundSize=width+"px "+height+"px";

	d.style.width=tel+"%";

	e.style.width=(100-tel)+"%";

	d.style.height="100%";

	e.style.height="100%";

	d.style.backgroundRepeat="no-repeat";

	e.style.backgroundRepeat="no-repeat";

	if(tel>=100){





d=document.getElementById('canvas');

	d.style.backgroundImage='url('+aimg+')';

	d.style.backgroundSize=width+"px "+height+"px";

	r=document.getElementById('row');

r.innerHTML="";

	r=document.getElementById('rows');

r.innerHTML="";
	r=document.getElementById('view');

r.innerHTML="";

		ani();

	}

	else{

		   tel=tel+((3*inc));  inc=1+Math.ceil(tel/20);   inc=1+Math.ceil(tel/20);   

		setTimeout("leftrightslide()", (speed/4));



	}

}















function fillInParts(){

	d=document.getElementById('canvas');

	d.style.backgroundImage='url('+aimg+')';

	d.style.backgroundSize=width+"px "+height+"px";

	r=document.getElementById('row');

	g="";

	t=0;

	for(f=0;f<10;f++){

		g=g+"<tr>";

			for(h=0;h<10;h++){

				if(as[t]==t || as[t]>=tel){

					g=g+"<td style='background-image:url("+bimg+");background-size:"+width+"px "+height+"px;background-position:"+Math.floor(-h*width/10)+"px "+Math.floor(-f*height/10)+"px' id='td"+t+"'></td>";

				}

				else{

					g=g+"<td  id='td"+t+"'></td>";

				}

				t++;

			}

		g=g+"</tr>";

	}



	r.innerHTML="<td><table style='width:100%;height:100%' cellpadding=0 cellspacing=0>"+g+"</table></td>";

	if(tel>=100){

	

d=document.getElementById('canvas');

	d.style.backgroundImage='url('+aimg+')';

	d.style.backgroundSize=width+"px "+height+"px";

	r=document.getElementById('row');

r.innerHTML="";

	r=document.getElementById('rows');

r.innerHTML="";
	r=document.getElementById('view');

r.innerHTML="";

		ani();

	}

	else{

		 tel=tel+((3*inc));  inc=1+Math.ceil(tel/20);   

		setTimeout("fillInParts()", (speed/4));

	}

	

	

}







function reotate(){
	if(document.getElementById('view')){
	s=document.getElementById('view');

	s.innerHTML="<img src='"+bimg+"' id='baa' style='width:"+width+"px;height:"+height+"px'>";

	r=document.getElementById('row');

	r.innerHTML="<td id='aad'></td>"; 

	d=document.getElementById('aad');

	d.style.backgroundImage='url('+aimg+')';

	d.style.backgroundSize=width+"px "+height+"px";

	xp="rotate("+(0+(tel*.9*1))+"deg)";

	s.style.left=(-width*tel/100)+"px";

	s.style.top=(-height*tel/100)+"px";





	document.getElementById("baa").style.WebkitTransform = xp; 

	document.getElementById("baa").style.msTransform = xp; 

	document.getElementById("baa").style.transform = xp;

	if(tel>=100){



d=document.getElementById('canvas');

	d.style.backgroundImage='url('+aimg+')';

	d.style.backgroundSize=width+"px "+height+"px";

	r=document.getElementById('row');

r.innerHTML="";

	r=document.getElementById('rows');

r.innerHTML="";
	r=document.getElementById('view');

r.innerHTML="";

		ani();

	}

	else{

		 tel=tel+((3*inc));  inc=1+Math.ceil(tel/20);   

		setTimeout("reotate()", (speed/4));

	}	d=document.getElementById('canvas');


}
	

}





function circl(){

	s=document.getElementById('view');

	r=document.getElementById('row');

	s.style.backgroundImage='url('+bimg+')';

	s.style.backgroundSize=width+'px '+height+'px';

	r.innerHTML="<td id='aas' align='center' valign='middle'></td>"; 

	d=document.getElementById('aas');

	d.innerHTML="<img src='"+aimg+"' style='borderd-radius:"+(tel*width/100)+";width:"+(tel*width/100)+"px;height:"+(tel*height/100)+"px'>";

	if(tel>=100){



d=document.getElementById('canvas');

	d.style.backgroundImage='url('+aimg+')';

	d.style.backgroundSize=width+"px "+height+"px";

	r=document.getElementById('row');

r.innerHTML="";

	r=document.getElementById('rows');

r.innerHTML="";
	r=document.getElementById('view');

r.innerHTML="";

		ani();

	}

	else{

		 tel=tel+((3*inc));  inc=1+Math.ceil(tel/20);   

		setTimeout("circl()", (speed/4));

	}

	

}



var getelds=0;



function fromtoblack(){

	bimg=bimg_;

	if(getelds<50){

		opaci=1-(getelds)/50;

	}

	else{

		opaci=1-((100-getelds)/50);

	}

	if(getelds<=1){

		derg=document.getElementById('row');

		derg.innerHTML="<td id='fs'><img src='"+bimg+"' style='width:100%;height:100%' id='xenca'></td>";

		document.getElementById('xenca').style.opacity=opaci;

	}

	if(getelds==50){

		dry=document.getElementById('row');

		dry.innerHTML="<td id='fs'><img src='"+aimg+"' style='width:100%;height:100%' id='xenbb'></td>";

		document.getElementById('xenbb').style.opacity=opaci;

	}

	getelds++;

	if(tel>=100){

		getelds=0;

d=document.getElementById('canvas');

	d.style.backgroundImage='url('+aimg+')';

	d.style.backgroundSize=width+"px "+height+"px";

	r=document.getElementById('row');

r.innerHTML="";

	r=document.getElementById('rows');

r.innerHTML="";
	r=document.getElementById('view');

r.innerHTML="";

		ani();

	}

	else{

		tel=tel+1;  inc=1+Math.ceil(tel/20);   

		setTimeout("crossfad()", (speed/4));

	}

}

var nrOfb=30;



function lamin(){

	tablz="<td><table style='width:100%;height:100%' cellspacing=0 cellpadding=0 border=0><tr>";

	xxz="";

	for(t=0;t<nrOfb;t++){

		for(a=0;a<1;a++){

			xxz=xxz+"<td><table style='width:100%;height:100%' cellspacing=0 cellpadding=0 border=0><tr><td style='width:"+tel+"%;background-image:url("+aimg+");background-size:"+width+"px "+height+"px;background-position:"+-(t/nrOfb*width)+"px 0px''></td><td style='width:"+(100-tel)+"%;background-image:url("+bimg+");background-size:"+width+"px "+height+"px;background-position:"+-(t/nrOfb*width)+"px 0px'></td></tr></table> </td>";

		}

	}

	tablz+=xxz+"</tr></table></td>";

	ff=document.getElementById('row');

	ff.innerHTML=tablz;

	tel=tel+((3*inc));  inc=1+Math.ceil(tel/20);

	if(tel>=100){

d=document.getElementById('canvas');

	d.style.backgroundImage='url('+aimg+')';

	d.style.backgroundSize=width+"px "+height+"px";

	r=document.getElementById('row');

r.innerHTML="";

	r=document.getElementById('rows');

r.innerHTML="";
	r=document.getElementById('view');

r.innerHTML="";
ani();

	}

	else{

		setTimeout("lamin()", (speed/4));

	}

}



function crossfad(){

	r=document.getElementById('row');

	r.innerHTML="<td id='fs'><img src='"+aimg+"' style='position:fixed;left:0;top:0;width:"+width+"px;height:"+height+"px' id='ags'><img src='"+bimg+"' style='position:fixed;left:0;top:0;width:"+width+"px;height:"+height+"px' id='bgs'></td>";

	d=document.getElementById('ags');

	e=document.getElementById('bgs');

	d.style.opacity=((tel)/100);

	e.style.opacity=((100-tel)/100);

	if(tel>=100){

	d=document.getElementById('canvas');

	d.style.backgroundImage='url('+aimg+')';

	d.style.backgroundSize=width+"px "+height+"px";

r=document.getElementById('row');

r.innerHTML="";


d=document.getElementById('canvas');

	d.style.backgroundImage='url('+aimg+')';

	d.style.backgroundSize=width+"px "+height+"px";

	r=document.getElementById('row');

r.innerHTML="";

	r=document.getElementById('rows');

r.innerHTML="";
	r=document.getElementById('view');

r.innerHTML="";

	ani();

	}

	else{

		 tel=tel+((3*inc));  inc=1+Math.ceil(tel/20);   

		setTimeout("crossfad()", (speed/4));

	}

	

}

var rcx1=1*Math.random();

var rcy1=2*Math.random();



function swipe(){

if(tel<100){

if(tel<50){

d=document.getElementById('row');

d.style.backgroundSize=width+"px "+height+"px";

cp="<td>";

for(t=1;t<(tel*4);t+=4){

	x=t+0;

	y=Math.round(rcy1*t)+0;

	cp=cp+"<img src='"+bimg+"' style='width:"+width+"px;height:"+height+"px;position:fixed;left:"+x+"px;top:"+y+"px;opacity:"+( 1-((t*1)/100))+"'>";

}

d.innerHTML=cp+"</td>";

}

else{

d=document.getElementById('row');

d.style.backgroundSize=width+"px "+height+"px";

cp="<td>";

for(t=(4*(100-tel));t>=0;t-=4){

	x=t+0;

	y=Math.round(rcy1*t)+0;

	cp=cp+"<img src='"+aimg+"' style='width:"+width+"px;height:"+height+"px;position:fixed;left:"+x+"px;top:"+y+"px;z-index:"+t+";opacity:"+( 1-((t*1)/100))+"'>";

}

d.innerHTML=cp+"</td>";

}

tel++;

		 tel=tel+((3*inc));  inc=1+Math.ceil(tel/20); 

		jo3=Math.floor(speed/3);  

				setTimeout("swipe()", (speed/4));

}

else{

d=document.getElementById('canvas');

	d.style.backgroundImage='url('+aimg+')';

	d.style.backgroundSize=width+"px "+height+"px";

	r=document.getElementById('row');

r.innerHTML="";

	r=document.getElementById('rows');

r.innerHTML="";

	r=document.getElementById('view');

r.innerHTML="";

ani();



}



}





var ddx=15+Math.round(10*Math.random());

var ddy=15+Math.round(10*Math.random());



var xcst = new Array();

var ycst = new Array();

var wcst = new Array();

var hcst = new Array();



var spxy = new Array();





for(x=0;x<ddx;x++){

	xcst[x]=(width*(x-1)/ddx)+(Math.random()*(width/(ddx-2)));

}

for(y=0;y<ddy;y++){

	ycst[y]=(height*(y-1)/ddy)+(Math.random()*(height/(ddy-2)));

}



for(x=0;x<(ddx-1);x++){

	wcst[x]=xcst[(x+1)]-xcst[x];

}

for(y=0;y<(ddy-1);y++){

	hcst[y]=ycst[(y+1)]-ycst[y];

}



for(n=0;n<(ddx*ddy);n++){

	spxy[n]=1+(4*Math.random());

}













function fxy(td, tmax, x,y,sp){

	t=3.5*td;

	res=new Array();

	hx=width/2;

	hy=height/2;

	rc=(hy-y)/(hx-x);

		if(x<hx){

		xx=x-(t*sp);

		yy=y-(t*rc*sp);

		}

		else{

		xx=x+(t*sp);

		yy=y+(t*rc*sp);

		}

		



	res[0]=xx;

	res[1]=yy;

	return res;

		

	

}



function exex(){



	d=document.getElementById('canvas');

	d.style.backgroundImage="url("+aimg+")";

	d.style.backgroundSize="100% 100%";

	m=0;

	str="<td>";

	st="";

	for(x=0;x<(ddx-1);x++){

		for(y=0;y<(ddy-1);y++){

			funct=fxy(tel, 100, xcst[x],ycst[y],spxy[m]);

				st=st+"<div style='background-image:url("+bimg+");background-size:"+width+"px "+height+"px;background-position:"+Math.floor(-xcst[x])+"px "+Math.floor(-ycst[y])+ "px;position:fixed;left:"+Math.floor(funct[0])+"px;top:"+Math.floor(funct[1])+"px;width:"+Math.floor(wcst[x])+"px;height:"+Math.floor(hcst[y])+"px'></div>";

			m++;

		}

		

	}

	str=str+st+"</td>";

	cv=document.getElementById('row');

	cv.innerHTML=str;

	if(tel>100){



d=document.getElementById('canvas');

	d.style.backgroundImage='url('+aimg+')';

	d.style.backgroundSize=width+"px "+height+"px";

	r=document.getElementById('row');

r.innerHTML="";

	r=document.getElementById('rows');

r.innerHTML="";
	r=document.getElementById('view');

r.innerHTML="";

	ani();

	}

	else{

	tel=tel+((3*inc));  inc=1+Math.ceil(tel/20); 

		setTimeout("exex()", (speed/4));

	}	



}



function dropp(){

	d=document.getElementById('canvas');

	d.style.backgroundImage='url('+aimg+')';

	d.style.backgroundSize=width+"px "+height+"px";

	r=document.getElementById('row');

	fs="";



	for(fd=70;fd<=770;fd+=70){

		fdd=6*(tel/25)*fd;

		fs+="<td style='background-repeat:no-repeat;background-size:"+width+"px "+height+"px;background-image:url("+bimg+");background-position:"+(-fd)+"px "+((fdd*4/7))+"px'></td>";

	}

	fs+=""

	r.innerHTML=fs;

	if(tel>=85){
	//tel=100;

				d=document.getElementById('canvas');

	d.style.backgroundImage='url('+aimg+')';

	d.style.backgroundSize=width+"px "+height+"px";

r=document.getElementById('row');

r.innerHTML="";

r=document.getElementById('view');

r.innerHTML="";

		ani();

	}

	else{

		 tel=tel+1;  inc=1+Math.ceil(tel/40);   

		setTimeout("dropp()", (speed/4));

	}	

}

var atse=0;

var bimg_="";



blackwhitet=0;

var aallcoutries="AFGHANISTAN|ALBANIA|ALGERIA|ANDORRA|ANGOLA|ANTIGUA-BARBUDA|ARGENTINA|ARMENIA|AUSTRALIA|AUSTRIA|AZERBAIJAN|BAHRAIN|BANGLADESH|BARBADOS|BELARUS|BELGIUM|BELIZE|BENIN|BHUTAN|BOLIVIA|BOSNIA-HERZEGOVINA|BOTSWANA|BRAZIL|BRUNEI|BULGARIA|BURKINA_FASO|BURUNDI|CABO_VERDE|CAMBODIA|CAMEROON|CANADA|CENTRAL_AFRICAN_REPUBLIC|CHAD|CHILE|CHINA|COLOMBIA|COMOROS|COSTA_RICA|CROATIA|CUBA|CYPRUS|CZECH_REPUBLIC|DENMARK|DJIBOUTI|DOMINICA|DOMINICAN_REPUBLIC|ECUADOR|EGYPT|EL_SALVADOR|EQUATORIAL_GUINEA|ERITREA|ESTONIA|ESWATINI|ETHIOPIA|FEDERATED_STATES_OF_MICRONESIA|FIJI|FINLAND|FRANCE|GABON|GEORGIA|GERMANY|GHANA|GREECE|GRENADA|GUATEMALA|GUINEA|GUINEA-BISSAU|GUYANA|HAITI|HONDURAS|HUNGARY|ICELAND|INDIA|INDONESIA|IRAN|IRELAND|ISRAEL|ITALY|JAMAICA|JAPAN|JORDAN|KAZAKHSTAN|KENYA|KIRIBATI|KOSOVO|KUWAIT|KYRGYZSTAN|LAOS|LATVIA|LEBANON|LESOTHO|LIBERIA|LIBYA|LIECHTENSTEIN|LITHUANIA|LUXEMBOURG|MADAGASCAR|MALAWI|MALAYSIA|MALDIVES|MALI|MALTA|MARSHALL_ISLANDS|MAURITANIA|MAURITIUS|MEXICO|MOLDOVA|MONACO|MONGOLIA|MONTENEGRO|MOROCCO|MOZAMBIQUE|MYANMAR|NAMIBIA|NAURU|NEPAL|NETHERLANDS|NEW_ZEALAND|NICARAGUA|NIGER|NIGERIA|NORTH_KOREA|NORTH_MACEDONIA|NORWAY|OMAN|PAKISTAN|PALAU|PALESTINE|PANAMA|PAPUA_NEW_GUINEA|PARAGUAY|PERU|PHILIPPINES|PHOTOGRAPHY|POLAND|PORTUGAL|QATAR|REPUBLIC_OF_THE_CONGO|ROMANIA|RUSSIA|RWANDA|SAINT_LUCIA|SAINT_VINCENT-THE_GRENADINES|SAMOA|SAN_MARINO|SAUDI_ARABIA|SENEGAL|SERBIA|SEYCHELLES|SIERRA_LEONE|SINGAPORE|SLOVAKIA|SLOVENIA|SOLOMON_ISLANDS|SOMALIA|SOUTH_AFRICA|SOUTH_KOREA|SOUTH_SUDAN|SPAIN|SRI_LANKA|SUDAN|SURINAME|SWEDEN|SWITZERLAND|TAJIKISTAN|TANZANIA|THAILAND|TIMOR-LESTE|TOGO|TONGA|TRINIDAD-TOBAGO|TUNISIA|TURKEY|TURKMENISTAN|TUVALU|UGANDA|UKRAINE|UNITED_ARAB_EMIRATES|UNITED_KINGDOM|UNITED_STATES|URUGUAY|UZBEKISTAN|VANUATU|VATICAN_CITY|VENEZUELA|VIETNAM|ZAMBIA|ZIMBABWE";
var capia=aallcoutries.split("|");

function lf(){

atse++;

bimg=aimg;
bimg=aaaimg;




var img2=new Image();


img2.onload = function() {


if(!(glav>=20  && glav<40 ) && false){
aimg=imgg[(atse%imgg.length)]; //"https://maghreb.sourceforge.io/uploads/ss/Image"+(atse%50)+".jpg";

}
else{
//var cap=capitts.split('<br>');



now = new Date()  
secondsSinceEpoch = Math.round(now.getTime() / 1000); 
dsf=secondsSinceEpoch%(60*60*24);


//red=60*60*24 = (196*19)
vvr=dsf/(69*60*24)*1440;

abt=Math.round(vvr)%196;
abt=Math.floor(Math.random()*capia.length);



wcapi=capia[abt];



aimg=imgg[(atse%imgg.length)]; //"https://maghreb.sourceforge.io/nm2/"+wcapi.replace(" ","_")+"/Image"+(atse%18)+".jpg";
aaimg=aimg;
}
var img =new Image();














img.onload = function() {


//bimg=aimg;
tel=0;

onl();

document.title=(atse%14)+"vv";


















if((atse%14)==14){

crossfad();

}



if((atse%14)==0){

circl();



}

if((atse%14)==1){



//reotate();

}



if((atse%14)==2){

//explode();

exex();

}





if((atse%14)==3){

leftrightslide();

}





if((atse%14)==4){

fillInParts();



}



if((atse%14)==5 ||  (atse%14)==1 ){

crossfad();

}





if((atse%14)==6){

fb();

}

if((atse%14)==7){

ks();

}



if((atse%14)==8  ){

lr();

}



if((atse%14)==9){

blackwhitet++;

fromtoblack();



}





if((atse%14)==10){

lamin();

}



if((atse%14)==11){

dropp();

}



if((atse%14)==12){

swipe();

}



if((atse%14)==13){

newlnewr();

}



















};



img.onerror = function() {

lf();

this.onerror = null;



};



img.src = aimg;
aaaimg=aimg;
}



if((blackwhitet)%2==0){

bimg_="https://xtrm.sourceforge.io/black.jpg";

}

else{

bimg_="https://xtrm.sourceforge.io/white.jpg";



}

img2.src=bimg_;

}











function readReady(){




	

}



readReady();



function lfff(){



//ooww = document.getElementById('bod').offsetWidth;

//oohh = document.getElementById('bod').offsetHeight;

//width=ooww;

//height=oohh;



atse++;

bimg=aimg;

var img2=new Image();

img2.onload = function() {



aimg=imglst[(atse%imglst.length)];



var img = new Image();

img.onload = function() {

tel=0;

onl();

if((atse%14)==0){

circl();



}

if((atse%14)==1){



reotate();

}



if((atse%14)==2){

//explode();

exex();

}





if((atse%14)==3){

leftrightslide();

}





if((atse%14)==4){

fillInParts();



}



if((atse%14)==5){

crossfad();

}



if((atse%14)==6){

fb();

}

if((atse%14)==7){

ks();

}



if((atse%14)==8){

lr();

}



if((atse%14)==9){

blackwhitet++;

fromtoblack();



}





if((atse%14)==10){

lamin();

}



if((atse%14)==11){

dropp();

}



if((atse%14)==12){

swipe();

}



if((atse%14)==13){

newlnewr();

}

document.title=(atse%14)+"vv";

};



img.onerror = function() {

lf();

this.onerror = null;

};

img.src = aimg;

}

if((blackwhitet)%2==0){

bimg_="black.jpg";

}

else{

bimg_="white.jpg";



}

img2.src=bimg_;

}

var www=0;



function waits(){

	if(www==2){

		lf();

	}

	else{

		www++;

		setTimeout("waits()", 1345);

	}	

}



function lr(){

	d=document.getElementById('canvas');

	d.style.backgroundImage='url('+aimg+')';

	d.style.backgroundSize=width+"px "+height+"px";

	r=document.getElementById('row');

	g="";

	t=0;

	for(t=0;t<20;t++){

		g=g+"<tr><td style='width:"+Math.round(50-(tel*.5))+"%;height:"+Math.round(height/20)+"px;background-image:url("+bimg+");background-size:"+width+"px "+Math.round(height/1)+"px;background-position:0px "+Math.round(100*t/20)+"%'></td><td style='width:"+tel+"%;height:"+Math.round(height/20)+"px;background-image:url("+aimg+");background-size:"+width+"px "+Math.round(height/1)+"px;background-position:"+tel+"% "+Math.round(100*t/20)+"%'><td style='width:"+Math.round(50-(tel*.5))+"%;height:"+Math.round(height/20)+"px;background-image:url("+bimg+");background-size:"+width+"px "+Math.round(height/1)+"px;background-position:"+tel+"% "+Math.round(100*t/20)+"%'></td></tr>";

	}

	r.innerHTML="<td><table style='width:100%;height:100%' cellpadding=0 cellspacing=0>"+g+"</table></td>";

	if(tel>=100){

				d=document.getElementById('canvas');

	d.style.backgroundImage='url('+aimg+')';

	d.style.backgroundSize=width+"px "+height+"px";

r=document.getElementById('row');

r.innerHTML="";

r=document.getElementById('view');

r.innerHTML="";

		ani();

	}

	else{

		 tel=tel+((3*inc));  inc=1+Math.ceil(tel/20);   

		setTimeout("lr()", (speed/4));

	}

}





var xc=new Array();

var yc=new Array();

var xx=new Array();

var yy=new Array();

var xy=new Array();

var sxy=new Array();

var nrOfba=10;



function rftrft(){

	d=document.getElementById('row');

	d.style.backgroundImage="url("+aimg+")";

	d.style.backgroundSize=width+"px "+height+"px";



	for(a=0;a<nrOfb;a++){

		xc[a]=Math.round(Math.random()*width);

		yc[a]=xc[a]; //Math.round(Math.random()*height);	



	}

	xc.sort(function(a, b){return a . b});

	yc.sort(function(a, b){return a . b});

	str="";

	ffe=0;

	for(x=1;x<(xc.length);x++){

		for(y=0;y<(xc.length);y++){

			col="background-color:black";

			col="background-image:url("+bimg+");background-size:"+width+"px "+height+"px;background-position:"+-xc[x]+"px "+-yc[y]+";";

			str+="<div id='tb"+ffe+"' style='"+col+";position:fixed;left:"+xc[x]+"px;top:"+yc[y]+"px;width:"+(xc[(x+1)]-xc[x])+";height:"+(yc[(y+1)]-yc[y])+"'></div>";

			xxyy=new Array();

			xx[ffe]=((xc[(x+1)])); //+xc[x])/2);	

			yy[ffe]=((yc[(y+1)])); //+yc[y])/2);

			xy[ffe]=xxyy;

			sxy[ffe]=.5+(5*Math.random());		

			ffe++;	

		}

	}

	document.getElementById('row').innerHTML=str;

}



function explode(){

	if(tel==0){

	rftrft();

	}

	sts="";

	nwvv=width/8*(tel+0)/100;

	for(i=0;i<xy.length;i++){

		d=document.getElementById('tb'+i);

		if(xx[i]>(width/2)){

			rrx=xx[i]+(sxy[i]*nwvv*xx[i]/xx[i]/Math.abs(xx[i]/width/2));

		}

		else{

			rrx=xx[i]-(sxy[i]*nwvv*yy[i]/xx[i]/Math.abs(xx[i]/width/2));

		}

		if(yy[i]>(height/2)){

			rry=yy[i]+(sxy[i]*nwvv*xx[i]/xx[i]/Math.abs(yy[i]/height/2));

		}

		else{

			rry=yy[i]-(sxy[i]*nwvv*yy[i]/xx[i]/Math.abs(yy[i]/height/2));

		}

		d.style.left=Math.round(rrx)+"px";

		d.style.top=Math.round(rry)+"px";				

	}

	if(tel<=110){

		tel+=1;

		setTimeout("explode()",(speed/4));

	}

	else{

	d=document.getElementById('canvas');

	d.style.backgroundImage='url('+aimg+')';

	d.style.backgroundSize=width+"px "+height+"px";

	

r=document.getElementById('row');

r.style.backgroundImage='';

r.innerHTML="";

		ani();

	}

}

function ani(){
document.getElementById('row').style.backgroundImage='none';
document.getElementById('rows').style.backgroundImage='none';
document.getElementById('view').style.backgroundImage='none';

www=0;

onl();

waits();

}






var spds=new Array();
r=0;
for(fd=70;fd<=770;fd+=70){
spds[r]=(1/100)+(2*Math.random()/100);
r++;
}



var ainni=0;


/*Returns Boolean of read of Media file if has a valid duration*/

function triggeredrrfy() {

}














function onl(){






 element = document.getElementById('topper');
 positionInfo = element.getBoundingClientRect();
 height = Math.round(positionInfo.height*1.2);
 width = Math.round(positionInfo.width*1.2);
//document.title="OK."+(atse%14);
setTimeout("onl()", 380);


}

var fsfff=0;
function lfo(){
if(fsfff<3){

fsfff++;

setTimeout("lfo()", 3000);
}
else{
lf();
}


}

</script>
</body>
<script>
onl();
//ridou ben massou 
</script>
</html>
