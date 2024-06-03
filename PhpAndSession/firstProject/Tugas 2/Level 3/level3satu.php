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
        <h2>Bagian Satu</h2>
        Angka 1 <input type="number" name="one" id="one"><br>
        Angka 2 <input type="number" name="two" id="two"><br>
        Angka 3 <input type="number" name="three" id="three"><br>
        <input type="submit" name="submit">
    </form>
    <?php

    if(isset($_POST{"submit"})){
        $one = $_POST["one"];
        $two = $_POST["two"];
        $three = $_POST["three"];
        
        $angka = [$one,$two,$three];

        sort($angka);

        foreach($angka as $angka){
        echo "<br>";
        echo $angka . "<br>";
        }
    }
    ?>
</form>
</body>
</html>