<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nilai = [80, 78, 72, 84, 92, 88];
    //Menampilkan semua data didalam Array
    echo "Nilai saya :" . implode(",", $nilai) . "<br>";
    //Menemukan nilai terbesar didalam array
    echo "Dari Keseluruhan Nilai Yang Paling Tertinggi Ialah : " . max($nilai) ."<br>";
    //Menemukan nilai terkecil didalam array
    echo "Sedangkan nilai yang palung kecil :" . min($nilai) . "<br>";
    //mengurutkan menggunakan asort/rsort dan arsort/rsort
    //ASC = Ascending | DESC = descending
    //ksort = mengurtkan terkecil - terbesar berdasarkan indexnya
    //krsort = mengurutkan terbesar - terkecil berdasarkan indexnya
    asort($nilai);
    echo "Apabila diurutkan dari yang terkecil menjadi : " . implode(',', $nilai) . "<br>";
    arsort($nilai);
    echo "Apabila diurutkan dari yang terbesar menjadi :" . implode(',', $nilai) . "<br>";
    //Menentukan array menggunakan "Array_sum" dan juga "count" untuk menentukan jumlah data yang dibagi
    $rata = array_sum($nilai) / count($nilai); 
    echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya menjadi :" . round($rata) . "<br>";
    //Mengubah isi dari data array menggunakan "array_sum" dan mengembalikan nilai awal sebelum dirurut menggunakan "ksort"
    ksort($nilai);
    array_splice($nilai, 2, 1, 75);
    echo "Setelah melakukan perbaikan untuk nilai " . min($nilai) . " saya mendapat nilai " . "75 " . "Jadi nilai saya sekarang :". implode(",", $nilai) . "<br>";
    //Menentukan nilai terbesar array setelah diubah
    $urutanPerbaikan = arsort($nilai);
    $urutan = implode(",", $nilai);
    echo "Sehingga Sekarang, urutan nilai saya dari yang terbesar menjadi :" . $urutan;
    ?>

    <?php
    echo ""
    ?>
</body>
</html>