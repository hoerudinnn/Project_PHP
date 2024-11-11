<?php 
$pesan = "ini adalah file text";
file_put_contents("file.txt", $pesan);

$isiFile = file_get_contents("file.txt");
echo $isiFile;