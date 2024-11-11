Di PHP, parameter referensi digunakan untuk mengirimkan argumen ke dalam fungsi bukan sebagai salinan (copy) nilai, tetapi sebagai referensi ke variabel asli. Dengan demikian, perubahan yang dilakukan pada parameter dalam fungsi akan mempengaruhi variabel asli yang dipanggil.

Untuk mengirimkan parameter sebagai referensi, kita menggunakan tanda & sebelum nama parameter dalam definisi fungsi.

1. Menggunakan Parameter Referensi
Saat kita mengirimkan parameter dengan referensi, perubahan yang dilakukan pada parameter dalam fungsi akan mempengaruhi variabel yang dipassingkan dari luar fungsi. Ini berbeda dengan pengiriman nilai biasa (pass by value), di mana perubahan hanya terjadi pada salinan lokal dari variabel.

Contoh Penggunaan Parameter Referensi:
php
Copy code
<?php
function tambahDua(&$angka) {
    $angka += 2;  // Menambahkan 2 pada variabel yang diterima sebagai referensi
}

$nilai = 5;
tambahDua($nilai);  // Mengubah nilai variabel $nilai secara langsung

echo "Nilai setelah fungsi: " . $nilai;  // Output: Nilai setelah fungsi: 7
?>
Penjelasan:

Fungsi tambahDua menerima parameter $angka sebagai referensi (dengan tanda &).
Ketika fungsi dipanggil, variabel $nilai yang dikirimkan ke dalam fungsi akan langsung diubah.
Nilai asli dari $nilai berubah menjadi 7 karena parameter dalam fungsi bekerja pada referensi dari variabel asli.
2. Perbedaan Antara Pass by Value dan Pass by Reference
Pass by Value: Ketika sebuah variabel dikirimkan ke dalam fungsi, yang dikirimkan adalah salinan dari nilai variabel tersebut. Artinya, perubahan dalam fungsi tidak mempengaruhi nilai variabel asli.

Pass by Reference: Ketika sebuah variabel dikirimkan ke dalam fungsi dengan referensi, perubahan dalam fungsi akan langsung mempengaruhi nilai variabel asli yang dipassingkan.

Contoh Pass by Value:
php
Copy code
<?php
function tambahTiga($angka) {
    $angka += 3;  // Mengubah salinan nilai parameter
}

$nilai = 5;
tambahTiga($nilai);  // Mengubah salinan, tidak mempengaruhi $nilai asli

echo "Nilai setelah fungsi: " . $nilai;  // Output: Nilai setelah fungsi: 5
?>
Penjelasan:

Fungsi tambahTiga menerima parameter $angka sebagai salinan (pass by value).
Perubahan pada $angka di dalam fungsi tidak mempengaruhi variabel $nilai yang ada di luar fungsi. Nilai $nilai tetap 5.
Contoh Pass by Reference:
php
Copy code
<?php
function tambahEmpat(&$angka) {
    $angka += 4;  // Mengubah nilai variabel yang diterima sebagai referensi
}

$nilai = 5;
tambahEmpat($nilai);  // Mengubah nilai $nilai secara langsung

echo "Nilai setelah fungsi: " . $nilai;  // Output: Nilai setelah fungsi: 9
?>
Penjelasan:

Fungsi tambahEmpat menerima parameter $angka sebagai referensi (pass by reference).
Nilai $nilai berubah menjadi 9 karena parameter dalam fungsi bekerja pada referensi dari variabel asli.
3. Menggunakan Parameter Referensi untuk Mengembalikan Nilai
Dengan menggunakan referensi, kita bisa mengubah lebih dari satu variabel di dalam fungsi tanpa harus mengembalikan nilai dari fungsi.

Contoh Menggunakan Referensi untuk Mengubah Banyak Variabel:
php
Copy code
<?php
function ubahNilai(&$a, &$b) {
    $a += 10;
    $b *= 2;
}

$x = 5;
$y = 3;

ubahNilai($x, $y);  // Mengubah kedua variabel

echo "Nilai x setelah fungsi: " . $x . "<br>";  // Output: Nilai x setelah fungsi: 15
echo "Nilai y setelah fungsi: " . $y . "<br>";  // Output: Nilai y setelah fungsi: 6
?>
Penjelasan:

Fungsi ubahNilai menerima dua parameter, $a dan $b, keduanya sebagai referensi.
Perubahan yang dilakukan pada kedua parameter di dalam fungsi akan mempengaruhi variabel $x dan $y yang ada di luar fungsi.
4. Parameter Referensi dalam Fungsi Rekursif
Parameter referensi juga bisa digunakan dalam fungsi rekursif, untuk memodifikasi variabel yang terus diperbarui melalui panggilan berulang.

Contoh Parameter Referensi pada Fungsi Rekursif:
php
Copy code
<?php
function hitungFaktorial(&$hasil, $n) {
    if ($n <= 1) {
        return;
    }
    $hasil *= $n;
    hitungFaktorial($hasil, $n - 1);  // Memanggil fungsi secara rekursif
}

$angka = 5;
$hasil = 1;

hitungFaktorial($hasil, $angka);

echo "Faktorial dari $angka adalah: " . $hasil;  // Output: Faktorial dari 5 adalah: 120
?>
Penjelasan:

Fungsi hitungFaktorial menghitung faktorial dengan menggunakan parameter referensi $hasil.
Parameter $hasil dimodifikasi di setiap panggilan rekursif tanpa perlu mengembalikan nilai dari fungsi, karena nilai tersebut dipertahankan melalui referensi.
5. Keuntungan dan Kekurangan Menggunakan Parameter Referensi
Keuntungan:

Menggunakan parameter referensi dapat menghemat memori karena tidak ada salinan data yang dibuat.
Dapat mengubah lebih dari satu variabel dalam sebuah fungsi tanpa perlu mengembalikan nilai atau menggunakan banyak variabel.
Kekurangan:

Dapat membuat kode menjadi lebih sulit dipahami, karena efek samping dari perubahan variabel di dalam fungsi.
Tidak hati-hati dalam penggunaan referensi dapat menyebabkan bug atau perubahan tak terduga pada variabel yang tidak sengaja diubah.
Kesimpulan:
Parameter referensi mengirimkan variabel ke fungsi sebagai referensi, bukan salinan. Ini memungkinkan perubahan pada variabel asli di luar fungsi.
Menggunakan & sebelum nama parameter dalam definisi fungsi untuk mengindikasikan bahwa parameter tersebut diterima sebagai referensi.
Parameter referensi berguna ketika kita ingin mengubah nilai variabel yang dipassingkan atau ketika kita ingin menghindari overhead memori dengan tidak membuat salinan variabel besar.