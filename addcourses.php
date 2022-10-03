<?php

session_start();
$pagetitle = "Add Course";

require_once "includes/head.php";
include "includes/connection.php";

if(!isset($_SESSION['usern']) && !isset($_SESSION['userid'])){

    header( "Location: login.php");
}

else{ require_once "includes/head.php";

    if($_SESSION['userrole'] == '1'){  ?>


<br>
<h1 class="addtitle">Add Course Detail</h1>
<hr>


<form method="post" action="addaction.php" enctype="multipart/form-data">
    <div class="form-row input-group-prepend ">


        <div class="col-md-5 mt-2">
            
            <input type="text" class="form-control" id="formGroupExampleInput" name="course_title" placeholder="Enter Course Title Here" autocomplete="off">
        </div>
        <div class="col-md-5 mt-2">
            <input type="text" class="form-control" id="formGroupExampleInput" name="srt_desc" placeholder="Enter Short Description" autocomplete="off">
        </div>
        <div class="col-md-2 mt-2">
            <input type="text" class="form-control" id="formGroupExampleInput" name="price" placeholder="Price" autocomplete="off">
        </div>
        <div class="col-md-12 mt-2 mb-2">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="long_desc" placeholder="Long Description Of the course"></textarea>
        </div>

        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img"> <br> <br>

        <button class="btn btn-primary btn-block add-btn" type="submit" name="addcourse">Add Course</button>


    </div>
</form>



<?php

    }else{

        header("Location: index.php");
    }

}

?>





