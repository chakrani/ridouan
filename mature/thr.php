<?php

	if($_GET['v']==0  || $_GET['v']==1  ){
	$f=@fopen($_GET['f'], "w");
	@fwrite($f, $_GET['v']);
	@fclose($f);
	}
?>
