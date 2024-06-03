<?php
// dalam kode (!= "") digunakan untuk melihat apakah data bilangan_pertama tidak sama dengan kosong
// dan data bilangan_pemangkat data tidak sama dengan kosong maka akan tampil dibawah
if(@$_POST ['bilangan_pertama'] !="" && $_POST['bilangan_pemangkat'] != "") {
    $hasilPangkat = @$_POST['bilangan_pertama'] ** $_POST['bilangan_pemangkat'];
}   else{
    echo "<p style='text-align: center; color: red; margin: 10px 0:'>Data Harus Diisi Dengan Lengkap</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        YANG PERLU DIPERHATIKAN PADA SEBUAAH FORM DENGAN REQUEST METHOD POST
        Tag form dan attribute method action
        input select harus ada attribute name dan type
        input dan id attribute nya harus sama
    -->
    <form action="" style="display: flex; justify-content: center;" method="POST">
    <table border="1">
        <tr>
            <td>Bilangan Pertama :</td>
            <td><input type="number" name="bilangan_pertama" id="bilangan"></td>
        </tr>
        <tr>
            <td>Bilangan Pemangkat :</td>
            <td><input type="number" name="bilangan_pemangkat" id="bilangan"></td>
        </tr>
        <tr>
            <!-- colpan mengikuti TD diatas jika 2 maka 2 jika 3 maka 3 -->
            <td colspan="2"><button type="submit">Hitung</button></td>
        </tr>
    </table>
</form>
    <p style="text-align: center;">
    <?php
    if(isset($hasilPangkat) && @$_POST['bilangan_pemangkat'] != "" && @$_POST
['bilangan_pemangkat'] != "") { 
        echo "hasil pangkat <b>" . $_POST['bilangan_pertama'] . " pangkat " .
        $_POST ['bilangan_pemangkat'] . " = " . $hasilPangkat . "</b>";
    }
    ?>
    </p>
</body>
</html>