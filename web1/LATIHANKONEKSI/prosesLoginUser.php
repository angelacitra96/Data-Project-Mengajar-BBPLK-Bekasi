<?php
require_once "koneksi.php";
$nama = $_POST['namaUser'];
$password = md5($_POST['passwordUser']);

$sql = "SELECT nama_user, password_user FROM tb_users WHERE nama_user= '$nama' AND password_user='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo "<script>alert('Anda berhasil masuk')</script>";
    echo "<script>window.location.assign('formTabelBarang.php')</script>";
}else{
    echo "<script>alert('Anda gagal masuk.$conn->error')</script>";
    echo "<script>window.location.assign('loginUser.php')</script>";
}
?>