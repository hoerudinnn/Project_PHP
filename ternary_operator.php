Ternary Operator di PHP adalah bentuk singkat dari pernyataan if-else yang digunakan untuk mengevaluasi sebuah kondisi dan menghasilkan nilai berdasarkan hasil kondisi tersebut. Ini adalah cara yang lebih ringkas dan efisien untuk menangani kondisi yang hanya memiliki dua kemungkinan: true atau false.

Sintaks Dasar Ternary Operator:
php
Copy code
kondisi ? nilai_jika_true : nilai_jika_false;
kondisi: Ekspresi atau kondisi yang dievaluasi. Jika kondisi ini benar (true), maka nilai_jika_true akan dipilih.
nilai_jika_true: Nilai yang akan dikembalikan jika kondisi bernilai true.
nilai_jika_false: Nilai yang akan dikembalikan jika kondisi bernilai false.
Contoh Penggunaan Ternary Operator:
Misalnya, kita ingin memeriksa apakah seseorang lulus ujian berdasarkan nilai mereka.

php
Copy code
<?php
$nilai = 85;
$status = ($nilai >= 75) ? "Lulus" : "Gagal";
echo $status;
?>
Output:

Copy code
Lulus
Penjelasan:
Kondisi: $nilai >= 75
Jika $nilai lebih besar atau sama dengan 75, maka "Lulus" akan dipilih.
Jika $nilai kurang dari 75, maka "Gagal" yang akan dipilih.
Penggunaan Ternary Operator dengan Variabel:
php
Copy code
<?php
$umur = 18;
$kategori = ($umur >= 18) ? "Dewasa" : "Anak-anak";
echo $kategori;
?>
Output:

Copy code
Dewasa
Penjelasan:
Kondisi yang diperiksa adalah apakah $umur >= 18.
Jika benar (true), maka "Dewasa" akan dipilih.
Jika salah (false), maka "Anak-anak" akan dipilih.
Ternary Operator Bersarang:
Ternary operator juga dapat digunakan secara bersarang (nested) untuk menangani lebih dari dua kondisi. Namun, penggunaan operator ternary yang bersarang harus dilakukan dengan hati-hati agar kode tetap mudah dibaca.

Contoh Ternary Operator Bersarang:
php
Copy code
<?php
$nilai = 85;
$kehadiran = 90;

$status = ($nilai >= 75) 
    ? (($kehadiran >= 80) ? "Lulus dengan baik" : "Lulus, kehadiran kurang")
    : "Tidak lulus";
    
echo $status;
?>
Output:

Copy code
Lulus dengan baik
Penjelasan:
Pertama, kondisi $nilai >= 75 dievaluasi. Jika true, maka kita melanjutkan untuk mengevaluasi $kehadiran >= 80.
Jika $kehadiran >= 80 benar, maka hasilnya adalah "Lulus dengan baik". Jika tidak, hasilnya adalah "Lulus, kehadiran kurang".
Jika kondisi $nilai >= 75 salah, maka hasilnya adalah "Tidak lulus".
Menggunakan Ternary Operator dalam HTML:
Ternary operator juga bisa digunakan untuk membuat keputusan dalam pembuatan HTML. Misalnya, untuk menampilkan atau menyembunyikan elemen berdasarkan kondisi.

php
Copy code
<?php
$login = true;
echo ($login) ? "<p>Selamat datang, pengguna!</p>" : "<p>Silakan login terlebih dahulu.</p>";
?>
Output:

Copy code
Selamat datang, pengguna!
Kelebihan dan Kekurangan Ternary Operator:
Kelebihan:
Ringkas dan efisien: Ternary operator memungkinkan kita untuk menulis kode yang lebih singkat dan mudah dipahami untuk kondisi yang sederhana.
Mengurangi kode berulang: Dengan menggunakan ternary operator, kita dapat menggantikan blok if-else yang panjang menjadi satu baris kode.
Kekurangan:
Keterbacaan: Ternary operator, terutama yang bersarang, bisa membuat kode menjadi sulit dibaca dan dipahami, terutama bagi yang baru belajar.
Hanya untuk kondisi sederhana: Ternary operator lebih cocok untuk kondisi yang sederhana dan tidak terlalu rumit. Jika kondisi menjadi terlalu kompleks, penggunaan if-else tradisional lebih disarankan.
Kesimpulan:
Ternary Operator adalah cara yang efisien untuk menangani percabangan yang hanya memiliki dua pilihan (true atau false) dalam satu baris kode. Ini sangat berguna dalam situasi di mana Anda ingin mengekspresikan kondisi dalam bentuk yang lebih ringkas. Namun, penting untuk berhati-hati ketika menggunakan ternary operator bersarang atau dengan kondisi yang kompleks agar kode tetap mudah dipahami.