<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $angka = 10;
    if (is_int($angka)){
        echo "$angka Merupakan Bilangan";
    } else {
        echo "$angka Merupakan Text";
    }
    ?>
</body>
</html>