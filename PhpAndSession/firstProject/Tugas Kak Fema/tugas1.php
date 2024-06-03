<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Ternary IF Else PHP -->
    <?php
    $nilai = 25;
    ?>
    <p>Selamat Nilai Anda
        <span <?php echo $nilai >= 75 ? 'style = "color:green"' : 'style = "color:red" ';?>>
        <?php echo $nilai >= 75 ? 'Kompeten' : 'Belum Kompeten';?>
    </span>
    <span>Dengan  Nilai</span>
    
    <?php echo $nilai?> 
</p>
</body>
</html>