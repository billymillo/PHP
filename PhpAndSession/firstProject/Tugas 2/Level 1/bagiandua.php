<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Level One</h1>
    <h2>Bagian Dua</h2>
    <form method="post" action="">
       Angka 1 <input type="number" name="bilsatu" id="bilsatu">
       <br>
       Angka 2 <input type="number" name="bildua" id="bildua">
       <br>
       Angka 3 <input type="number" name="biltiga" id="biltiga">
       <br>
    <input type="submit" name="submit"> 
    <?php
    if (isset($_POST["submit"])) {
        $bilsatu = $_POST['bilsatu'];
        $bildua = $_POST['bildua'];
        $biltiga = $_POST['biltiga'];

        if ($bilsatu > $bildua && $bilsatu > $biltiga) {
            echo "<br>";
            echo "$bilsatu Merupakan nilai terbesar";
        } else if ($bilsatu < $bildua && $biltiga < $bildua) {
            echo "<br>";
            echo "$bildua Merupakan nilai terbesar";
        } else {
            echo "<br>";
            echo "$biltiga Merupakan nilai terbesar";
        }
    }
    ?>
</body>
</html>