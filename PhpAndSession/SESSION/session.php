<?php
echo session_save_path();
?>

<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "<br>";
echo "My favorite color is " . $_SESSION["favcolor"] . "<br>";
echo "My favorite animal is " . $_SESSION["favanimal"] . "<br>";
var_dump($_SESSION);
?>