<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Level One</h1>
    <h2>Bagian Satu</h2>
    <form method="post" action="">
       Angka 1 <input type="number" name="bilsatu" id="bilsatu">
       Angka 2 <input type="number" name="bildua" id="bildua">
    <input type="submit" name="submit"> 
</form>
    <?php
    if (isset($_POST["submit"])) {
        $bilsatu = $_POST['bilsatu'];
        $bildua = $_POST['bildua'];

        if ($bilsatu > $bildua) {
            echo "<br>";
            echo "$bilsatu Merupakan nilai terbesar";
        }else {
            echo "$bildua Merupakan nilai terbesar";
        }
    }
    ?>
</body>
</html>