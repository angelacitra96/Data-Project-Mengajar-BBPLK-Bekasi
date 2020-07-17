<?php
require_once "koneksi.php";
$idBuku = $_GET['id'];

$sql = "DELETE FROM tb_buku WHERE id_buku='$idBuku'";

if($conn->query($sql) === TRUE){
    echo "<script>alert('Data berhasil dihapus')</script>";
    echo "<script>window.location.assign('formBuku.php')</script>";
}else{
    echo "<script>alert('Data gagal dihapus.$conn->error')</script>";
    echo "<script>window.location.assign('formBuku.php')</script>";
}

?>