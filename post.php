Dalam PHP, variabel global $_POST digunakan untuk mengakses data yang dikirim melalui metode POST dari sebuah form HTML. Ketika pengguna mengirimkan data form menggunakan method="post", data tersebut akan disimpan dalam array global $_POST dan dapat diakses di halaman PHP yang memproses form.

Pengertian $_POST
$_POST adalah array asosiatif yang menyimpan nilai-nilai data form yang dikirimkan menggunakan metode POST. Setiap elemen array $_POST memiliki pasangan key dan value yang sesuai dengan nama elemen input pada form.

Contoh Penggunaan $_POST
Form HTML dengan POST:

html
Copy code
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
</head>
<body>

<h2>Form Pendaftaran</h2>
<form action="proses.php" method="post">
    Nama: <input type="text" name="nama"><br><br>
    Alamat: <input type="text" name="alamat"><br><br>
    <input type="submit" value="Kirim">
</form>

</body>
</html>
PHP untuk Memproses Data dengan $_POST:

File proses.php untuk memproses data yang dikirim dengan POST:

php
Copy code
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form yang dikirim
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    echo "Nama: " . htmlspecialchars($nama) . "<br>";
    echo "Alamat: " . htmlspecialchars($alamat);
}
?>
Penjelasan:
Form HTML mengirimkan data ke proses.php dengan metode POST.
File PHP menggunakan $_POST['nama'] dan $_POST['alamat'] untuk mengakses data yang dikirimkan oleh pengguna.
htmlspecialchars() digunakan untuk menghindari serangan XSS (Cross-Site Scripting), yang mengonversi karakter-karakter khusus menjadi entitas HTML.
Kapan Menggunakan $_POST:
Untuk data sensitif: Metode POST lebih aman dibandingkan GET karena data tidak dikirimkan dalam URL, melainkan di dalam tubuh permintaan (request body).
Untuk data besar: $_POST tidak dibatasi oleh panjang URL, sehingga dapat digunakan untuk mengirimkan data dalam jumlah besar.
Kesimpulan:
$_POST adalah cara yang umum digunakan untuk mengirim dan menerima data form yang bersifat lebih aman dan tidak terbatas oleh panjang URL.