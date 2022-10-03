<?php  

include "includes/connection.php";

$stid = $_POST['usrid'];
$stnm = $_POST['name'];
$steml = $_POST['email'];
$stnmbr = $_POST['number'];
$stpass = $_POST['upass'];

$upsql = "UPDATE imtiyaj_ahamad_user_table SET name = '{$stnm}', email = '{$steml}', mobile = '{$stnmbr}', password = '{$stpass}' WHERE id = $stid  ";

$sqlres = mysqli_query($conn, $upsql) or die("falied:. ". mysqli_error($conn));


header("Location: index.php");
?>