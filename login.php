

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/full-stack/css/signup.css">
    <title>login</title>
</head>

<body>



    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="signup.php">Signup</a></li>
            <li class="breadcrumb-item active" aria-current="page">login</li>
        </ol>
    </nav>

    <!-- creating Sign up form -->

 

    <div class="container">
        <div class="myCard">
            <div class="row">
                <div class="col-md-6">
                    <div class="MyLeftCtn">


                        <form action="logaction.php" class="myform text-center" method="post">
                            <header>Login</header>
                            <div class="FormGroup">
                                <i class="fas fa-user"></i>
                                <input type="text" name="username" class="MyInput" placeholder="Username" id="username" required>
                            </div>
                            <div class="FormGroup">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="pass" class="MyInput" placeholder="Password" id="Password" required>
                            </div>
                            <button class="btn btn-primary log_btn" type="submit" name="login">Login</button>
                        </form>




                    </div>
                </div>
                <div class="col-md-6">
                    <div class="myRightCtn">
                        <div class="box">
                            <header>Login Form</header>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit sint aperiam officia blanditiis soluta,
                                 deleniti, enim adipisci voluptates aut fugit necessitatibus laboriosam culpa voluptatum ex dicta porro esse ullam maiores!
                                Porro labore tempora possimus explicabo natus necessitatibus beatae fugiat quod iusto. 
                                Excepturi perspiciatis nihil expedita iusto quae necessitatibus, voluptas facilis ipsam temporibus optio. 
                                Accusamus officiis maxime molestias enim impedit. Imtiyaj</p>
                            <button class="btn btn-secondary">Learn more</button>
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