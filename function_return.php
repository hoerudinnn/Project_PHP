Di PHP, untuk mengembalikan hasil dari sebuah fungsi, kita menggunakan kata kunci return. Ketika sebuah fungsi dipanggil, kode dalam fungsi tersebut dieksekusi, dan setelah mencapai perintah return, fungsi akan mengembalikan nilai yang disebutkan di setelah kata kunci return. Nilai yang dikembalikan ini bisa disimpan dalam variabel atau digunakan langsung di tempat lain dalam program.

Berikut adalah penjelasan lebih lanjut beserta contoh penggunaannya:

1. Pengembalian Nilai Sederhana dengan return
Fungsi dapat mengembalikan hasil pengolahan, misalnya hasil perhitungan atau manipulasi data, menggunakan kata kunci return. Setelah fungsi mengembalikan nilai, eksekusi fungsi akan berhenti.

Contoh Fungsi Mengembalikan Nilai Penjumlahan:
php
Copy code
<?php
function tambah($a, $b) {
    return $a + $b;  // Mengembalikan hasil penjumlahan
}

// Memanggil fungsi dan menyimpan hasilnya dalam variabel
$hasil = tambah(5, 10);

echo "Hasil penjumlahan: " . $hasil;  // Output: Hasil penjumlahan: 15
?>
Penjelasan:

Fungsi tambah menerima dua parameter, menghitung penjumlahannya, dan mengembalikan hasilnya dengan return.
Nilai yang dikembalikan disimpan dalam variabel $hasil dan kemudian ditampilkan menggunakan echo.
2. Pengembalian Nilai dalam Fungsi dengan Beberapa Proses
Kita bisa melakukan beberapa proses dalam fungsi, dan mengembalikan nilai hasil dari salah satu proses tersebut.

Contoh Fungsi Mengembalikan Hasil Proses:
php
Copy code
<?php
function prosesData($x, $y) {
    $hasilTambah = $x + $y;
    $hasilKali = $x * $y;

    // Mengembalikan hasil penjumlahan
    return $hasilTambah;
}

// Memanggil fungsi dan menyimpan hasilnya
$hasil = prosesData(4, 3);

echo "Hasil penjumlahan: " . $hasil;  // Output: Hasil penjumlahan: 7
?>
Penjelasan:

Fungsi prosesData melakukan dua operasi, penjumlahan dan perkalian, namun hanya mengembalikan hasil penjumlahan.
Hasil yang dikembalikan disimpan dalam variabel $hasil dan ditampilkan.
3. Pengembalian Nilai dalam Fungsi dengan Tipe Data Berbeda
Fungsi juga bisa mengembalikan berbagai tipe data, seperti angka, string, atau array.

Contoh Fungsi Mengembalikan Array:
php
Copy code
<?php
function getData() {
    return array("PHP", "JavaScript", "Python");  // Mengembalikan array
}

$data = getData();

echo "Bahasa pemrograman: " . $data[0];  // Output: Bahasa pemrograman: PHP
?>
Penjelasan:

Fungsi getData mengembalikan sebuah array yang berisi nama-nama bahasa pemrograman.
Array yang dikembalikan disimpan dalam variabel $data, dan salah satu elemennya ditampilkan.
4. Mengembalikan Nilai Berdasarkan Kondisi
Kita juga bisa mengembalikan nilai berdasarkan kondisi tertentu dalam fungsi menggunakan if atau struktur kontrol lainnya.

Contoh Pengembalian Nilai Berdasarkan Kondisi:
php
Copy code
<?php
function cekBilangan($angka) {
    if ($angka > 0) {
        return "Positif";  // Mengembalikan "Positif" jika angka lebih besar dari 0
    } elseif ($angka < 0) {
        return "Negatif";  // Mengembalikan "Negatif" jika angka kurang dari 0
    } else {
        return "Nol";  // Mengembalikan "Nol" jika angka adalah 0
    }
}

$status = cekBilangan(-5);

echo "Angka tersebut adalah: " . $status;  // Output: Angka tersebut adalah: Negatif
?>
Penjelasan:

Fungsi cekBilangan mengembalikan nilai yang berbeda berdasarkan apakah angka lebih besar dari 0, kurang dari 0, atau 0.
Hasil yang dikembalikan disimpan dalam variabel $status dan kemudian ditampilkan.
5. Pengembalian Nilai dari Fungsi yang Dipanggil dalam Ekspresi
Hasil yang dikembalikan oleh fungsi dapat digunakan langsung dalam ekspresi tanpa perlu menyimpannya dalam variabel terlebih dahulu.

Contoh Penggunaan Nilai Kembali dalam Ekspresi:
php
Copy code
<?php
function kali($a, $b) {
    return $a * $b;
}

echo "Hasil perkalian: " . kali(5, 3);  // Output: Hasil perkalian: 15
?>
Penjelasan:

Fungsi kali mengembalikan hasil perkalian yang digunakan langsung dalam ekspresi echo tanpa perlu disimpan dalam variabel.
6. Mengembalikan Nilai dengan return pada Fungsi Rekursif
Pada fungsi rekursif, return digunakan untuk mengembalikan hasil dari setiap panggilan fungsi yang lebih dalam, hingga mencapai kondisi dasar.

Contoh Fungsi Rekursif untuk Menghitung Faktorial:
php
Copy code
<?php
function faktorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;  // Kondisi dasar, faktorial 0 atau 1 adalah 1
    } else {
        return $n * faktorial($n - 1);  // Rekursi: mengalikan n dengan faktorial(n-1)
    }
}

echo "Faktorial 5 adalah: " . faktorial(5);  // Output: Faktorial 5 adalah: 120
?>
Penjelasan:

Fungsi faktorial menghitung faktorial sebuah angka dengan memanggil dirinya sendiri (rekursif).
Hasil setiap pemanggilan fungsi dikembalikan dan diteruskan ke pemanggilan fungsi sebelumnya, hingga mencapai kondisi dasar.
7. Pengembalian Nilai dengan Tipe Data yang Berbeda
Fungsi juga bisa mengembalikan nilai dengan berbagai tipe data, dan kita bisa menentukan tipe data yang diharapkan dari fungsi tersebut menggunakan type declarations (PHP 7 dan lebih baru).

Contoh Tipe Data Return:
php
Copy code
<?php
function tambah(int $a, int $b): int {
    return $a + $b;  // Mengembalikan hasil penjumlahan sebagai integer
}

echo tambah(3, 7);  // Output: 10
?>
Penjelasan:

Fungsi tambah mengembalikan nilai bertipe integer dan menerima dua parameter yang juga bertipe integer.
Kesimpulan:
return digunakan untuk mengembalikan nilai dari sebuah fungsi.
Fungsi dapat mengembalikan nilai apapun: angka, string, array, atau objek.
return menghentikan eksekusi fungsi dan mengembalikan nilai yang ditentukan.
Nilai yang dikembalikan bisa langsung digunakan dalam ekspresi atau disimpan dalam variabel untuk digunakan lebih lanjut.