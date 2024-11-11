Di PHP, scope atau ruang lingkup variabel mengacu pada tempat di mana variabel tersebut dapat diakses atau digunakan dalam program. Variabel bisa berada dalam berbagai scope, dan pemahaman mengenai scope variabel sangat penting untuk mengelola data dalam aplikasi PHP.

1. Global Scope
Variabel yang dideklarasikan di luar fungsi atau kelas disebut variabel global. Variabel ini hanya dapat diakses dari luar fungsi dan tidak bisa langsung digunakan di dalam fungsi, kecuali menggunakan kata kunci global.

Contoh Variabel Global:
php
Copy code
<?php
$nama = "Hoerudin";  // Variabel global

function tampilkanNama() {
    global $nama;  // Menggunakan variabel global di dalam fungsi
    echo "Nama: " . $nama;
}

tampilkanNama();  // Output: Nama: Hoerudin
?>
Penjelasan:

Variabel $nama dideklarasikan di luar fungsi dan dapat diakses di dalam fungsi dengan kata kunci global.
Tanpa kata kunci global, PHP tidak akan bisa mengakses variabel global di dalam fungsi.
2. Local Scope
Variabel yang dideklarasikan di dalam fungsi atau metode hanya dapat diakses di dalam fungsi tersebut. Variabel ini disebut variabel lokal.

Contoh Variabel Lokal:
php
Copy code
<?php
function tampilkanUmur() {
    $umur = 25;  // Variabel lokal
    echo "Umur: " . $umur;
}

tampilkanUmur();  // Output: Umur: 25
// echo $umur;  // Error: Undefined variable
?>
Penjelasan:

Variabel $umur dideklarasikan di dalam fungsi tampilkanUmur(), sehingga hanya bisa diakses di dalam fungsi tersebut.
Jika kita mencoba mengakses variabel $umur di luar fungsi, PHP akan memberikan error karena variabel tersebut memiliki local scope.
3. Superglobals
PHP menyediakan beberapa variabel global yang dapat diakses di seluruh skrip, termasuk di dalam fungsi, tanpa perlu menggunakan kata kunci global. Variabel ini dikenal dengan nama superglobals.

Beberapa superglobals yang sering digunakan di PHP:

$GLOBALS: Array asosiasi yang digunakan untuk mengakses variabel global dari dalam fungsi.
$_GET: Digunakan untuk mengambil data yang dikirimkan melalui metode GET.
$_POST: Digunakan untuk mengambil data yang dikirimkan melalui metode POST.
$_SESSION: Digunakan untuk menyimpan data sesi (session).
$_COOKIE: Digunakan untuk mengakses data cookie.
$_FILES: Digunakan untuk mengakses file yang diupload.
$_REQUEST: Digunakan untuk mengambil data baik dari metode GET, POST, atau COOKIE.
Contoh Penggunaan $GLOBALS:
php
Copy code
<?php
$x = 10;  // Variabel global

function tambahX() {
    $GLOBALS['x'] += 5;  // Mengakses dan mengubah variabel global $x
}

tambahX();
echo $x;  // Output: 15
?>
Penjelasan:

Di dalam fungsi tambahX(), kita mengakses variabel global $x menggunakan array $GLOBALS untuk mengubah nilainya.
4. Static Variable
Variabel yang dideklarasikan dengan kata kunci static di dalam fungsi akan mempertahankan nilainya antara panggilan fungsi, meskipun fungsi selesai dieksekusi. Variabel statis hanya dapat diakses di dalam fungsi yang mendeklarasikannya.

Contoh Variabel Static:
php
Copy code
<?php
function hitung() {
    static $count = 0;  // Variabel statis
    $count++;
    echo "Hitung: " . $count . "<br>";
}

hitung();  // Output: Hitung: 1
hitung();  // Output: Hitung: 2
hitung();  // Output: Hitung: 3
?>
Penjelasan:

Variabel $count dideklarasikan dengan kata kunci static, yang berarti nilainya akan bertahan antara panggilan fungsi.
Setiap kali fungsi hitung() dipanggil, nilai $count akan bertambah tanpa di-reset ke nilai awal.
5. Function Parameter Scope
Parameter yang diberikan ke fungsi memiliki scope lokal di dalam fungsi tersebut, yang artinya hanya bisa diakses di dalam fungsi.

Contoh Parameter Fungsi:
php
Copy code
<?php
function sapa($nama) {
    echo "Halo, $nama!";
}

sapa("Hoerudin");  // Output: Halo, Hoerudin!
// echo $nama;  // Error: Undefined variable
?>
Penjelasan:

Parameter $nama hanya dapat diakses di dalam fungsi sapa(), dan tidak bisa diakses di luar fungsi.
6. Global Scope vs Local Scope
Di PHP, kita bisa menggunakan variabel lokal dalam fungsi untuk menghindari konflik dengan variabel global yang memiliki nama yang sama. Variabel lokal tidak akan menimpa variabel global.

Contoh Global vs Local:
php
Copy code
<?php
$x = 10;  // Variabel global

function contoh() {
    $x = 20;  // Variabel lokal
    echo "Nilai lokal x: $x<br>";  // Output: Nilai lokal x: 20
}

contoh();
echo "Nilai global x: $x";  // Output: Nilai global x: 10
?>
Penjelasan:

Variabel $x yang dideklarasikan di dalam fungsi contoh() bersifat lokal dan tidak mempengaruhi nilai dari variabel global $x.
7. Variable Scope pada Kelas (Object-Oriented Programming)
Jika menggunakan pemrograman berorientasi objek (OOP), variabel dapat memiliki scope yang lebih spesifik seperti properti (property) yang dideklarasikan di dalam kelas.

Public: Dapat diakses di luar kelas.
Private: Hanya bisa diakses di dalam kelas itu sendiri.
Protected: Dapat diakses di dalam kelas itu dan kelas turunan (inheritance).
Contoh Scope pada Kelas:
php
Copy code
<?php
class Mahasiswa {
    public $nama;  // Bisa diakses di luar kelas
    private $umur; // Hanya bisa diakses di dalam kelas

    public function setUmur($umur) {
        $this->umur = $umur;
    }

    public function getUmur() {
        return $this->umur;
    }
}

$mahasiswa = new Mahasiswa();
$mahasiswa->nama = "Hoerudin";  // Mengakses properti public
$mahasiswa->setUmur(25);  // Mengakses properti private melalui method

echo "Nama: " . $mahasiswa->nama . "<br>";
echo "Umur: " . $mahasiswa->getUmur() . "<br>";
?>
Penjelasan:

Properti $nama dapat diakses langsung karena bersifat public.
Properti $umur hanya dapat diakses melalui method setUmur() dan getUmur() karena bersifat private.
Kesimpulan:
Global scope: Variabel yang dideklarasikan di luar fungsi dan dapat diakses dari mana saja.
Local scope: Variabel yang dideklarasikan di dalam fungsi dan hanya dapat diakses di dalam fungsi tersebut.
Superglobals: Variabel global yang tersedia di seluruh skrip PHP.
Static variables: Variabel yang mempertahankan nilainya antara panggilan fungsi.
Scope dalam OOP: Variabel atau properti dalam kelas bisa memiliki scope public, private, atau protected.