<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <style>
        body{
            width: 100%;
            height: 680px;
        }
    </style>
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BillyMillo</a>
    <button class="navbar-toggler" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">ALFAMART RAYA CISARUA 7</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#"><?php echo date('d-m-Y');?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#"><?php echo date('h:i:s');?></a>
        </li>
      </ul>
      <span class="navbar-text">
        BOGOR
      </span>
    </div>
  </div>
</nav>
        <h1 class='text-center dancing-script mt-5'>Selamat datang di <span>MILLOMART</span></h1>
    <div class="container mt-4" style="width: 60%; height= 100%">
    <form action="" method="post">
        <div class="box mb-3">            
            <label for="barang">Nama Barang</label>
            <input type="text" name="barang" id="barang" class="form-control" placeholder="Input Nama Barang">
            <label for="harga">Harga Barang</label>
            <input type="number" name="harga" id="harga" class="form-control" placeholder="Input Harga Barang">
            <label for="jumlah">Jumlah Barang</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="Input Nama Jumlah">
        </div>
        <button type="submit" class='btn btn-success' name="total">Tambah</button>
        <button type="submit" class='btn btn-warning' name="reset">RESET</button>
    </form>

    <?php
    session_start();
    if(isset($_POST['reset'])){
        session_unset();
        header('Location: '. $_SERVER['PHP_SELF']);
        exit;
    }
    if(isset($_GET['hapus'])){
        $index = $_GET['hapus'];
        unset($_SESSION['dataBarang'][$index]);
    }
    if(!isset($_SESSION['dataBarang'])){
        $_SESSION['dataBarang'] = array();
    }
    if(isset($_POST['total'])){
        if(@$_POST['barang'] && @$_POST['harga'] && @$_POST['jumlah']){
            $data = [
                'barang' => $_POST['barang'],
                'kode_barang' => rand(10000,20000),
                'harga' => $_POST['harga'],
                'jumlah' => $_POST['jumlah'],
            ];
            array_push($_SESSION['dataBarang'], $data);
            header('Location: '. $_SERVER['PHP_SELF']);
        exit;
        }
    }
    if(!empty($_SESSION['dataBarang'])){
        echo "<div class='table-responsive-xxl'>";
        echo "<table class='table table-bordered mt-5 table-striped-columns table-primary table-hover'>";
        echo "<tr class='table-danger'>";
        echo "<th>" . "No" . "</th>";
        echo "<th>" . "Kode Item" . "</th>";
        echo "<th>" . "Keterangan Barang" . "</th>";
        echo "<th>" . "Harga" . "</th>";
        echo "<th>" . "Jumlah" . "</th>";
        echo "<th>" . "Total" . "</th>";
        echo "<th>" . "Cancel Barang" . "</th>";
        echo "<tr>";
        $i = 0;
        $totalHarga = 0;
        foreach($_SESSION['dataBarang'] as $index=>$value){
            $i++;
            echo "<tr>";
            echo "<td scope='col'>" . $i . "</td>";
            echo "<td>" . $value['kode_barang'] . "</td>";
            echo "<td scope='col'>" .  $value['barang'] . "</td>";
            echo "<td scope='col' class='text-end'>Rp " .  number_format($value['harga'],2,',','.') . "</td>";
            echo "<td scope='col' class='text-end'>" .  $value['jumlah'] . "</td>";
            echo "<td scope='col' class='text-end'>Rp " .  number_format(($value['harga'] * $value['jumlah']),2,',','.') . "</td>";
            $totalHarga += $value['harga'] * $value['jumlah'];
            echo '<td><a class="link-offset-2 link-underline link-underline-opacity-0 text-danger" href="?hapus=' . $index . '" class="hapus">CANCEL</a>' . "<br>" . "</td>";
            echo "</tr>";
            }   
            echo "<tr class='table-warning'>";
            echo "<th colspan='5'>Total Harga</th>";
            echo "<th class='text-end'>Rp " . number_format($totalHarga,2,',','.') . "</th>";
            echo "<th></th>";
            echo "<tr>";
            echo "<table>";
            echo "<a href='pembayaran.php'><button class='btn btn-success' type='submit' name='bayar'>Bayar</button></a>";
            echo "</table>";
            $_SESSION['totalHarga'] = $totalHarga;
        }
        echo "</table>";
        echo "</div>";
    ?>
</div>

<!-- BOOTSTRAP SCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>