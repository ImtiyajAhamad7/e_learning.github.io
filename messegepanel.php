<?php

//   session_start();
$pagetitle = "Messege";
require_once "includes/head.php";
require_once "includes/connection.php";

if (!isset($_SESSION['usern']) && !isset($_SESSION['userid'])) {

    header("Location: login.php");
} else {

    if ($_SESSION['userrole'] == '1') {  ?>

        <br><br><br>
        <div class="container text-center">
            <h1 class="py-3px">User Messeges</h1>
        </div>

        <div class="container menu">
            <hr>
            <div class="container">

                <table class="table table-active table-hover table-responsive-sm table-bordered">
                    <thead class="thead-dark">

                        <tr>
                            <th><?php echo "id"; ?></th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Messege</th>


                            <th>Delete Messege</th>
                        </tr>

                    </thead>


                    <tbody> <?php

                            $displayquery = "select * from imtiyaj_ahamad_contact_table";
                            $querydisplay = mysqli_query($conn, $displayquery);



                            while ($result = mysqli_fetch_array($querydisplay)) {

                            ?>
                            <tr>

                                <td> <?php echo $result['id']; ?> </td>
                                <td><?php echo $result['name']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php echo $result['messege']; ?>
                               <td><a class="btn btn-danger" href="dltmsg.php?muisd=<?php echo $result['id']; ?>">Delete</a></td>


                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>

        </div>


<?php

    } else {

        header("Location: index.php");
    }
}

?>