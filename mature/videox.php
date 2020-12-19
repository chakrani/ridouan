<html>
<style type='text/css'>

width:100%;
height:100%;
video{
muted:"true";
volume:0;
}
</style>
<body onload="onPy()">
<div id='sdsdsd' style='width:100%;height:100%;position:fixed;left:0;top:0'>
<?php $fr=rand(0,92875)."r"; ?>
<script>
function onPy(){

}
we="<?php echo $_GET['id']; ?>";
var dsff=we.split('rl:');
var urlurl=dsff[1]
var onder=0;
if(dsff.length>1){
	onder=1;
}
else{
	var tag = document.createElement('script');
	tag.src = "yt.js?xxx=frt";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
}
var player<?php echo $fr; ?>;

function onYouTubePlayerAPIReady() {
    player<?php echo $fr; ?> = new YT.Player('ytplayer<?php echo $fr; ?>', {
		             events: {
                    'onReady': onPlayerReadyo
                },
        height: '100%',
        width: '100%',
		muted:1,
		mute:1,
        videoId: '<?php echo $_GET['id']; ?>',
		host: 'https://www.youtube.com',
        playerVars: {
          autoplay: 1,
		  mute:1,
		  muted:1,
		  start:"<?php echo $_GET['start']; ?>",
		  origin:'https://www.youtube.com',
          controls: 0,
          loop: 1,
          modestbranding: 1,
          showinfo: 0,
          autohide: 1,
          iv_load_policy: 3,
          rel: 0
        }
    });
  }
  
  
  
        function onPlayerReadyo() {
            player<?php echo $fr; ?>.playVideo();
            // Mute!
            player<?php echo $fr; ?>.mute();
        }

var done = false;
function onPlayerStateChange<?php echo $fr; ?>(event) {
       if (event.data == YT.PlayerState.PLAYING && !done) {
            event.target.setVolume(0);
			event.target.mute();
				done = true;
        }
}

function zoom() {
	rsizee();
}
if(onder==1){
	document.write("<iframe id=\"ytplayer<?php echo $fr;  ?>\"  src='"+urlurl+"' style='z-index:9999999;width:100%;height:100%;position:fixed;opacity:1' border=0 frameborder=0 scrolling='no' scrollbars='no'></iframe>");
}
else{
	document.write("<div id=\"ytplayer<?php echo $fr;  ?>\" onclick=\"player.playVideo();\" style=\"z-index:9999999;width:100%;height:100%;position:fixed;opacity:1\"></div>");
}
var oldw=-1;
var oldh=-1;
window.addEventListener("orientationchange", function(event) {
zoom();
});

function rsizee(){
sasd=document.getElementById('ytplayer<?php echo $fr;  ?>').getBoundingClientRect();
setTimeout("rsizee()", 2000);
}

function resiii(){
d=document.getElementById('sdsdsd');
cl=d.getBoundingClientRect();
hd=cl.height*1.3;
wd=Math.round(16/9*hd);
document.getElementById('ytplayer<?php echo $fr;  ?>').style.width=wd+"px";
document.getElementById('ytplayer<?php echo $fr;  ?>').style.height=hd+"px";
setTimeout("resiii()", 1000);
}
resiii();
</script>
</div>
</body>

