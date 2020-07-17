<?php
require_once "koneksi.php";
$idbrng = $_GET['id_barang'];

$sql = "DELETE FROM tb_users WHERE id_user='$id'";

if($conn->query($sql) === TRUE){
    echo "<script>alert('Data berhasil dihapus')</script>";
    echo "<script>window.location.assign('formTabelBarang.php')</script>";
}else{
    echo "<script>alert('Data gagal dihapus.$conn->error')</script>";
    echo "<script>window.location.assign('formTabelBarang.php')</script>";
}

?>