<?php
// Menghubungkan ke file function
require 'function.php';

// Mengecek apakah tombol login telah diklik
if (isset($_POST['login'])) {
    // Mendapatkan username dan password dari inputan
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (login($username, $password)) {
        echo "<script>
                alert('Login Berhasil');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo "<script>
                alert('Username dan Password Tidak Sesuai');
                document.location.href = 'login.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!--Jenis Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200&display=swap" rel="stylesheet">


    <!-- Style CSS -->
    <link rel="stylesheet" href="style/style.css">

</head>
<body class ="body-login">
    <!-- Login Start !-->
    <div class = "login">
        <h2 id = "h2-login" >LOGIN</h2>
        <form  action="" method = "POST">
            <div class = "form-login" >
                <label for = "username" >Username</label> <br>
                <input class = "input-login" type = "text" name="username" placeholder = "Input Username" autocomplete="off">
            </div>
            
            <div class = "form-login">
                <label for = "password" >Pasword</label> <br>
                <input class = "input-login" type = "password" name="password" placeholder = "Input Password">
            </div>
            <button id = "button-login" type = "submit" name = "login">Login</button>
        </form> 
    </div>
    <!-- Login End !-->
</body>
</html>