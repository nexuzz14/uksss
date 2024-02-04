<?php 
$id = $_GET['id'];


include 'koneksi.php';

$delete =mysqli_query($conn, "DELETE FROM siswa WHere id = '$id'");

if($delete) {
    echo "<script>alert ('Data Berhasil Dihapus')</script>";
    header ("refresh:0;tabels.php");
}else{
    echo "<script>alert ('Data Tidak Berhasil Dihapus')</script>";
    header ("refresh:0;tabels.php");
}
?>