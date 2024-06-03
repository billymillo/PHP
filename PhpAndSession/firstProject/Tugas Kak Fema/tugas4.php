<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $kelahiran = 2008;
    $year = date("Y");  
    $umur = $year - $kelahiran;
    if ($year - $kelahiran >= 17){
        echo "Tahun kelahiran $kelahiran Sudah dapat memiliki KTP dengan usia saat ini $umur";
    } else {
        echo "Tahun Kelahiran $kelahiran Belum Memiliki KTP dengan usia saat ini $umur";
    }
    ?>
</body>
</html>