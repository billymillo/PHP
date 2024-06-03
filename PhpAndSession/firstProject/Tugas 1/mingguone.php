<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Informasi Siswa</title>
</head>
<body>

<?php
// Data siswa (contoh, bisa diambil dari database)
echo "<h1>KELAS PPLG X-3</h1>";
$siswa = [
    ['nis' => '001', 'nama' => 'Moes', 'rombel' => 'XII-B'],
    ['nis' => '002', 'nama' => 'Aditya', 'rombel' => 'XII-B'],
    ['nis' => '003', 'nama' => 'Dimas', 'rombel' => 'XII-B'],
    ['nis' => '004', 'nama' => 'Udin', 'rombel' => 'XII-B'],
    ['nis' => '005', 'nama' => 'Waya', 'rombel' => 'XII-B'],
    ['nis' => '006', 'nama' => 'Opet', 'rombel' => 'XII-B'],
    // Tambahkan lebih banyak siswa jika diperlukan
];

// Mencetak informasi siswa
foreach ($siswa as $data) {
    echo "<p>NIS: {$data['nis']}</p>";
    echo "<p>Nama: {$data['nama']}</p>";
    echo "<p>Rombel: {$data['rombel']}</p>";
    echo "<hr>";
}
?>

</body>
</html>


