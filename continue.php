continue adalah perintah dalam PHP yang digunakan untuk melewatkan satu iterasi dalam sebuah loop dan melanjutkan ke iterasi berikutnya. Perintah continue memungkinkan kita untuk "melewati" bagian tertentu dari loop dan langsung kembali ke kondisi evaluasi untuk iterasi berikutnya.

Sintaks Dasar continue:
php
Copy code
continue;
Jika digunakan dalam loop bersarang (misalnya for atau while di dalam for), kita juga bisa menggunakan continue n untuk melewatkan beberapa tingkat perulangan sekaligus.

Penjelasan:
continue akan menghentikan eksekusi kode setelahnya dalam iterasi saat itu dan melanjutkan ke iterasi berikutnya.
Perintah continue sering digunakan bersama dengan pernyataan if untuk melewatkan kondisi tertentu dan melanjutkan perulangan.
Contoh Penggunaan continue:
1. continue dalam for Loop
php
Copy code
<?php
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue;  // Melewatkan iterasi ke-3 dan melanjutkan ke iterasi berikutnya
    }
    echo "Perulangan ke-$i<br>";
}
?>
Output:

Copy code
Perulangan ke-1
Perulangan ke-2
Perulangan ke-4
Perulangan ke-5
Penjelasan:
Ketika nilai $i sama dengan 3, perintah continue akan mengabaikan eksekusi kode setelahnya (yakni echo), dan langsung melanjutkan ke iterasi berikutnya, yaitu $i menjadi 4.
2. continue dalam while Loop
php
Copy code
<?php
$i = 1;
while ($i <= 5) {
    $i++;
    if ($i == 3) {
        continue;  // Melewatkan iterasi ketika $i = 3
    }
    echo "Perulangan ke-$i<br>";
}
?>
Output:

Copy code
Perulangan ke-2
Perulangan ke-4
Perulangan ke-5
Penjelasan:
Begitu nilai $i mencapai 3, perintah continue akan membuat kode setelahnya (yaitu echo) dilewati, dan perulangan dilanjutkan dengan nilai $i yang lebih tinggi.
3. continue dalam foreach Loop
php
Copy code
<?php
$fruits = ["Apel", "Pisang", "Mangga", "Jeruk"];

foreach ($fruits as $fruit) {
    if ($fruit == "Mangga") {
        continue;  // Melewatkan "Mangga" dan lanjutkan dengan buah berikutnya
    }
    echo "Buah: $fruit<br>";
}
?>
Output:

makefile
Copy code
Buah: Apel
Buah: Pisang
Buah: Jeruk
Penjelasan:
Ketika nilai $fruit adalah "Mangga", perintah continue digunakan untuk melewatkan tampilan "Mangga" dan melanjutkan ke elemen berikutnya dalam array.
4. continue dalam switch Statement
php
Copy code
<?php
$numbers = [1, 2, 3, 4, 5];

foreach ($numbers as $num) {
    switch ($num) {
        case 2:
        case 4:
            continue 2;  // Melewati dua tingkat perulangan (keluar dari switch dan foreach)
        default:
            echo "Angka: $num<br>";
    }
}
?>
Output:

makefile
Copy code
Angka: 1
Angka: 3
Angka: 5
Penjelasan:
continue 2 digunakan untuk melanjutkan ke iterasi berikutnya di luar switch dan foreach secara bersamaan. Dalam kasus ini, program melewati angka 2 dan 4.
5. Menggunakan continue dengan Kondisi
php
Copy code
<?php
for ($i = 1; $i <= 5; $i++) {
    if ($i % 2 == 0) {
        continue;  // Melewatkan angka genap
    }
    echo "Angka ganjil: $i<br>";
}
?>
Output:

yaml
Copy code
Angka ganjil: 1
Angka ganjil: 3
Angka ganjil: 5
Penjelasan:
continue digunakan di sini untuk melewatkan iterasi jika angka adalah genap, sehingga hanya angka ganjil yang akan dicetak.
continue n untuk Loop Bersarang:
Ketika digunakan dalam loop bersarang, continue n memungkinkan Anda untuk melompat keluar dari beberapa tingkat perulangan sekaligus.

6. Menggunakan continue n dalam Loop Bersarang
php
Copy code
<?php
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        if ($i == 2 && $j == 2) {
            continue 2;  // Melewati kedua loop (keluar dari loop $j dan $i)
        }
        echo "i = $i, j = $j<br>";
    }
}
?>
Output:

css
Copy code
i = 1, j = 1
i = 1, j = 2
i = 1, j = 3
i = 2, j = 1
i = 2, j = 3
i = 3, j = 1
i = 3, j = 2
i = 3, j = 3
Penjelasan:
continue 2 digunakan untuk melewatkan kedua loop bersarang ($i dan $j), jadi ketika kondisi $i == 2 && $j == 2 tercapai, loop $j dan $i akan dilewati dan dilanjutkan dengan iterasi berikutnya.
Kesimpulan:
continue digunakan untuk melompat langsung ke iterasi berikutnya dalam loop, tanpa mengeksekusi sisa kode dalam iterasi saat ini.
continue sering dipakai bersama if untuk melewatkan kondisi tertentu dalam perulangan.
continue n digunakan untuk melompati beberapa tingkat perulangan, yang sangat berguna dalam loop bersarang.