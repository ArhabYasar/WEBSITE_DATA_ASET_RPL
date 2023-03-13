<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>LOGIN</title>
</head>
<body>
<div class="header">
    <div class="inner-header flex">
        <div class="center">
            <span></span>
            <img src="logo_vf.png" width="150" height="150">
            <h1>LOGIN</h1>
            <form method="post">
                <div class="txt_field">
                    <input type="text" required name="username" autocomplete="off">
                    <span></span>
                    <label>Username</label>
                </div>
                <div class="txt_field">
                    <input type="password" required name="password" autocomplete="off">
                    <span></span>
                    <label>Password</label>
                </div>
                <input type="submit" value="LOGIN" name="login">
                <span></span>
                <h4>SILAHKAN LOGIN TERLEBIH DAHULU!</h4>
            </form>
        </div>
    </div>
    <div>
        <svg class="waves" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g  class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
        </svg>
    </div>
</div>
<div class="content flex">
    <p>Copyright &copy;2023 VIFA Project</p>
</div>
</body>
</html>
<?php
if(isset($_POST['login'])){
    $sql = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$_POST[username]' AND password = '$_POST[password]'");

    $cek = mysqli_num_rows($sql);
    if ($cek > 0){
        $_SESSION['username'] = $_POST['username'];

        echo"<meta http-equiv=refresh content=0;URL='index_lgn.php'>";
    }else{
        echo"<p alighn=center><b> Username dan Password Salah ! </b></p>";
        echo "<meta http-equiv=refresh content=2;URL='login.php'>";
    }
}
?>