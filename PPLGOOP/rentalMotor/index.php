<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RentBro</title>
    <link rel="icon" type="image/x-icon" href="rent.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <img src="rent.png" alt="Logo" width="60" height="75" class="d-inline-block align-text-top me-3">
    <a class="navbar-brand" href="#">RentBro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    </div>
  </div>
</nav>
    <div class="container d-flex flex-column mt-5 pb-3 col-sm-6 mb-3 mb-sm-0">
        <form action="" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="pelanggan" class="form-label">Nama Pelanggan :</label>
                        <input type="text" class="form-control" name="pelanggan" placeholder="Masukkan Nama">
                    </div>
                    <div class="mb-3">
                        <label for="sewa" class="form-label">Lama Waktu Sewa :</label>
                        <input type="number" class="form-control" name="sewa" placeholder="Berapa Hari Pemakaian">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="jenisMotor" class="form-label">Jenis Motor :</label>
                        <select class="form-select" name="jenisMotor" id="jenisMotor">
                            <option value="vespa">Motor Vespa</option>
                            <option value="custom">Motor Custom</option>
                            <option value="beatKarbu">Motor Beat Karbunator</option>
                            <option value="ninja">Motor Ninja</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="member" class="form-label">Member :</label>
                        <select class="form-select" name="member" id="member">
                            <option value="true">Member</option>
                            <option value="false">Non Member</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Bayar</button>
        </form> 
    </div>
        <?php
        
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        class Sewa {
            protected $nama, 
            $harga,
            $ppn,
            $pajak,
            $jenis;
            public $member;
            
            public function __construct($nama, $harga, $ppn, $pajak, $jenis, $member) {
                $this->nama = $nama;
                $this->harga = $harga;
                $this->ppn = $ppn;
                $this->pajak = $pajak;
                $this->jenis = $jenis;
                $this->member = $member;
            }
            
            public function getHarga() {
                if ($this->jenis === "vespa") {
                    return $this->harga = 100000;
                }
                else if ($this->jenis === "custom") {
                    return $this->harga = 130000;
                }
                else if ($this->jenis === "beatKarbu") {
                    return $this->harga = 50000;
                } 
                else if ($this->jenis === "ninja") {
                return $this->harga = 150000;
            }
        }

        
        public function getPpn() {
            return $this->ppn;
        }
        
        public function getMember() {
            if ($this->member === "true") {
                return $this->ppn = 0.05;
            } else if ($this->member === "false") {
                return $this->ppn = 0;
            }
        }
    }
    
    class Total extends Sewa {
        private $sewa;
        public function __construct($nama, $harga, $ppn, $pajak, $jenis, $sewa, $member){
            parent::__construct($nama, $harga, $ppn, $pajak, $jenis, $member);
            $this->sewa = $sewa;
        }
        public function getName() {
            if ($this->jenis === "vespa") {
                return $this->harga = "Motor Vespa"; 
            }
            else if ($this->jenis === "custom") {
                return $this->harga = "Motor Custom"; 
            }
            else if ($this->jenis === "beatKarbu") {
                return $this->harga = "Motor Beat Karbunator";
            } 
            else if ($this->jenis === "ninja") {
                return $this->harga = "Motor Ninja"; 
            }
        }
    }
    
    $nama = $_POST['pelanggan'];
    $jenis = $_POST['jenisMotor'];
    $sewa = $_POST['sewa'];
    $member = $_POST['member'];
    $pajak = 10000;
    $struk = new Total($nama, 0, 0.05, $pajak, $jenis, $sewa, $member);
    $strukArray[] = $struk;
    $diskon = $struk->getHarga() * $sewa * $struk->getPpn();
    $total = $struk->getHarga() * $sewa - $diskon + $pajak;
    echo "<div class='container card mt-5 pb-3 col-sm-6 mb-3 mb-sm-0' style='align-items: center;'>";
    echo "<table class='table table-hover table-responsive{-sm|-md|-lg|-xl|-xxl}'>";
    echo "<img src='rent.png' alt='Logo' width='100' height='115' class='d-inline-block align-text-top mt-1 '>"; 
    echo "<h4 class='mb-2'>Terima kasih telah merental di RentBro!!</h4>";
    if ($struk->member === "true") {
        echo "<td>Nama Pelanggan</td>";
        echo "<td class='text-end'>" . $nama ."</td>";
        echo "</tr>";
        echo "<td>Member/Non-Member</td>";
        echo "<td class='text-end'>Member</td>";
        echo "</tr>";
        echo "<td>Jenis Motor</td>";
        echo "<td class='text-end'>" . $struk->getName() . "</td>";
        echo "</tr>";
        echo "<td>Harga Sewa</td>";
        echo "<td class='text-end'>Rp " . number_format($struk->getHarga(),2,',','.') ."</td>";
        echo "</tr>";
        echo "<td>Lama Sewa</td>";
        echo "<td class='text-end'>" . $sewa ." Hari</td>";
        echo "</tr>";
        echo "<td>Pajak</td>";
        echo "<td class='text-end'>Rp " . number_format($pajak,2,',','.') . "</td>";
        echo "</tr>";
        echo "<td>Diskon Member</td>";
        echo "<td class='text-end'>Rp " . number_format($diskon,2,',','.') ."</td>";
        echo "</tr>";
        echo "<td>Total Pembayaran</td>";
        echo "<td class='text-end'> Rp " . number_format($total,2,',','.') ."</td>";
    } else if ($struk->member !== "true") {
        echo "<td> Nama Pelanggan " . "</td>";
        echo "<td class='text-end'>" . $nama ."</td>";
        echo "</tr>";
        echo "<td>Member/Non-Member</td>";
        echo "<td class='text-end'>Non-Member</td>";
        echo "</tr>";
        echo "<td>Jenis Motor</td>";
        echo "<td class='text-end'>" . $struk->getName() . "</td>";
        echo "</tr>";
        echo "<td>Harga Sewa</td>";
        echo "<td class='text-end'>Rp " . number_format($struk->getHarga(),2,',','.') ."</td>";
        echo "</tr>";
        echo "<td>Lama Sewa</td>";
        echo "<td class='text-end'>" . $sewa ." Hari</td>";
        echo "</tr>";
        echo "<td>Pajak</td>";
        echo "<td class='text-end'>Rp " . number_format($pajak,2,',','.') . "</td>";
        echo "</tr>";
        echo "<td>Total Pembayaran</td>";
        echo "<td class='text-end'> Rp " . number_format($total + $diskon,2,',','.') ."</td>";
    }
    echo "</table>";
    echo "</div>";
}
?>
</div>
<script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous">
    </script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous">
    </script>
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous">
</script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous">
</script>
</body>
</html>