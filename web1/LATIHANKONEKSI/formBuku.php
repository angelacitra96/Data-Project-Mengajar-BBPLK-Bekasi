<?php require_once "koneksi.php";
?>
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
            <div class="col-12 text-dark text-center" style="height: 100px; background-color: antiquewhite"> <b> FORM INPUT BUKU </b>
            </div>
            <nav class="navbar col-12 navbar-expand-lg navbar-dark bg-dark sticky-top">
                <a class="navbar-brand" href="#">Masukkan Data Buku</a>
                <button class="navbar-toggler navbar-toggler-right"
                    type="button" data-toggle="collapse"
                    data-target="#navb">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navb">
                    <!-- <ul class="navbar-nav mr-auto">
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
                    </ul> -->
                   
                </div>
                </div>

            </nav>
            <div style="min-height: 650px; padding: 4rem!important">
                <form action="prosesInsertBuku.php" method="post">
                    <div class="form-group">
                        <label class="control-label">Nama Buku:</label>
                        <input type="text" name="namaBuku" placeholder="Masukkan Nama" required autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nama Penerbit:</label>
                         <input type="text" name="namaPenerbit" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nama Penulis:</label>
                        <input type="text" name="namaPenulis" required class="form-control"><br>   
                   </div>
                   <div class="form-group">
                        <label class="control-label">Tahun Terbit</label>
                         <input type="number" name="tahun" required class="form-control">
                    </div>
                    <input type="submit" value="Simpan" class="btn btn-info col-12">
                </form>
                <br>
                <!-- Tabel data -->
                <table class="table">
                    <thead class="thead-dark">
                    
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text"
                        placeholder="Search.." name="q" style="width: 250px">
                        <button class="btn btn-success my-2 my-sm-0"
                        type="submit">Search</button>
                    </form>
                    
                        <tr>
                            <th>No</th>
                            <th>Nama Buku</th>
                            <th>Nama Penerbit</th>
                            <th>Nama Penulis</th>
                            <th>Tahun Terbit</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // jika $_GET['q'] ada isinya
                        if(isset($_GET['q'])){
                            // yang dijalankan jika ada isinya
                            $q = $_GET['q'];
                            $sql = "SELECT*FROM tb_buku WHERE nama_buku LIKE '%$q%'";
                        }else{
                            // jika $_GET['q'] tidak ada isinya
                            $sql = "SELECT*FROM tb_buku";
                        }
                           
                            $result = $conn->query($sql);

                            if($result->num_rows > 0){
                                // Akan dijalankan jika recordnya ada
                                while($row = $result->fetch_assoc()){ ?> 
                                    <tr>
                                        <td><?=$row['id_buku']?></td>
                                        <td><?=$row['nama_buku']?></td>
                                        <td><?=$row['nama_penerbit']?></td>
                                        <td><?=$row['nama_penulis']?></td>
                                        <td><?=$row['tahun_terbit']?></td>
                                        <td>
                                            <a onclick="return confirm('Anda yakin akan menghapus record ini?')" class="btn btn-danger"
                                            href="prosesDeleteBuku.php?id=<?=$row['id_buku']?>">Delete</a>
                                            
                                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="showUpdateForm('<?=$row['id_buku']?>', '<?=$row['nama_buku']?>', '<?=$row['nama_penerbit']?>', '<?=$row['nama_penulis']?>', '<?=$row['tahun_terbit']?>')"
                                            href="">
                                            Update
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                }else{
                                    // akan dijelaskan jika recordnya hilang
                                    echo "<tr><td colspan='3'>Record masih kosong</td></tr>";

                                }
                                ?>
                    </tbody>
                </table>
            </div>
        
        </div>
    </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><h5>FORM UPDATE DATA BUKU</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <form action="prosesUpdateBuku.php" method="POST">
                    <div class="form-group row">
                            <label class="control-label">
                                ID Buku:
                            </label>
                            <input type="text" name="idBuku"  style="width: 450px" id="modal-id-buku" required autocomplete="off" class="form-control" readonly>
                    </div>
                    <div class="form-group row">
                        <label class="control-label">
                            Nama Buku:
                        </label>
                        <input type="text" name="namaBuku"  style="width: 450px" id="modal-nama-buku" required autocomplete="off" class="form-control" readonly>
                    </div>
                    <div class="form-group row">
                        <label class="control-label">
                        Nama Penerbit: 
                        </label>
                        <input type="text" name="namaPenerbit"  style="width: 450px" placeholder="Masukkan Nama" required autocomplete="off" id="modal-nama-penerbit" class="form-control">
                    </div>
                    <div>
                        <label class="form-group row">
                        Nama Penulis:
                        </label>
                        <input type="text" name="namaPenulis" required id="modal-nama-penulis" class="form-control">
                    </div>
                    <div>
                        <label class="form-group row">
                        Tahun Terbit:
                        </label>
                        <input type="number" name="tahun" required id="modal-tahun-terbit" class="form-control">
                    </div>
                        
                    <div>
                        <input type="submit" value="Update" class="btn btn-primary">
                    </div>
                   
                </form>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
            </div>
        </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 <script>
//  <!-- Fungsi untuk menampilkan nilai pada form update -->
 function showUpdateForm (id,namaBuku,namaPenulis,namaPenerbit, tahun){
    //  <!-- document.getElementById adalah cara pada js DOM untuk mengambil elemen pada hal -->
     document.getElementById('modal-id-buku').value = id;
     document.getElementById('modal-nama-buku').value = namaBuku;
     document.getElementById('modal-nama-penulis').value = namaPenulis;
     document.getElementById('modal-nama-penerbit').value = namaPenerbit;
     document.getElementById('modal-tahun-terbit').value = tahun;
    

 }
</script>   
</body>
</html>