<?php
require_once "koneksi.php";
$idbuku = $_POST['idBuku'];
$namabuku = $_POST['namaBuku'];
$penerbit = $_POST['namaPenerbit'];
$penulis = $_POST['namaPenulis'];
$tahunterbit = $_POST['tahun'];


$sql = "UPDATE tb_buku SET nama_buku='$namabuku', nama_penerbit='$penerbit', nama_penulis='$penulis', tahun_terbit='$tahunterbit' WHERE id_buku='$idbuku'";

if($conn->query($sql) === TRUE){
    echo "<script>alert('Data berhasil diupdate')</script>";
    // echo "<script>window.location.assign('formBuku.php')</script>";
}else{
    echo "<script>alert('Data gagal diupdate.$conn->error')</script>";
    // echo "<script>window.location.assign('formBuku.php')</script>";
}

?>