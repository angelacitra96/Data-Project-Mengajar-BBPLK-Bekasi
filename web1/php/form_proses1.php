<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-12 text-dark text-center" style="height: 100px; background-color: antiquewhite"> <b> FORM PENJUALAN BARANG </b>
            </div>
            <nav class="navbar col-12 navbar-expand-lg navbar-dark bg-dark sticky-top">
                <a class="navbar-brand" href="#">Form Isian</a>
                <button class="navbar-toggler navbar-toggler-right"
                    type="button" data-toggle="collapse"
                    data-target="#navb">
                    <span class="navbar-toggler-icon"></span>
                </button>

          

            </nav>
            <div> 
                <?php
                $namabarang=$_POST['namabarang'];
                    echo "Nama barang: $namabarang <br>";
                $hargabarang=$_POST['hargabarang'];
                    echo "Harga Barang: $hargabarang <br>";
                $jumlahbarang=$_POST['jumlahbarang'];
                    echo "Jumlah: $jumlahbarang <br>";
                $total=$hargabarang*$jumlahbarang;
                    setcookie("total",$total);
        
                ?>
                <div><p name="total">Total : <?php  echo "$total <br>";?> </p></div>
                <form action="form_proses2.php" method="POST"> 
                Uang Bayar: <input type="number" name="bayar" min="0" style="width 300px padding: 4rem!important" onchange="getKembali()" onkeyup="getKembali()" id="bayar" required=""><br>
                Uang Kembali: <input type="number" name="UangKembali" min="0" style="width 300px padding: 4rem!important" id="UangKembali"><br>
                    <input type="submit" value="Bayar" class="btn btn-success">
                </form>
                
            </div>
        </div>
    </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.min.js"></script>  
        <script>
            function getKembali(){
                var totalBayar = document.getElementById('total').value
                var uangBayar = document.getElementById('bayar').value
                
                var uangKembali = uangBayar - totalBayar
                document.getElementById('kembali').value = uangKembali
                console.log(uangKembali)
            }
        </script>
</body>
</html>