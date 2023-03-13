<?php

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
			<li><a href="index.php">Data Aset Laptop</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
	</header>
	<div class="bg" id="homepc">
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
					<h2 class="text-center">Data Aset PC</h2>
						<div class="container">
            				<table class="table table-hover">
                				<tr>
                    				<th>ID</th>
                    				<th>Nama Barang</th>
                    				<th>Merk / Type</th>
                    				<th>Jumlah</th>
                				</tr>
                				<?php foreach ($ia as $row) :?>     
            				<tbody>
                				<div>
                    				<tr>
                        				<td><?= $row["id"];?></td>
                        				<td><?= $row["namabarang"];?></td>
                        				<td><?= $row["merk"];?></td>
                        				<td><?= $row["jumlah"];?></td>
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
</div>
<div class="container mx-auto">
  <footer class="py-0 my-0">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#homepc" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="about.php" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2023 VIFA Project</p>
  </footer>

</body>
</html>