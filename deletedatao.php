<?php 
$id_obat = $_GET['id'];


include 'koneksi.php';

$delete =mysqli_query($koneksi, "DELETE FROM obat WHere id = '$id'");

 
header("location:tabelo.php");
?>