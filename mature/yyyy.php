
<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
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


</head>
	<body  style='background-color:#202020;backgdround-image:url(guestbook/im/world1600-800.jpg);background-size:100% 100%' id='bd' >

<script>

function swab(){
d=new Array();
d[0]="_EMA1.jpg";
d[1]="_EMA2.jpg";
d[2]="_EMA3.jpg";
da=new Date();
fdg=da.getHours();
document.getElementById('bd').style.backgroundImage="url("+d[(fdg%d.length)]+")";
setTimeout("swab()", 1800);

}
swab();

</script>

<div id='didiv'></div>
<div style='posistion:fixed;left:90%;top:0;width:10%;height:100%' id='ins'></div>
<!--iframe src='nx.html' id='tabi' style='display:none;width:100%;height:100%;position:fixed;top:0;left:0;z-index:-100' frameborder=0 border=0 scrolling='no' scrollbars='no'></iframe-->
		<h1 class="player">
			<table id='tab' style='position:fixed;top:0;left:0;width:100%;height:100%' cellspacing=0 cellpadding=0 border=0><tr>
			 <td align='center' valign='middle'>

<span style="color:white;font-size:44px;">The Music &trade; Page</span><br><BR><BR><BR>
<img style='width:128px;height:128px' src='guestbook/im/Untitledx.gif'><BR>
<br><span style="color:white;font-size:14px;" onclicmmk="MIDIjs.play('guestbook/n/Track3.mid');"></span><br />
			</td></tr>
			</table>

		
		<p name="example">
		<div class="player">



			
			<div style="display:none;font-size: 71%;font-size: 71%">
				Status: <span id="MIDIjs.message" style="color: green">Initializing ...</span>
				<div>
					Audio time (s): <span id="MIDIjs.audio_time" style="color: green">1</span></div>
			</div>
		</div><BR>
		<table style='position:fixed;left:0;top:98%;width:100%;height:5px' cellspacing=0 cellpadding=0 border=0><tr><td id='past' style='background-color:#0076D2;width:0%;height:5px'></td><td style='height:5px;width:100%;background-color:transparent' id='future'></td></tr></table>
		

		
		
		
	
			
		

	</body>
</html>
