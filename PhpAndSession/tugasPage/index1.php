<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
	    <li><a href="home.php?page=home">Home</a></li>
	    <li><a href="tentang.php?page=tentang">Tentang</a></li>
	    <li><a href="tutorial.php?page=Tutorial">Tutorial</a></li>
    </ul>
    <?php
    if(isset($_GET['page'])){
    $page = $_GET['page'];
    switch ($page) {
        case 'home':
            include('home.php');
            break;
        case "tentang":
            include('tentang.php');
            break;
        case 'tutorial':
            include('tutorial.php');
            break;
        default;
            echo "<center><h1>Maaf. Halaman Ini Belum Ditemukan</h1></center>";
            break;
        }    
    }

    ?>
</body>
</html>