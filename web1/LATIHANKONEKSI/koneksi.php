<?php

$serverName = "localhost";
$userName = "root";
$password = "AngelaCitra0201";
$dbname = "db_buku";

$conn = new mysqli($serverName, $userName, $password, $dbname);

if($conn->connect_error){
    die("Koneksi Gagal");
    
}

?>