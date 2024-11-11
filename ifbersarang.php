if bersarang (nested if) adalah konsep di mana kita menempatkan satu atau lebih pernyataan if di dalam blok kode if lainnya. Ini memungkinkan kita untuk memeriksa beberapa kondisi secara berurutan dalam satu blok kontrol. Jika kondisi pertama terpenuhi, maka kita dapat memeriksa kondisi berikutnya di dalamnya.

Sintaks if Bersarang (Nested if):
php
Copy code
if (kondisi1) {
    // Kode ini akan dijalankan jika kondisi1 bernilai true
    if (kondisi2) {
        // Kode ini akan dijalankan jika kondisi1 dan kondisi2 keduanya bernilai true
    }
}
Penjelasan:
Jika kondisi1 bernilai true, maka PHP akan memeriksa kondisi2.
Jika kondisi2 juga bernilai true, maka kode di dalam blok kedua akan dijalankan.
if bersarang dapat memiliki banyak level, tetapi semakin dalam tingkat sarangnya, semakin rumit kode yang harus dipelihara dan dikelola.
Contoh if Bersarang:
Misalnya, kita ingin mengevaluasi apakah seorang siswa lulus ujian dan apakah dia memenuhi syarat untuk mendapat penghargaan berdasarkan nilai dan kehadiran.

php
Copy code
<?php
$nilai = 85;
$kehadiran = 95;

if ($nilai >= 80) { // Jika nilai lebih besar atau sama dengan 80
    echo "Nilai cukup baik. ";
    
    if ($kehadiran >= 90) { // Jika kehadiran lebih besar atau sama dengan 90
        echo "Selamat, Anda lulus dan memenuhi syarat untuk penghargaan!";
    } else {
        echo "Anda lulus, tapi tidak memenuhi syarat untuk penghargaan.";
    }
} else {
    echo "Maaf, Anda tidak lulus.";
}
?>
Output:

Copy code
Nilai cukup baik. Selamat, Anda lulus dan memenuhi syarat untuk penghargaan!
Penjelasan:
Jika nilai >= 80, maka kita mengevaluasi kondisi kehadiran >= 90 di dalam blok if yang pertama.
Jika kondisi kehadiran juga >= 90, maka program menampilkan pesan bahwa siswa lulus dan memenuhi syarat untuk penghargaan.
Jika kondisi kehadiran tidak terpenuhi, maka pesan berbeda ditampilkan.
Contoh Lain dengan Banyak Kondisi:
Berikut adalah contoh lain dengan lebih banyak kondisi bersarang untuk penilaian ujian berdasarkan nilai, kehadiran, dan keterlambatan:

php
Copy code
<?php
$nilai = 75;
$kehadiran = 80;
$keterlambatan = 2;  // Jumlah keterlambatan dalam hari

if ($nilai >= 80) {
    if ($kehadiran >= 90) {
        echo "Lulus dengan nilai bagus dan kehadiran sempurna.";
    } else {
        echo "Lulus dengan nilai bagus, tetapi kehadiran kurang.";
    }
} else {
    if ($nilai >= 60) {
        if ($kehadiran >= 80) {
            echo "Lulus dengan nilai cukup, namun Anda perlu meningkatkan kehadiran.";
        } else {
            echo "Lulus dengan nilai cukup, tetapi kehadiran dan keterlambatan Anda terlalu tinggi.";
        }
    } else {
        echo "Maaf, Anda tidak lulus.";
    }
}
?>
Output:

Copy code
Lulus dengan nilai cukup, namun Anda perlu meningkatkan kehadiran.
Penjelasan:
Jika nilai >= 80, kita periksa kehadiran untuk melihat apakah memenuhi kriteria kehadiran yang sangat baik.
Jika nilai lebih besar atau sama dengan 60 tetapi kurang dari 80, kita periksa kehadiran dan keterlambatan untuk memberikan feedback yang lebih mendetail.
Jika nilai kurang dari 60, siswa tidak lulus.
Penggunaan if Bersarang yang Efisien:
Meskipun menggunakan if bersarang berguna dalam banyak kasus, penggunaan yang berlebihan bisa membuat kode menjadi sulit dibaca dan dipelihara. Sebaiknya, jika memungkinkan, pertimbangkan untuk merestrukturisasi kode atau menggunakan fungsi atau logika yang lebih jelas agar kode tetap terstruktur dan mudah dipahami.

Kesimpulan:
if bersarang adalah alat yang berguna untuk mengevaluasi beberapa kondisi dalam urutan tertentu. Ini memungkinkan kita untuk menangani keputusan yang lebih kompleks dengan memeriksa lebih dari satu kondisi bertingkat. Namun, pastikan untuk tidak membuat kode terlalu rumit dengan terlalu banyak tingkat if bersarang, karena bisa membuatnya sulit dikelola dan dibaca.