<?php
// Menghubungkan ke file function
require '../function.php';

// Membuat variabel untuk menampung Id dari database
$id = $_GET["Id"];

// Pengkondisian dengan memanggil function hapus
if (hapus($id, 'akta' ) > 0) {
    echo 
        "<script>
        alert('data berhasil dihapus');
        document.location.href = '../aktakelahiran.php'
        </script> ";
    }elseif (hapus($id, 'kk' ) > 0) {
    echo 
        "<script>
        alert('data berhasil dihapus');
        document.location.href = '../kartukeluarga.php'
        </script> ";
}else if (hapus($id, 'ktp' ) > 0) {
    echo 
        "<script>
        alert('data berhasil dihapus');
        document.location.href = '../ktp.php'
        </script> ";
}

?>
