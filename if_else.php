if-else adalah struktur kontrol yang digunakan dalam PHP untuk menjalankan kode tertentu berdasarkan kondisi yang diberikan. Ini adalah salah satu konsep dasar dalam pemrograman yang memungkinkan program untuk memutuskan jalur eksekusi mana yang akan diambil berdasarkan evaluasi kondisi.

Sintaks Dasar if-else:
php
Copy code
if (kondisi) {
    // Kode ini akan dijalankan jika kondisi bernilai true
} else {
    // Kode ini akan dijalankan jika kondisi bernilai false
}
Penjelasan:
if: Mengevaluasi kondisi dan menjalankan blok kode pertama jika kondisi tersebut bernilai true.
else: Menjalankan blok kode kedua jika kondisi dalam if bernilai false.
Contoh Penggunaan if-else:
php
Copy code
<?php
$nilai = 75;

if ($nilai >= 60) {
    echo "Selamat, Anda Lulus!";
} else {
    echo "Maaf, Anda Tidak Lulus.";
}
?>
Output:

Copy code
Selamat, Anda Lulus!
if-else if-else
Jika Anda memiliki beberapa kondisi yang perlu diuji secara berurutan, Anda bisa menggunakan else if untuk memeriksa kondisi lain sebelum akhirnya menjalankan blok else sebagai kondisi default.

Sintaks if-else if-else:
php
Copy code
if (kondisi1) {
    // Jika kondisi1 benar
} else if (kondisi2) {
    // Jika kondisi2 benar
} else {
    // Jika semua kondisi di atas salah
}
Contoh if-else if-else:
php
Copy code
<?php
$nilai = 85;

if ($nilai >= 90) {
    echo "Grade A";
} else if ($nilai >= 80) {
    echo "Grade B";
} else if ($nilai >= 70) {
    echo "Grade C";
} else {
    echo "Grade D";
}
?>
Output:

css
Copy code
Grade B
if Tanpa else
Kadang-kadang Anda hanya perlu mengevaluasi kondisi tanpa harus menyediakan bagian else. Dalam hal ini, Anda hanya menulis if saja tanpa else.

Contoh if tanpa else:
php
Copy code
<?php
$jam = 15;

if ($jam >= 12) {
    echo "Selamat Siang!";
}
?>
Output:

Copy code
Selamat Siang!
Jika kondisi tidak terpenuhi, tidak ada output yang dihasilkan karena tidak ada bagian else yang menangani kondisi tersebut.

Operator Pembanding yang Sering Digunakan dalam if:
==: Sama dengan.
!=: Tidak sama dengan.
>: Lebih besar dari.
<: Lebih kecil dari.
>=: Lebih besar atau sama dengan.
<=: Lebih kecil atau sama dengan.
===: Sama dengan (termasuk tipe data).
!==: Tidak sama dengan (termasuk tipe data).
Contoh Penggunaan Operator Pembanding:
php
Copy code
<?php
$umur = 25;
$nama = "John";

if ($umur >= 18 && $nama == "John") {
    echo "Selamat datang, John! Anda sudah dewasa.";
} else {
    echo "Anda belum dewasa atau bukan John.";
}
?>
Output:

Copy code
Selamat datang, John! Anda sudah dewasa.
if dengan and / or
Anda bisa menggabungkan beberapa kondisi menggunakan operator logika && (AND) atau || (OR).

&&: Kondisi benar jika semua kondisi benar.
||: Kondisi benar jika salah satu kondisi benar.
Contoh dengan and / or:
php
Copy code
<?php
$nilai = 85;
$kehadiran = 90;

if ($nilai >= 80 && $kehadiran >= 85) {
    echo "Lulus!";
} else {
    echo "Tidak Lulus!";
}
?>
Output:

Copy code
Lulus!
Kesimpulan
Struktur if-else adalah alat yang sangat penting dalam pengambilan keputusan dalam pemrograman. Dengan menggunakan if, Anda dapat memeriksa kondisi dan mengeksekusi kode berbeda berdasarkan hasil evaluasi kondisi tersebut. Anda juga bisa memperluasnya dengan menggunakan else if dan else untuk menangani beberapa kondisi atau membuat logika percabangan yang lebih kompleks.