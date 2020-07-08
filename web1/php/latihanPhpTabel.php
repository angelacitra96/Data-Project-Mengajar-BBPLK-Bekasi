<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Table </title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">  
</head>
<body>
    <?php
        $nama1 = "Citra S";
        $nama2 =  "Utami";
        $email1 = "blablabla@gmail.com";
        $email2 = "blablabla@yahoo.com";
        $komentar1 = "semangat";
        $komentar2 = "ciayo";
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 text-dark text-center" style="height: 100px; background-color: antiquewhite"> <b> Header </b></div>
            <nav class="navbar col-12 navbar-expand-lg navbar-dark bg-dark sticky-top">
                <a class="navbar-brand" href="#">Data Komentar</a>
            </nav>
            <div class="col-12 col-md-8 col-lg-10 bg-light text-dark"
                style="min-height: 650px; padding: 4rem!important">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="bg-secondary text-light">
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-active">
                            <th scope="row">1</th>
                            <td><?php echo $nama1;?></td>
                            <td><?php echo $email1;?></td>
                            <td><?php echo $komentar1;?></td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row">2</th>
                            <td><?php echo $nama2;?></td>
                            <td><?php echo $email2;?></td>
                            <td><?php echo $komentar2;?></td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12 col-md-4 col-lg-2 bg-danger text-light">Banner</div>
            <div class="col-12 bg-primary text-light">Footer</div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>