<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            justify-items: center;
        }
        .genap{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        .ganjil{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <?php
    $angka = 1;

    do{
        if($angka % 2 == 0){
            echo "$angka genap<br>";
        }else{
            echo "$angka ganjil<br>";
        }
        $angka++;
    } while ($angka <= 50);

    $angka = 1;

    do{
        if($angka % 2 == 0){
            echo "<div class =genap>";
            echo "$angka adalah genap<br>";
            echo "<div>";
        }
        $angka++;
        echo "";
    } while ($angka <= 50);

    $angka = 1;

    do{
    if($angka % 2 != 0){
            echo "<div class =ganjil>";
            echo "$angka  ganjil<br>";
            echo "</div>";
        }
        $angka++;
        echo "";
    } while ($angka <= 50);

    $angka = 1;

    do{
    if($angka % 2 != 0 && $angka % 3 == 0 && $angka % 5 == 0){
            echo "<div class =ganjil>";
            echo "$angka angka habis dibagi 3 dan 5 <br>";
            echo "</div>";
        } else if($angka % 2 == 0 && $angka % 3 == 0 && $angka % 5 == 0){
            echo "<div class =ganjil>";
            echo "$angka angka habis dibagi 3 dan 5 <br>";
            echo "</div>";
        }
        $angka++;
        echo "";
    } while ($angka <= 50);
    
    
    ?>
    <?php
    ?>
    <h1>MUHAMMAD BRILLIANT HIJRIADHILY ADL</h1>
    <h1>12309841</h1>
    <h1>PPLG X-3</h1>
    <h1>CISARUA 7</h1>
</body>
</html>