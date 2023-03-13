<?php
if (isset($_POST['submit'])){
    
    if (tambahlaptop($_POST) > 0 ){
        echo "
        <script>
        alert('Data Berhasil Ditambahkan');
        document.location.href = 'index_lgn.php';
        </script>";  
    }
    else{
        echo"
        <script>
        alert('Data Gagal Ditambahkan');
        document.location.href = 'index_lgn.php';
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
	<title>Halaman Utama</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap.bundle.js">
	<link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<header >
		<img src="vinav.png" id="logo" width='150'>
		<ul class="my-auto">
			<li><a href="index_lgn.php?page=datapc">Data Aset PC</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</header>
	<div class="bg" id="homelgnlp">
		<!-- <img src="bgvi.png" id="gunung" alt="">
		<img src="bgutama.png" id="vifa" alt="VIFA"> -->
		<img src="bgvifa.png" alt="" id="vifa">
	</div>
	<script type="text/javascript">
		  window.addEventListener("scroll", function(){
			  var header = document.querySelector("header");
			  header.classList.toggle("sticky", window.scrollY > 0);
		  })
	  </script>	




	<section class="table" id="table">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="text-center">Data Aset Laptop</h2>
						<div class="container">
            				<table class="table table-hover">
                				<tr>
                    				<th>ID</th>
                    				<th>Nama Barang</th>
                    				<th>Merk / Type</th>
                    				<th>Jumlah</th>
                    				<th>Aksi</th>
                				</tr>
                				<?php foreach ($vf as $row) :?>     
            				<tbody>
                				<div>
                    				<tr>
                        				<td><?= $row["id"];?></td>
                        				<td><?= $row["namabarang"];?></td>
                        				<td><?= $row["merk"];?></td>
                        				<td><?= $row["jumlah"];?></td>
                                        <td>
                                            <a class="btn btn-dark" href="edit.php?id=<?= $row["id"];?>">Edit</a>
                                            <a class="btn btn-dark" href="hapus.php?id=<?= $row["id"];?>"
                                            onclick="return confirm('apakah yakin untuk menghapus data ini?');">Hapus</a>
			                            </td>
                    				</tr>
                				</div>
            				</tbody>
            				<?php endforeach;?>
            				</table>
        				</div>
				</div>
			</div>
		</div>
	</section>

<div class="container">
    <h2>Tambah Data Laptop</h2>
    <form action="" method="POST">

        <div class="form-group">
            <label for="id">ID: </label>
            <input type="text" class="form-control" name="id" id="id" required autocomplete="off">
        </div>
        <br>
        <div class="form-group">
            <label for="namabarang">Nama Barang: </label>
            <input type="text" class="form-control" name="namabarang" id="namabarang" required autocomplete="off">
        </div>
        <br>
        <div class="form-group">
            <label for="merk">Merk / Type: </label>
            <input type="text" class="form-control" name="merk" id="merk" required autocomplete="off">
        </div>
        <br>
        <div class="form-group">
            <label for="jumlah">Jumlah: </label>
            <input type="text" class="form-control" name="jumlah" id="jumlah" required autocomplete="off">
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-dark">Selesai</button>
    </form>
</div>
<br>

<div class="container mx-auto">
  <footer class="py-0 my-0">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#homelgnlp" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="about_lgn.php" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2023 VIFA Project</p>
  </footer>

</div>
</body>
</html>