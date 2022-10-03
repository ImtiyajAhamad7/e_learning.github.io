<?php $pagetitle = "update course";
include "includes/head.php";
include "includes/connection.php";
?>




<h1 class="addtitle">Update Corse Detail</h1>
<hr>

<?php

$course_id = $_GET['cid'];


$sql = "SELECT * FROM courses WHERE id = {$course_id}";

$res = mysqli_query($conn, $sql) or die('Query failed.');

if(mysqli_num_rows($res) > 0){

    while($row = mysqli_fetch_assoc($res)){        
    

?>


<form method="post" action="updateaction.php" enctype="multipart/form-data">
    <div class="form-row input-group-prepend ">


        <div class="col-md-5 mt-2">
            <input type="hidden" value="<?php echo $row['id']; ?>" name="crcid">
            <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $row['course_title']; ?>" name="course_title" placeholder="Enter Course Title Here" autocomplete="off">
        </div>
        <div class="col-md-5 mt-2">
            <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $row['short_desc']; ?>" name="srt_desc" placeholder="Enter Short Description" autocomplete="off">
        </div>
        <div class="col-md-2 mt-2">
            <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $row['price']; ?>" name="price" placeholder="Price" autocomplete="off">
        </div>
        <div class="col-md-12 mt-2 mb-2">
            <textarea class="form-control" id="exampleFormControlTextarea1"  rows="3" name="long_desc"  placeholder="Long Description Of the course"><?php echo $row['long_desc']; ?></textarea>
        </div>

        <img src="<?php echo $row['img'];?>" width="100" height="100" alt="img">
        <input type="file" class="form-control-file" name="newimage" value="<?php echo $row['img']; ?>" id="exampleFormControlFile1" name="img"> 
       
        <input type="hidden" value="<?php echo $row['img']; ?>" name="old_img">
        <br> <br>

        <button class="btn btn-primary btn-block add-btn" type="submit" name="addcourse">Update</button>
        


    </div>
</form>

<?php } //while ends
 }  //if condition ends 
  ?>

