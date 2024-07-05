<?php 
//Mengambil funsi dari file funcions
require '../function.php';

//Mengecek apakah tombol sumbit sudah ditekan
if (isset($_POST["submit"])) {

    //mengecek apakah data berhasil ditambahkan
    if (tambah($_POST, 'akta') > 0) {
        echo 
        "<script>
        alert('data berhasil ditambahkan');
        document.location.href = '../aktakelahiran.php'
        </script> ";
    }else {
        echo 
        "<script>
        alert('data gagal ditambahkan');
        document.location.href = 'formakte.php'
        </script> ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Akte</title>
    <!-- Link Style !-->
    <link rel="stylesheet" href="../style/style.css">
</head>

<body class = "form">
    <!-- Form Akta Start !-->
    <form action="" method="post" autocomplete="off">
        <div class="formulir">
            <!-- List Input Formulir !-->
            <div class = "list-form-akte">
                <label for = "nama">Nama Lengkap</label>
                <p>:</p>
                <input class="input-form-akte" type="text" id = "nama" name="nama" placeholder="Masukan Nama" required>
            </div>
            <div class = "list-form-akte">
                <label for = "tempatlahir">Tempat Lahir</label>
                <p>:</p>
                <input class="input-form-akte" type="text" id = "tempatlahir" name="tempatlahir" placeholder="Masukan Tempat Lahir" required>
            </div>
            <div class = "list-form-akte">
                <label for = "ttl">Tanggal Lahir</label>
                <p>:</p>
                <input class="input-form-akte" type="date" id = "ttl" name="tanggallahir" placeholder="Masukan Tanggal Lahir" required>
            </div>
            <div class = "list-form-akte">
                <label for = "anak">Anak Ke</label>
                <p>:</p>
                <input class="input-form-akte" type="text" id = "anak" name="anak" placeholder="Masukan Keterangan" required>
            </div>
            <div class = "list-form-akte">
                <label for ="ayah">Nama Ayah</label>
                <p>:</p>
                <input class="input-form-akte" type="text" id = "ayah" name="ayah" placeholder="Masukan Nama Ayah" required>
            </div>
            <div class = "list-form-akte">
                <label for ="ibu">Nama Ibu</label>
                <p>:</p>
                <input class="input-form-akte" type="text" id = "ibu" name="ibu" placeholder="Masukan Nama Ibu" required>
            </div>

            <!-- Bagian Button Submit dan Kembali !-->
            <button class = "button-kembali" type = "submit" name = "submit">
                <a href="../aktakelahiran.php">Kembali</a>
            </button>
            <button class="button-form" type = "submit" name ="submit" >Submit</button>
        </div>
    </form>
    <!-- Form Akta End !-->
</body>
</html>