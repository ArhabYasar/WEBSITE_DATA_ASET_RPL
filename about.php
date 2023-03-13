<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About This Website!</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<header >
		<img src="vinav.png" id="logo" width='150'>
		<ul class="my-auto">
			<li><a href="index.php">Home</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
	</header>
	<script type="text/javascript">
		  window.addEventListener("scroll", function(){
			  var header = document.querySelector("header");
			  header.classList.toggle("sticky", window.scrollY > 0);
		  })
	  </script>	


    <div class="section">
        <div class="container">
            <div class="content-section pt-5">
                <div class="title mt-5">
                    <h1>About This Website</h1>
                </div>
                <div class="content">
                    <h4>Sistem Informasi Aset di Jurusan Rekayasa Perangkat Lunak</h3>
                    <p>Website berbasis komputer yang menggunakan bahasa pemrograman PHP, HTML, CSS, dan JavaScript menjadikan website ini sebagai alat untuk mendata barang aset di jurusan Rekayasa Perangkat Lunak.</p>
                </div>
            </div>
            <div class="image-section">
                <img src="about.png" alt="">
            </div>
        </div>
    </div>    

    <div class="container mx-auto">
  <footer class="py-0 my-0">
  <ul class="nav justify-content-center border-bottom pb-3 mb-3">
    </ul>
    <p class="text-center text-muted">&copy; 2023 VIFA Project</p>
  </footer>
</body>
</html>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Times New Roman';
}
.section{
    width: 100%;
    min-height: 75vh;
    background-color: #fff;
}
.container{
    width: 80%;
    display: block;
    margin: auto;
    padding-top: 100px;
}
.content-section{
    float: left;
    width: 55%;
}
.image-section{
    float: right;
    width: 40%;
}
.image-section img{
    width: 100%;
    height: auto;
}
.content-section .title{
    text-transform: uppercase;
    font-size: 28px;
    text-shadow: #000000;
}
.content-section .content h4{
    margin-top: 20px;
    color: rgb(46, 0, 137);
    font-size: 24px;
}
.content-section .content p{
    margin-top: 10px;
    font-family: sans-serif;
    font-size: 15px;
    line-height: 1.5;
}
@media screen and (max-width: 768px){
    .container{
        width: 80%;
        display: block;
        margin: auto;
        padding-top: 50px;
    }
    .content-section{
        float: none;
        width: 100%;
        display: block;
        margin: auto;
    }
    .image-section{
        float: none;
        width: 100%;
        display: block;
        margin: auto;
    }
}
</style>