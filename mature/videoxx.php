<body onload="onPy()">
<?php $fr=rand(0,92875)."r"; ?>
<div id="ytplayer<?php echo $fr;  ?>" onclick="player.playVideo();" style="z-index:9999999;width:100%;height:100%;position:fixed;left:0%;top:10%;opacity:1"></div>

<script>


function onPy(){

//	player.playVideo();
<?php  if($_GET['start']!="0"){ echo " player.seekTo(".$_GET['start'].", true);"; } ?>

player.playVideo();
  
  player.setVolume(0);
}


  // Load the IFrame Player API code asynchronously.
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	var player;
  // Replace the 'ytplayer' element with an <iframe> and
  // YouTube player after the API code downloads.
 
  function onYouTubePlayerAPIReady() {
    player = new YT.Player('ytplayer<?php echo $fr; ?>',{
	height: '100%',
      width: '100%', 
      videoId: '<?php echo $_GET['id']; ?>'
}); 




}	



</script>

</body>


