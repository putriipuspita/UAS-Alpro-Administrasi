<?php 
//Mengambil funsi dari file funcions
require '../function.php';

//Mengecek apakah tombol sumbit sudah ditekan
if (isset($_POST["submit"])) {

    //mengecek apakah data berhasil ditambahkan
    if (tambah($_POST, 'kk') > 0) {
        echo 
        "<script>
        alert('data berhasil ditambahkan');
        document.location.href = '../kartukeluarga.php'
        </script> ";
    }else {
        echo 
        "<script>
        alert('data gagal ditambahkan');
        document.location.href = 'formkk.php'
        </script> ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kartu Keluarga</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body class = "form">
    <!-- Form KK Start !-->
    <form action="" method="post" autocomplete="off">
        <div class="container-kk">
            <!-- List From KK !-->
            <div class="list">
                <div class = "list-form">
                    <label for = "kk">No KK</label>
                    <p>:</p>
                    <input class="input-form" type="number" id = "kk" name="kk" placeholder="Masukan No Kartu Keluarga" required >
                </div>
                <div class = "list-form">
                    <label for = "nama">Nama Lengkap</label>
                    <p>:</p>
                    <input class="input-form" type="text" id = "nama" name="nama" placeholder="Masukan Nama" required>
                </div>
                <div class = "list-form">
                    <label for = "nik">NIK</label>
                    <p>:</p>
                    <input class="input-form" type="number" id = "nik" name="nik" placeholder="Masukan NIK" required >
                </div>
                <div class = "list-form">
                    <label for = "jekel">Jenis Kelamin</label>
                    <p>:</p>
                    <select id="jekel" name="jekel">
                        <option>Pilih</option>
                        <option value="perempuan">Perempuan</option>
                        <option value="laki-laki">Laki-laki</option>
                    </select>
                </div>
                <div class = "list-form">
                    <label for = "tempat">Tempat Lahir</label>
                    <p>:</p>
                    <input class="input-form" type="text" id = "tempat" name="tempat" placeholder="Masukan Tempat Lahir" required >
                </div>
            </div>
        
            <div class="list">
                <div class = "list-form">
                        <label for = "tanggal">Tanggal Lahir</label>
                        <p>:</p>
                        <input class="input-form" type="date" id = "tanggal" name="tanggal" placeholder="Masukan Tanggal Lahir" required>
                    </div>
                <div class = "list-form">
                        <label for = "agama">Agama</label>
                        <p>:</p>
                        <input class="input-form" type="text" id = "agama" name="agama" placeholder="Masukan Agama" required >
                    </div>
                <div class = "list-form">
                    <label for = "pendidikan">Pendidikan</label>
                    <p>:</p>
                    <input class="input-form" type="text" id = "pendidikan" name="pendidikan" placeholder="Masukan Pendidikan" required >
                </div>
                <div class = "list-form">
                    <label for = "pekerjaan">Pekerjaan</label>
                    <p>:</p>
                    <input class="input-form" type="text" id = "pekerjaan" name="pekerjaan" placeholder="Masukan Pekerjaan" required >
                </div>
                <div class = "list-form">
                    <label for = "goldar">Golongan Darah</label>
                    <p>:</p>
                    <select id="goldar" name="goldar">
                        <option>Pilih</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                </div>
            </div>

            <!-- Bagian Button Kembali dan Submit !-->
            <button class = "button-kembali-kk" type = "submit" name = "submit">
                <a href="../kartukeluarga.php">Kembali</a>
            </button>
            <button class="button-kk" type = "Submit" name = "submit" >Submit</button>
        </div>
    </form>
    <!-- Form KK End !-->
</body>
</html>