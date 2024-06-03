<?php
// Class Persegi
class Persegi {
// Input Property yang dibutuhkan
public $lebar;
public $panjang;
// Method menetapkan sebuah value dari Property
public function getVar(){
  $this->lebar;  
  $this->panjang;
}
// Method menambahkan rumus
public function luas() {
  return $this->lebar * $this->panjang;
}
}
// Instansiasi class Persegi
$luasPersegi = new Persegi();
$luasPersegi->lebar = 15;
$luasPersegi->panjang = 20;
// Memanggil Hasil
echo $luasPersegi->luas(); // Output: 300
?>