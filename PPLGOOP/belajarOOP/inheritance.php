<!-- // INHERITANCE (PEWARISAN)
     // hierarchy parents and child (Child bisa mewarisi semua properti dan method dari parent yang visible) -->
<!-- CONSTRUCTOR FUNCTION IN PHP -->
<?php
class Animation{
    public $judul,
           $negara,
           $studio,
           $durasi,
           $part,
           $season,
           $tipe;

    public function __construct( 
        $judul = "judul", 
        $negara= "negara", 
        $studio="studio", 
        $durasi="durasi", 
        $part = 0, 
        $season = 0, 
        $tipe = "tipe"
    ){
        $this->judul = $judul;
        $this->negara = $negara;
        $this->studio = $studio;
        $this->durasi = $durasi;
        $this->part = $part;
        $this->season = $season;
        $this->tipe = $tipe;
    }

    public function getVar(){
        return "$this->judul, $this->negara";
    }

    // INHERITANCE 
    public function pelengkap(){
        // Disney Movie : Aladdin, From America, Walt Disney & Pixar Studio, 1 jam 30 menit, Season 1
        $var = "{$this->tipe} : {$this->judul} , From {$this->negara} Studio , {$this->studio} , {$this->durasi}";
        if($this->tipe == "Disney Movie"){
        // "." tanda titik di sebelum sama dengan merupakan conquet(Menyambungkan) 
            $var .= " {$this->part}Part";
        } else if($this->tipe == "Anime Series"){
            $var .= " {$this->season} Season";
        }
        return $var;
    }
}

class PrintVar {
    public function cetak(Animation $movieVar){
        $var = "{$movieVar->judul} | {$movieVar->negara} | {$movieVar->studio} | {$movieVar->durasi}";
        return $var;
    }
}
$movie = new Animation("Aladdin", "America", "Walt Disney & Pixar", "1 jam 30 menit", 1, 0, "Disney Movie");
$anime = new Animation("One Punch Man", "Japan", "MAPPA", "23menit/eps", 0, 3, "Anime Series");
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
