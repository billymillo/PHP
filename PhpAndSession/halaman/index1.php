<?php
//header
echo '<h1>My Navbar</h1>';
//header
echo '<a href="?haha=home">Home</a>';
echo '<a href="?haha=tentang">Tentang</a>';
echo '<a href="?haha=tutorial">Tutorial</a>';
//main

$haha = $_GET['haha'];
switch ($haha) {
    case 'home':
        $tampil = 'HOME';
        break;
    case 'tentang':
        $tampil = 'TENTANG';
        break;
    case 'tutorial':
        $tampil = 'TUTORIAL';
    default:
        $tampil = "MAAF";
        break;
}
echo $tampil;
echo '<h1>Footer</h1>';
?>