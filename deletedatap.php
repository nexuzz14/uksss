<?php 
$id = $_GET['id'];


include 'koneksi.php';

$delete =mysqli_query($conn, "DELETE FROM petugas WHere id = '$id'");

 
header("location:tabelp.php");
?>