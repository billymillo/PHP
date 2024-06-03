<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for($a = 1; $a <= 3; $a++){
        for($b = 1; $b <= 10; $b++){
            echo "$a x $b =" . $a * $b ."<br>";
        }
    }
    ?>
</body>
</html>