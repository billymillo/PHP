<!-- INHERITANCE EXTENDS -->
<?php
class Animation{
    public $judul,
           $negara,
           $studio,
           $durasi,
           $part,
           $season;

    public function __construct( 
        $judul = "judul", 
        $negara= "negara", 
        $studio="studio", 
        $durasi="durasi", 
        $part = 0, 
        $season = 0, 
    ){
        $this->judul = $judul;
        $this->negara = $negara;
        $this->studio = $studio;
        $this->durasi = $durasi;
        $this->part = $part;
        $this->season = $season;
    }

    public function getVar(){
        return "$this->judul, $this->negara";
    }

    public function pelengkap(){
        $var = "{$this->judul} , From {$this->negara} Studio , {$this->studio} , {$this->durasi}";
        return $var;
    }
}

class Movie extends Animation {
    public function pelengkapMovie() {
        $var = "Movie : {$this->pelengkap} - {$this->part} Part.";
        return $var;
    }

}

class Anime extends Animation {
    public function pelengkapAnime() {
        $var = "Anime : {$this->pelengkap} - {$this->season} Season.";
        return $var;
    }

}
class PrintVar {
    public function cetak(Animation $movieVar){
        $var = "{$movieVar->judul} | {$movieVar->negara} | {$movieVar->studio} | {$movieVar->durasi}";
        return $var;
    }
}
$movie = new Movie("Aladdin", "America", "Walt Disney & Pixar", "1 jam 30 menit", 1, 0, "Disney Movie");
$anime = new Anime("One Punch Man", "Japan", "MAPPA", "23menit/eps", 0, 3, "Anime Series");
$cetakMovie = new PrintVar();

// CONSTRUCT
echo "===================C0NSTRUCT=====================";
echo "<br>";
echo $cetakMovie->cetak($movie); 
echo "<br>";
// INHERITANCE
echo "===================INHERITANCE=====================";
echo "<br>";
echo $movie->pelengkap();
echo "<br>";
echo $anime->pelengkap();
echo "<br>";