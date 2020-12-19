<?php
 header('Access-Control-Allow-Origin: *');

@unlink("RSSWorldNews.xml");
if (strtoupper(substr(php_uname('s') , 0, 3)) === 'WIN')
{
@exec("curl\\bin\\curl -H \"User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.89 Safari/537.36\" -o RSSWorldNews.xml https://feeds.a.dj.com/rss/RSSWorldNews.xml");
}
else{
@exec("curl/bin/curl -H \"User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.89 Safari/537.36\" -o RSSWorldNews.xml https://feeds.a.dj.com/rss/RSSWorldNews.xml");
}
$page= file_get_contents("RSSWorldNews.xml");


$ss=explode("<title>", $page);
for($t=3;$t<count($ss);$t++){
@unlink("RSS".$t."WorldNews.xml");
	$fd=explode("</title>", $ss[$t]);

		$r=explode("CDATA[", $ss[$t]);
		$p=explode("]", $r[1]);
	$lin=explode("<link>", $ss[$t]);
	$neww=explode("</link>", $lin[1]);
if (strtoupper(substr(php_uname('s') , 0, 3)) === 'WIN')
{
@exec("curl\\bin\\curl -H \"User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.89 Safari/537.36\" -o RSS".$t."WorldNews.xml ".$neww[0]);
}
else{
@exec("curl/bin/curl -H \"User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.89 Safari/537.36\" -o RSS".$t."WorldNews.xml ".$neww[0]);

}

$dat= file_get_contents("RSS".$t."WorldNews.xml");



	$aaa=explode("<div class=\"wsj-snippet-body\">", $dat);
	$ds=explode("</div>", $aaa[1]);
	$daaa=strip_tags($ds[0]);

	$ec= $fd[0].". ".$p[0]." ".$daaa;
	$ee=explode(".",$ec);
	for($f=0;$f<count($ee);$f++){

	if(strlen($ee[$f])>4){	
	echo str_replace("\n", "", $ee[$f].". ");
	}

}

}

?>
