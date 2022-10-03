<?php


include "includes/links.html";


if(isset($_POST["submit"])){

  include "includes/connection.php";

  $username = $_POST['username'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $password = $_POST['pass'];
  $cpassword = $_POST['cpass'];
  $role = 2;
  

  

  $query = "SELECT * FROM imtiyaj_ahamad_user_table WHERE email = '$email'";

  $res = mysqli_query($conn, $query);
  echo mysqli_error($conn);

  $emailcount = mysqli_num_rows($res);

  if($emailcount > 0){

    echo "email already exist";
    
  }

  else{

    if($password === $cpassword){
      
      


      $inserting = "insert into imtiyaj_ahamad_user_table(name, password, email, mobile, role) values ('$username','$password','$email','$number','$role')";

      
      $insertdata = mysqli_query($conn, $inserting);

      echo mysqli_error($conn);

      if($insertdata){

        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Signup Successfully</strong> Login to continue.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    
    header("refresh:3; url = login.php");

    

      }

      else{

        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Signup Failed</strong> Query not executed.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>'; 
        
      }

      
     
    }
 else{
   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>Password not matched</strong> Please enter password carefully.
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>';


 }

 
    
  }


}

?>