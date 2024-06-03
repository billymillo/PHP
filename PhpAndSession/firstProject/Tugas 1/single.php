<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $string1 = 'ini adlah contoh string sederhana';
    $string2 = 'variable juga tidak otomatis ditampilkan : $string1';

    echo $string1;
    echo "<br>";
    echo $string2;
    ?>

    <?php
    $a = 5;
    $b = 10;
    // PENJUMLAHAN
    $c = $a + $b;
    echo "$a + $b = $c";
    echo "<hr>";

    // PENGURANGAN
    $c = $a - $b;
    echo "$a - $b = $c";
    echo "<hr>";

    // PERKALIAN
    $c = $a * $b;
    echo "$a * $b = $c";
    echo "<hr>";

    // PEMBAGIAN
    $c = $a / $b;
    echo "$a / $b = $c";
    echo "<hr>";
    
    // MODULUS
    $c = $a % $b;
    echo "$a % $b = $c";
    echo "<hr>";
    // PERPANGKATAN
    $c = $a ** $b;
    echo "$a ** $b = $c";
    echo "<hr>";
    ?>

    <?php
    $a = 6;
    $b = 2;
    // Relasi Lebih Sama Dengan
    $c = $a == $b;
    echo "$a == $b: $c";
    echo "<hr>";

    // Relasi Lebih Tidak Sama Dengan
    $c = $a != $b;
    echo "$a != $b: $c";
    echo "<hr>";

    // Relasi Lebih Besar Sama Dengan
    $c = $a >= $b;
    echo "$a >= $b: $c";
    echo "<hr>";
    ?>
</body>
</html>