<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
    <h1>Level 3</h1>
    <h2>Bagian dua</h2>
        Angka 1 <input type="name" name="one">
        Angka 2 <input type="name" name="two">
        Angka 3 <input type="name" name="three">
    <input type="submit" name="submit">
    </form>

    <?php
    if(isset($_POST["submit"])){
        $one = $_POST["one"];
        $two = $_POST["two"];
        $three = $_POST["three"];

        $angka = [$one, $two, $three];

        $rata = count($angka) / 2;
        echo $angka [$rata];
    }
    ?>
</body>
</html>