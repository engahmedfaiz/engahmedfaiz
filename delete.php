<?php

$con = mysqli_connect("localhost","root","" ,"m3");
$ID = $_GET['id'];
mysqli_query($con, "DELETE FROM com WHERE id=$ID");
header('location: products.php')

?>
<?php

$con = mysqli_connect("localhost","root","" ,"m3");
$ID = $_GET['id'];
mysqli_query($con, "DELETE FROM iphon WHERE id=$ID");
header('location: products.php')

?>
<?php

$con = mysqli_connect("localhost","root","" ,"m3");
$ID = $_GET['id'];
mysqli_query($con, "DELETE FROM  fth WHERE id=$ID");
header('location: products.php')

?>
<?php

$con = mysqli_connect("localhost","root","" ,"m3");
$ID = $_GET['id'];
mysqli_query($con, "DELETE FROM goold WHERE id=$ID");
header('location: products.php')

?>
<?php

$con = mysqli_connect("localhost","root","" ,"m3");
$ID = $_GET['id'];
mysqli_query($con, "DELETE FROM ml WHERE id=$ID");
header('location: products.php')

?>
<?php

$con = mysqli_connect("localhost","root","" ,"m3");
$ID = $_GET['id'];
mysqli_query($con, "DELETE FROM   prod WHERE id=$ID");
header('location: products.php')

?>
<?php

$con = mysqli_connect("localhost","root","" ,"m3");
$ID = $_GET['id'];
mysqli_query($con, "DELETE FROM coloc WHERE id=$ID");
header('location: products.php')

?>