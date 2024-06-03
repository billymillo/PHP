<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <h1>Bilangan Terbesar 1-15</h1>
        <h2>Bagian Satu</h2>
        Angka 1 <input type="number" name="one" id="one"><br>
        Angka 2 <input type="number" name="two" id="two"><br>
        Angka 3 <input type="number" name="three" id="three"><br>
        Angka 4 <input type="number" name="four" id="four"><br>
        Angka 5 <input type="number" name="five" id="five"><br>
        Angka 6 <input type="number" name="six" id="six"><br>
        Angka 7 <input type="number" name="seven" id="seven"><br>
        Angka 8 <input type="number" name="eight" id="eight"><br>
        Angka 9 <input type="number" name="nine" id="nine"><br>
        Angka 10 <input type="number" name="ten" id="ten"><br>
    <input type="submit" name="submit">
</form>
    <?php
    if(isset($_POST["submit"])) {
        $one = $_POST["one"];
        $two = $_POST["two"];
        $three = $_POST["three"];
        $four = $_POST["four"];
        $five = $_POST["five"];
        $six = $_POST["six"];
        $seven = $_POST["seven"];
        $eight = $_POST["eight"];
        $nine = $_POST["nine"];
        $ten = $_POST["ten"];

        $bilanganterbesar = max($one,$two,$three,$four,$five,$six,$seven,$eight,$nine,$ten);
        echo "$bilanganterbesar merupakan nilai terbesar";
    }
    ?>
</body>
</html>