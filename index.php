

<?php 
$pagetitle = "E-learning";
require_once 'includes/connection.php';
require_once "includes/head.php";

 ?>


<!-- corousel start from here-->




<br>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel " mt-20>
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner ">
    <div class="carousel-item active">
   <a href="courses.php">   <img class="corouselimg" src="http://localhost/e-learning/assests/photos/corousel1.jfif" class="d-block w-100" alt="coursel Image"></a>
      <div class="carousel-caption caption-bg d-none d-md-block">
        <h1 class="corouselheading"><bold>Python</bold></h1>
        <h3 class="corouseldescription"><bold>Learn Python with real life project.</bold>  </h3>
      </div>
    </div>
    <div class="carousel-item">
    <a href="courses.php">  <img class="corouselimg" src="http://localhost/e-learning/assests/photos/corousel2.jpg" class="d-block w-100" alt="Coursel Image"></a>
      <div class="carousel-caption caption-bg d-none d-md-block">
        <h1 class="corouselheading"><bold>Programming For Everyone</bold></h1>
        <h3 class="corouseldescription"><bold>Learn all concept of c programming and get your master certificate</bold>  </h3>
      </div>
    </div>
    <div class="carousel-item">
     <a href="courses.php"> <img class="corouselimg" src="http://localhost/e-learning/assests/photos/corousel3.jfif" class="d-block w-100" alt="coursel Image"></a>
      <div class="carousel-caption caption-bg d-none d-md-block">
        <h1 class="corouselheading"><bold>Programming in C++</bold></h1>
        <h3 class="corouseldescription"><bold>Learn OOPs concept of c++ and became a job ready</bold>  </h3>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<br>
<?php include 'courses.php'; ?>
<br>

<!-- corousel ends here -->
