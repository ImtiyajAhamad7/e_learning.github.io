<?php
$crsid1 = $_GET['muisd'];

include "includes/connection.php";

$sql = "DELETE FROM imtiyaj_ahamad_contact_table WHERE id = {$crsid1}";
$res = mysqli_query($conn, $sql) or die("Query Failed.");

header("Location: http://localhost/e-learning/messegepanel.php" );

?>