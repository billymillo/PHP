<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php

//OBJECT DENGAN NAMA PRODUCT
class product{
    //PROPERTY DARI CLASS PRODUCT
    //Property adalah isi data dari sebuah object
    public $judul = "judul",
           $developer = "developer",
           $penerbit = "penerbit",
           $harga = "harga";

    //METHOD DARI CLASS PRODUCT
    //Method adalah perilaku dari sebuah object
    public function getVar() {
        return "$this->judul, $this->developer, $this->penerbit, $this->harga";
    }
}

//DATA DARI KOMIK
$komik = new product();
$komik->judul = "Jojo Bizzare Adventure";
$komik->developer = "Araki Sehamp";
$komik->penerbit = "Shounen Jump";
$komik->harga = 110000;

//DATA DARI GAMES
$games = new product();
$games->judul = "Mobile Legend Bang Bang";
$games->developer = "Xian Zing";
$games->penerbit = "Moonton";
$games->harga = "FREE";
// CARA MENAMBAHKAN PROPERTY // $games->device = "Android";

echo "Komik : " . $komik->getVar();
echo "<br>";
echo "Games : " . $games->getVar();
echo "<br>";
echo "----------------------------------------------------------------------------" . "<br>";
?>
<!-- ----------------------------------------------------------------------------------------------------- -->

<!-- CONSTRUCTOR FUNCTION IN PHP -->
<?php
class Animation{
    public $judul = "judul",
           $negara = "negara",
           $studio = "studio",
           $durasi = "durasi";

    public function __construct( $judul = "judul", $negara= "negara", $studio="studio", $durasi="durasi" ){
        $this->judul = $judul;
        $this->negara = $negara;
        $this->studio = $studio;
        $this->durasi = $durasi;
    }

    public function getVar(){
        return "$this->judul, $this->negara";
    }
}

class PrintVar {
    public function cetak(Animation $movieVar){
        $var = "{$movieVar->judul} | {$movieVar->negara} | {$movieVar->studio} | {$movieVar->durasi}";
        return $var;
    }
}
$movie = new Animation("Aladdin", "America", "Walt Disney & Pixar", "1 jam 30 menit");
$anime = new Animation("One Punch Man", "Japan", "MAPPA", "23menit/eps");
$cetakMovie = new PrintVar();
echo $cetakMovie->cetak($movie); 
echo "<br>";
// PEMBELAJARAN
?>
<?php
class Hewan{
    public $name = "Kucing";
    public $kaki;
    public $mamalia;
    public $makanan;
public function __construct(){
    $name = $this->name;
}
public function showName(){
    return $this->name;
}
public function berjalan(){
    return true;
}
}
$kucing = new Hewan;
echo "Attribute : " . $kucing->name . "<br>" . "Method : " . $kucing->showName();
?>
