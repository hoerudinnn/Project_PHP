while loop di PHP digunakan untuk menjalankan blok kode secara berulang selama suatu kondisi bernilai true. Perulangan akan terus dilakukan selama kondisi yang diberikan masih bernilai true, dan akan berhenti saat kondisi tersebut menjadi false.

Sintaks Dasar while Loop:
php
Copy code
while (kondisi) {
    // Kode yang akan dijalankan selama kondisi benar
}
Penjelasan:
kondisi: Ekspresi yang dievaluasi sebelum setiap iterasi. Selama kondisi ini bernilai true, perulangan akan terus berlangsung.
Blok kode: Kode di dalam blok {} akan dijalankan setiap kali kondisi true.
Contoh Penggunaan while Loop:
1. Perulangan Dasar dengan while Loop
php
Copy code
<?php
$i = 1;
while ($i <= 5) {
    echo "Perulangan ke-$i<br>";
    $i++;  // Increment nilai $i
}
?>
Output:

Copy code
Perulangan ke-1
Perulangan ke-2
Perulangan ke-3
Perulangan ke-4
Perulangan ke-5
Penjelasan:
Inisialisasi: Variabel $i dimulai dengan nilai 1.
Kondisi: Selama $i <= 5, perulangan akan terus dilakukan.
Increment: Setiap iterasi, nilai $i bertambah 1 menggunakan $i++.
2. Perulangan untuk Menjumlahkan Angka
php
Copy code
<?php
$sum = 0;
$i = 1;
while ($i <= 10) {
    $sum += $i;  // Menambahkan nilai $i ke $sum
    $i++;
}
echo "Jumlah total angka 1 hingga 10 adalah: $sum";
?>
Output:

yaml
Copy code
Jumlah total angka 1 hingga 10 adalah: 55
Penjelasan:
Inisialisasi: Variabel $sum dimulai dari 0.
Pada setiap iterasi, nilai $i ditambahkan ke dalam $sum.
Perulangan berhenti saat $i melebihi 10.
3. Perulangan dengan Array Menggunakan while Loop
php
Copy code
<?php
$fruits = ["Apel", "Pisang", "Mangga", "Jeruk"];
$i = 0;
while ($i < count($fruits)) {
    echo "Buah ke-$i: " . $fruits[$i] . "<br>";
    $i++;
}
?>
Output:

yaml
Copy code
Buah ke-0: Apel
Buah ke-1: Pisang
Buah ke-2: Mangga
Buah ke-3: Jeruk
Penjelasan:
Inisialisasi: Variabel $i dimulai dengan nilai 0 (indeks pertama array).
Kondisi: Perulangan terus dilakukan selama $i < count($fruits), sehingga perulangan berjalan sebanyak jumlah elemen dalam array.
Increment: Pada setiap iterasi, nilai $i bertambah 1.
4. Perulangan Menggunakan while untuk Angka Genap
php
Copy code
<?php
$i = 0;
while ($i <= 20) {
    if ($i % 2 == 0) {
        echo "Angka genap: $i<br>";
    }
    $i++;
}
?>
Output:

yaml
Copy code
Angka genap: 0
Angka genap: 2
Angka genap: 4
Angka genap: 6
Angka genap: 8
Angka genap: 10
Angka genap: 12
Angka genap: 14
Angka genap: 16
Angka genap: 18
Angka genap: 20
Penjelasan:
Inisialisasi: Variabel $i dimulai dengan 0.
Perulangan dilakukan selama $i <= 20.
Setiap angka yang bernilai genap (dengan pengecekan $i % 2 == 0) akan ditampilkan.
5. Perulangan dengan Kondisi Tanpa Increment (Hati-hati dengan Infinite Loop)
php
Copy code
<?php
$i = 0;
while ($i < 5) {
    echo "Perulangan ke-$i<br>";
    // Tidak ada increment, sehingga ini akan menyebabkan infinite loop
}
?>
Peringatan:

Jika Anda tidak mengubah nilai variabel yang digunakan dalam kondisi (misalnya $i++ dalam contoh di atas), maka perulangan akan berjalan tanpa henti, menghasilkan infinite loop. Dalam hal ini, perulangan tidak akan berhenti karena kondisi $i < 5 selalu true.
Untuk menghindari infinite loop, selalu pastikan bahwa kondisi yang akan menyebabkan perulangan berhenti dapat tercapai (misalnya menggunakan increment atau perubahan nilai dalam blok while).

Perbedaan while Loop dan for Loop:
while loop cocok digunakan ketika jumlah iterasi tidak diketahui secara pasti sebelumnya dan bergantung pada kondisi.
for loop lebih cocok jika Anda tahu jumlah iterasi yang pasti, seperti saat mengakses elemen array berdasarkan indeks.
Kesimpulan:
while loop digunakan untuk menjalankan kode berulang kali selama kondisi tertentu bernilai true.
Anda harus memastikan bahwa kondisi yang digunakan dalam while loop bisa berubah agar perulangan tidak terjadi selamanya (infinite loop).
while loop lebih fleksibel dan bisa digunakan untuk berbagai macam kondisi yang tidak selalu terkait dengan jumlah iterasi yang tetap.