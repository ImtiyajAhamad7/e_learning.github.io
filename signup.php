<?php
session_start();
?>
<?php

echo '
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="login.php">login</a></li>
        <li class="breadcrumb-item active" aria-current="page">Signup</li>
    </ol>
</nav>
';

?>

<!-- php code -->

<!-- php ends here -->











<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/full-stack/css/signup.css">
    <title>SignUp</title>
</head>

<body>

    <!-- breadcrumb -->




    <div class="container">
        <div class="myCard">

            <div class="row">
                <div class="col-md-6">
                    <div class="MyLeftCtn">


                        <form action="signupaction.php" class="myform text-center" method="post">

                            <header>Create New Account</header>


                            <div class="FormGroup">
                                <i class="fas fa-user"></i>
                                <input type="text" name="username" class="MyInput" placeholder="Username" id="username" required>


                            </div>


                            <div class="FormGroup">
                                <i class="fas fa-at"></i>
                                <input type="email" name="email" class="MyInput" placeholder="Email" id="mail" required>


                            </div>


                            <div class="FormGroup">
                                <i class="fas fa-phone-square-alt"></i>
                                <input type="text" name="number" class="MyInput" placeholder="Mobile Number" id="MobileNumber">


                            </div>


                            <div class="FormGroup">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="pass" class="MyInput" placeholder="Password" id="Password" required>


                            </div>


                            <div class="FormGroup">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="cpass" class="MyInput" placeholder="confirm Password" id="Password" required>


                            </div>



                            <div class="FormGroup">
                                <label for="#">
                                    <input id="check_1" name="check_1" type="checkbox" required><small>
                                        I read and agree to terms & conditions
                                    </small>
                                    <div class="invalid-feedback">
                                        You must check this box
                                    </div>
                                </label>
                            </div>

                            <button class="btn btn-primary" type="submit" name="submit">Create Account</button>
                        </form>






                    </div>
                </div>
                <div class="col-md-6">
                    <div class="myRightCtn">
                        <div class="box">
                            <header>Terms and conditions</header>
                            <p>This is our terms and condition plese read carefully .</p>
                            <button class="btn btn-secondary" action="#">Terms & condition</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</body>

</html>