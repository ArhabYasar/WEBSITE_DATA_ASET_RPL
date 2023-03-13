<?php
require 'koneksi.php';
$vf = query("SELECT * FROM laptop");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Utama</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<img src="vinav.png" alt="" id="logo" width='150'>
		<ul>
			<li><a href="">About</a></li>
			<li><a href="">Data Aset PC</a></li>
			<li><a href="">Login</a></li>
		</ul> 
	</header>
	<section>
		<img src="vifautm.png" alt="vifa"  >
		<img src="bgvi.png" alt="gunung">
	</section>
	<script type="text/javascript">
		  window.addEventListener("scroll", function(){
			  var header = document.querySelector("header");
			  header.classList.toggle("sticky", window.scrollY > 0);
		  })
	  </script>
	  <div class="sec">
		<h2>Data Aset Laptop </h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore quae optio, eius, necessitatibus corporis earum neque, ullam voluptates fugit labore reprehenderit. Accusamus, vitae. Iste earum laudantium atque nisi eum possimus!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore quae optio, eius, necessitatibus corporis earum neque, ullam voluptates fugit labore reprehenderit. Accusamus, vitae. Iste earum laudantium atque nisi eum possimus!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore quae optio, eius, necessitatibus corporis earum neque, ullam voluptates fugit labore reprehenderit. Accusamus, vitae. Iste earum laudantium atque nisi eum possimus!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore quae optio, eius, necessitatibus corporis earum neque, ullam voluptates fugit labore reprehenderit. Accusamus, vitae. Iste earum laudantium atque nisi eum possimus!</p>
	  </div>
</body>
</html>
<style>
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Times New Roman';
}
body{
  background: #ffffff;
  min-height: 200vh;
}
header{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  transition: 0.6s;
  padding: 40px 1000x;
  z-index: 100000;
}
header .logo{
  position: relative;
  text-decoration: none;
  letter-spacing: 2px;
  transition: 0.6s;
}
.sticky{
  padding: 5px 100px;
  background: #ffffff;
}
header ul{
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}
header ul li{
  position: relative;
  list-style: none;
}
header ul li a{
  position: relative;
  margin: 0 15px;
  text-decoration: none;
  color: rgb(151, 151, 151);
  letter-spacing: 2px;
  font-weight: 500px;
  transition: 0.6s;
}
/* .banner{
  position: relative;
  width: 100%;
  height: 100vh;
  background:url(bgweb.png);
  background-size: cover;
} */
.sticky ul li a{
  color: #000000;
}
section{
  position: relative;
  width: 100%;
  height: 100%;
  padding: 100px;
  display: flex;
  justify-content: center;
  align-items: center;
}
section img{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  object-fit: cover;
}
section img#vifa{
  background-size: cover;
}
section img#gunung{
  z-index: 10;
}
.sec{
  position: relative;
  padding: 100px;
}
.sec h2{
  font-size: 3.5em;
  margin-bottom: 10px;
  color: rgb(0, 0, 0);
}
</style>