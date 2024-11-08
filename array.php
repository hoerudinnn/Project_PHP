<!-- Di PHP, array adalah tipe data yang bisa menyimpan banyak nilai dalam satu variabel. Array sangat berguna ketika kita ingin mengelola kumpulan data, misalnya daftar nama, angka, atau informasi lainnya. Ada beberapa jenis array di PHP: array indexed (berindeks), array associative (asosiasi), dan array multidimensional (multidimensi). -->

<!-- 1. Array Berindeks -->
<!-- Array berindeks adalah array yang menggunakan angka sebagai indeksnya. Indeks dimulai dari 0. -->

<!-- Contoh: -->

<?php
$buah = ["Apel", "Jeruk", "Pisang", "Mangga"]; // array dengan notasi pendek
// atau
$buah = array("Apel", "Jeruk", "Pisang", "Mangga"); // array dengan notasi lama

echo $buah[0]; // output: Apel
echo $buah[2]; // output: Pisang
?>
<!-- Dalam contoh ini, indeks 0 berisi "Apel", indeks 1 berisi "Jeruk", dan seterusnya. -->

<!-- 2. Array Asosiasi
Array asosiasi menggunakan key (kunci) sebagai indeks, bukan angka. Array ini sangat berguna ketika kita ingin menghubungkan data dengan label tertentu. -->

<!-- Contoh: -->

<?php
$umur = [
    "Andi" => 25,
    "Budi" => 20,
    "Cici" => 30
];

echo $umur["Andi"]; // output: 25
echo $umur["Cici"]; // output: 30
?>
<!-- Di sini, "Andi", "Budi", dan "Cici" adalah kunci yang dihubungkan dengan nilai umurnya masing-masing. -->

<!-- 3. Array Multidimensi
Array multidimensi adalah array yang berisi array lain di dalamnya. Ini berguna untuk menyimpan data yang lebih kompleks, misalnya data tabel. -->

<!-- Contoh: -->

<?php
$mahasiswa = [
    ["nama" => "Andi", "umur" => 25, "jurusan" => "Teknik Informatika"],
    ["nama" => "Budi", "umur" => 22, "jurusan" => "Ekonomi"],
    ["nama" => "Cici", "umur" => 23, "jurusan" => "Hukum"]
];

echo $mahasiswa[0]["nama"]; // output: Andi
echo $mahasiswa[1]["jurusan"]; // output: Ekonomi
?>

<!-- Di sini, setiap elemen di $mahasiswa adalah array asosiasi yang menyimpan detail tentang nama, umur, dan jurusan. -->

<!-- Fungsi-Fungsi Array Penting
count() – Menghitung jumlah elemen dalam array -->

<?php
$buah = ["Apel", "Jeruk", "Pisang"];
echo count($buah); // output: 3
?>

<!-- array_push() – Menambahkan elemen baru ke akhir array -->
<?php
$buah = ["Apel", "Jeruk"];
array_push($buah, "Pisang");
print_r($buah); // output: Array ( [0] => Apel [1] => Jeruk [2] => Pisang )
?>

<!-- array_merge() – Menggabungkan dua array -->
<?php
$array1 = ["Apel", "Jeruk"];
$array2 = ["Pisang", "Mangga"];
$hasil = array_merge($array1, $array2);
print_r($hasil); // output: Array ( [0] => Apel [1] => Jeruk [2] => Pisang [3] => Mangga )
?>

<!-- foreach – Menggunakan loop untuk mengakses semua elemen dalam array -->
<?php
$buah = ["Apel", "Jeruk", "Pisang"];

foreach ($buah as $item) {
    echo $item . " ";
}
// output: Apel Jeruk Pisang
?>

<!-- Contoh Lengkap Menggunakan Berbagai Jenis Array -->
<?php
$daftarBarang = [
    "Elektronik" => ["TV", "Kulkas", "AC"],
    "Pakaian" => ["Kaos", "Celana", "Jaket"],
    "Makanan" => ["Roti", "Susu", "Keju"]
];

foreach ($daftarBarang as $kategori => $barang) {
    echo "Kategori: $kategori\n";
    foreach ($barang as $item) {
        echo "- $item\n";
    }
}
?>