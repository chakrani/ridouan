<?php
 header('Access-Control-Allow-Origin: *');
?>
<div style='overflow:hidden;width:1000%;background-color:white;color:back;position:relative;left:0;font-size:20px' id='lines'></div>
<script>
<?php
@unlink("RSSLifestyle.xml");
if (strtoupper(substr(php_uname('s') , 0, 3)) === 'WIN')
{
@exec("curl\\bin\\curl -H \"User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.89 Safari/537.36\" -o RSSLifestyle.xml http://feeds.a.dj.com/rss/RSSLifestyle.xml");
}
else{
@exec("curl -H \"User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.89 Safari/537.36\" -o RSSLifestyle.xml http://feeds.a.dj.com/rss/RSSLifestyle.xml");
}

$page= file_get_contents("RSSLifestyle.xml");

$st="";

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

	$st.= $fd[0].". ".$p[0]." <span style='color:blue;font-size:20px'><b> | </b></span>".$daaa;

}

echo " var newshe=\"".str_replace("\"", "'", $st)."\"; ";
?>

document.getElementById('lines').innerHTML= newshe;
var tepp=0;
function walk(){
tepp=tepp-.4;
document.getElementById('lines').style.left=tepp+"%";
setTimeout("walk()", 200);
}
walk();

</script>
