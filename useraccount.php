<?php
include "includes/connection.php";
include "includes/links.html";
?>



<?php $pagetitle = "Account"; ?>


<form action="useraction.php" method="post">
    <?php
session_start();
    if(isset($_SESSION['usern'])){

    
    $crsid = $_GET['fetchuid'];
    $displayquery = "select * from imtiyaj_ahamad_user_table  WHERE id = $crsid";
    $querydisplay = mysqli_query($conn, $displayquery);



    while ($result = mysqli_fetch_assoc($querydisplay)) {

    ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            </ol>
        </nav>

        <div class="container-fluid">
    <h3 class="uyah">Update Account</h3>
</div>

        

            <input type="hidden" name="usrid" value="<?php echo $result['id']; ?>" class="form-control" id="inputEmail4">


            <div class="form-col" mt-20>
                <div class="form-group col-12 col-sm-6 col-xl-4 col-md-6 col-xl-3">
                    <label for="inputEmail4">Name</label>
                    <input type="text" name="name" value="<?php echo $result['name']; ?>" class="form-control" id="inputEmail4">
                </div>

                <div class="form-col" mt-20>
                    <div class="form-group col-12 col-sm-6 col-xl-4 col-md-6 col-xl-3">
                        <label for="inputEmail4">email</label>
                        <input type="email" name="email" value="<?php echo $result['email']; ?>" class="form-control" id="inputEmail4">
                    </div>

                    <div class="form-col" mt-20>
                        <div class="form-group col-12 col-sm-6 col-xl-4 col-md-6 col-xl-3">
                            <label for="inputEmail4">mobile</label>
                            <input type="text" name="number" value="<?php echo $result['mobile']; ?>" class="form-control" id="inputEmail4">
                        </div>

                        <div class="form-col" mt-20>
                            <div class="form-group col-12 col-sm-6 col-xl-4 col-md-6 col-xl-3">
                                <label for="inputEmail4">password</label>
                                <input type="text" name="upass" value="<?php echo $result['password']; ?>" class="form-control" id="inputEmail4">
                            </div>


                            <div class="form-col" mt-20>
                                <div class="form-group col-12 col-sm-6 col-xl-4 col-md-6 col-xl-3">



                                    <input type="hidden" value="<?php echo $result['id']; ?>" class="form-control" id="">
                                </div>



                                <button class="btn btn-primary" type="submit" name="done">Update</button>


                            </div>





                        <?php } 
                        
                    } //end of first if condition  
                    
                    
                    else{

                        header("Location: login.php");
                    }?>
         



</form>