<?php
class Siswa {
    public $nama;
    protected $nis;

    public function __construct($nama, $nis) {
        $this->nama = $nama;
        $this->nis = $nis;
    }

    public function getNis() {
        return $this->nis;
    }
}

class SiswaKelas extends Siswa {
    public function dataSiswa(){
        return "Nama: " . $this->nama . "<br> NIS: " . $this->nis;
    }
}

$siswaKelas = new SiswaKelas("Marsha" , "123098710");
echo $siswaKelas->dataSiswa();
?>