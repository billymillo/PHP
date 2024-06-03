<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $waktu = 16;
    if ($waktu < 20 ){
        echo "<h1>Nomor 14</h1>";
        echo "Have A Good Day!";
        echo "<br>";
    }

    $i = 70;

    if ($i >= 50){
        echo "<h1>Nomor 15</h1>";
        echo "Anda Lulus Dengan Nilai $i";
    }

    $awal = 5;

    if ($awal > 0){
        $hasil = $awal * -1;
        echo "<h1>Nomor 16</h1>";
        echo "<br>";
        echo "$hasil";
    }
    echo "<h1>Nomor 17</h1>";
    echo "<br>";
    $hari = "Selasa";
    if ($hari == "Minggu"){
        echo "Have a nice weekend!";
    } else {
        echo "Have a nice weekday!";
    }

    $umur = 15;
    echo "<h1>Nomor 18</h1>";
    echo "<br>";
    if($umur < 17){
        echo "Anda belum cukup umur untuk melakukan pendaftaran";
    } else if ($umur >= 17){
        echo "Anda tidak melanjutkan";
    }

    $nilai = 80;
    echo "<h1>Nomor 19</h1>";
    echo "<br>";
    if($nilai == 100){
        echo "Istimewa";
    } else if ($nilai < 100 && $nilai >= 90){
        echo "Baik Sekali";
    } else if ($nilai < 90 && $nilai >= 80){
        echo "Baik";
    } else if ($nilai < 80 && $niilai >= 70){
        echo "Cukup Sekali";
    } else if ($nilai < 70 && $nilai >= 60){
        echo "Cukup";
    } else {
        echo "Belajar Lagi Dek";
    }

     $kendaraan = "motor     ";
     echo "<h1>Nomor 20</h1>";
     echo "<br>";
     switch ($kendaraan){
        case "motor";
        echo "$kendaraan adalah kendaraan Roda 2";
        break;
        case "mobil";
        echo "$kendaraan adalah kendaraan Roda 4";
        break;
        case "kereta";
        echo "$kendaraan adalah kendaraan Roda Banyak";
        break;
        default;
        echo "$kendaraan not found";
     }
    ?>
</body>
</html>