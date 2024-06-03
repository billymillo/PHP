<!DOCtYPE html>
<html lang="en">
    <head>
        <title>Pembayaran E-Money</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    </head>

    <body>
        <?php
        $totalHarga = $_SESSION['totalHarga'];
        $jumlahBayar = $_SESSION['totalHarga'];
        
        ?>
        <img src="https://encartate.com/wp-content/uploads/2020/05/qr-code.png" alt="" style="width: 150px; height:150px;" class="mt-3">
        <form method="post" action="" class="">
            <div class="container d-flex flex-column mt-3">
            <label for="cash">Pembayar Uang Electronic Money</label>
            <div class="box d-flex">
                <p class='mt-3'>Total Pembayaran :</p>
                <?php echo "<p class='ms-5 mt-3'> Rp " . number_format($totalHarga,2,',','.') . "</p>";?>
            </div>
            <div class="box d-flex">
                <p>Jumlah Transfer : </p>
                <?php echo "<p class='ms-5'> Rp " . number_format($jumlahBayar,2,',','.') . "</p>";?>
            </div>
                <a href="struk.php" class="btn btn-success link-underline link-underline-opacity-0 text-white">Bayar</a>
        </div>
        </form>
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
