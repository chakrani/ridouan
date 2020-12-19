<?php
 header('Access-Control-Allow-Origin: *');

?>
<div id='tst'></div>
<script>
var xmlhttprrffmu = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");


function triggeredrrfyu() {
	if ((xmlhttprrffmu.readyState == 4) && (xmlhttprrffmu.status == 200)) {
		daf=xmlhttprrffmu.responseText;

		document.getElementById('tst').innerHTML=daf;		
	}
}	
		

function getMus(dsax){

        xmlhttprrffmu = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
	xmlhttprrffmu.onreadystatechange = triggeredrrfyu;
        xmlhttprrffmu.open("GET", dsax, true);
	xmlhttprrffmu.send(null);


	

}

<?php echo("getMus('".$_GET['url']."'); "); ?>
</script>
