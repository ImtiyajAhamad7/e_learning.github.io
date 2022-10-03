<?php require_once "includes/connection.php";
       
       require_once "includes/links.html";
?>

<?php

if(isset($_POST['sendmsg'])){

    $msgnm = $_POST['mname'];
    $msmail = $_POST['mmail'];
    $msmsg = $_POST['mmsg'];

    $qr = "INSERT INTO imtiyaj_ahamad_contact_table(name, email, messege) values ('$msgnm','$msmail','$msmsg')";

    $mqr = mysqli_query($conn, $qr);

    if($mqr){

        echo '<div class="alert alert-success" role="alert">
       Thank For contacting us.
      </div>';

    }

    header("refresh:2;url=index.php");
}

?>

<nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            </ol>
        </nav>

<br><br>

<?php 

session_start();
if(!empty($_SESSION['usern'])){ 
    
   
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>

<div class="container"><h3 class="text-center">Contact Form</h3></div>
    


<form method="post" action="contact.php">



<div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" class="form-control" name="mname" id="exampleFormControlInput1" placeholder="Name" autocomplete="off">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="email" name="mmail" class="form-control" id="exampleFormControlInput1" placeholder="Email" autocomplete="off">
  </div>
  
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Messege</label>
    <textarea class="form-control" name="mmsg" id="exampleFormControlTextarea1" rows="4" placeholder="describe your query here"></textarea>
  </div>

  <div class="form-group">
  <button class="btn btn-primary" name="sendmsg">Sumbit</button>    
  <div>


</form>

<?php }else{
    header("Location: login.php");
} ?>



<?php include "includes/footer.php"; ?>