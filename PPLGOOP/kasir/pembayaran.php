<!doctype html>
<html lang="en">
    <head>
        <title>Pembayaran</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    </head>

    <body>
    <?php
    session_start();
    $totalHarga = $_SESSION['totalHarga'];
    ?>
    <div class="container d-flex flex-column mt-5 text-center" style="align-items: center;">
        <h1>PILIH PEMBAYARAN</h1>
        <form method="post" action="">
            <p style="margin-bottom: 7px;">Total Yang Harus Anda Bayar Adalah <b><?php echo "Rp " . number_format($totalHarga,2,',','.');?></b></p>
            <p>Metode Pembayaran yang kami sediakan</p>
            <div class="box mt-2">
            <button type="submit" class="btn btn-success me-2" name="cash">
                <a class="link-underline link-underline-opacity-0 text-white" href="pembayaran.php?page=cash">Cash</a>
            </button>
            <button type="submit" class="btn btn-primary" name="eMoney">
                <a class="link-underline link-underline-opacity-0 text-white" href="pembayaran.php?page=eMoney">Electronic Money</a>
            </button>
        </div>
        </form>
        <?php
    if (isset($_GET['page'])){
        $page=$_GET['page'];
        
        switch ($page){
            case 'cash':
                include 'cash.php';
                break;
                case 'eMoney':
                    include 'eMoney.php';
            break;
            default:
            echo "Halaman Masih Belum Tersedia";
            break;
        }
    }
    ?>
    </div>
        <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous">
        </script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
