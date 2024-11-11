Pengecekan kondisi ganda dalam PHP mengacu pada situasi di mana kita perlu memeriksa lebih dari satu kondisi dalam sebuah percabangan. Biasanya, ini dilakukan menggunakan operator logika seperti AND (&&) atau OR (||), yang memungkinkan kita untuk menggabungkan beberapa kondisi dalam satu ekspresi.

1. Pengecekan Kondisi Ganda dengan AND (&&)
Operator AND digunakan untuk memastikan bahwa semua kondisi harus bernilai true agar kode di dalam blok if dijalankan.

Sintaks:
php
Copy code
if (kondisi1 && kondisi2) {
    // Kode ini dijalankan jika kedua kondisi benar
}
Contoh Penggunaan AND:
php
Copy code
<?php
$nilai = 80;
$kehadiran = 90;

if ($nilai >= 75 && $kehadiran >= 80) {
    echo "Selamat! Anda lulus dengan baik.";
} else {
    echo "Anda belum lulus.";
}
?>
Output:

Copy code
Selamat! Anda lulus dengan baik.
Penjelasan:
$nilai >= 75 && $kehadiran >= 80: Kedua kondisi harus bernilai true agar pesan "Selamat! Anda lulus dengan baik." ditampilkan. Jika salah satu kondisi tidak terpenuhi, maka program akan menjalankan blok else.
2. Pengecekan Kondisi Ganda dengan OR (||)
Operator OR digunakan untuk memastikan bahwa hanya satu kondisi yang harus bernilai true agar kode di dalam blok if dijalankan.

Sintaks:
php
Copy code
if (kondisi1 || kondisi2) {
    // Kode ini dijalankan jika salah satu kondisi benar
}
Contoh Penggunaan OR:
php
Copy code
<?php
$nilai = 70;
$kehadiran = 75;

if ($nilai >= 80 || $kehadiran >= 80) {
    echo "Anda lulus dengan baik.";
} else {
    echo "Anda belum lulus.";
}
?>
Output:

Copy code
Anda belum lulus.
Penjelasan:
$nilai >= 80 || $kehadiran >= 80: Salah satu dari dua kondisi tersebut harus bernilai true agar pesan "Anda lulus dengan baik." ditampilkan. Karena kedua kondisi tidak terpenuhi, maka blok else yang dijalankan.
3. Menggunakan if Bersarang untuk Pengecekan Kondisi Ganda
Selain menggunakan AND atau OR, kita juga bisa menggunakan if bersarang (nested if) untuk melakukan pengecekan kondisi ganda.

Sintaks if Bersarang:
php
Copy code
if (kondisi1) {
    if (kondisi2) {
        // Kode ini dijalankan jika kedua kondisi benar
    }
}
Contoh Penggunaan if Bersarang:
php
Copy code
<?php
$nilai = 90;
$kehadiran = 85;

if ($nilai >= 80) {
    if ($kehadiran >= 80) {
        echo "Selamat! Anda lulus dengan nilai baik dan kehadiran sempurna.";
    } else {
        echo "Anda lulus, tetapi kehadiran Anda kurang.";
    }
} else {
    echo "Maaf, Anda tidak lulus.";
}
?>
Output:

Copy code
Selamat! Anda lulus dengan nilai baik dan kehadiran sempurna.
Penjelasan:
Jika $nilai >= 80 terpenuhi, maka PHP akan memeriksa kondisi kedua, yaitu $kehadiran >= 80. Jika kedua kondisi benar, maka output yang sesuai akan ditampilkan.
4. Pengecekan Kondisi Ganda Menggunakan switch
Meski switch biasanya digunakan untuk memeriksa satu variabel dengan beberapa nilai, kita juga bisa menggunakannya untuk pengecekan kondisi ganda dengan menambahkan beberapa case untuk menangani banyak kemungkinan.

Namun, untuk pengecekan yang lebih kompleks dan melibatkan kondisi ganda, switch kurang ideal. Biasanya, if lebih fleksibel untuk kondisi semacam ini.

5. Contoh Penggunaan Pengecekan Ganda dalam Praktek
Misalnya, kita ingin memeriksa apakah seorang siswa lulus berdasarkan nilai dan kehadiran, dan juga jika mereka mendapat penghargaan berdasarkan kedua faktor tersebut.

php
Copy code
<?php
$nilai = 85;
$kehadiran = 92;
$penghargaan = false;  // Menentukan apakah siswa memenuhi syarat penghargaan

if ($nilai >= 80 && $kehadiran >= 90) {
    if ($penghargaan) {
        echo "Selamat! Anda lulus dengan nilai baik, kehadiran sempurna, dan mendapat penghargaan.";
    } else {
        echo "Selamat! Anda lulus dengan nilai baik dan kehadiran sempurna.";
    }
} elseif ($nilai >= 70 && $kehadiran >= 75) {
    echo "Anda lulus, tetapi tidak memenuhi syarat untuk penghargaan.";
} else {
    echo "Maaf, Anda tidak lulus.";
}
?>
Output:

Copy code
Selamat! Anda lulus dengan nilai baik, kehadiran sempurna, dan mendapat penghargaan.
Penjelasan:
$nilai >= 80 && $kehadiran >= 90: Untuk mendapat penghargaan, nilai dan kehadiran harus lebih tinggi dari atau sama dengan 80 dan 90.
Jika kondisi pertama terpenuhi, kita memeriksa apakah siswa juga $penghargaan == true. Jika benar, siswa mendapat penghargaan.
6. Operator Logika lainnya
Selain && dan ||, ada beberapa operator logika lainnya yang bisa digunakan dalam pengecekan kondisi ganda:

!: Negasi (membalikkan hasil kondisi). Contoh: !kondisi artinya kondisi tidak benar.
xor: Operator logika XOR (exclusive OR), yang bernilai true jika satu dari dua kondisi benar, tetapi tidak keduanya.
Contoh menggunakan xor:
php
Copy code
<?php
$a = true;
$b = false;

if ($a xor $b) {
    echo "Salah satu kondisi benar, tetapi tidak keduanya.";
} else {
    echo "Keduanya benar atau keduanya salah.";
}
?>
Output:

Copy code
Salah satu kondisi benar, tetapi tidak keduanya.
Kesimpulan:
Pengecekan kondisi ganda di PHP dapat dilakukan menggunakan berbagai operator logika seperti && (AND), || (OR), ! (negasi), dan xor. Anda juga bisa menggunakan if bersarang untuk memeriksa lebih dari satu kondisi dalam urutan yang lebih rumit. Struktur ini memungkinkan fleksibilitas dalam pengambilan keputusan berdasarkan beberapa kondisi yang perlu dipertimbangkan secara bersamaan.