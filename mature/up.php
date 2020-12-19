<?php

$uploaddir = 'filmx/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
@unlink($uploadfile );
if ( isset($_FILES["userfile"]) ) {
 
    move_uploaded_file($_FILES["userfile"]["tmp_name"], $uploadfile);
}

?>
