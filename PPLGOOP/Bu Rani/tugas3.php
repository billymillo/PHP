<?php
function persegi($a) {
    return $a * $a; 
}
function segitiga($a, $t) {
    return $a * 0.5 * $t;
}
function jajar($a, $t){
    return $a * $t;
}

echo persegi(2);
echo "<br>";
echo persegi(12);
echo "<br>";
echo persegi(20);
echo "<br>";
echo "<hr>";

echo segitiga(20, 17);
echo "<br>";
echo segitiga(16, 24);
echo "<br>";
echo segitiga(21, 24);
echo "<br>";
echo "<hr>";

echo jajar(17, 24);
echo "<br>";
echo jajar(26, 14);
echo "<br>";
echo jajar(11, 16);
echo "<br>";
echo "<hr>";
?>