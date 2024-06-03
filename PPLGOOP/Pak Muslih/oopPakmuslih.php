<?php
class jaket {
    // PROPERTY
    public $name = 'name',
           $color = 'color',
           $produksi = 'produksi',
           $harga = 'harga';
    // METHOD
    function getName(){
        return "$this->name, $this->color, $this->produksi, $this->harga";
    }
}

$stoneIsland = new jaket();
$stoneIsland->name = "Jacket Hoodie Redriot";
$stoneIsland->color = "Red Maroon";
$stoneIsland->produksi = "Stone Island";
$stoneIsland->harga = 2000000;


echo "Jacket Stone Island : " . $stoneIsland->getName();
echo "<br>";
echo "<br>";
?>

<!DOCTYPE html>
<html>
<body>

<?php
class cap {
  // Properties
  public $name;
  public $color;
  public $harga;

  // Methods

  // NAMA PRODUK
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  // WARNA
  function set_color($color){
    $this->color = $color;
  }
  function get_color(){
    return $this->color;
  }
  // COLOR
  function set_harga($harga) {
    $this->harga = $harga;
  }
  function get_harga() {
    return $this->harga;
  }
}

$nike = new cap();
$adidas = new cap();
$nike->set_name('Nike');
$nike->set_color("Black");
$nike->set_harga("250.000");
$adidas->set_name('Adidas');
$adidas->set_color("White");
$adidas->set_harga("300.000");

echo "Product Name : " . $nike->get_name();
echo "<br>";
echo "Cap Colour : " . $nike->get_color();
echo "<br>";
echo "Cap Price : " . $nike->get_harga();
echo "<br>";
echo "<br>";  
echo "Product Name : " . $adidas->get_name();
echo "<br>";
echo "Cap Colour : " . $nike->get_color();
echo "<br>";
echo "Cap Price : " . $adidas->get_harga();
?>
 
</body>
</html>
