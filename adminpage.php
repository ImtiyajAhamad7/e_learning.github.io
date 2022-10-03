<?php 

//   session_start();
  $pagetitle = "Admin Page";
require_once "includes/head.php";
require_once "includes/connection.php";

if(!isset($_SESSION['usern']) && !isset($_SESSION['userid'])){

    header( "Location: login.php");
}

 else{ //require_once "includes/head.php";

    if($_SESSION['userrole'] == '1'){  ?>

<br><br><br>
<div class="container text-center">
    <h1 class="py-3px">Courses</h1>
</div>

<div class="container menu">
    <hr>
    <div class="container">
        <form action="addaction.php" method="$_POST">
            <table class="table table-active table-hover table-responsive-sm table-bordered">
                <thead class="thead-dark">

                    <tr>
                        <th><?php echo "id"; ?></th>
                        <th>Course</th>
                        <th>price</th>
                        <th>image</th>
                        <th>Update Course</th>
                    
                        <th>Delete Course</th>
                    </tr>

                </thead>


                <tbody> <?php

                        $displayquery = "select * from courses";
                        $querydisplay = mysqli_query($conn, $displayquery);

                    

                        while ($result = mysqli_fetch_array($querydisplay)) {

                        ?>
                        <tr>

                            <td> <?php echo $result['id']; ?> </td>
                            <td><?php echo $result['course_title']; ?></td>
                            <td><?php echo $result['price']; ?></td>
                            <td><img src=" <?php echo $result['img']; ?>" alt="image" height="70px" width="70px"></td>
                            <td>
                                <a href="updatecourse.php?cid=<?php echo $result['id']; ?>" type="button" class="btn btn-warning">Update</a>
                            </td>
                            <td>
                                <a href="dltpage.php?cid=<?php echo $result['id']; ?>" type="button" class="btn btn-danger">Delete</a>
                            </td>


                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a class="btn btn-primary btn-lg btn-block mt-3 mb-3" href="addcourses.php">Add Courses</a>
        </form>
    </div>

</div>


<?php

    }else{

        header("Location: index.php");
    }

}

?>