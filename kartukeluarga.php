<?php 
//memanggil atau mengambil data dari file function
require 'function.php';

//mengambil data dari database kartu keluarga
$kk = ambil ("SELECT * FROM kartu");

//mengecek tombol cari sudah ditekan
if (isset($_POST["cari"])) {
    $kk = cari ($_POST["search"], 'kk');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Keluarga</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="style/style.css">

</head>
<body>
    <!-- Sidebar Start !-->
    <div class="logo">
        <!-- Logo !-->
        <h2 id = "h2-logo">Administrasi</h2>
    </div>

    <!-- List Sidebar !-->
    <div class="sidebar">
        <ul>
            <li> 
                <img class ="img-sidebar"  src="gambar/dasboard.png" alt="Dashboard">
                <a class = "a-sidebar" href="index.php" alt="Dashboard">Dashboard</a>
            </li>
            <li> 
                <img class ="img-sidebar"  src="gambar/orang.png" alt="Kartu Keluarga">
                <a class = "a-sidebar" href="kartukeluarga.php" alt="Kartu Keluarga">Kartu Keluarga</a>
            </li>
            <li> 
                <img class ="img-sidebar" src="gambar/ktp.png" alt="KTP">
                <a class = "a-sidebar" href="ktp.php" alt="KTP">KTP</a>
            </li>
            <li> 
                <img class ="img-sidebar"  src="gambar/akta.png" alt="Akta Kelahiran">
                <a class = "a-sidebar" href="aktakelahiran.php" alt="Akta Kelahiran">Akta Kelahiran</a>
            </li>
            <li> 
                <img class ="img-sidebar"  src="gambar/logout.png" alt="Logout">
                <a class = "a-sidebar" href="login.php" alt="Logout">Logout</a>
            </li>
        </ul>
    </div>
    <!-- Sidebar End !-->

    <!-- Konten Kartu Keluarga !-->
    <section id = "konten">
        <!-- Bagian Navbar Start!-->
        <div class="navbar">
            <!-- Bagian Search dan Tombol Cari !-->
            <form action="" method="post">
                <input type="text" name="search" placeholder="search here ............... " autocomplete ="off">
                <button id="button-cari" type="submit" name="cari">Cari</button>
            </form>

            <!-- Bagian Judul !-->
            <h1 id = "h1-navbar">Data Kartu Keluarga</h1>

            <!-- Bagian Tambah Data !-->
            <button type = "submit" >
                <a class = "a-sidebar" href="tambah/formkk.php" alt="kartukeluarga">Add New </a>
            </button>
        </div>
        <!-- Bagian Navbar End !-->
        
        <!-- Bagian Table For Database Start !-->
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No KK</th>
                        <th>Nama Lengkap</th>
                        <th>NIK</th>
                        <th>Jekel</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Agama</th>
                        <th>Pendidikan</th>
                        <th>Pekerjaan</th>
                        <th>Goldar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php $i = 1?>
                <?php foreach ($kk as $row) : ?>
                    <tr>
                        <td> <?= $i; ?> </td>
                        <td> <?= $row["kk"]; ?> </td>
                        <td> <?= $row["nama"]; ?> </td>
                        <td> <?= $row["nik"]; ?> </td>
                        <td> <?= $row["jekel"]; ?> </td>
                        <td> <?= $row["tempat"]; ?> </td>
                        <td> <?= $row["tanggal"]; ?> </td>
                        <td> <?= $row["agama"]; ?> </td>
                        <td> <?= $row["pendidikan"]; ?> </td>
                        <td> <?= $row["pekerjaan"]; ?> </td>
                        <td> <?= $row["goldar"]; ?> </td>
                        <td>
                        <a class ="a-aksi"href="hapus/hapus.php?Id=<?= $row["Id"]; ?>" onclick="return confirm('Hapus Data Ini?');"><img class="aksi" src="gambar/hapus.png"></a>
                            <a class="a-aksi" href="ubah/kk.php?Id=<?= $row["Id"]; ?>"><img class="aksi" src="gambar/edit.png"></a>
                        </td>
                    </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- Bagian Table For Database End !-->
    </section>
</body>
</html>