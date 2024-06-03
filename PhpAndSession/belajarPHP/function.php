<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- FUNCTION SELAMAT PAGI TERGANTUNG WAKTU DARI USER -->
    <?php
    date_default_timezone_set('Asia/Tokyo');
    echo date("His");
    function salam() {
        if (date("His") >= 40000 && date("His") < 100000){
            echo "Shift Pagi";
        } else {
            echo "Shift Malam";
        }
    }
    ?>
    <h1><?php salam("Pepen") ?></h1>
</body>
</html>