<?php
$anggota = [
    ['nama' => 'Hoerudin', 'alamat' => 'Bogor'],
    ['nama' => 'Bambang', 'alamat' => 'Bandung'],
    ['nama' => 'Putri Nur', 'alamat' => 'Jakarta']
];

$data = json_decode('$anggota');
echo $data;