<?php
 header('Access-Control-Allow-Origin: *');
?>

<?php

@exec("php qupotes0.php > qupotes0.php.html"  );
@exec("php qupotes1.php > qupotes1.php.html"  );
@exec("php qupotes2.php > qupotes2.php.html"  );

@chmod("qupotes0.php.html", 0755);
@chmod("qupotes1.php.html", 0755);
@chmod("qupotes2.php.html", 0755);
?>
