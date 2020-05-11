<?php

require('db.php');

$status = "";

 if($_SERVER['REQUEST_METHOD'] =="POST" and isset($_POST['Submit']))
{

$username =$_REQUEST['username'];
$email = $_REQUEST['email'];
$street=$_REQUEST['street'];
$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$pincode=$_REQUEST['pincode'];
$amount=$_REQUEST['amount'];

$ins_query="INSERT into donor (`Name`,`Email`,`Street`,`City`,`State`,`Pincode`,`Amount`) values ('$username','$email','$street','$city','$state','$pincode','$amount')";

mysqli_query($con,$ins_query) or die(mysqli_error($con));
     
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

    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/custom.css">


    <title>TIME TO MENTOR</title>
</head>

<body>

    <!---- NAVBAR---->

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar  ftco-navbar-light fixed-top" id="main-bar">
        <div class="container">
            <a class="navbar-brand" href="index.html">TIME TO MENTOR</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="index.html" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="donor.php" class="nav-link">Donate</a></li>
                    <li class="nav-item"><a href="volunteering.php" class="nav-link">Volunteer</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="event.php" class="nav-link">Events</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <! ---- END NAVBAR ---->


        <!----- CAROUSEL ---->
        <!---
        <header>
            <div class="header-content">
                <div class="header-content-inner">
                    <h2>Support a cause you care about</h2>
                    <p>We believe that everybody has the right to live a comfortable life.</p>
                    <a href="donate.html" class="btn btn-primary btn-lg">Engage Now</a>
                </div>
            </div>
        </header>

        <! ------- END CAROUSEL ----> --->
        <!------ FORM -------->

        <div class="container" id="beautify">
            <section class="agile-volt">
                <div class="agile-voltsub" style="color:white;">
                    <h2>HELP US</h2>
                    <form action="" method="post" name="myform" onsubmit="return validateform()">
                        <div class="agile-name">
                            <p>NAME</p>
                            <input type="text" name="username" required="" autofocus>
                        </div>
                        <div class="clear"></div>
                        <div class="agile-email">
                            <p>EMAIL</p>
                            <input type="email" name="email" required="">
                        </div>
                        <div class="clear"></div>
                        <div class="agile-address">
                            <p>STREET</p>
                            <input type="text" name="street" required="">
                        </div>
                        <div class="clear"></div>
                        <div class="agile-city">
                            <p>CITY</p>
                            <input type="text" name="city" required="" />
                        </div>
                        <div class="clear"></div>
                        <div class="agile-state">
                            <p>STATE</p>
                            <input type="text" name="state" required="">
                        </div>
                        <div class="clear"></div>
                        <div class="agile-pin">
                            <p>PINCODE</p>
                            <input type="tel" name="pincode" required="" />
                        </div>

                        <div class="clear"></div>
                        <div class="agile-work">
                            <p>Amount to donate</p>
                            <div class="agile-days">
                                <span class="Val1">
                                    <input type="radio" name="amount" value="100">Rs.100<br>
                                </span>
                                <span class="Val2">
                                    <input type="radio" name="amount" value="200">Rs.200<br>
                                </span>
                                <span class="Val3">
                                    <input type="radio" name="amount" value="300">Rs.200<br>
                                </span>
                                <span class="Val4">
                                    <input type="radio" name="amount" value="400">Rs.400<br>
                                </span>
                                <span class="Val5">
                                    <input type="radio" name="amount" value="500">Rs.500<br>
                                </span>
                                <span class="Val6">
                                    <input type="radio" name="amount" value="1000">Rs.1000<br>
                                </span>
                                <span class="Val7">
                                    <input type="radio" name="amount" value="0">Other<br>
                                </span>
                            </div>
                        </div>

                        <div class="clear" style="padding-bottom: 10px;"></div>
                        <input type="Submit" name="Submit" value="Submit" />
                    </form>
                </div>
            </section>

        </div>


        <!-------- FORM ENDS ------->


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
            function validateform()
            {  
                var name=document.myform.username.value;   
                  
                   var email=document.myform.email.value;
                   var street=document.myform.street.value;
                   var city=document.myform.city.value;
                   var state=document.myform.state.value;
                   var pincode=document.myform.pincode.value;
  
                  if (name==null || name=="")
                  {  
                       alert("Name can't be blank");  
                         return false;  
                   }
                   else if (street==null || street=="")
                  {  
                       alert("Street can't be blank");  
                         return false;  
                   }
                   else if (city==null || city=="")
                  {  
                       alert("City can't be blank");  
                         return false;  
                   }
                   else if (state==null || state=="")
                  {  
                       alert("State can't be blank");  
                         return false;  
                   }
                   else if (pincode==null || pincode=="")
                  {  
                       alert("Pincode can't be blank");  
                         return false;  
                   }
            }
        </script>
</body>

</html>
