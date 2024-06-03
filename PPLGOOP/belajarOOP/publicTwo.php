<?php
//class hewan
class Hewan {
//input property
public $nama; 
//method menetapkan sebuah value dari property
public function getNama(){
    return $this->nama;
    }
}
//instansiasi class hewan
$kucing = new Hewan();
$kucing->nama = 'mamalia';
//memanggil method public 
echo 'Kucing adalah salah satu hewan ' . $kucing->nama ;