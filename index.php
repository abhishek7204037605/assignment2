<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "college";

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>


<!-- // echo"i love pizza <br>";
// echo"it is really good";
// $a=10;
// $b=20;
// $total=$a + $b;
// echo "<br>";
// echo $total;
// // this is a comment
// /*  this is a 
// multi line comment*/ -->
