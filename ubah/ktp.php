<?php 
//Mengambil funsi dari file funcions
require '../function.php';

//ambil data di url
$id = $_GET["Id"];

//mengambil data mahasiswa berdasarkan Id
$ktp = ambil("SELECT * FROM kartupenduduk WHERE Id = $id")[0];

//Mengecek apakah tombol sumbit sudah ditekan
if (isset($_POST["submit"])) {

    //mengecek apakah data berhasil ditambahkan
    if (ubah($_POST, 'ktp') > 0) {
        echo 
        "<script>
        alert('data berhasil ditambahkan');
        document.location.href = '../ktp.php'
        </script> ";
    }else {
        echo 
        "<script>
        alert('data gagal ditambahkan');
        document.location.href = 'formktp.php'
        </script> ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form KTP</title>

    <!-- Style CSS !-->
    <link rel="stylesheet" href="../style/style.css">
</head>

<body class = "form">
    <!-- Form KTP Start !-->
    <form action="" method="post" autocomplete="off">
    <input type="hidden" name="Id" value="<?= $ktp["Id"]; ?>">
        <div class="container-ktp">
            
            <!-- List Form KTP !-->
            <div class="list">
                <div class = "list-form">
                    <label for = "nik">NIK</label>
                    <p>:</p>
                    <input class="input-form" type="number" id = "nik" name="nik" placeholder="Masukan NIK" required value="<?= $ktp ["nik"]; ?>">
                </div>
                <div class = "list-form">
                    <label for = "nama">Nama Lengkap</label>
                    <p>:</p>
                    <input class="input-form" type="text" id = "nama" name="nama" placeholder="Masukan Nama" required value="<?= $ktp ["nama"]; ?>">
                </div>
                <div class = "list-form">
                    <label for = "tempat">Tempat Lahir</label>
                    <p>:</p>
                    <input class="input-form" type="text" id = "tempat" name="tempat" placeholder="Masukan Tanggal Lahir" required value="<?= $ktp ["tempat"]; ?>">
                </div>
                <div class = "list-form">
                    <label for = "tanggal">Tanggal Lahir</label>
                    <p>:</p>
                    <input class="input-form" type="date" id = "tanggal" name="tanggal" placeholder="Masukan Tanggal Lahir" required value="<?= $ktp ["tanggal"]; ?>">
                </div>
                <div class = "list-form">
                    <label for = "rtrw">RT/RW</label>
                    <p>:</p>
                    <input class="input-form" type="text" id = "rt/rw" name="rtrw" placeholder="Masukan RT/RW" required value="<?= $ktp ["rtrw"]; ?>">
                </div>
                <div class = "list-form">
                    <label for = "desa">Kel/Desa</label>
                    <p>:</p>
                    <input class="input-form" type="text" id = "desa" name="desa" placeholder="Masukan Kel/Desa" required value="<?= $ktp ["desa"]; ?>">
                </div>
            </div>
        
            <div class="list">
                <div class = "list-form">
                        <label for = "kec">Kecamatan</label>
                        <p>:</p>
                        <input class="input-form" type="text" id = "kec" name="kec" placeholder="Masukan Kecamatan" required value="<?= $ktp ["kec"]; ?>">
                    </div>
                <div class = "list-form">
                    <label for = "agama">Agama</label>
                    <p>:</p>
                    <input class="input-form" type="text" id = "agama" name="agama" placeholder="Masukan Agama" required value="<?= $ktp ["agama"]; ?>">
                </div>
                <div class = "list-form">
                    <label for = "status">Status</label>
                    <p>:</p>
                    <input class="input-form" type="text" id = "status" name="status" placeholder="Masukan Status" required value="<?= $ktp ["status"]; ?>">
                </div>
                <div class = "list-form">
                    <label for = "pekerjaan">Pekerjaan</label>
                    <p>:</p>
                    <input class="input-form" type="text" id = "pekerjaan" name="pekerjaan" placeholder="Masukan Pekerjaan" required value="<?= $ktp ["pekerjaan"]; ?>">
                </div>
                <div class = "list-form">
                    <label for = "masa">Masa Aktif</label>
                    <p>:</p>
                    <input class="input-form" type="text" id = "masa" name="masa" placeholder="Masukan Masa Aktif" required value="<?= $ktp ["masa"]; ?>">
                </div>
            </div>

            <!-- Bagian Button Kembali & Submit !-->
            <button class = "button-kembali-ktp" type = "submit" name = "submit">
                <a href="../ktp.php">Kembali</a>
            </button>
            <button class="button-ktp" type = "Submit" name = "submit">Submit</button>
        </div>
    </form>
    <!-- Form KTP End !-->
</body>
</html>