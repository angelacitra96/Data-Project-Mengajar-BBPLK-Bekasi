<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // memasukkan nilai ke dalam array
        $mobil=array("Volvo", "BMW", "Toyota");

        // array diurutkan secara ascending
        sort($mobil);

        // mendapatkan jumlah nilai dari array $mobil
        $length=count($mobil);

        // dengan looping menampilkan tiap nilai dari array
        for($x=0; $x < $length; $x++){
            echo $mobil[$x];
            echo "<br/>";
        }

    ?>
</body>
</html>