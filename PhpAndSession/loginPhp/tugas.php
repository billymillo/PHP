<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body{
    background-image: url(nature.jpg);
    background-position:absolute;
    background-size: cover;
    width: 100%;
    height: 100%;
    display:flex;
    flex-direction:column;
    justify-content: center;
    align-items: center;
    
}
*{
    padding:0px;
    margin:0px;
}
.allbox{
    background-color: rgba(255,255,255);
    height: 80%;
    width: 80%;
    display: flex;
    flex-direction: row;
    justify-content:space-around;
}
.box{
    display: flex;
    flex-direction: column;
    height: 100%;
    width: 100%;
}.box2{
    display: flex;
    flex-direction: column;
    height: 100%;
    width: 100%;
}
.card{
    width:40%;
    height:20%;
    background-color:lightgreen;
    padding:1%;
    margin:10%;
    display:flex;
    flex-direction: column;
}
    </style>
</head>
<body class="tugas background">
<h1 style="width:80%; height:10%; background-color:lightblue; text-align:center; margin-top:2%;">ISI TUGAS PHP</h1>
    <div class="allbox">
    <div class="box">
    <div class="card">
        <h2>TUGAS STUDY KASUS</h2>
        <p><a href="tugas.php?page=getPost">LINK</a>
           <a href="tugas.php?page=nilai">LINK</a>
           <a href="tugas.php?page=nilaiulangan">LINK</a></p>
    </div>
    <div class="card">
        <h2>Tugas 20 Soal</h2>
        <p><a href="tugas.php?page=ases">LINK</a>
        <a href="tugas.php?page=asestwo">LINK</a></p>
    </div>
    <div class="card">
        <h2>Tugas Pak Muslih</h2>
        <p><a href="tugas.php?page=looping">LINK</a>
           <a href="tugas.php?page=siswa">LINK</a>
           <a href="tugas.php?page=persegi">LINK</a>
           <a href="tugas.php?page=materi">LINK</a></p>
    </div>
</div>
    <div class="box2">
    <div class="card">
        <h2>Tugas Level</h2>
        <h3>Level 1</h3>
        <p><a href="tugas.php?page=levelOne1">LINK</a>
        <a href="tugas.php?page=levelOne2">LINK</a>
        <a href="tugas.php?page=levelOne3">LINK</a></p>
        <h3>Level 2</h3>
        <p><a href="tugas.php?page=levelTwo1">LINK</a></p>
        <h3>Level 3</h3>
        <p><a href="tugas.php?page=levelThree1">LINK</a>
        <a href="tugas.php?page=levelThree2">LINK</a>
        <a href="tugas.php?page=levelThree3">LINK</a></p>
    </div>
    <div class="card">
        <h2>Tugas Kak Fema</h2>
        <p><a href="tugas.php?page=kakFema1">LINK</a>
           <a href="tugas.php?page=kakFema2">LINK</a>
           <a href="tugas.php?page=kakFema3">LINK</a>
           <a href="tugas.php?page=kakFema4">LINK</a>
           <a href="tugas.php?page=kakFema5">LINK</a></p>
    </div>
    <div class="card">
        <h2>Tugas Bootstrap</h2>
        <p><a href="tugas.php?page=bootstrap">LINK</a></p>
    </div>
</div>
</div>
<?php
if (isset($_GET['page'])){
    $page= $_GET['page'];

    switch ($page){
        // STUDY KASUS
        case 'getPost';
        include 'C:\xampp\htdocs\studyKasusArray\getPost.php';
        break;
        case 'nilai';
        include 'C:\xampp\htdocs\studyKasusArray\nilai.php';
        break;
        case 'nilaiulangan';
        include 'C:\xampp\htdocs\studyKasusArray\nilaiulangan.php';
        break;
        // 20 SOAL
        case 'ases';
        include 'C:\xampp\htdocs\firstProject\20 Soal\asesmen.php';
        break;
        case 'asestwo';
        include 'C:\xampp\htdocs\firstProject\20 Soal\asesmentwo.php';
        // PAK MUSLIH
        case 'looping';
        include 'C:\xampp\htdocs\firstProject\Tugas 1\looping.php';
        break;
        case 'siswa';
        include 'C:\xampp\htdocs\firstProject\Tugas 1\mingguone.php';
        break;
        case 'persegi';
        include 'C:\xampp\htdocs\firstProject\Tugas 1\persegi.php';
        break;
        case 'materi';
        include 'C:\xampp\htdocs\firstProject\Tugas 1\single.php';
        break;
        // TUGAS LEVEL
        // LEVEL 1
        case 'levelOne1';
        include 'firstProject/Tugas 2/Level 1/bagiansatu.php';
        break;
        case 'levelOne2';
        include 'firstProject/Tugas 2/Level 1/bagiandua.php';
        break;
        case 'levelOne3';
        include 'firstProject/Tugas 2/Level 1/bagiantiga.php';
        break;
        // LEVEL 2
        case 'levelTwo1';
        include 'C:\xampp\htdocs\firstProject\Tugas 2\Level 2\level2satu.php';
        break;
        // LEVEL 3
        case 'levelThree1';
        include 'firstProject/Tugas 2/Level 3/level3satu.php';
        break;
        case 'levelThree2';
        include 'firstProject\Tugas 2\Level 3\level3dua.php';
        break;
        case 'levelThree3';
        include 'firstProject\Tugas 2\Level 3\level3tiga.php';
        break;
        // Tugas Kak Fema
        case 'kakFema1';
        include 'C:\xampp\htdocs\firstProject\Tugas Kak Fema\tugas1.php';
        break;
        case 'kakFema2';
        include 'C:\xampp\htdocs\firstProject\Tugas Kak Fema\tugas2.php';
        break;
        case 'kakFema3';
        include 'C:\xampp\htdocs\firstProject\Tugas Kak Fema\tugas3.php';
        break;
        case 'kakFema4';
        include 'C:\xampp\htdocs\firstProject\Tugas Kak Fema\tugas4.php';
        break;
        case 'kakFema5';
        include 'C:\xampp\htdocs\firstProject\Tugas Kak Fema\tugas5.php';
        break;
        // Tugas Bootstrap
        case 'bootstrap';
        include 'C:\xampp\htdocs\tekken\index.php';
        break;
        default:
        echo "<h3>MAAF HALAMAN TIDAK TERSEDIA</h3>";
        break;
    }
}
?>
</body>
</html>