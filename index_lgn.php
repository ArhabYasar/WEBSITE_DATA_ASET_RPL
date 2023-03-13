<?php
include 'session.php';
require 'koneksi.php';
$vf = query("SELECT * FROM laptop");
$ia = query("SELECT * FROM pc");

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

<?php 
		if(isset($_GET['page'])){
        	$page = $_GET['page'];
        		if ($page == 'datapc'){
            	include 'data_pc.php';
			}}else if(empty($_GET['page'])){
					include 'data_laptop.php';}
	?>


</div>
</body>
</html>