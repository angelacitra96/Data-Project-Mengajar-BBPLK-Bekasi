<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ifcondition</title>
</head>
<body>
    <?php
        
        // $a = $_POST['angka'];
        // if($a<5){
        //         echo"variable a adalah lebih kecil dari 5";
        // }else{
        //         echo"variable a adalah tidak lebih kecil dari 5";
        // }
            // $a = 100;
            $a = $_POST['angka'];
            if($a>80){
                    echo"Grade A";
            }elseif($a>70){
                    echo"Grade B";
            }elseif($a>50){
                    echo"Grade C";
            }else{
                    echo"Grade D";
            }
      
    ?>
    <a href="form_latihanPhp.php">Back</a>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>