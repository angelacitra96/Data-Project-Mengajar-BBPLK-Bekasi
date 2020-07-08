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
                <a class="navbar-brand" href="#">Form Pembayaran</a>
                <button class="navbar-toggler navbar-toggler-right"
                    type="button" data-toggle="collapse"
                    data-target="#navb">
                    <span class="navbar-toggler-icon"></span>
                </button>

                

            </nav>
        </div>    
</div>
        <div class="row" style="padding: 4rem!important">
            
            <h2 class="text-center mb-4"> TERIMA KASIH</h2>
            <?php
                $bayar=$_POST['bayar'];
                $total=$_COOKIE['total'];
                $kembalian = number_format($bayar - $total,0,",",".");

                if($total>$bayar){
                    echo "<script>alert('Maaf uang bayar anda kurang')</script>";
                    echo "<script>window.history.back()</script>";
                }elseif($total<$bayar){
                    echo "<script>alert('Terima Kasih, uang kembali anda sebesar Rp.$kembalian');</script>";
                    echo "<script>window.location.assign('form_penjualanbarang.php')</script>";
                }else{
                    echo "<script>alert('Terima Kasih');</script>";
                    echo "<script>window.location.assign('form_penjualanbarang.php')</script>";
                }

            ?>
            <!-- <button type="" class="btn btn-outline-success form-control"><a href="form_proses1.php">Kembali</a></button> -->
        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.min.js"></script>  
</body>
</html>