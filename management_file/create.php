<?php
$anggota = [
    ['nama' => 'Hoerudin', 'alamat' => 'Bogor'],
    ['nama' => 'Bambang', 'alamat' => 'Bandung'],
    ['nama' => 'Putri Nur', 'alamat' => 'Jakarta']
];

$data = serialize($anggota);
file_put_contents('data.txt', $data);

$outuput = file_get_contents('data.txt');
print_r($outuput);