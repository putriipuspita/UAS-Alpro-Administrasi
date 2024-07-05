<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "pendataanwarga");

// Fungsi login
function login($username, $password) {
    // Membuat Usename dan Password
    $name = "Admin";
    $ps = "Admin123";

    // Verifikasi username dan password
    if ($username == $name && $password == $ps) {
        return true;
    } else {
        return false;
    }
}

//fungsi untuk mengambil data di database
function ambil($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $temp =[];
    while($row = mysqli_fetch_assoc($result) ) {
        $temp [] = $row;
    }

    return $temp;
}

//fungsi untuk menambah data ke database
function tambah($data, $jenisData) {
    global $conn;

    //pengkondisian untuk menentukan arah table database dan isi database
    if($jenisData == 'akta') {
        $nama = $data["nama"];
        $tempatlahir = $data ["tempatlahir"];
        $tanggallahir = $data["tanggallahir"];
        $anak = $data["anak"];
        $ayah = $data["ayah"];
        $ibu = $data["ibu"];

        //Menginputkan data ke table database sesuai dengan kolom yang ada di database
        $inputData = "INSERT INTO akta 
                    VALUES ('$nama', '$tempatlahir', '$tanggallahir', '$anak', '$ayah', '$ibu', '')";

    }else if ($jenisData == 'kk') {
        $kk = $data["kk"];
        $nama = $data ["nama"];
        $nik = $data["nik"];
        $jekel = $data["jekel"];
        $tempat = $data["tempat"];
        $tanggal = $data["tanggal"];
        $agama = $data["agama"];
        $pendidikan = $data["pendidikan"];
        $pekerjaan = $data["pekerjaan"];
        $goldar = $data["goldar"];

        $inputData = "INSERT INTO kartu 
                    VALUES ('$kk', '$nama', '$nik', '$jekel', '$tempat', '$tanggal', '$agama', '$pendidikan', '$pekerjaan', '$goldar', '')";

    }else if($jenisData == 'ktp') {
        $nik = $data["nik"];
        $nama = $data["nama"];
        $tempat = $data["tempat"];
        $tanggal = $data["tanggal"];
        $rtrw = $data["rtrw"];
        $desa = $data["desa"];
        $kec = $data["kec"];
        $agama = $data["agama"];
        $status = $data["status"];
        $pekerjaan = $data["pekerjaan"];
        $masa = $data["masa"];

        $inputData = "INSERT INTO kartupenduduk 
                    VALUES ('$nik', '$nama', '$tempat', '$tanggal', '$rtrw', '$desa', '$kec', '$agama', '$status', '$pekerjaan', '$masa', '')";
    }
    
    
    //memanggil data dari variabel inputData
    mysqli_query($conn, $inputData);

    //mengembalikan angka 
    return mysqli_affected_rows($conn);
}

//fungsi untuk menghapus data dari database
function hapus($id, $table) {
    global $conn;

    // Menentukan tabel berdasarkan parameter
    if ($table == "akta") {
        $query = "DELETE FROM akta WHERE Id = $id";
    } elseif ($table == "kk") {
        $query = "DELETE FROM kartu WHERE Id = $id";
    } elseif ($table == "ktp") {
        $query = "DELETE FROM kartupenduduk WHERE Id = $id";
    } else {
        return 0; // Tabel tidak dikenal, tidak melakukan apa-apa
    }
    
    // Melakukan query DELETE
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//fungsi untuk mengubah data
function ubah ($data, $jenisData) {
    global $conn;

    $id = $data["Id"];
    if($jenisData == 'akta') { 
        $nama = $data["nama"];
        $tempatlahir = $data ["tempatlahir"];
        $tanggallahir = $data["tanggallahir"];
        $anak = $data["anak"];
        $ayah = $data["ayah"];
        $ibu = $data["ibu"];

        //Menginputkan data ke table database sesuai dengan kolom yang ada di database
        $inputData = "UPDATE akta SET
                        nama = '$nama', 
                        tempatlahir = '$tempatlahir',
                        tanggallahir = '$tanggallahir',
                        anak = '$anak',
                        ayah = '$ayah',
                        ibu = '$ibu'
                    WHERE Id = $id
                    ";

    }else if ($jenisData == 'kk') {
        $kk = $data["kk"];
        $nama = $data ["nama"];
        $nik = $data["nik"];
        $jekel = $data["jekel"];
        $tempat = $data["tempat"];
        $tanggal = $data["tanggal"];
        $agama = $data["agama"];
        $pendidikan = $data["pendidikan"];
        $pekerjaan = $data["pekerjaan"];
        $goldar = $data["goldar"];

        $inputData = "UPDATE kartu SET 
                        kk = '$kk',
                        nama = '$nama',
                        nik = '$nik',
                        jekel = '$jekel',
                        tempat = '$tempat',
                        tanggal = '$tanggal',
                        agama = '$agama',
                        pendidikan = '$pendidikan',
                        pekerjaan = '$pekerjaan',
                        goldar = '$goldar'
                    WHERE Id = $id
                    ";
    }else if ($jenisData == 'ktp') {
        $nik = $data["nik"];
        $nama = $data["nama"];
        $tempat = $data["tempat"];
        $tanggal = $data["tanggal"];
        $rtrw = $data["rtrw"];
        $desa = $data["desa"];
        $kec = $data["kec"];
        $agama = $data["agama"];
        $status = $data["status"];
        $pekerjaan = $data["pekerjaan"];
        $masa = $data["masa"];

        $inputData = "UPDATE kartupenduduk SET
                        nik = '$nik',
                        nama = '$nama',
                        tempat = '$tempat',
                        tanggal = '$tanggal',
                        rtrw = '$rtrw',
                        desa = '$desa',
                        kec = '$kec',
                        agama = '$agama',
                        status = '$status',
                        pekerjaan = '$pekerjaan',
                        masa = '$masa'
                    WHERE Id = $id
                    ";
    }

    //memanggil data dari variabel inputData
    mysqli_query($conn, $inputData);

    //mengembalikan angka 
    return mysqli_affected_rows($conn);
}

//fungsi untuk mencari data di database
function cari($search, $namaData) {
    global $conn;

    if ($namaData == 'akta') {
        $cariData = "SELECT * FROM akta 
                    WHERE 
                        nama LIKE '%$search%' OR
                        tempatlahir LIKE '%$search%' OR
                        tanggallahir LIKE '%$search%' OR
                        anak LIKE '%$search%' OR
                        ayah LIKE '%$search%' OR
                        ibu LIKE '%$search%'
                    "; //fungsi like supaya kita bisa melakukan pencarian flexibel (keyword di sql)
                    // % tuh supaya kita bisa menentukan flexibel contoh nama depan dan belakang
    }else if ($namaData == 'ktp') {
        $cariData = "SELECT * FROM kartupenduduk 
                        WHERE
                        nik LIKE '%$search%' OR
                        nama LIKE '%$search%' OR
                        rtrw LIKE '%$search%' OR
                        desa LIKE '%$search%' OR
                        kec LIKE '%$search%' OR
                        status LIKE '%$search%'
                        ";
    }else if ($namaData == 'kk') {
        $cariData = "SELECT * FROM kartu 
                        WHERE
                        kk LIKE '%$search%' OR
                        nama LIKE '%$search%' OR
                        nik LIKE '%$search%' OR
                        jekel LIKE '%$search%' OR
                        pekerjaan LIKE '%$search%'
                        ";
    }
    return ambil($cariData); //mengembalikan nilai dengan memanggil fungsi ambil untuk menampilkan data dari database
}
?>
