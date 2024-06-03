<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Level 3</h1>
    <h2>Bagian Tiga</h2>
       <form method="post" action="">
        Sisi Satu <input type="number" name="sisia" id="sisia">
        Sisi Dua <input type="number" name="sisib" id="sisib">
        Sisi Tiga <input type="number" name="sisic" id="sisic">
        <input type="submit" name="submit">
       </form>

    <?php
    if(isset($_POST["submit"])){
        $sisia = $_POST["sisia"];
        $sisib = $_POST["sisib"];
        $sisic = $_POST["sisic"];
        
        if($sisia == $sisib && $sisib == $sisic && $sisia == $sisic){
            echo "Merupakan Segitiga Sama Sisi";
        } else if ($sisia == $sisib || $sisia == $sisic || $sisib == $sisic){
            echo "Merupakan Segitiga Sama Kaki";
        } else{
            echo "Merupakan Segitiga Sembarang";
        }
    }

    ?>
</body>
</html>