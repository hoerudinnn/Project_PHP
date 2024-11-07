<?php
$nama = "Hoerudin";
$domisili = "Bogor";
$jenisKelamin = "Laki-laki";

echo "Selamat Pagi", "<h1>$nama</h1>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo $nama ?></h1>
    <h2>Domisili: <?Php echo $domisili ?></h2>
    <h2>Jenis Kelamin: <?php echo $jenisKelamin ?></h2>
</body>
</html>