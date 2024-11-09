<!-- Array multidimensi di PHP adalah array yang berisi array lain sebagai elemen-elemennya. Ini memungkinkan kita untuk menyimpan data yang lebih kompleks dalam struktur seperti tabel atau daftar yang bersarang. Array multidimensi umumnya digunakan ketika data memiliki beberapa lapisan atau tingkat hierarki, seperti daftar mahasiswa dengan nama, umur, dan jurusan masing-masing.

Jenis Array Multidimensi
Array multidimensi bisa memiliki lebih dari satu tingkat kedalaman, tetapi yang paling umum adalah array dua dimensi. Mari kita lihat contoh array dua dimensi dan tiga dimensi.

1. Array Dua Dimensi
Array dua dimensi adalah array yang di dalamnya terdapat array lain. Misalnya, kita memiliki daftar mahasiswa, dan setiap mahasiswa memiliki nama, umur, dan jurusan.

Contoh: -->

<?php
$mahasiswa = [
    ["nama" => "Andi", "umur" => 20, "jurusan" => "Teknik Informatika"],
    ["nama" => "Budi", "umur" => 21, "jurusan" => "Ekonomi"],
    ["nama" => "Cici", "umur" => 22, "jurusan" => "Hukum"]
];

echo $mahasiswa[0]["nama"]; // output: Andi
echo $mahasiswa[1]["jurusan"]; // output: Ekonomi
?>

<!-- Pada contoh di atas:

Setiap elemen dalam $mahasiswa adalah array asosiatif yang menyimpan detail satu mahasiswa.
$mahasiswa[0]["nama"] mengakses nama mahasiswa pertama, yaitu "Andi".
$mahasiswa[1]["jurusan"] mengakses jurusan mahasiswa kedua, yaitu "Ekonomi".
2. Array Tiga Dimensi
Array tiga dimensi adalah array yang mengandung array dua dimensi di dalamnya. Misalnya, kita memiliki daftar kelas, setiap kelas memiliki daftar mahasiswa, dan setiap mahasiswa memiliki nama dan umur.

Contoh: -->

<?php
$sekolah = [
    "KelasA" => [
        ["nama" => "Andi", "umur" => 20],
        ["nama" => "Budi", "umur" => 21]
    ],
    "KelasB" => [
        ["nama" => "Cici", "umur" => 22],
        ["nama" => "Doni", "umur" => 23]
    ]
];

echo $sekolah["KelasA"][0]["nama"]; // output: Andi
echo $sekolah["KelasB"][1]["umur"]; // output: 23
?>

<!-- Di sini:

KelasA dan KelasB adalah array yang berisi daftar mahasiswa.
$sekolah["KelasA"][0]["nama"] mengakses nama mahasiswa pertama di Kelas A, yaitu "Andi".
$sekolah["KelasB"][1]["umur"] mengakses umur mahasiswa kedua di Kelas B, yaitu 23.
Looping dalam Array Multidimensi
Anda bisa menggunakan foreach untuk mengakses data dalam array multidimensi.

Contoh: -->

<?php
$produk = [
    ["nama" => "Laptop", "harga" => 15000000, "stok" => 10],
    ["nama" => "Smartphone", "harga" => 5000000, "stok" => 15],
    ["nama" => "Tablet", "harga" => 3000000, "stok" => 5]
];

foreach ($produk as $item) {
    echo "Nama Produk: " . $item["nama"] . "\n";
    echo "Harga: Rp" . $item["harga"] . "\n";
    echo "Stok: " . $item["stok"] . "\n\n";
}
?>
<!-- Output:

Nama Produk: Laptop
Harga: Rp15000000
Stok: 10

Nama Produk: Smartphone
Harga: Rp5000000
Stok: 15

Nama Produk: Tablet
Harga: Rp3000000
Stok: 5
Di sini, kita menggunakan loop foreach untuk mengakses setiap item dalam array $produk dan menampilkan informasi detail produk.

Kesimpulan
Array multidimensi sangat berguna dalam situasi di mana data memiliki beberapa lapisan atau tingkat. Anda dapat menyimpan data kompleks dengan lebih rapi, sehingga memudahkan akses dan manipulasi data sesuai kebutuhan. -->