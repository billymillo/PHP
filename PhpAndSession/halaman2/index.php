<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Halaman web Dinamis Dengan PHP | Malas Coding</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <header>
            <h1 class="judul">WWW.MALASCODING.COM</h1>
            <h3 class="deskripsi">Membuat Halaman web Dinamis Dengan PHP</h3>
        </header>

        <div class="menu">
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=about">About</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
            </ul>
        </div>
        <div class="badan">

            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];

                switch ($page) {
                    case 'home':
                        include "home.php";
                        break;
                    case 'about':
                        include "about.php";
                        break;
                    case 'contact':
                        include "contact.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            } else {
                include "home.php";
            }

            ?>

        </div>
    </div>
</body>
</html>