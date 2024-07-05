<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="style/style.css">

</head>
<body>
    <!-- Sidebar Start !-->
    <div class="logo">
        <h2 id = "h2-logo">Administrasi</h2>
    </div>

    <div class="sidebar">
        <ul>
            <li> 
                <img class ="img-sidebar" src="gambar/dasboard.png" alt="Dashboard">
                <a class = "a-sidebar" href="index.php" alt="Dashboard">Dashboard</a>
            </li>
            <li> 
                <img class ="img-sidebar" src="gambar/orang.png" alt="Kartu Keluarga">
                <a class = "a-sidebar" href="kartukeluarga.php" alt="Kartu Keluarga">Kartu Keluarga</a>
            </li>
            <li> 
                <img class ="img-sidebar" src="gambar/ktp.png" alt="KTP">
                <a class = "a-sidebar" href="ktp.php" alt="KTP">KTP</a>
            </li>
            <li> 
                <img class ="img-sidebar" src="gambar/akta.png" alt="Akta Kelahiran">
                <a class = "a-sidebar" href="aktakelahiran.php" alt="Akta Kelahiran">Akta Kelahiran</a>
            </li>
            <li> 
                <img class ="img-sidebar"  src="gambar/logout.png" alt="Logout">
                <a class = "a-sidebar" href="login.php" alt="Logout">Logout</a>
            </li>
        </ul>
    </div>
    <!-- Sidebar End !-->

    <!-- Dashboard Start !-->
    <section>
        <div class="dashboard">
            <div class="list-dashboard">
                <div class="keterangan">
                    <h2>Kartu Keluarga</h2>
                </div>
                <div class="img-dashboard">
                    <img class="img" src="gambar/orang.png" alt="kartu keluarga" >
                </div>
            </div>
            <div class="list-dashboard">
                <div class="keterangan">
                    <h2>Kartu Tanda Penduduk</h2>
                </div>
                <div class="img-dashboard">
                    <img class="img" src="gambar/ktp.png" alt="kartu Tanda Penduduk" >
                </div>
            </div>
            <div class="list-dashboard">
                <div class="keterangan">
                    <h2>Akta Kelahiran</h2>
                </div>
                <div class="img-dashboard">
                    <img class="img" src="gambar/akta.png" alt="Akta Kelahiran" >
                </div>
            </div>
        </div>
        
    </section>
    <!-- Dashboard End !-->
</body>
</html>