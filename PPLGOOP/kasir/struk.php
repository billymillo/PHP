<!doctype html>
<html lang="en">
    <head>
        <title>Struk Pembayaran</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    </head>
    <body>
        <style>
        </style>
        <div class="container card d-flex flex-column mt-5 pb-13 col-sm-4 mb-3 mb-sm-0" style="align-items: center;">
        <p class="mt-3">ALFAMART RAYA CISARUA 7 / 089274673291</p>
        <p>ALFA TOWER LT.10. ALAM SUTRA, BOGOR</p>
        <p>JL.RAYA PUNCAK RT.002 RW.003 CISARUA</p>
        <br>
        <?php
        session_start();
        $jumlahBayar = 0;
        $totalHarga = $_SESSION['totalHarga'];
        $i = 0;
        if(isset($_SESSION['lembaran'])){
            $jumlahBayar = $_SESSION['lembaran'];
        } else{
            $jumlahBayar = $totalHarga;
        }
        
        
        foreach($_SESSION['dataBarang'] as $index=>$value){
            $i++;
            echo "<div class='table-responsive'>";
            echo "<table class='table table-responsive'>";
            echo "<th>No</th>";
            echo "<th>Barang</th>";
            echo "<th class='text-end'>Jumlah</th>";
            echo "<th class='text-end'>Harga</th>";
            echo "<th class='text-end'>Total</th>";
            echo "<tr>";
            echo "<td>" . $i . ".</td>";
            echo "<td>" . $value['barang'] . "</td>";
            echo "<td class='text-end'>" . $value['jumlah'] . "</td>";
            echo "<td class='text-end'>Rp " . number_format($value['harga'],2,',','.') . "</td>";
            echo "<td class='text-end'>Rp " .  number_format(($value['harga'] * $value['jumlah']),2,',','.') . "</p>";
            echo "</tr>";
        }
        
        echo "</table>";
        echo "</div>";
        
    ?>
    </table>
    <table class='table'>
    <tr>
    <td colspan="5">Total Pembayaran</td>
    <td class='text-end'><?php echo "Rp " . number_format($totalHarga,2,',','.') ?></td>
    <tr>
    <tr>
    <td colspan="5">Total Uang</td>
    <td class='text-end'><?php echo "Rp " . number_format($jumlahBayar,2,',','.') ?></td>
    <tr>
    <tr>
    <td colspan="5">Kembalian</td>
    <td class='text-end'><?php echo "Rp " . number_format($jumlahBayar - $totalHarga,2,',','.') ?></td>
    <tr>
    </table>
    <?php
    date_default_timezone_set("Asia/Jakarta");
    echo date('d-m-Y h:i:s A');
    ?>
    <table class="text-align table-responsive{-sm|-md|-lg|-xl|-xxl}">
        <tr>
        <td>Thankyou For Buying</td>
        <tr>
        </table>
        <form method="post" action="">
        <button class="btn btn-success mt-3" type="submit" name="destroy">Kembali Ke Halaman</button>
    </form>
    <?php
        if(isset($_POST['destroy'])){
            session_destroy();
            header('location:   '.'index.php');
        }
        ?>
        </div>
    </div>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>
    </body>
</html>
