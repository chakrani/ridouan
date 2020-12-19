
<?php
 header('Access-Control-Allow-Origin: *');
?>
<?php

@unlink("RSSWorldNews.xml");
if (strtoupper(substr(php_uname('s') , 0, 3)) === 'WIN')
{
@exec("curl\\bin\\curl -H \"User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.89 Safari/537.36\" -o RSSWorldNews.xml http://feeds.a.dj.com/rss/RSSWorldNews.xml");


}
else{
@exec("curl -H \"User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.89 Safari/537.36\" -o RSSWorldNews.xml http://feeds.a.dj.com/rss/RSSWorldNews.xml");

}
$page= file_get_contents("RSSWorldNews.xml");


$ss=explode("<title>", $page);
$str="";
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

        $str.= $fd[0].". ".$p[0].". ".$daaa;

}


$fi=fopen("news00.html", "w");
@fwrite($fi, $str);
@fclose($fi);
@chmod("news00.html", 0755);
unlink("news00.mp3");

$gg[0]=" -l en-gb ";
$gg[1]=" -l en-in ";
$gg[2]=" -l en-us ";

exec("pypy/pypy2.7-v7.3.0-linux64/bin/gtts-cli ".$gg[rand(0,2)]." -f news00.html -o news00.mp3");
@chmod('news00.mp3', 0755)



?>
