<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // memasukan nilai ke dalam array
    $mobil=array("Zulka"=>"Volvo", "Ali"=>"BMW", "Ajuab"=>"Toyota");

    // nilai pada array diurutkan secara ascending
    asort($mobil);

    // dengan looping menampilkan tiap nilai dari array
    foreach($mobil as $x => $nilai_x){
        echo "Kunci=" . $x .", Nilainya=" . $nilai_x;
        echo "<br/>";
    }
    ?>
</body>
</html>