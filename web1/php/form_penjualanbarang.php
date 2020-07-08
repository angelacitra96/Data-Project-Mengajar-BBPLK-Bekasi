<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Document</title>
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

                <!-- <div class="collapse navbar-collapse" id="navb">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Facilities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Guest Book</a>
                            <div class="form-group">
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text"
                        placeholder="Search..">
                        <button class="btn btn-success my-2 my-sm-0"
                        type="button">Search</button>
                    </form>
                </div> -->

            </nav>
            <div style="min-height: 650px; padding: 4rem!important">
                <form action="form_proses1.php" method="post">
                    Nama Barang: <select name="namabarang" class="custom-select" style="width: 450px">
                        <option value="Pensil">Pensil</option>
                        <option value="Pulpen">Pulpen</option>
                        <option value="Penghapus">Penghapus</option>
                        <option value="Penggaris">Penggaris</option>
                        <option value="Typex">Typex</option>
                        <option value="Buku">Buku Tulis</option>
                        <option value="Kertas">Kertas</option> 
                    </select><br><hr>
                        Harga Barang: <input type="number" name="hargabarang" min="0"><br><hr>
                        Jumlah Barang: <input type="number" name="jumlahbarang" min="0"><br>
                        
                        <input type="submit" value="Hitung">
                   
                </form>
            </div>
        
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>  
    
</body>
</html>