Untuk menampilkan data dalam bentuk tabel di halaman web menggunakan PHP, kita biasanya menggunakan HTML untuk membuat struktur tabel dan PHP untuk mengambil atau menampilkan data yang ingin ditampilkan dalam tabel tersebut. Berikut adalah langkah-langkah dan contoh kode untuk menampilkan data dalam tabel:

1. Struktur HTML Tabel
Struktur dasar untuk membuat tabel menggunakan HTML adalah sebagai berikut:

html
Copy code
<table border="1">
    <tr>
        <th>Header 1</th>
        <th>Header 2</th>
        <th>Header 3</th>
    </tr>
    <tr>
        <td>Data 1</td>
        <td>Data 2</td>
        <td>Data 3</td>
    </tr>
    <tr>
        <td>Data 4</td>
        <td>Data 5</td>
        <td>Data 6</td>
    </tr>
</table>
2. Menampilkan Data dengan PHP
Misalkan kita memiliki sebuah array atau data yang berasal dari database dan kita ingin menampilkannya dalam tabel. Berikut adalah beberapa contoh untuk melakukannya.

Contoh 1: Menampilkan Data dari Array dalam Tabel
Jika kita memiliki data dalam bentuk array, kita dapat menggunakan PHP untuk mengakses elemen array dan menampilkannya dalam tabel HTML.

php
Copy code
<?php
// Data array
$students = [
    ["nama" => "John", "umur" => 22, "pekerjaan" => "Programmer"],
    ["nama" => "Sara", "umur" => 23, "pekerjaan" => "Designer"],
    ["nama" => "Ali", "umur" => 24, "pekerjaan" => "Analyst"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tabel</title>
</head>
<body>

<h2>Data Mahasiswa</h2>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>Umur</th>
        <th>Pekerjaan</th>
    </tr>
    <?php
    // Iterasi melalui array dan menampilkan data dalam tabel
    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>" . $student['nama'] . "</td>";
        echo "<td>" . $student['umur'] . "</td>";
        echo "<td>" . $student['pekerjaan'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
Penjelasan:

Data mahasiswa disimpan dalam array $students.
Kita menggunakan foreach untuk mengiterasi array dan menampilkan setiap elemen dalam baris tabel (<tr>).
echo digunakan untuk mencetak nilai dari setiap elemen array ke dalam kolom tabel (<td>).
Output:

diff
Copy code
Data Mahasiswa
+-------+-------+------------+
| Nama  | Umur  | Pekerjaan  |
+-------+-------+------------+
| John  | 22    | Programmer |
| Sara  | 23    | Designer   |
| Ali   | 24    | Analyst    |
+-------+-------+------------+
Contoh 2: Menampilkan Data dari Database MySQL dalam Tabel
Jika data berasal dari database MySQL, kita bisa menggunakan PHP untuk mengambil data dari database dan menampilkannya dalam tabel HTML. Berikut adalah contoh dengan menggunakan MySQLi.

Koneksi ke Database dan Ambil Data
php
Copy code
<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari tabel mahasiswa
$sql = "SELECT nama, umur, pekerjaan FROM mahasiswa";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>

<h2>Data Mahasiswa</h2>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>Umur</th>
        <th>Pekerjaan</th>
    </tr>

    <?php
    // Periksa apakah ada data
    if ($result->num_rows > 0) {
        // Tampilkan data baris demi baris
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['umur'] . "</td>";
            echo "<td>" . $row['pekerjaan'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
    }
    ?>

</table>

<?php
// Menutup koneksi
$conn->close();
?>

</body>
</html>
Penjelasan:

Koneksi database: Menggunakan MySQLi untuk menghubungkan PHP ke database MySQL.
Query SQL: Mengambil data dari tabel mahasiswa (kolom nama, umur, dan pekerjaan).
Mengecek hasil query: Menggunakan $result->num_rows untuk memeriksa apakah ada hasil query.
Menampilkan hasil: Menggunakan fetch_assoc() untuk mengambil setiap baris hasil query dan menampilkannya dalam tabel HTML.
Output: Jika data mahasiswa ada di database, tabel akan menampilkan data seperti berikut:

diff
Copy code
Data Mahasiswa
+-------+-------+------------+
| Nama  | Umur  | Pekerjaan  |
+-------+-------+------------+
| John  | 22    | Programmer |
| Sara  | 23    | Designer   |
| Ali   | 24    | Analyst    |
+-------+-------+------------+
Contoh 3: Menambahkan Fungsi Sortir pada Tabel
Kadang-kadang kita ingin menambahkan kemampuan untuk menyortir data dalam tabel. Anda bisa menggunakan JavaScript atau PHP untuk menyortir data. Berikut adalah contoh menambahkan fitur sortir dengan JavaScript:

php
Copy code
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort Tabel</title>
    <script>
        function sortTable(n) {
            var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
            table = document.getElementById("dataTable");
            switching = true;
            dir = "asc"; // Set default sort direction
            while (switching) {
                switching = false;
                rows = table.rows;
                for (i = 1; i < (rows.length - 1); i++) {
                    shouldSwitch = false;
                    x = rows[i].getElementsByTagName("TD")[n];
                    y = rows[i + 1].getElementsByTagName("TD")[n];
                    if (dir == "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    } else if (dir == "desc") {
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    }
                }
                if (shouldSwitch) {
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                    switchcount++;
                } else {
                    if (switchcount == 0 && dir == "asc") {
                        dir = "desc";
                        switching = true;
                    }
                }
            }
        }
    </script>
</head>
<body>

<h2>Sort Data Mahasiswa</h2>

<table id="dataTable" border="1">
    <thead>
        <tr>
            <th onclick="sortTable(0)">Nama</th>
            <th onclick="sortTable(1)">Umur</th>
            <th onclick="sortTable(2)">Pekerjaan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>John</td>
            <td>22</td>
            <td>Programmer</td>
        </tr>
        <tr>
            <td>Sara</td>
            <td>23</td>
            <td>Designer</td>
        </tr>
        <tr>
            <td>Ali</td>
            <td>24</td>
            <td>Analyst</td>
        </tr>
    </tbody>
</table>

</body>
</html>
Penjelasan:

JavaScript function sortTable(n): Fungsi ini digunakan untuk menyortir data dalam tabel berdasarkan kolom yang diklik.
**Setiap header kolom (e.g., "Nama", "Umur