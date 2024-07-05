<?php 
//Mengambil funsi dari file funcions
require '../function.php';

//ambil data di URL
$id = $_GET["Id"];

//mengambil data mahasiswa berdasarkan Id
$kk = ambil("SELECT * FROM kartu WHERE Id = $id")[0];

//Mengecek apakah tombol sumbit sudah ditekan
if (isset($_POST["submit"])) {

    //mengecek apakah data berhasil ditambahkan
    if (ubah($_POST, 'kk') > 0) {
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
    <title>Form Ubah Kartu Keluarga</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body class = "form">
    <!-- Form KK Start !-->
    <form action="" method="post" autocomplete="off">
    <input type="hidden" name="Id" value="<?= $kk["Id"]; ?>">
        <div class="container-kk">
            <!-- List From KK !-->
            <div class="list">
                <div class = "list-form">
                    <label for = "kk">No KK</label>
                    <p>:</p>
                    <input class="input-form" type="number" id = "kk" name="kk" placeholder="Masukan No Kartu Keluarga" required value="<?= $kk ["kk"]; ?>" >
                </div>
                <div class = "list-form">
                    <label for = "nama">Nama Lengkap</label>
                    <p>:</p>
                    <input class="input-form" type="text" id = "nama" name="nama" placeholder="Masukan Nama" required value="<?= $kk ["nama"]; ?>">
                </div>
                <div class = "list-form">
                    <label for = "nik">NIK</label>
                    <p>:</p>
                    <input class="input-form" type="number" id = "nik" name="nik" placeholder="Masukan NIK" required value="<?= $kk ["nik"]; ?>" >
                </div>
                <div class="list-form">
                    <label for="jekel">Jenis Kelamin</label>
                    <p>:</p>
                    <select id="jekel" name="jekel" required>
                        <option value="">Pilih</option>
                        <option value="perempuan" <?= ($kk["jekel"] == 'perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                        <option value="laki-laki" <?= ($kk["jekel"] == 'laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                    </select>
                </div>
                <div class = "list-form">
                    <label for = "tempat">Tempat Lahir</label>
                    <p>:</p>
                    <input class="input-form" type="text" id = "tempat" name="tempat" placeholder="Masukan Tempat Lahir" required value="<?= $kk ["tempat"]; ?>">
                </div>
            </div>
        
            <div class="list">
                <div class = "list-form">
                        <label for = "tanggal">Tanggal Lahir</label>
                        <p>:</p>
                        <input class="input-form" type="date" id = "tanggal" name="tanggal" placeholder="Masukan Tanggal Lahir" required value="<?= $kk ["tanggal"]; ?>">
                    </div>
                <div class = "list-form">
                        <label for = "agama">Agama</label>
                        <p>:</p>
                        <input class="input-form" type="text" id = "agama" name="agama" placeholder="Masukan Agama" required value="<?= $kk ["agama"]; ?>" >
                    </div>
                <div class = "list-form">
                    <label for = "pendidikan">Pendidikan</label>
                    <p>:</p>
                    <input class="input-form" type="text" id = "pendidikan" name="pendidikan" placeholder="Masukan Pendidikan" required value="<?= $kk ["pendidikan"]; ?>" >
                </div>
                <div class = "list-form">
                    <label for = "pekerjaan">Pekerjaan</label>
                    <p>:</p>
                    <input class="input-form" type="text" id = "pekerjaan" name="pekerjaan" placeholder="Masukan Pekerjaan" required value="<?= $kk ["pekerjaan"]; ?>" >
                </div>
                <div class = "list-form">
                    <label for = "goldar">Golongan Darah</label>
                    <p>:</p>
                    <select id="goldar" name="goldar">
                        <option>Pilih</option required>
                        <option value="A" <?= ($kk["goldar"] == 'A') ? 'selected' : ''; ?>>A</option>
                        <option value="B" <?= ($kk["goldar"] == 'B') ? 'selected' : ''; ?>>B</option>
                        <option value="AB" <?= ($kk["goldar"] == 'AB') ? 'selected' : ''; ?>>AB</option>
                        <option value="O" <?= ($kk["goldar"] == 'O') ? 'selected' : ''; ?>>O</option>
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