<?php
//total array yang disiapkan untuk disimpan
$todos	= []; 
//membaca file todo.txt
$file	=	file_get_contents('todo.txt');
//mengubah format serialize menjadi array
$todos	=	unserialize($file);
//Jika ditemukan todo yang dikirim melalui methode POST
if(isset($_POST['todo']))
{
    $data	= $_POST['todo']; // mengabil data yang di input pada form
    $todos[]=[
                'todo'	=> $data,
                'status'=>0
    		  ];
	$daftar_belanja = serialize($todos);
    file_put_contents('todo.txt',$daftar_belanja);
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