<?php 
include 'koneksi.php';

$nomor = $_GET['nomor'];

$query = "DELETE FROM siswa_baru WHERE nomor='$nomor'";
mysqli_query($con, $query);
if($query) {
    header("Location:list_pendaftar.php");
} else {
    die("maaf gagal menghapus");
}

?>