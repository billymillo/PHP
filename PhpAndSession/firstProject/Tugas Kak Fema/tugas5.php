<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $angka = -2;
    
    if ($angka >= 0){
        if ($angka % 3 == 0){
            echo "$angka merupakan bilangan bulat positif dan kelipatan 3";
        } else if ($angka % 3 != 0){
            echo "$angka merupakan bilangan bulat positif dan bukan kelipatan 3";
        }
    } else if ($angka <= 0){
        if ($angka % 3 == 0){
            echo "$angka merupakan bilangan bulat negatif dan kelipatan 3";
    } else if ($angka % 3 != 0){
        echo "$angka merupakan bilangan bulat negatif dan bukan kelipatan 3";
    }
}
    ?>
</body>
</html>