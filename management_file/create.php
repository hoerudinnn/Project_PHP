<?php
// $anggota = [
//     ['nama' => 'Hoerudin', 'alamat' => 'Bogor'],
//     ['nama' => 'Bambang', 'alamat' => 'Bandung'],
//     ['nama' => 'Putri Nur', 'alamat' => 'Jakarta']
// ];

// $data = serialize($anggota);
// file_put_contents('data.txt', $data);

// $outuput = file_get_contents('data.txt');
// $hasil = unserialize($outuput);
// print_r($hasil);

// JSON
$karyawan = [
    ['nama' => 'Hoerudin', 'alamat' => 'Bogor'],
    ['nama' => 'Bambang', 'alamat' => 'Bandung'],
    ['nama' => 'Putri Nur', 'alamat' => 'Jakarta']
];

$data = json_encode($karyawan);
file_put_contents('karyawan.json', $data);

$output = file_get_contents('karyawan.json');
$hasil = json_decode($output);
print_r($hasil);