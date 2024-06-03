<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    Class Laptop  {
        public $nama, $pemilik, $merek;
        
        public function __construct($nama, $pemilik, $merek) {
            $this->nama = $nama;
            $this->pemilik = $pemilik; 
            $this->merek = $merek;
            return "Hidupkan $pemilik $merek punya $nama";
        }
        public function getName($nama, $pemilik, $merek) {
            return "Ini berasall dari Constructor $pemilik";
        }
        public function __destruct() {
            return "Ini berasal dari Destructor $pemilik";
        }
    }

    $cetak = new Laptop("Laptop", "Andi");
    echo "$cetak";
    ?>
</body>
</html>