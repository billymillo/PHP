<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- TERNARY IF ELSE -->
    <?php
    $nama = "apa";
    ?>
    <span> Jumlah Huruf Dari "<?php echo "$nama"?>" Adalah
    <?php echo strlen($nama) == 1 ? 'Berjumlah 1': (strlen($nama) == 2 ? 'Berjumlah 2': 'Berjumlah Lebih Dari 2');?>

    <br>
    <!-- IF ELSE -->
    <?php
    if (strlen($nama) == 1) {
        echo "Jumlah Huruf Dari $nama Adalah 1";
    } else{
        echo "Jumlah Huruf Dari '$nama' Adalah " . strlen($nama) . "";
    }
    ?>
</span>
    </span>
</body>
</html>