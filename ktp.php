<?php 
//memanggil atau mengambil data dari file function
require 'function.php';

//mengambil data dari database kartu keluarga
$ktp = ambil ("SELECT * FROM kartupenduduk");

//mengecek apakah tombol cari sudah ditekan
if (isset($_POST["cari"])) {
    $ktp = cari($_POST["search"], 'ktp');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KTP</title>

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
    
    <!-- Konten Kartu Penduduk !-->
    <section id = "konten">
        <!-- Bagian Navbar Start!-->
        <div class="navbar">
            <!-- Bagian Search dan Tombol Cari !-->
            <form action="" method="post">
                <input type="text" name="search" placeholder="search here ............... " autocomplete ="off">
                <button id="button-cari" type="submit" name="cari">Cari</button>
            </form>

            <!-- Bagian Judul !-->
            <h1 id = "h1-navbar">Data Kartu Tanda Penduduk</h1>

            <!-- Bagian Tambah Data !-->
            <button type = "submit" >
                <a class = "a-sidebar" href="tambah/formktp.php" alt="formktp">Add New </a>
            </button>
        </div>
        <!-- Bagian Navbar End !-->
        
        <!-- Bagian Table For Database Start !-->
        <div>
            <table class="table" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama Lengkap</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>RT/RW</th>
                        <th>Kel/Desa</th>
                        <th>Kecamatan</th>
                        <th>Agama</th>
                        <th>Status</th>
                        <th>Pekerjaan</th>
                        <th>Masa Aktif</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php $i = 1?>
                <?php foreach ($ktp as $row) : ?>
                    <tr>
                        <td> <?= $i; ?> </td>
                        <td> <?= $row["nik"]; ?> </td>
                        <td> <?= $row["nama"]; ?> </td>
                        <td> <?= $row["tempat"]; ?> </td>
                        <td> <?= $row["tanggal"]; ?> </td>
                        <td> <?= $row["rtrw"]; ?> </td>
                        <td> <?= $row["desa"]; ?> </td>
                        <td> <?= $row["kec"]; ?> </td>
                        <td> <?= $row["agama"]; ?> </td>
                        <td> <?= $row["status"]; ?> </td>
                        <td> <?= $row["pekerjaan"]; ?> </td>
                        <td> <?= $row["masa"]; ?> </td>
                        <td>
                        <a class ="a-aksi"href="hapus/hapus.php?Id=<?= $row["Id"]; ?>" onclick="return confirm('Hapus Data Ini?');"><img class="aksi" src="gambar/hapus.png"></a>
                            <a class="a-aksi" href="ubah/ktp.php ?Id=<?= $row["Id"]; ?>"><img class="aksi" src="gambar/edit.png"></a>
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