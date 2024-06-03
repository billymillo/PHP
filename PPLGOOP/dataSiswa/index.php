<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="icon" type="image/x-icon" href="wikrama.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Schoolbell&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Schoolbell&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
</head>
<body>
<style> 
* { padding: 0px; margin: 0px; font-family: "Madimi One", cursive; } 
    body { display: flex; flex-direction: column; align-items: center; margin: 1rem; background-color: #f5f5f5; } 
    .box { width: 100%; max-width: 600px; margin: 0 auto; background-color: #fff; box-shadow: 0px 0px 10px rgba(0,0,0,0.1); padding: 2rem; border-radius: 10px; } 
    h2 { text-align: center; margin-bottom: 2rem; font-size: 2rem; } 
    form { display: flex; flex-direction: column; margin-bottom: 2rem; } 
    label { font-size: 1.2rem; margin-bottom: 0.5rem; } 
    .masuk { padding: 0.5rem; margin-bottom: 1rem; border-radius: 5px; border: 1px solid #ccc; } 
    .tombol { padding: 0.5rem 2rem; background-color: #4CAF50; color: #fff; border: none; border-radius: 5px; font-size: 1.2rem; cursor: pointer; } 
    .tombol:hover { background-color: #45a049; } .data-box { width: 100%; max-width: 600px; margin: 0 auto; margin-top: 2rem; } 
    .data-box h2 { font-size: 2rem; margin-bottom: 1rem; } .data-box p { font-size: 1.2rem; margin-bottom: 0.5rem; } 
    .hapus{ color: red; text-decoration: none; }
    .edit{ color: blue ; text-decoration: none; }
</style>
    <div class="box">
    <h2>Data Siswa Kelas 10</h2>
    <form method="post" action="" style="display:flex; flex-direction:column;">
        <label for="Siswa">Nama Siswa</label>
        <input class="masuk" type="text" name="siswa" id="siswa" placeholder="Input Nama">
        <label for="NIS">NIS</label>
        <input class="masuk" type="number" name="nis" id="nis" placeholder="Input NIS">
        <label for="Rayon">Rayon</label>
        <input class="masuk" type="text" name="rayon" id="rayon" placeholder="Input Rayon">
        <button class="tombol" type="submit" name="kirim" style="margin-top:10px;">Kirim</button>
        <button class="tombol" type="submit" name="reset" style="margin-top:30px;">Reset</button>
    </form>

    <?php
    // RESET BUTTON
    session_start();
    if(isset($_POST['reset'])){
        session_unset();
        header('Location: '. $_SERVER['PHP_SELF']);
        exit;
    }
    // HAPUS SATU BUAH DATA
    if(isset($_GET['hapus'])){
        $index = $_GET['hapus'];
        unset($_SESSION['dataSiswa'][$index]);
    }
    // IF ARRAY MULTIDIMENSION NOT FOUND THEN MADE FIRST
   if(!isset($_SESSION['dataSiswa'])){
    $_SESSION['dataSiswa'] = array();
   }

    // IF ARRAY FOUND, THEN MADE ARRAY FROM USER INPUT DATA
    if(isset($_POST['kirim'])){
    if(@$_POST['siswa'] && @$_POST['nis'] && @$_POST['rayon']){
        $data = [
            'siswa' => $_POST['siswa'],
            'nis' => $_POST['nis'],
            'rayon' => $_POST['rayon']
        ];
        array_push($_SESSION['dataSiswa'], $data);
        header('Location: '. $_SERVER['PHP_SELF']);
        exit;
    }else{
        echo "<p>Lengkapi Data</p>";
    }
}
if(!empty($_SESSION['dataSiswa'])){
    foreach($_SESSION['dataSiswa'] as $index => $value){
        echo "<div class='container card d-flex mt-4'>";
        echo "<div class='d-flex justify-content-between'>";
        echo "<h7>Nama Siswa :". $value['siswa'] . "</h7>";
        echo '<h7><a class="hapus"href="?hapus=' . $index . '" class="hapus">HAPUS</a></h7>';    
        echo "</div>";
        echo "<div class='d-flex justify-content-between'>";
        echo "<h7>NIS : " . $value['nis']."</h7>";
        echo '<h7"><a class="edit"href="?edit=' . $index . '">EDIT</a></h7>';
        echo "</div>";
        echo "<h7>Rayon : " .  $value ['rayon']. "</h7>";
        echo "</div>";
    }
}
if(isset($_GET['edit'])){
    $index = $_GET['edit'];
    $editData = $_SESSION['dataSiswa'][$index];
    // Membuat Form
    echo '<div class="card box mt-5">';
    echo '<h2>Edit Data Siswa</h2>';
    echo '<form method="post" style="mt-5;">';
    // Mengatur index agar saat di submit akan reupload data sebelumnya
    echo '<input class="masuk" type="hidden" name="editIndex" value="' . $index . '">';
    // Form editing
    echo '<label for="siswa">Nama Siswa</label>';
    echo '<input class="masuk" type="text" name="siswa" id="siswa" value="' . $editData['siswa'] . '">';
    echo '<label for="nis">NIS</label>';
    echo '<input class="masuk" type="number" name="nis" id="nis" value="' . $editData['nis'] . '">';
    echo '<label for="rayon">Rayon</label>';
    echo '<input class="masuk" type="text" name="rayon" id="rayon" value="' . $editData['rayon'] . '">';
    echo '<button class="tombol mt-4" type="submit" name="update">Update</button>';
    echo '</form>';
    echo "</div>";
}
// Logic ketika tombol "update" di klik
if(isset($_POST['update'])){
    // Mengatur index, agar saat editing data index ke 2 atau selebihnya akan mengatur index data yang di klik user
    $index = $_POST['editIndex'];
    // Mengatur update data yang baru di input
    $editData = [
        'siswa' => $_POST['siswa'],
        'nis' => $_POST['nis'],
        'rayon' => $_POST['rayon']
    ];
    // Update data ke index
    $_SESSION['dataSiswa'][$index] = $editData;
    exit;
}
echo "</div>"; 
?>
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