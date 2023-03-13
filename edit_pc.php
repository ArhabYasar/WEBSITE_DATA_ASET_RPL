<?php
include 'session.php';
require 'koneksi.php';
$id = $_GET['id'];
$np = query("SELECT * FROM pc WHERE id = $id")[0];

if ( isset($_POST['submit'])){
    if(editlaptop($_POST) > 0 ){
        echo"
        <script>
        alert('Data Berhasil Diubah');
        document.location.href = 'index_lgn.php';
        </script>";
    }
    else{
        echo"
        <script>
        alert('Data Gagal Diubah');
        document.location.href = 'edit_pc.php';
        </script>";  
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Laptop</title>
	<link rel="stylesheet" href="bootstrap.bundle.js">
	<link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<div class="container">
    <h2>Edit Data PC</h2>
    <form action="" method="POST">

        <div class="form-group">
            <label for="id">ID: </label>
            <input type="text" class="form-control" name="id" id="id" required
                    value="<?=$np["id"]?>">
        </div>
        <br>
        <div class="form-group">
            <label for="namabarang">Nama Barang: </label>
            <input type="text" class="form-control" name="namabarang" id="namabarang" required
                    value="<?=$np["namabarang"]?>">
        </div>
        <br>
        <div class="form-group">
            <label for="merk">Merk / Type: </label>
            <input type="text" class="form-control" name="merk" id="merk" required
                    value="<?=$np["merk"]?>">
        </div>
        <br>
        <div class="form-group">
            <label for="jumlah">Jumlah: </label>
            <input type="text" class="form-control" name="jumlah" ="jumlah" required
                    value="<?=$np["jumlah"]?>">
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-dark">Selesai</button>
    </form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container mx-auto">
  <footer class="py-0 my-0">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="index_lgn.php?page=datapc" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="about.php" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2023 VIFA Project</p>
  </footer>

    
</body>
</html>