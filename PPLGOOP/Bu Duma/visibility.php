<?php
class Siswa {
    public $nama;
    protected $nis;

    public function __construct($nama, $nis) 
    {
        $this->nama = $nama;
        $this->nis = $nis;
    }

    public function getNis() 
    {
        return $this->nis;
    }
}

class SiswaKelas extends Siswa{
    public $rombel; 
    public $rayon;

    public function __construct($nama, $nis, $rombel, $rayon) {
        parent::__construct($nama, $nis, $rombel, $rayon);
        $this->rombel = $rombel;
        $this->rayon = $rayon;
    }

    public function dataSiswa(){
        return "Nama: " . $this->nama . "<br> NIS: " . $this->nis . "<br> Rombel: " . $this->rombel . "<br> Rayon: " . $this->rayon;
    }
}
$siswa_kelas = new SiswaKelas('Marsha' , "123097432", "PPLG X-3", "Cisarua 10");

echo $siswa_kelas->getNis();
echo "<hr>";
echo $siswa_kelas->dataSiswa();
?>