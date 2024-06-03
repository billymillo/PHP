<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    div{color: red; float:left;}
    </style>
    <?php
    $angka = [1,2,3,4,5,6,7,8,9,10];
    for($i = 0; $i < count($angka); $i++){ ?>
    <div class="udin"><?php echo $angka[$i];?></div>
    <?php }?>
    <br>
    <?php foreach($angka as $a){?>
    <div><?php echo $a;?></div>
    <?php } ?>
    <br>
    <?php foreach($angka as $a):?>
    <div><?= $a;?></div>
    <?php endforeach; ?>
</body>
</html>