<?php
exec("youtube-dl    -g ".$_GET['id']." > l.txt");
$pa=file_get_contents("l.txt");
$paf=explode("\n", $pa);


echo "<script>var youid='".$paf[0]."'; </script>";
?>
<script>
document.write("<video autoplay=\"\" muted=\"\" controls=\"\"  playsinline=\"\" preload=\"metadata\"><source src=\""+youid+"\" type=\"video/webm\"><p>This browser does not support the video element.</p></video>");
</script>