Membuat fungsi sendiri di PHP memungkinkan kita untuk mengelompokkan kode yang sering digunakan ke dalam satu blok yang dapat dipanggil berkali-kali. Fungsi ini dapat memudahkan pengelolaan dan pemeliharaan kode karena kita bisa menghindari pengulangan kode yang sama. Berikut adalah penjelasan dan contoh cara membuat dan menggunakan fungsi di PHP:

1. Sintaks Dasar Fungsi di PHP
Fungsi di PHP dibuat menggunakan kata kunci function diikuti dengan nama fungsi, parameter (jika ada), dan blok kode yang akan dieksekusi saat fungsi dipanggil.

php
Copy code
function namaFungsi() {
    // Kode yang ingin dijalankan
}
Jika fungsi menerima parameter, parameter tersebut didefinisikan di dalam tanda kurung setelah nama fungsi.

php
Copy code
function namaFungsi($parameter1, $parameter2) {
    // Kode yang menggunakan parameter
}
Fungsi dapat mengembalikan nilai menggunakan return.

php
Copy code
function tambah($a, $b) {
    return $a + $b;  // Mengembalikan hasil penjumlahan
}
2. Contoh Fungsi Sederhana
Fungsi Tanpa Parameter dan Tanpa Nilai Kembali
php
Copy code
<?php
// Fungsi untuk menampilkan pesan
function tampilkanPesan() {
    echo "Hello, Selamat Belajar PHP!<br>";
}

// Memanggil fungsi
tampilkanPesan();
?>
Penjelasan:

Fungsi tampilkanPesan tidak menerima parameter dan tidak mengembalikan nilai. Fungsi ini hanya menampilkan pesan ke layar.
Fungsi dipanggil menggunakan nama fungsi diikuti tanda kurung ().
Fungsi dengan Parameter dan Tanpa Nilai Kembali
php
Copy code
<?php
// Fungsi untuk menampilkan pesan dengan nama
function tampilkanNama($nama) {
    echo "Halo, $nama! Selamat Belajar PHP!<br>";
}

// Memanggil fungsi dengan parameter
tampilkanNama("Hoerudin");
tampilkanNama("Salsabila");
?>
Penjelasan:

Fungsi tampilkanNama menerima satu parameter $nama yang digunakan untuk menampilkan pesan dengan nama yang berbeda setiap kali fungsi dipanggil.
Fungsi ini dipanggil dengan menyertakan argumen di dalam tanda kurung.
Fungsi dengan Parameter dan Mengembalikan Nilai
php
Copy code
<?php
// Fungsi untuk menjumlahkan dua angka
function tambahAngka($a, $b) {
    return $a + $b;
}

// Memanggil fungsi dan menampilkan hasilnya
$hasil = tambahAngka(10, 20);
echo "Hasil penjumlahan: $hasil<br>";
?>
Penjelasan:

Fungsi tambahAngka menerima dua parameter $a dan $b, kemudian mengembalikan hasil penjumlahannya dengan kata kunci return.
Nilai yang dikembalikan oleh fungsi dapat disimpan dalam variabel $hasil dan ditampilkan dengan echo.
3. Fungsi dengan Nilai Default pada Parameter
Kita bisa memberikan nilai default pada parameter fungsi, yang akan digunakan jika argumen tidak diberikan saat fungsi dipanggil.

php
Copy code
<?php
// Fungsi dengan parameter default
function sapa($nama = "Tamu") {
    echo "Halo, $nama! Selamat datang!<br>";
}

// Memanggil fungsi dengan dan tanpa argumen
sapa("Hoerudin");
sapa();  // Tanpa argumen, menggunakan nilai default "Tamu"
?>
Penjelasan:

Fungsi sapa memiliki parameter $nama dengan nilai default "Tamu".
Ketika fungsi dipanggil tanpa argumen, nilai default akan digunakan.
4. Fungsi yang Menggunakan Banyak Parameter
Fungsi juga bisa menerima banyak parameter untuk melakukan lebih banyak operasi.

php
Copy code
<?php
// Fungsi untuk mengalikan tiga angka
function kaliTigaAngka($a, $b, $c) {
    return $a * $b * $c;
}

// Memanggil fungsi dengan tiga parameter
$hasil = kaliTigaAngka(2, 3, 4);
echo "Hasil perkalian: $hasil<br>";
?>
Penjelasan:

Fungsi kaliTigaAngka menerima tiga parameter dan mengembalikan hasil perkalian ketiga angka tersebut.
5. Fungsi Rekursif
Fungsi rekursif adalah fungsi yang memanggil dirinya sendiri. Fungsi ini biasanya digunakan untuk masalah yang bisa dibagi menjadi sub-masalah yang lebih kecil (misalnya, menghitung faktorial).

php
Copy code
<?php
// Fungsi rekursif untuk menghitung faktorial
function faktorial($n) {
    if ($n <= 1) {
        return 1;  // Basis kasus, faktorial 1 atau 0 adalah 1
    } else {
        return $n * faktorial($n - 1);  // Memanggil fungsi sendiri
    }
}

// Memanggil fungsi
$hasil = faktorial(5);
echo "Faktorial 5 adalah: $hasil<br>";
?>
Penjelasan:

Fungsi faktorial memanggil dirinya sendiri untuk menghitung faktorial angka yang diberikan.
Basis kasusnya adalah jika $n kurang dari atau sama dengan 1, maka fungsi akan mengembalikan 1.
6. Fungsi dengan Tipe Data Kembali (Return Type)
Di PHP, kita juga bisa mendefinisikan tipe data yang diharapkan dikembalikan oleh fungsi, menggunakan tipe data setelah tanda titik dua (:).

php
Copy code
<?php
// Fungsi yang mengembalikan tipe integer
function tambah(int $a, int $b): int {
    return $a + $b;
}

// Memanggil fungsi
$hasil = tambah(10, 5);
echo "Hasil penjumlahan: $hasil<br>";
?>
Penjelasan:

Fungsi tambah mendeklarasikan bahwa parameter yang diterima harus bertipe integer dan fungsi ini akan mengembalikan tipe integer.
7. Fungsi dengan Variabel Global
Jika kita ingin menggunakan variabel di luar fungsi, kita bisa menggunakan variabel global dengan kata kunci global.

php
Copy code
<?php
$x = 5;  // Variabel global

function tambahGlobal() {
    global $x;  // Mengakses variabel global
    $x = $x + 10;
}

// Memanggil fungsi
tambahGlobal();
echo "Nilai x setelah fungsi dipanggil: $x<br>";
?>
Penjelasan:

Variabel $x dideklarasikan secara global dan diubah nilainya di dalam fungsi menggunakan kata kunci global.
Kesimpulan:
Fungsi di PHP memungkinkan kita untuk mengelompokkan kode yang sering digunakan, sehingga kode menjadi lebih terstruktur dan mudah dipelihara.
Fungsi dapat menerima parameter dan mengembalikan nilai menggunakan kata kunci return.
Fungsi juga bisa menggunakan nilai default untuk parameter dan bisa bersifat rekursif.
Penggunaan global memungkinkan kita mengakses variabel di luar fungsi.