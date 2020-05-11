<?php

require('db.php');

$status = "";

 if($_SERVER['REQUEST_METHOD'] =="POST" and isset($_POST['Submit']))
{

$username =$_REQUEST['username'];
$email = $_REQUEST['email'];
$phone=$_REQUEST['phone'];
$message=$_REQUEST['message'];
$ins_query="INSERT into contact (`Name`,`Email`,`Phone`,`Message`) values ('$username','$email','$phone','$message')";

mysqli_query($con,$ins_query) or die(mysql_error());
     
        header("location:thanks.html");

 }

?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/custom.css">

    


    <title>TIME TO MENTOR</title>
</head>

<body>

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
                    <li class="nav-item"><a href="login.php" class="nav-link" style="color:black;">Login</a></li>
                    <li class="nav-item"><a href="event.php" class="nav-link" style="color:black;">Events</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link" style="color:black;">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <! ---- END NAVBAR ---->


        <!----- HEADER ---->

        <header id="hey">
            <div class="header-content">
                <div class="header-content-inner">
                    <h2 style="color:black;">Support a cause you care about</h2>
                    <p style="color:black;">We believe that everybody has the right to live a comfortable life.</p>
                    <a href="donor.php" class="btn btn-primary btn-lg">Engage Now</a>
                </div>
            </div>
        </header>

        <! ------- END HEADER ---->

            <!------ FORM ---->

            <section id="contact">
                <div class="section-content">
                    <h2 class="section-header" style="color:white; text-align: center; font-size:35px">GET IN TOUCH WITH US</h2>
                </div>
            </section>

            <div class="container">
                <div class="row">
                    <form  method="POST">
                        <div class="col-md-6 form-line" style="padding-bottom: 20px;">
                            <div class="form-group">
                                <label for="exampleInputUsername" style="color:white">Your name</label>
                                <input type="text" class="form-control" name="username" id="" placeholder=" Enter Name" style="width:350px">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail" style="color:white">Email Address</label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail" placeholder=" Enter Email id" style="width:350px">
                            </div>
                            <div class="form-group">
                                <label for="telephone" style="color:white">Mobile No.</label>
                                <input type="tel" class="form-control" name="phone" id="telephone" placeholder=" Enter 10-digit mobile no." style="width:350px">
                            </div>
                            <div class="form-group" style="padding-bottom:20px">
                                <label for="description" style="color:white"> Message</label>
                                <textarea class="form-control" id="description" name="message" placeholder="Enter Your Message" style="width:350px"></textarea>
                            </div>
                            <div class="form-group" style="padding-bottom:20px">

                               <input type="submit" value="Submit" name="Submit">
                            </div>

                        </div>
                    </form>
                    <p><?php echo $status; ?></p>

                    <div class="col-md-6" style="padding-top: 25px; padding-left: 146px;line-height: 35px;padding-right: 0px;">
                        <div class="ftco-footer-widget mb-4">
                            <h3 class="ftco-heading-2" style="color: white;text-align: center; padding-top: 50px;padding-left: 33px;">HAVE QUESTIONS?</h3>
                            <div class="block-23 mb-3" style="text-align: center;">
                                <ul style="line-height: 0px;">
                                    <li><span class="icon icon-map-marker" ></span><span class="text" style="color:yellowgreen;">
                                            <p>818 2nd Cross 16th Main </p>BOB Colony 7th Phase JP Nagar <p style="padding-top: 15px;">Bangalore 560 078</p></span></li>
                                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">
                                                <p style="padding-top: 25px;">+91 911 383 5389</p>
                                            </span></a></li>
                                    <li><a href=""><span class="icon icon-envelope"></span><span class="text">
                                                <p> info@timetomentor.com</p>
                                            </span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-----FORM ENDS--->




            <!-----FOOTER START------->


           <!-- Footer -->
                <footer class="page-footer font-small indigo">

                    <!-- Footer Links -->
                    <div class="container">

                        <!-- Grid row-->
                        <div class="row text-center d-flex justify-content-center pt-5 mb-3">

                            <!-- Grid column -->
                            <div class="col-md-2 mb-3">
                                <h6 class="text-uppercase font-weight-bold">
                                    <a href="index.html" style="color:black">About us</a>
                                </h6>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2 mb-3">
                                <h6 class="text-uppercase font-weight-bold">
                                    <a href="donor.php" style="color:black">Donate</a>
                                </h6>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2 mb-3">
                                <h6 class="text-uppercase font-weight-bold">
                                    <a href="event.php" style="color:black">Events</a>
                                </h6>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2 mb-3">
                                <h6 class="text-uppercase font-weight-bold">
                                    <a href="login.php" style="color:black">Login</a>
                                </h6>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2 mb-3">
                                <h6 class="text-uppercase font-weight-bold">
                                    <a href="contact.php" style="color:black">Contact</a>
                                </h6>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row-->
                        <hr class="rgba-white-light" style="margin: 0 15%;">

                        <!-- Grid row-->
                        <div class="row d-flex text-center justify-content-center mb-md-0 mb-4" id="new">

                            <!-- Grid column -->
                            <div class="col-md-8 col-12 mt-5">
                                <p style="line-height: 1.7rem">Join hands with us and help people around the country live an healthy and dignified life.
                                </p>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row-->
                        <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

                        <!-- Grid row-->
                        <div class="row pb-3">

                            <!-- Grid column -->
                            <div class="col-md-12">

                                <div class="mb-5 flex-center">
                                </div>

                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row-->

                    </div>
                    <!-- Footer Links -->

                    <!-- Copyright -->
                    <div class="footer-copyright text-center py-3">© 2018 Copyright:
                        <a href="https://mdbootstrap.com/education/bootstrap/" style="color: black"> TimeToMentor.com</a>
                    </div>
                    <!-- Copyright -->

                </footer>
            <!-- Footer -->
     
<script>
    $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
          $(".navbar-fixed-top").css("background-color", "#f8f8f8"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
        } else {
          $(".navbar-fixed-top").css("background-color", "transparent"); // if not, change it back to transparent
        }
      });
    });
</script>
</body>

</html>



