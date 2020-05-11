<?php
    require('db.php');
    session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username']))
    {
        
        $username = stripslashes($_REQUEST['username']); // removes backslashes
        $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        
    //Checking is user existing in the database or not
        $query = "SELECT * FROM `volregister` WHERE Name='$username' and Password='$password'";
        $result = mysqli_query($con,$query) or die(mysqli_error());

        $rows = mysqli_num_rows($result);
          if($rows==1)
        {
            session_start();
            $_SESSION['username']=$username;
            header("Location: choose.php"); // Redirect user to choose.php
        }

           else
           {
                echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
            }
    }

    else
    {
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/custom.css">



    <title>TIME TO MENTOR</title>
</head>

<body style="background-color:yellowgreen;">

    <!---- NAVBAR---->

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar  ftco-navbar-light fixed-top" id="main-bar">
        <div class="container">
            <a class="navbar-brand" href="index.html" style="color:black;">TIME TO MENTOR</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.html" class="nav-link" style="color:black;">Home</a></li>
                    <li class="nav-item"><a href="index.html" class="nav-link" style="color:black;">About</a></li>
                    <li class="nav-item"><a href="donor.php" class="nav-link" style="color:black;">Donate</a></li>
                    <li class="nav-item"><a href="volunteering.php" class="nav-link" style="color:black;">Volunteer</a></li>
                    <li class="nav-item"><a href="event.php" class="nav-link" style="color:black;">Events</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link" style="color:black;">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <! ---- END NAVBAR ---->

        <!----- LOGIN -------->

        
        <div class="container" style="padding-top: 35px;">
            <div class="row">
                <div class="col-md-6">
                    <section class="box3" data-aos="zoom-in-up">
                        <form method="post" action="" style="color:white;align-content: center">
                            <div style="width: 400px;">
                            </div>
                            <div style="padding-bottom: 18px;font-size : 24px;">LOGIN</div>


                            <div style=" margin-left : 0; margin-right :1%; width : 65%;">Username<span style="color: red;"> *</span><br />
                                <input type="text" name="username" style="width: 100%;" required /><br>
                            </div>
                            <div style=" margin-left : 0; margin-right : 0; width : 65%;">Password<span style="color: red;"> *</span><br />
                                <input type="password" name="password" style="width: 100%;" required />

                            </div>
                            <input type="submit" value="Submit" style="margin-top: 15px;" required />
                            <div style="margin-top: 10px;">
                                <p>Not registered yet? <a href='volunteering.php'>Register Here</a></p>
                            </div>


                </div>
                </form>
                </section>
            </div>
        </div>
        </div>


        <!------- end login ----->

        <script>
            AOS.init();

        </script>


        <?php } ?>
</body>

</html>
