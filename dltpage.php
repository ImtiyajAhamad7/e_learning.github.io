<?php 
 $crsid = $_GET['cid'];

 include "includes/connection.php";
 
 $sql = "DELETE FROM courses WHERE id = {$crsid}";
 $res = mysqli_query($conn, $sql) or die("Query Failed.");

 header("Location: http://localhost/e-learning/adminpage.php" );

 mysqli_close($conn);

?>

