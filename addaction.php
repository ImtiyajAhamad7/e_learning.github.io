<?php

include "includes/connection.php";

if(isset($_POST["addcourse"])){

    
    $title = $_POST["course_title"];
    $short_description= $_POST["srt_desc"];
    $long_description  = $_POST["long_desc"];
    $price = $_POST["price"];

    if(isset($_FILES['img'])){
        $file_name = $_FILES['img']['name'];
        $file_size = $_FILES['img']['size'];
        $file_tmp = $_FILES['img']['tmp_name'];
        $file_type = $_FILES['img']['type'];

        $fileext = explode('.',$file_name);
        $filecheck = strtolower(end($fileext));

        $fileextstored = array('png', 'jpg', 'jpeg');

        if(in_array($filecheck, $fileextstored)){

            $destinationfile = 'assests/photos/'. $file_name;
            move_uploaded_file($file_tmp,$destinationfile );
        }else{
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Unvalid extension</strong>Please upload images which have (jpg, png , jpeg,) extensions .
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
        

    }

    $sql = "INSERT INTO `courses` ( course_title, short_desc, price, long_desc, img ) VALUES ( '$title', '$short_description', '$price', '$long_description', '$destinationfile')";
    $result = mysqli_query($conn, $sql);

}
header( "Refresh:3; url=adminpage.php", true, 303);
?>
