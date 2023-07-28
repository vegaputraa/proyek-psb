<?php 
include 'koneksi.php';

if(isset($_POST['daftar'])){
    $nama               = $_POST["nama"];
    $alamat             = $_POST["alamat"];
    $jenis_kelamin      = $_POST["jenis_kelamin"];
    $agama              = $_POST["agama"];
    $sekolah_asal       = $_POST["sekolah_asal"];

    $query = "INSERT INTO siswa_baru SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah_asal='$sekolah_asal'";

    mysqli_query($con, $query);
    if( $query ) {
        header('Location: ./../index.php?status=sukses');
    } else {
        header('Location: ./../index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}

?>