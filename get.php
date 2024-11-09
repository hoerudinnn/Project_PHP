Form adalah komponen HTML yang digunakan untuk mengumpulkan input dari pengguna. Berikut ini adalah rangkuman dan penjelasan lebih detail mengenai elemen-elemen penting dan jenis input yang dapat digunakan dalam form di HTML dan PHP.

Elemen Penting dalam Form
Method

GET: Data dikirim melalui URL dan terlihat oleh pengguna. Cocok untuk data non-sensitif, seperti pencarian atau filter.
POST: Data dikirim dalam badan permintaan (request body) dan tidak terlihat di URL, sehingga lebih aman untuk data sensitif seperti kata sandi.
Action

Menentukan di mana data dari form akan diproses.
Jika action dikosongkan, maka data akan diproses pada halaman yang sama.
Submit Button

Tombol untuk mengirim data form ke server.
Contoh Form Sederhana Menggunakan POST dan GET:

Dengan POST:

html
Copy code
<form action="" method="post">
    Nama: <input type="text" name="nama">
    Alamat: <input type="text" name="alamat"><br><br>
    <input type="submit" value="submit">
</form>
Dengan GET:

html
Copy code
<form action="proses.php" method="get">
    Nama: <input type="text" name="nama">
    Alamat: <input type="text" name="alamat"><br><br>
    <input type="submit" value="submit">
</form>
Jenis Input Type dalam Form
Text

Digunakan untuk input bertipe teks.
html
Copy code
<input type="text" name="nama">
Textarea

Digunakan untuk input teks dengan karakter lebih panjang.
html
Copy code
<textarea name="alamat" rows="4" cols="50"></textarea>
Password

Untuk input kata sandi. Karakter yang diinput akan dimasking.
html
Copy code
<input type="password" name="password">
Date

Untuk input data bertipe tanggal.
html
Copy code
<input type="date" name="tanggal">
Button

Menampilkan tombol yang bisa diklik. Bisa diberi fungsi menggunakan JavaScript.
html
Copy code
<input type="button" value="Click me" onClick="alert('Hello!')">
Checkbox

Untuk memilih satu atau lebih pilihan.
html
Copy code
<input type="checkbox" name="bahasa[]" value="PHP"> PHP<br>
<input type="checkbox" name="bahasa[]" value="HTML"> HTML<br>
<input type="checkbox" name="bahasa[]" value="JavaScript"> JavaScript<br>
Option (Dropdown)

Untuk memilih satu data dari beberapa pilihan.
html
Copy code
<select name="program_studi">
    <option value="SI">Sistem Informasi</option>
    <option value="TI">Teknik Informatika</option>
    <option value="MI">Manajemen Informatika</option>
</select>
Radio

Sama seperti checkbox, tetapi hanya bisa memilih satu pilihan.
html
Copy code
<input type="radio" name="program_studi" value="SI"> Sistem Informasi<br>
<input type="radio" name="program_studi" value="TI"> Teknik Informatika<br>
<input type="radio" name="program_studi" value="MI"> Manajemen Informatika
File

Untuk mengunggah file.
html
Copy code
<input type="file" name="dokumen">
Menampilkan Data yang Dikirim Form di PHP
Contoh Proses Data Form Menggunakan POST:

php
Copy code
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    echo "Nama: " . htmlspecialchars($nama) . "<br>";
    echo "Alamat: " . htmlspecialchars($alamat);
}
?>
Kesimpulan
Form HTML memungkinkan pengumpulan data pengguna dengan berbagai jenis input, yang dapat diolah di sisi server dengan PHP.