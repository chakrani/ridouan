﻿


<html>

<style>
html,body{
width:100%;
height:100%;
}
#div1 {
  position: relative;
  height: 2050px;
  width: 4100px;
  top:-2050px;
  left:-1000px;
  margin-left: 375px;
  border: 0px solid blue;
  -webkit-perspective: 2200px; /* Safari 4-8  */
  perspective: 1100px;
	
}
#div2, #div4 {
	overflow;hidden;
  padding: 2500px;
  position: absolute;
  border: 1px solid black;
  background-color: red;
  background: rgba(100,100,100,0.5); 
  -webkit-transform-style: preserve-3d; /* Safari 3-8  */  
  transform-style: preserve-3d;
	


}


</style>

<script>


var al=-1500-Math.ceil(200*Math.random());
var ho=-100-Math.ceil(100*Math.random());
var ddx=1;
var ddy=1;
var dx=1;
var dy=1;

if(Math.random()>.5){
dx*=-1;
}

if(Math.random()>.5){
dy*=-1;
}
var fwf=0;
var t=0;
function zwervers(){
d=document.getElementById('div2');
m=Math.random();
if(m>.99936 ){
dx=dx*-1;

}
m=Math.random();
if(m>.99946 ){
dy=dy*-1;

}

al=al+(dx*2);
ho=ho+(dy*2);


if(al>90){
dx*=-1;
}
if(al<-2500){
dx*=-1;
}
if(ho<1500){
dy*=-1;
}
if(ho>-2000){
dy*=-1;
}



d.style.backgroundPosition=al+"px "+ho+"px";

setTimeout("zwervers()", 200);
}

function activest(){
d=document.getElementById('stream');
d.play();
}

</script>
<body onload="player.playVideo();">
<div style='position:fixed;left:0;top:10%;width:10%;height:80%;background-image:url(white.jpg);background-size:100% 100%;opacity:.24'> &nbsp; </div>


<div id="ytplayer" onclick="player.playVideo();" style="z-index:9999999;width:80%;height:80%;position:fixed;left:10%;top:10%;opacity:1"></div>

<script>
  // Load the IFrame Player API code asynchronously.
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	var player;
  // Replace the 'ytplayer' element with an <iframe> and
  // YouTube player after the API code downloads.
 
  function onYouTubePlayerAPIReady() {
    player = new YT.Player('ytplayer', {
      height: '100%',
      width: '100%',
      start: '<?php echo $_GET['start']; ?>',
      videoId: '<?php echo $_GET['id']; ?>'
    });
  }
  

</script>




<div id='gl' style='position:fixed;top:0;left:0;width:100%;height:100%'></div>
<img src='white.jpg' style='position:fixed;top:10%;left:50%;width:28%;height:5%;opacity:0.1'>
<div frameborder=0 border=0 style='background-color:black;opacity:.611;position:fixed;top:0%;left:78%;width:22%;height:100%' ></div>
<div id='up' style='position:fixed;left:0;top:0;width:78%;height:10%;opacity:.76;'></div>

<script>
function news(){

}

</script>
<div  style='width:100%;height:100%;position:fixed;left:0;top:0'>    <div id="container" style='display:none'>        <section>                <form action="#" method="get">                <select name="lang">                    <option value="ca">Català / Catalan (ca)</option>                    <option value="cs">?eština / Czech (cs)</option>                    <option value="de">Deutsch / German (de)</option>                    <option value="en" selected>English (en)</option>                    <option value="es">Español / Spanish; Castilian (es)</option>                    <option value="fa">????? / Persian (fa)</option>                    <option value="fr">Français / French (fr)</option>                    <option value="hr">Hrvatski / Croatian (hr)</option>                    <option value="hu">Magyar / Hungarian (hu)</option>                    <option value="it">Italiano / Italian (it)</option>                    <option value="ja">??? / Japanese (ja)</option>                    <option value="ko">??? / Korean (ko)</option>                    <option value="ms">Melayu / Malay (ms)</option>                    <option value="nl">Nederlands / Dutch (nl)</option>                    <option value="pl">Polski / Polish (pl)</option>                    <option value="pt">Português / Portuguese (pt)</option>                    <option value="ro">Român? / Romanian (ro)</option>                    <option value="ru">??????? / Russian (ru)</option>                    <option value="sk">Slovensko / Slovak (sk)</option>                    <option value="sv">Svenska / Swedish (sv)</option>                    <option value="uk">?????????? / Ukrainian (uk)</option>                    <option value="zh">???? / Traditional Chinese (zh-TW)</option>                    <option value="zh-CN">???? / Simplified Chinese (zh-CN)</option>                </select>            </form>        </section>        <div class="players" id="player2-container" style='display:none'>                        <div class="media-wrapper">                <audio id="player2" preload="none" controls style="max-width:100%;">                                    </audio>            </div>            <br>            <div >                <select name="sources" id="sou">                    <option value="https://maghreb.sourceforge.io/guestbook/n/output.m3u8">HLSX</option>                    <option value="https://maghreb.sourceforge.io/guestbook/n/output.m3u8?">HLS</option>                </select><select name="stretching">                    <option value="auto" selected>Auto (default)</option>                    <option value="responsive">Responsive</option>                    <option value="fill" selected>Fill</option>                    <option value="none" selected>None (original dimensions)</option>                </select>            </div>            <div class="player-info">                             <div id="player2-rendername">                    <p class="error"></p>                </div>            </div>        </div>    </div>    <script>

    </script>
</div>

</body>
