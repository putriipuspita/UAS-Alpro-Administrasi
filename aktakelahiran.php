<?php 
//memanggil atau mengambil data dari file function
require 'function.php';

//mengambil data dari database aktekelahiran
$akte = ambil ("SELECT * FROM akta");

//jika tombol cari ditekan
if(isset($_POST["cari"])) {
    //menimpa dan mencari data akte berdasarkan yang ingin kita cari
    $akte = cari($_POST["search"], 'akta'); //mendapatkan data dari yang input dan memasukan ke function car
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akte Kelahiran</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="style/style.css">

</head>
<body>
    <!-- Sidebar Start !-->

    <!-- Logo !-->
    <div class="logo">
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
                <img class ="img-sidebar"  src="gambar/ktp.png" alt="KTP">
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

    <!-- Konten Akta Kelahiran!-->
    <section id = "konten">
        <!-- Bagian Navbar !-->
        <div class="navbar">
            <!-- Bagian Search dan Tombol Cari !-->
            <form action="" method="post">
                <input type="text" name="search" placeholder="search here ............... " autocomplete ="off">
                <button id="button-cari" type="submit" name="cari">Cari</button>
            </form>
            
            <!-- Bagian Judul !-->
            <h1 id = "h1-navbar">Data Akte Kelahiran</h1>

            <!-- Bagian Tambah Data !-->
            <button type = "submit" name = "submit">
                <a class = "a-sidebar" href="tambah/formakte.php" alt="Formakte">Add New </a>
            </button>
        </div>
        <!-- Bagian Navbar End !-->

        <!-- Bagian Table For Database Start !-->
        <div class = "table">
            <table class="table">
                <thead>
                    <tr class = "t-akte">
                        <th class = "t-akte">No</th>
                        <th class = "t-akte">Nama Lengkap</th>
                        <th class = "t-akte">Tempat Lahir</th>
                        <th class = "t-akte">Tanggal Lahir</th>
                        <th class = "t-akte">Anak Ke</th>
                        <th class = "t-akte">Nama Ayah</th>
                        <th class = "t-akte">Nama Ibu</th>
                        <th class = "t-akte">Aksi</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php $i = 1?>
                <?php foreach ($akte as $row) : ?>
                    <tr class = "t-akte">
                        <td class = "t-akte"><?= $i; ?> </td>
                        <td class = "t-akte"> <?= $row["nama"]; ?> </td>
                        <td class = "t-akte"> <?= $row["tempatlahir"]; ?> </td>
                        <td class = "t-akte"> <?= $row["tanggallahir"]; ?> </td>
                        <td class = "t-akte"> <?= $row["anak"]; ?> </td>
                        <td class = "t-akte"> <?= $row["ayah"]; ?></td>
                        <td class = "t-akte"> <?= $row["ibu"]; ?> </td>
                        <td>
                            <a class ="a-aksi"href="hapus/hapus.php?Id=<?= $row["Id"]; ?>" onclick="return confirm('Hapus Data Ini?');"><img class="aksi" src="gambar/hapus.png"></a>
                            <a class="a-aksi" href="ubah/akta.php?Id=<?= $row["Id"]; ?>"><img class="aksi" src="gambar/edit.png"></a>
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