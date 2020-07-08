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
    $mobil=array("Zulka"=>"Volvo", "Ali"=>"BMW", "Ajuab"=>"Toyota");

    // kunci atau key pada array diurutkan secara descending
    krsort($mobil);

    // dengan looping menampilkan tiap nilai dari array
    foreach($mobil as $x => $nilai_x){
        echo "Kunci=" . $x . ", Nilainya=" . $nilai_x;
        echo "<br/>";
    }
    ?>
</body>
</html>