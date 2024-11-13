<?php
$todos = [];
$file = file_get_contents('todo.txt');
$todos = unserialize($file);

if (isset($_POST['todo'])) {
    $todo = $_POST['todo'];
    $todos[] = [
        'todo' => $todo,
        'status' => 0,
    ];
    $daftarBelanja = serialize($todos);
    file_put_contents('todo.txt', $daftarBelanja);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Todo App</h1>
    <form action="">
        <label for="">Daftar belanja hari ini</label><br>
        <input type="text" name="todo" id="">
        <input type="submit" value="Simpan">
    </form>
    <ul>
        <li>
            <input type="checkbox" name="todo" id="">
            <label for="">Todo 1</label>
            <a href="">hapus</a>
        </li>
        <li>
            <input type="checkbox" name="todo" id="">
            <label for="">Todo 2</label>
            <a href="">hapus</a>
        </li>
        <li>
            <input type="checkbox" name="todo" id="">
            <label for="">Todo 3</label>
            <a href="">hapus</a>
        </li>
    </ul>
</body>

</html>