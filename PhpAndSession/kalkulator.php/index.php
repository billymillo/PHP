<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="icon" type="image/x-icon" href="calculator.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Schoolbell&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: "Medimi One", sans-serif;
        }
        /* Main Body & Background Styling */
        body{
           background-image: url(math2.jpg); 
           background-size: cover;
           height: 720px;
           width: 100%;
           display:flex;
           flex-direction: column;
           justify-content: center;
           align-items: center;
        }
        /* Main Content Styling */
        .box{
            height: 55%;
            width: 60%;
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: rgba(255, 255, 255, 1);
            gap:3%;
        }
        /* Merapihkan */
        .input {
            display: flex;
            flex-direction: row;
            gap: 1rem;
            margin:0;
        }
        /* Input Styling */
        input{
            display:flex;
            gap:30px;
            font-size:15px;
            padding: 0.5% 2%;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            width: 50%;
        }
        /* Styling Huruf */
        h1{
            font-family: "Madimi One", sans-serif, "Open Sans";
            font-weight: 400;
            font-size: 200%;
        }
        p{
            font-family: "Madimi One", sans-serif, "Open Sans";
            font-weight: 100;
            font-size:113%;
        }
        h2{
            font-family:sans-serif, "Open Sans";
            font-size: 130%;
            font-weight:550;
        }
        .bilangan {
            display: flex;
            flex-direction: row;
            gap: 7rem;
            margin-bottom: 1rem;
        }
        /* Styling Operasi Bilangan */
        select{
            font-size:15px;
            padding: 1% 2%;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            width: 100%;
        }
        /* Styling Submit Button */
        button{
            font-family: "Madimi One", sans-serif, "Open Sans";
            background-color:lightgreen;
            font-size:15px;
            padding: 1% 2%;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            width: 70%;
        }
        /* Adjust Isi Content */
        form{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap:15px;
        }
        /* Styling Output */
        .box2{
            width:60%;
            height:5%;
            background-color: lightgreen;
            justify-content: center;
            align-items: center;
            text-align: center;

        }
        .hasil{
            padding-top:0.5%;
        }
        /* Responsive */
        @media (max-width:878px) {
            .bilangan{
                gap: 3rem;
            }
            h2{
                font-size:100%;
            }
            h1{
                font-size:130%;
            }
            p{
                font-size:90%;
            }
            
        }
    </style>
</head>
<body>
    <div class ="box">
        <!-- Judul dan Label -->
        <h1>KALKULATOR</h1>
        <h2>(Pertambahan, Pengurangan, Perkalian, Pembagian)</h2>
        <div class="bilangan">
        <p>Bilangan A</p>
        <p>Bilangan B</p>
        </div>

        <!-- Form dan Main Content -->
    <form action="" method="post">
    <div class ="input">
        <input type="number" name="variableA" placeholder="Masukan Nilai A">
        <input type="number" name="variableB"placeholder="Masukan Nilai B">
    </div>
    <p>Operasi Bilangan</p>
    <select id="operation" name="operation" placeholder="Pilih Operasi Perhitungan">
        <option value="none">Pilih Operasi Perhitungan</option>
        <option value="tambah" name= "tambah">Pertambahan(+)</option>
        <option value="kurang" name= "kurang">Pengurangan(-)</option>
        <option value="kali" name= "kali">Perkalian(*)</option>
        <option value="bagi" name= "bagi">Pembagian(/)</option>
    </select>
    <button type="submit" value="submit" name="submit">Hitung Jumlah</button>
    </div>
</form>
<!-- LOGIC KALKULATOR APLIKASI -->
<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $variableA = $_POST['variableA'];
    $variableB = $_POST['variableB'];
    $operation = $_POST['operation'];
    }if(is_numeric(@$variableA) && is_numeric($variableB)){
        echo "<div class ='box2'>";
        $hasil = 0;
        if($operation == "tambah"){
            $hasil = @$variableA + $variableB;
            echo "<h2 class='hasil'>Hasil Dari $variableA + $variableB Adalah $hasil</h2>";
        }else if($operation == "kurang") {
            $hasil = @$variableA - $variableB;
            echo "<h2 class='hasil'>Hasil Dari $variableA - $variableB Adalah $hasil</h2>";
        }else if($operation == "kali"){
            $hasil = @$variableA * $variableB;
            echo "<h2 class='hasil'>Hasil Dari $variableA X $variableB Adalah $hasil</h2>";
        }else if($operation == "bagi"){
            $hasil = @$variableA / $variableB;
            echo "<h2 class='hasil'>Hasil Dari $variableA : $variableB Adalah " . round($hasil, 3) . "</h2>";
        }else if($operation == "none"){
            echo "<h2 class='hasil' style='color:red;'>MASUKAN OPERASI BILANGAN MU</h2>";
        }
    }
    ?></div>
</body>
</html>