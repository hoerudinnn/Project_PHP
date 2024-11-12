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

// Mendefinisikan array $karyawan yang berisi data nama dan alamat karyawan
$karyawan = [
    ['nama' => 'Hoerudin', 'alamat' => 'Bogor'],  // Data karyawan pertama
    ['nama' => 'Bambang', 'alamat' => 'Bandung'], // Data karyawan kedua
    ['nama' => 'Putri Nur', 'alamat' => 'Jakarta'] // Data karyawan ketiga
];

// Mengubah array $karyawan menjadi format JSON dan menyimpannya dalam variabel $data
$data = json_encode($karyawan);

// Menyimpan data JSON ke dalam file 'karyawan.json'
file_put_contents('karyawan.json', $data);

// Membaca data dari file 'karyawan.json' dan menyimpannya dalam variabel $output
$output = file_get_contents('karyawan.json');

// Mengubah data JSON yang dibaca menjadi array PHP dan menyimpannya dalam variabel $hasil
$hasil = json_decode($output);

// Menampilkan isi array $hasil ke layar (format yang sudah didekode dari JSON)
print_r($hasil);

// Penjelasan:
// $karyawan adalah array yang berisi data karyawan dalam format asosiatif (nama dan alamat).
// json_encode($karyawan) digunakan untuk mengonversi array PHP menjadi format JSON yang bisa disimpan atau dikirim melalui jaringan.
// file_put_contents('karyawan.json', $data) menyimpan data JSON ke dalam file bernama karyawan.json.
// file_get_contents('karyawan.json') digunakan untuk membaca isi dari file karyawan.json.
// json_decode($output) mengonversi data JSON yang dibaca menjadi array PHP.
// print_r($hasil) digunakan untuk menampilkan hasil array yang sudah didekode, sehingga Anda bisa melihat data dalam format array PHP.