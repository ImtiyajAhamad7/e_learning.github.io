<?php include 'includes/connection.php'; ?>
<?php include 'includes/links.html';

$pagetitle = "Courses";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pagetitle ?></title>
</head>
<body>
  



<div class="container col-lg-6 col-md-12 col-12 mt-3">
  <h1 class="text-secondary text-center">Our Courses</h1>
</div>
<hr>


<div class="container" mt-5 mb-5>




  <div class="row">

    <?php

    $displayquery = "select * from courses";
    $querydisplay = mysqli_query($conn, $displayquery);



    while ($result = mysqli_fetch_array($querydisplay)) {

      

    ?>
      <div class="col-12 col-sm-6 col-xl-4 col-md-6 col-xl-3 mt-3 card">
        <div class="card-header">
          <h4 class="text-center text-light"><?php echo $result['course_title']; ?></h4>
        </div>
        <div class="card-body">
          <a href="coursedetail.php?cid=<?php echo $result['id']; ?>"><img class="mb-1" src=" <?php echo $result['img']; ?>" alt="image" width="300px" height="150px"></a>
        </div>
        <div class="card-footer"><h4 class="text-center"><?php echo $result['price']; ?></h4></div>


        <a href="coursedetail.php?cid=<?php echo $result['id']; ?>" class="btn btn-primary">Buy</a>



      </div>
    <?php } ?>

  </div>

</div>



<?php require_once "includes/footer.php"; ?>