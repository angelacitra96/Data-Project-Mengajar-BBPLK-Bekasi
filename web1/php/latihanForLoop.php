<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // for($a=1;$a<=5;$a++){
        //    for($b=1; $b<=$a; $b++){
        //        echo"*";
        //    }echo"<br>";
        // }
        $number=$_POST['number'];
        for($a=1;$a<=$number;$a++){
            for($b=1;$b<=$a;$b++){
                echo"*";
            }echo"<br>";
        }
    ?>
    <a href="formLoop.php">Back</a>
</body>
</html>