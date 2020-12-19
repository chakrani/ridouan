
<!DOCTYPE html>
<html>
	<head>
		<title>The Music Page - Home</title>
		<style type="text/css">

#didiv {
  width: 200px;
  height: 20px;
  background-color: red;
  color:white;
  position:fixed;
  left:-60px;
  top:30px;
	z-index:9001;
  text-align:center;
visibility:hidden;
  -ms-transform: rotate(-45deg); /* IE 9 */
  transform: rotate(-45deg);
      
}
			body,html{
			width:100%;
			height:100%;
			overflow:hidden;
 font-family: "Lucida Console", Courier, monospace;
			}
			.source_code { cbackground-color: #bbbbff; color:black; }	
			.player { cbackground-color: #bbbbff; color:black; border: 0px solid grey; }
			.file-title { display: inline-block; margin-right: 30px; }
		</style>

<!--script type='text/javascript' src='lib/midi.js'></script-->	
<script>
var tel=0;
var tels=0;
var maxtime=1000;
var plays=0;
wlh=window.location.href;
fsa=wlh.split("?i=");
dvb=fsa[1];
datad=dvb.split("|");
cva=datad[0];
var maxxx=parseInt(cva);
rva=datad[1];
axxx=rva;
var randd=parseInt(axxx);
//alert(randd+" "+maxxx);
var  xmlhttpsxqlxw = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");


function gti(){
  dsf=document.getElementById('aud');
                perso=dsf.currentTime/dsf.duration;
if(perso<.05){
document.getElementById('splays').style.display='';

}
else{
document.getElementById('splays').style.display='none';

}
document.getElementById('past').style.width=(perso*100)+"%";
document.getElementById('future').style.width=((1-perso)*100)+"%";
setTimeout("gti()", 500);

}
var begco=0;
function gefin(){
if(randd==1){
tel=Math.floor(maxxx*Math.random());
}
if(begco==0){
gti();
begco=1;
}
document.getElementById('splays').style.display='none';
document.getElementById('aud').src='guestbook/n/Track'+tel+'.mp3?vss='+Math.random();
document.getElementById('aud').play();

document.getElementById('recaud').volume=1;

document.getElementById('tab').style.display='none';
document.getElementById('tabi').style.display='';
document.getElementById('didiv').style.visibility='visible';
document.getElementById('didiv').innerHTML="<a href='guestbook/n/Track"+tel+".mid' style='text-decoration:none'><span style='font-size:10px;color:white'>Download</span></a>";


if(randd==0){
tel=(tels%maxxx);
tels++;
}

}

function triggeredsaxxxl()
{
	if ((xmlhttpsxqlxw.readyState == 4) && (xmlhttpsxqlxw.status == 200)) {

		maxtime=parseInt(""+xmlhttpsxqlxw.responseText);
		//alert(maxtime);
	}

}

var  xmlhttpsxql = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");

var iob=0;
function srd(){
/*
 xmlhttpsxql = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
       //xmlhttpsxql.onreadystatechange = triggeredsaxxxl;
        xmlhttpsxql.open('GET', 'rmp3.php?tel='+iob+'&hear='+Math.random(), true);
iob++;
        xmlhttpsxql.send(null);
	setTimeout("srd()", 65000);
*/
}
srd();

var lastfsaid="";

var  xmlhttpsxqlxwls = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
function triggeredsaxxxlls(){
	if ((xmlhttpsxqlxwls.readyState == 4) && (xmlhttpsxqlxwls.status == 200)) {

		oj=xmlhttpsxqlxwls.responseText;
		if(lastfsaid!=oj){
			document.getElementById('recaud').src=oj;
			lastfsaid=oj;
			document.getElementById('recaud').play();
		}
		//alert(maxtime);
	}

}


function getLastSaid(){
	
 xmlhttpsxqlxwls = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
	xmlhttpsxqlxwls.onreadystatechange = triggeredsaxxxlls;
	xmlhttpsxqlxwls.open('GET', 'a3-li.php?m=df&hear='+Math.random(), true);
	
	xmlhttpsxqlxwls.send(null);	
	setTimeout("getLastSaid()", 1000);
}

getLastSaid();

function getDur(){


 xmlhttpsxqlxw = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
	xmlhttpsxqlxw.onreadystatechange = triggeredsaxxxl;
	xmlhttpsxqlxw.open('GET', 'duram.php?m='+tel+'&hear='+Math.random(), true);
	
	xmlhttpsxqlxw.send(null);
}
var cffo=false;
function kick(){
if(cffo==false){
MIDIjs.play("guestbook/n/Track33.mid");
cffo=true;
}
}

</script>


</head>
	<body  style='background-color:#202020;background-image:url(EMA2.jpg);background-size:100% 100%' >
<div id='didiv'></div>
<audio style='display:none' id='aud' onended='gefin()'></audio>
<audio style='display:none' id='recaud' ></audio>
<div style='posistion:fixed;left:90%;top:0;width:10%;height:100%;z-index:9999999999' id='ins'></div>
<iframe src='slider2.html' id='tabi' style='display:none;width:100%;height:100%;position:fixed;top:0;left:0;' frameborder=0 border=0 scrolling='no' scrollbars='no'></iframe>
			<table id='tab' style='position:fixed;top:0;left:0;width:100%;height:100%' cellspacing=0 cellpadding=0 border=0><tr>
			 <td align='center' valign='middle'>

<span style="color:white;font-size:44px;">The Music &trade; Page</span><br><BR><BR><BR>
<img style='width:128px;height:128px' src='guestbook/im/Untitledx.gif'><BR>
<script>document.write("<span style='color:white;font-size:24px;'>Nick:</span><input type='text' value='Gast"+Math.round(1000+(Math.random()*9000))+"' id='nl' style='width:100px'>");</script>
<BR><BR>
<br><span style="color:white;font-size:14px;" onclick="gefin()"  onclicka="MIDIjs.play('guestbook/n/Track3.mid');">Click &amp; Start</span><br />
			</td></tr>
			</table>




			
				 <span id="MIDIjs.message" style="color: green;display:none"></span>
					<span id="MIDIjs.audio_time" style="color: green;display:none">1</span></div>
			
		
		<table style='position:fixed;left:0;top:98%;width:100%;height:5px' cellspacing=0 cellpadding=0 border=0><tr><td id='past' style='background-color:#0076D2;width:0%;height:5px'></td><td style='height:5px;width:100%;background-color:transparent' id='future'></td></tr></table>
		

		
		
		
	
			
		<script type='text/javascript'>
/*
		  function supported(seconds) {
			  if (-1 == seconds) {
				  return "Sorry, browser to old for get_duration().";
			  } else {
				  return seconds;
			  }
		  }
		  function displayDurations() {
			  var rockSpan = document.getElementById('duration-rock');
			  MIDIjs.get_duration('/midi/alan_jackson_dont_rock_the_jukebox.mid', 
					  function(seconds) { rockSpan.innerHTML = supported(seconds); });
			  
			  var unchainSpan = document.getElementById('duration-unchain');
			  MIDIjs.get_duration('/midi/bobby_sharp_unchain_my_heart.mid', 
					  function(seconds) { unchainSpan.innerHTML = supported(seconds); });
			  
			  var hinematovSpan = document.getElementById('duration-hinematov');
			  MIDIjs.get_duration('/midi/hinematov.mid', 
					  function(seconds) { hinematovSpan.innerHTML = supported(seconds); });
			  
			  var womanSpan = document.getElementById('duration-woman');
			  MIDIjs.get_duration('/midi/barbara_streisand_woman_in_love.mid', 
					  function(seconds) { womanSpan.innerHTML = supported(seconds); });
		  }
		
		  var message_span = document.getElementById('MIDIjs.message');
		  message_span.innerHTML = MIDIjs.get_audio_status();
		
		  MIDIjs.message_callback = display_status;
		  function display_status(message) {
		     message_span.innerHTML = message;
		  };
		
		  var time_span = document.getElementById('MIDIjs.audio_time');
		  MIDIjs.player_callback = display_time;
		  function display_time(player_event) {
		     time_span.innerHTML = Math.round(player_event.time);
  	      };
		  getDur();
		  gti();
		  //MIDIjs.play('guestbook/n/Track0.mid');
*/		

document.write("<div style='position:fixed;top:0;left:0;width:100%;height:100%;z-index:-1'   ontouchstart=\"kick();\"  onclickw='gefin()' onclicks=\"MIDIjs.play('guestbook/n/Track"+19+".mid');\"></div>");

var  xmlhttpsxqlt = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");

var iob=0;
function srd(){
/*
 xmlhttpsxql = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
       //xmlhttpsxql.onreadystatechange = triggeredsaxxxl;
        xmlhttpsxql.open('GET', 'rmp3.php?tel='+iob+'&hear='+Math.random(), true);
iob++;
        xmlhttpsxql.send(null);
        setTimeout("srd()", 65000);
*/
}
srd();
function sub(){

xmlhttpsxqlt = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");

        //.onreadystatechange = triggeredsaxxxl;
        xmlhttpsxqlt.open('GET', 'post.php?text='+encodeURIComponent(document.getElementById('string').value)+'&nick='+encodeURIComponent(document.getElementById('nl').value), true);

        xmlhttpsxqlt.send(null);
document.getElementById('string').value='';
}


var  xmlhttpsxqltn = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");


function trig()
{
        if ((xmlhttpsxqltn.readyState == 4) && (xmlhttpsxqltn.status == 200)) {

                document.getElementById('out').innerHTML=xmlhttpsxqltn.responseText;
        }

}


function subn(){

xmlhttpsxqltn = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");

        xmlhttpsxqltn.onreadystatechange = trig;
        xmlhttpsxqltn.open('GET', 'text.html?v='+Math.random(), true);

        xmlhttpsxqltn.send(null);

	setTimeout("subn()", 1000);
}

function search(ele) {
    if(event.key === 'Enter') {
	vo=ele.value;
        if(vo.length>0){
	sub();
	}        
    }


if (event.code == 'KeyZ' && (event.ctrlKey || event.metaKey)){
document.getElementById('tabi').src='nx.html';

}


}

</script>


<iframe src='yyyy.php?c' style='display:none;position:fixed;top:0;left:0;width:100%;height:100%' border=0 frameborder=0 scrolling='no' scrollbars='no' id='splays'></iframe>

<table border="0" style="width:60%;left:20%;height:30px;position:fixed;top:90%;text-align:center"><tbody><tr><td style="width:70%" valign="middle"><input onkeydown="search(this)" type="text" id="string" style="width:100%;height:30px" autofocus=""></td><td valign="middle" style="width:30%"><iframe src="rmic.html" style="height:30px" border="0" frameborder="0" scrollbars="no" scrolling="no"></iframe></td></tr></tbody></table>
<div id='out' style='position:fixed;top:2%;left:0;width:100%;text-align:center;height:30px'></div>
<iframe src='webm.html' style='position:fixed;width:10%;height:10%;right:0;top:10%' frameborder=0 border=0></iframe>
<script>
subn();
var ooktel=0;
var telook=0;
var ooko=-1;
function pen(ur){
telook=0;
ooktel++;
document.getElementById('tabi').src=ur;	
}


function teli(){
if(ooktel!=0 && ooktel!=ooko && telook==1){
ooko=ooktel;
document.getElementById('tabi').src='nx.html';

}
telook=telook=1;
setTimeout("teli()", 88000);
}
teli();

</script>
</body>
</html>
