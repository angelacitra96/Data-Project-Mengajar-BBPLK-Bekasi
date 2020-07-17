<?php
require_once "koneksi.php";
$namabuku = $_POST['namaBuku'];
$penerbit = $_POST['namaPenerbit'];
$penulis = $_POST['namaPenulis'];
$tahunterbit = $_POST['tahun'];

$sql = "INSERT INTO tb_buku VALUES(null,'$namabuku','$penerbit','$penulis', '$tahunterbit')";

if($conn->query($sql) === TRUE){
    echo "<script>alert('Data berhasil disimpan')</script>";
    echo "<script>window.location.assign('formBuku.php')</script>";
}else{
    echo "<script>alert('Data gagal disimpan.$conn->error')</script>";
    echo "<script>window.location.assign('formBuku.php')</script>";
}

?>