<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .box1 {
            display:flex;
            justify-content:center;
            align-items:center;
        }
        body {
            width: 100%;
            height: 680px;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
        }
        .rata{
            color:green;
        }
        .red{
            color:red;
        }
        .kanan{
            text-align: right;
        }
    </style>
    <h1 style="text-align:center;">TUGAS REKAP NILAI</h1>
</body>
</html>
<?php
class student {
    private $name;
    private $grades;

    public function __construct($name, $grades){
        $this->name = $name;
        $this->grades = $grades;
    }

    public function getName() {
        return $this->name;
    }

    public function getGrades() {
        return $this->grades;
    }

    public function getAverageGrades() {
        $total = array_sum($this->grades);
        $count = count($this->grades);
        if ($count > 0) {
            return $rata = $total / $count;
        } else {
            return 0;
        }
    }
}
$student[]= new student("Muksit", [80, 94, 72, 50]);
$student[]= new student("Asel", [72, 95, 80, 71]);
$student[]= new student("Sitjel", [80, 94, 72, 80]);
$student[]= new student("Upin", [72, 95, 90, 76]);
$student[]= new student("Opet", [80, 94, 72, 90]);
$student[]= new student("Kudri", [72, 95, 70, 71]);
$student[]= new student("Kupoq", [80, 94, 72, 98]);
$student[]= new student("Teleas", [72, 95, 40, 71]);
$student[]= new student("Mussyruk", [80, 94, 72, 88]);
$student[] = new student("Ulul", [72, 95, 40, 71]);
$student[] = new student("Oposae", [80, 94, 72, 74]);
$student[] = new student("Kapa", [72, 95, 40, 71]);
$student[] = new student("Mario", [72, 95, 40, 72]);
$student[] = new student("Teguh", [80, 94, 72, 83]);
$student[] = new student("Adaq", [72, 95, 40, 73]);
$student[] = new student("Opet", [72, 95, 40, 75]);
$student[] = new student("Jelbereq", [80, 94, 72, 81]);
$student[] = new student("Komeng", [72, 95, 40, 73]);
$student[] = new student("Komang", [72, 95, 40, 75]);
$student[] = new student("Mumu", [80, 94, 72, 40]);

echo "<div class='box1'>";
echo "<table border='1'>";
echo "<tr>";
echo "<td>NO</td>";
echo"<td>NAMA</td>";    
echo"<td>MTK</td>";
echo"<td>INGGRIS</td>";
echo"<td>DPK</td>";
echo"<td>PROD</td>";
echo"<td>RATA-RATA</td>";
echo "</tr>";
for ($x = 1; $x <= 20; $x++) 
foreach ($student as $student) {
    echo "<tr>";
    echo "<td>" . $x++ . "</td>";
    echo "<td>" . $student->getName() . " </td>";
    echo "<td class='kanan'>" . implode("<td class='kanan'>" , $student->getGrades()) . "</td>";
    if($student->getAverageGrades() >= 75){
        echo "<td class ='rata kanan'>" . $student->getAverageGrades() . "</td>";
    }else{
        echo "<td class ='red kanan'>" . $student->getAverageGrades() . "</td>"; 
    }
    echo "</tr>";
}
echo "</table>";
echo "</div>";
?>