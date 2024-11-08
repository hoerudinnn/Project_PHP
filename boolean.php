<!-- Di PHP, *boolean* adalah tipe data yang hanya memiliki dua nilai, yaitu `true` (benar) atau `false` (salah). Boolean sangat berguna untuk membuat keputusan dalam kode, misalnya dalam kondisi if-else. -->

<!-- Contoh Penggunaan Boolean -->
<?php
$isUserLoggedIn = true;
$isAdmin = false;

echo $isUserLoggedIn; // output: 1 (1 berarti true)
echo $isAdmin;        // output: (tidak ada output karena false dianggap kosong)

// Dalam PHP, nilai `true` akan ditampilkan sebagai `1` jika di-echo, sedangkan `false` tidak menghasilkan output apa pun.

// Penggunaan Boolean dalam Kondisi

// Boolean sering digunakan dalam pengkondisian seperti `if`, `else`, atau `while`.
$isUserLoggedIn = true;

if ($isUserLoggedIn) {
    echo "Selamat datang, pengguna!";
} else {
    echo "Silakan login terlebih dahulu.";
}

// Di sini, jika `$isUserLoggedIn` bernilai `true`, maka output akan menjadi "Selamat datang, pengguna!". Jika `false`, outputnya adalah "Silakan login terlebih dahulu." -->

// Operator yang Menghasilkan Boolean

// PHP memiliki beberapa operator yang menghasilkan nilai boolean:

// 1. **Operator Perbandingan**
//    - `==`: Apakah nilai sama
//    - `!=`: Apakah nilai tidak sama
//    - `===`: Apakah nilai dan tipe sama persis
//    - `!==`: Apakah nilai atau tipe tidak sama
//    - `<`, `>`, `<=`, `>=`: Operator perbandingan angka

//    **Contoh:**
   $a = 5;
   $b = 10;

   echo $a < $b;  // output: 1 (true karena 5 lebih kecil dari 10)
   echo $a == $b; // output: (false karena 5 tidak sama dengan 10) 

// 2. **Operator Logika**
//    - `&&`: Dan (true jika kedua kondisi benar)
//    - `||`: Atau (true jika salah satu kondisi benar)
//    - `!`: Tidak (membalik nilai boolean)

// **Contoh:**
   $isMember = true;
   $hasDiscount = false;

   if ($isMember && $hasDiscount) {
       echo "Anda dapat diskon tambahan!";
   } elseif ($isMember || $hasDiscount) {
       echo "Anda dapat diskon biasa.";
   } else {
       echo "Tidak ada diskon.";
   }

// Di sini, jika `$isMember` bernilai `true` dan `$hasDiscount` juga `true`, maka pesan pertama akan ditampilkan. Jika salah satu dari mereka `true`, maka pesan kedua yang muncul. Jika keduanya `false`, pesan ketiga yang muncul.

### Contoh Boolean pada Fungsi

// Boolean juga bisa dihasilkan oleh fungsi tertentu seperti `empty()`, `isset()`, dan `is_numeric()`.

$name = "";

if (empty($name)) {
    echo "Nama tidak boleh kosong!";
}

$age = 20;
if (is_numeric($age)) {
    echo "Umur harus berupa angka.";
}

// - `empty($name)` akan mengembalikan `true` jika `$name` kosong.
// - `is_numeric($age)` mengembalikan `true` jika `$age` adalah angka.