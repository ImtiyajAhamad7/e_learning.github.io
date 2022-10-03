<?php include "includes/connection.php"; 

session_start();
     
?>



<?php 


$courseid = $_POST["crcid"];
$title = $_POST["course_title"];
$short_description= $_POST["srt_desc"];
$long_description  = $_POST["long_desc"];
$price = $_POST["price"];
$new_image = $_FILES["newimage"]['name'];
$old_image = $_POST['old_img'];

if($new_image != ''){
    $ufile_name = $_FILES["newimage"]['name'];
    $ufile_size = $_FILES["newimage"]['size'];
    $ufile_tmp = $_FILES["newimage"]['tmp_name'];
    $ufile_type = $_FILES["newimage"]['type'];
  }else{
    $ufile_name =  $_POST['old_img'];
    
  }

    if(file_exists($_FILES["newimage"]['name']))
    {
      $filename = $_FILES["newimage"]['name'];

      $_SESSION['fileestatus'] = "image already exist". $filename;

      header("Location: updatecourse.php");

    }else {


      $fileext = explode('.',$ufile_name);
    $filecheck = strtolower(end($fileext));

    $fileextstored = array('png', 'jpg', 'jpeg');

    if(in_array($filecheck, $fileextstored)){

        $destinationfile =  $ufile_name;
        echo '<div class="alert alert-success" role="alert">
        Course Updated Successfully.
      </div>';
        move_uploaded_file($_FILES["newimage"]['tmp_name'],$destinationfile );

        $sql = "UPDATE courses SET course_title = '$title', short_desc = '$short_description', long_desc = '$long_description', price = '$price', img = '$destinationfile' WHERE id = $courseid "; 

      $result = mysqli_query($conn, $sql) or die("Query Failed ". mysqli_error($conn));

      header("refresh:2;url=adminpage.php");


mysqli_close($conn);




    }else{
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Unvalid extension</strong>Please upload images which have (jpg, png , jpeg,) extensions .
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}



    }



    









?>