<?php 
  
  include "includes/links.html";


?>

<?php
if(isset($_POST['login'])){

    include "includes/connection.php";

    $username =  $_POST['username'];
    $password = $_POST['pass'];


    $sql = "SELECT * FROM imtiyaj_ahamad_user_table WHERE name = '$username' AND password = '$password' ";

    $result = mysqli_query($conn, $sql) or die("Query failed.");

    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_assoc($result)){

            session_start();

            $uname = $row["name"];
            $uid = $row["id"];

            $_SESSION['usern'] =  $row["name"];
            $_SESSION['userid'] =  $row["id"];
            $_SESSION['userrole'] =  $row["role"];
            $_SESSION['loginsts'] =  true;




            


            header("Location: index.php?isd=$uid");

        }

    }else{

        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Username and Password not matched!</strong> Please try again.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';

      header( "Refresh:3; url=login.php", true, 303);
    }

}


?>