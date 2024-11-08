<!-- Array asosiatif di PHP adalah array yang menggunakan key (kunci) khusus, bukan angka indeks standar, untuk mengidentifikasi setiap elemen dalam array. Ini berguna ketika Anda ingin menghubungkan nilai dengan label tertentu. Misalnya, array asosiatif bisa berguna untuk menyimpan data seperti nama-nilai pasangan.

Membuat Array Asosiatif
Untuk membuat array asosiatif, Anda bisa menggunakan tanda => untuk menetapkan kunci dan nilainya.

Contoh: -->

<?php
$umur = [
    "Andi" => 25,
    "Budi" => 20,
    "Cici" => 30
];

echo "Umur Andi adalah " . $umur["Andi"]; // output: Umur Andi adalah 25
echo "Umur Cici adalah " . $umur["Cici"]; // output: Umur Cici adalah 30
?>
<!-- Pada contoh ini, kunci "Andi", "Budi", dan "Cici" digunakan untuk mengakses umur masing-masing orang, yang disimpan sebagai nilai.

Mengakses Elemen dalam Array Asosiatif
Anda bisa mengakses nilai-nilai di dalam array asosiatif menggunakan kunci yang terkait dengan nilai tersebut. -->

<?php
$mahasiswa = [
    "nama" => "Hoerudin",
    "umur" => 23,
    "jurusan" => "Statistika"
];

echo "Nama: " . $mahasiswa["nama"]; // output: Nama: Hoerudin
echo "Umur: " . $mahasiswa["umur"]; // output: Umur: 23
echo "Jurusan: " . $mahasiswa["jurusan"]; // output: Jurusan: Statistika
?>
<!-- Looping Array Asosiatif dengan foreach
Anda bisa menggunakan foreach untuk mengakses setiap elemen dalam array asosiatif.

Contoh: -->

<?php
$produk = [
    "Laptop" => 15000000,
    "Smartphone" => 5000000,
    "Tablet" => 3000000
];

foreach ($produk as $namaProduk => $harga) {
    echo "Produk: $namaProduk, Harga: Rp$harga\n";
}
?>
<!-- Output:

Produk: Laptop, Harga: Rp15000000
Produk: Smartphone, Harga: Rp5000000
Produk: Tablet, Harga: Rp3000000
Di sini, foreach akan mengambil setiap kunci (misalnya, "Laptop", "Smartphone", dll.) dan nilai (harga produk), lalu menampilkannya.

Mengubah atau Menambah Elemen di Array Asosiatif
Anda bisa menambahkan elemen baru atau memperbarui elemen yang sudah ada di array asosiatif.

Contoh: -->
<?php
$pegawai = [
    "nama" => "Rudi",
    "posisi" => "Developer"
];

// Menambahkan elemen baru
$pegawai["gaji"] = 8000000;

// Mengubah elemen yang ada
$pegawai["posisi"] = "Senior Developer";

print_r($pegawai);
?>
<!-- Output:
Array
(
    [nama] => Rudi
    [posisi] => Senior Developer
    [gaji] => 8000000
)
Pada contoh ini, elemen baru "gaji" ditambahkan, dan elemen "posisi" diperbarui dari "Developer" menjadi "Senior Developer".

Fungsi-Fungsi Bermanfaat untuk Array Asosiatif
array_keys() – Mengambil semua kunci dalam array asosiatif.
array_values() – Mengambil semua nilai dalam array asosiatif.
Contoh: -->

<?php
$buah = [
    "apel" => "merah",
    "jeruk" => "oranye",
    "pisang" => "kuning"
];

$kunci = array_keys($buah);   // output: ["apel", "jeruk", "pisang"]
$nilai = array_values($buah); // output: ["merah", "oranye", "kuning"]

print_r($kunci);
print_r($nilai);
?>