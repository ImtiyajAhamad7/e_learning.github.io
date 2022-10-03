<?php include 'includes/connection.php'; ?>
<?php include 'includes/links.html';



?>
<?php
session_start();


if (!empty($_SESSION['usern'])) {

  if (isset($_POST['buyit'])) {

   echo "successfull";
     header("refresh:1; url=TxnTest.php");
  }
}
else{

  echo '<div class="alert alert-warning" role="alert">
  please login first
</div>';

  header("refresh:3; url=login.php");

}
?>
<div class="media mt-5 mr-auto">
<?php
$_SESSION['corsid'] = $_GET['cid'];
$crsid = $_SESSION['corsid'];
$displayquery = "select * from courses  WHERE id = $crsid";
$querydisplay = mysqli_query($conn, $displayquery);



while ($result = mysqli_fetch_array($querydisplay)) {

?>
  <img src="<?php echo $result['img']; ?>" class="mr-3" alt="image" width="500px" height="300px">
  <div class="media-body">
    <h5 class="mt-0"><?php echo $result['course_title']; ?></h5>
    <p><?php echo $result['short_desc']; ?></p>
    <p><?php echo $result['long_desc']; ?></p>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <button class="btn btn-primary" name="buyit">Buy</button>

    </form>
<div class="mt-5 mb-5">
<a href="Courses.php" class="btn btn-primary" >Back</a>
    <a href="index.php" class="btn btn-primary" >Home</a>
</div>
    
  </div>

  

 
  


  <?php } ?>
</div>

<?php require_once 'includes/footer.php'; ?>