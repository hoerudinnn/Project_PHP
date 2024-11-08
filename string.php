Di PHP, *string* adalah tipe data yang digunakan untuk menyimpan teks, seperti kata-kata, kalimat, atau karakter alfanumerik lainnya. String bisa berisi teks apa saja dan diapit dengan tanda kutip tunggal (`'`) atau kutip ganda (`"`).

<!-- ### Cara Membuat String di PHP -->

<!-- 1. **Menggunakan tanda kutip tunggal (`'`)** -->
<!-- 2. **Menggunakan tanda kutip ganda (`"`)** -->

<?php
$text1 = 'Hello, World!'; // menggunakan tanda kutip tunggal
$text2 = "Hello, PHP!";   // menggunakan tanda kutip ganda

echo $text1; // output: Hello, World!
echo $text2; // output: Hello, PHP!


// Perbedaan Kutip Tunggal dan Kutip Ganda
// Kutip Tunggal (`'`)**: PHP tidak akan memproses variabel atau karakter khusus di dalam string yang diapit kutip tunggal. Ini membuat kutip tunggal lebih cepat dan lebih sederhana.
// Kutip Ganda (`"`)**: PHP akan memproses variabel dan beberapa karakter khusus di dalam string yang diapit kutip ganda.

// Contoh:

$name = "Hoerudin";

// Kutip tunggal
$text1 = 'Halo, $name'; // tidak akan mengenali variabel, jadi output: Halo, $name

// Kutip ganda
$text2 = "Halo, $name"; // akan mengenali variabel, jadi output: Halo, Hoerudin

echo $text1;
echo $text2;

### Beberapa Fungsi Penting untuk String di PHP

// 1. **strlen()** – Menghitung panjang string
    $text = "Belajar PHP";
    echo strlen($text); // output: 10

// 2. **str_replace()** – Mengganti teks di dalam string

    $text = "Hello, World!";
    echo str_replace("World", "PHP", $text); // output: Hello, PHP!

// 3. **strpos()** – Mencari posisi suatu teks di dalam string
    
    $text = "Hello, World!";
    echo strpos($text, "World"); // output: 7 (dimulai dari indeks 0);

// 4. **strtoupper()** dan **strtolower()** – Mengubah string menjadi huruf besar atau huruf kecil
    $text = "Hello, World!";
    echo strtoupper($text); // output: HELLO, WORLD!
    echo strtolower($text); // output: hello, world!

### Contoh String dengan Variabel dan Gabungan

$firstName = "Hoerudin";
$lastName = "Siliwangi";

echo "Nama lengkap: $firstName $lastName"; // Menggunakan kutip ganda
echo 'Nama lengkap: ' . $firstName . ' ' . $lastName; // Menggunakan kutip tunggal dengan penggabungan