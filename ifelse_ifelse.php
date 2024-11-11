Struktur if-else if-else digunakan untuk mengevaluasi beberapa kondisi secara berurutan. Jika kondisi pertama dalam if tidak memenuhi, maka PHP akan melanjutkan untuk memeriksa kondisi berikutnya pada bagian else if. Jika semua kondisi tidak terpenuhi, maka blok else akan dijalankan sebagai kondisi default.

Sintaks Dasar if-else if-else:
php
Copy code
if (kondisi1) {
    // Kode ini dijalankan jika kondisi1 bernilai true
} else if (kondisi2) {
    // Kode ini dijalankan jika kondisi1 false dan kondisi2 bernilai true
} else if (kondisi3) {
    // Kode ini dijalankan jika kondisi1 dan kondisi2 false dan kondisi3 bernilai true
} else {
    // Kode ini dijalankan jika semua kondisi sebelumnya false
}
Penjelasan:
if: Mengevaluasi kondisi pertama dan menjalankan blok kode jika kondisi tersebut true.
else if: Jika kondisi pertama false, maka PHP akan memeriksa kondisi berikutnya. Jika kondisi ini true, maka kode dalam blok else if dijalankan.
else: Jika semua kondisi sebelumnya (baik if maupun else if) false, maka kode dalam blok else akan dijalankan sebagai default.
Contoh Penggunaan if-else if-else:
Misalnya kita ingin memberikan penilaian berdasarkan nilai ujian mahasiswa:

php
Copy code
<?php
$nilai = 75;

if ($nilai >= 90) {
    echo "Grade A";
} else if ($nilai >= 80) {
    echo "Grade B";
} else if ($nilai >= 70) {
    echo "Grade C";
} else if ($nilai >= 60) {
    echo "Grade D";
} else {
    echo "Grade E";  // Jika nilai di bawah 60
}
?>
Output:

mathematica
Copy code
Grade C
Penjelasan:
Jika nilai >= 90, maka outputnya adalah "Grade A".
Jika nilai antara 80 dan 89, outputnya adalah "Grade B".
Jika nilai antara 70 dan 79, outputnya adalah "Grade C".
Jika nilai antara 60 dan 69, outputnya adalah "Grade D".
Jika nilai kurang dari 60, outputnya adalah "Grade E".
Struktur if-else if-else dengan Lebih Banyak Kondisi:
Anda bisa menambahkan lebih banyak else if untuk menangani lebih banyak kondisi, sesuai dengan kebutuhan.

php
Copy code
<?php
$nilai = 45;

if ($nilai >= 90) {
    echo "Grade A";
} else if ($nilai >= 80) {
    echo "Grade B";
} else if ($nilai >= 70) {
    echo "Grade C";
} else if ($nilai >= 60) {
    echo "Grade D";
} else if ($nilai >= 50) {
    echo "Grade E";
} else {
    echo "Grade F";  // Jika nilai di bawah 50
}
?>
Output:

mathematica
Copy code
Grade E
Operator Pembanding dalam if-else if-else:
>=: Lebih besar atau sama dengan.
<=: Lebih kecil atau sama dengan.
==: Sama dengan.
!=: Tidak sama dengan.
Menggunakan else if dengan Kondisi yang Lebih Kompleks:
Kita juga bisa menggunakan operator logika dalam kondisi if, seperti AND (&&) atau OR (||).

php
Copy code
<?php
$nilai = 75;
$kehadiran = 85;

if ($nilai >= 80 && $kehadiran >= 90) {
    echo "Grade A";
} else if ($nilai >= 70 && $kehadiran >= 75) {
    echo "Grade B";
} else if ($nilai >= 60 && $kehadiran >= 60) {
    echo "Grade C";
} else {
    echo "Grade D";
}
?>
Output:

css
Copy code
Grade B
Penjelasan:
&& (AND): Kondisi hanya akan bernilai true jika kedua syaratnya terpenuhi.
|| (OR): Kondisi akan bernilai true jika salah satu syaratnya terpenuhi.
Kesimpulan:
Struktur if-else if-else memungkinkan kita untuk mengevaluasi beberapa kondisi dan memilih salah satu jalur eksekusi yang sesuai berdasarkan kondisi tersebut. Ini sangat berguna saat kita perlu membuat pengambilan keputusan yang melibatkan banyak kondisi yang saling bergantung.