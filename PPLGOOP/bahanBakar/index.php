<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MilloShell</title>
        <link rel="icon" type="image/x-icon" href="logo.ico" />
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <img src="image\shell.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top me-3">
    <a class="navbar-brand" href="#">MilloShell</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    </div>
  </div>
</nav>
        <div class="container d-flex flex-column mt-5 pb-3 col-sm-6 mb-3 mb-sm-0">
        <div class="container card " style="align-items: center;">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    class Bensin {
        protected $harga,
                  $ppn,
                  $jenis;
        
        public function __construct($harga, $ppn, $jenis) {
            $this->harga = $harga;
            $this->ppn = $ppn;
            $this->jenis = $jenis;
        }

        public function getHarga() {
            if ($this->jenis === "shellSup"){
                return $this->harga = 15420;
            }
            else if ($this->jenis === "shellVPow"){
                return $this->harga = 16130;
            }
            else if ($this->jenis === "shellVPowD"){
                return $this->harga = 18310;
            }
            else if ($this->jenis === "shellVPowN"){
                return $this->harga = 16510;
            }
        }

        public function getPpn() {
            return $this->ppn;
        }
    }

    class Total extends Bensin {
        private $jumlah;

    public function __construct($harga, $ppn, $jumlah, $jenis){
        parent::__construct($harga, $ppn, $jenis);
        $this->jumlah = $jumlah;
    }

    public function getBensin() {
        if ($this->jenis === "shellSup"){
            return $this->harga = "Shell Super";
        }
        else if ($this->jenis === "shellVPow"){
            return $this->harga = "Shell V-Power";
        }
        else if ($this->jenis === "shellVPowD"){
            return $this->harga = "Shell V-Power Diesel";
        }
        else if ($this->jenis === "shellVPowN"){
            return $this->harga = "Shell V-Power Nitro";
        }else{
            return "TIPE BAHAN BAKAR BELUM DI SUBMIT";
        }
    }
    }

    $jumlah = $_POST['liter'];
    $jenis = $_POST['bahanBakar'];
    $struk = new Total(0, 0.1, $jumlah, $jenis);
    $hargaPpn = $struk->getHarga() * $jumlah * $struk->getPpn();
    $totalPpn = $struk->getHarga() * $jumlah + $hargaPpn;
    
    echo "<table class='table table-hover table-responsive{-sm|-md|-lg|-xl|-xxl}'>"; 
    echo "<img src='image\shell.png' alt='Logo' width='85' height='85' class='d-inline-block align-text-top mt-3 '>";
    echo "<h4 class='mt-3 mb-3'>Terima kasih telah mengisi bensin di MilloShell</h4>";
    echo "</tr>";
    echo "<td> Biaya Per Liter {$struk->getBensin()}</td>";
    echo "<td class='text-end'> Rp " . number_format($struk->getHarga(),2,',','.') . "</td>";
    echo "</tr>";
    echo "<td>Jumlah Liter Yang Dibeli</td>";
    echo "<td class='text-end'>$jumlah Liter</td>";
    echo "</tr>";
    echo "<td>Pajak</td>";
    echo "<td class='text-end'>Rp " . number_format($hargaPpn,2,',','.') . "</td>";
    echo "</tr>";
    echo "<td>Total Bayar</td>";
    echo "<td class='text-end'>Rp " . number_format($totalPpn,2,',','.') . "</td>";
    echo "</table>";
    echo "<p>Jl. Raya Cisarua Puncak Km 77, Leuwimalang Kab. Bogor, RT 01, RW 03</p>";
    echo "<p>MilloShell Cisarua</p>";
    echo "</div>";
}
?>
    <form action="" method="post" class="row g-3 mt-4 mb-4" style="width: 60%;">
        <div class="col-md-6 pe-1">
            <label for="liter" class="form-label">Masukan Jumlah Liter</label>
            <input type="number" class="form-control" placeholder="Masukkan Pembelian" name="liter">
        </div>
        <div class="col-md-6">
            <label for="tipe" class="form-label">Pilih Tipe Bahan Bakarmu</label>
            <select id="bahanBakar" class="form-select" name="bahanBakar">
                <option value="none" disabled selected>Pilih Bahan Bakar</option>
                <option value="shellSup">Shell Super</option>
                <option value="shellVPow">Shell V-Power</option>
                <option value="shellVPowD">Shell V-Power Diesel</option>
                <option value="shellVPowN">Shell V-Power Nitro</option>
            </select>
        </div>
        <div class="col-12 align-text">
            <button type="submit" class="btn btn-primary">Selesai</button>
        </div>
    </form>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous">
</script>
</body>
</html>
