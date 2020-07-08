<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            $Username = $_POST['username'];
            $Password = $_POST['password'];
            if ($Username=="citraskr"){
                if ($Password=="020196"){
                    echo"berhasil login";
                }else{ 
                    echo"password salah";
                } 
            }else {
                    echo"username salah";
            }

    ?>
</body>
</html>