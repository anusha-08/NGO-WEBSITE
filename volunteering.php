<?php

require('db.php');

$status = "";

 if($_SERVER['REQUEST_METHOD'] =="POST" and isset($_POST['Submit']))
{

$name =$_REQUEST['fullname'];
$password =$_REQUEST['password'];
$email = $_REQUEST['email'];
$phone=$_REQUEST['phone'];
$job=$_REQUEST['job'];
$info=$_REQUEST['info'];

$ins_query="INSERT into volregister (`Name`,`Password`,`emailid`,`phone`,`help`,`reason`) values ('$name','$password','$email','$phone','$job','$info')";

mysqli_query($con,$ins_query) or die(mysqli_error($con));
     
        header("location:login.php");

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



        <!------ FORM ---->

        <!----- VOLUNTEER FORM ------->
        <div class="container" style="padding-top: 50px;">
            <div class="row">
                <div class="col-md-6">
                    <section class="box">
                        <form method="POST" style="color:white;align-content: center" name="myform" onsubmit="return validateform()">
                            <div style="width: 400px;">
                            </div>
                            <div style="padding-bottom: 18px;font-size : 24px;">Volunteer Registration</div>

                            <div style="display: flex; padding-bottom: 18px;width : 450px;">
                                <div style=" margin-left : 0; margin-right :1%; width : 49%;">Full Name<span style="color: red;"> *</span><br />
                                    <input type="text" id="data_2" name="fullname" style="width: 100%;" class="form-control" />
                                </div>
                                <div style=" margin-left : 1%; margin-right : 0; width : 49%;">Password<span style="color: red;"> *</span><br />
                                    <input type="password" id="data_3" name="password" style="width: 100%;" class="form-control" />
                                </div>
                            </div>

                            <div style="padding-bottom: 18px;">Email<br />
                                <input type="text" id="data_4" name="email" style="width : 300px;" class="form-control" />
                            </div>

                            <div style="padding-bottom: 18px;">Phone<br />
                                <input type="text" id="data_5" name="phone" style="width : 250px;" class="form-control" />
                            </div>

                            <div style="padding-bottom: 18px;">What can you help with?<br />
                                <span><input type="radio" id="data_6_0" name="job" value="Delivering flyers" /> Delivering flyers</span><br />
                                <span><input type="radio" id="data_6_1" name="job" value="Taking phone calls" /> Taking phone calls</span><br />
                                <span><input type="radio" id="data_6_2" name="job" value="Entering data" /> Entering data</span><br />
                                <span><input type="radio" id="data_6_3" name="job" value="Public relations" /> Public relations</span><br />
                                <span><input type="radio" id="data_6_4" name="job" value="Door-to-door" /> Door-to-door</span><br />
                                <span><input type="radio" id="data_6_5" name="job" value="Clerical work" /> Clerical work</span><br />
                            </div>


                            <div style="padding-bottom: 18px;">Why do you want to join our campaign?<br />
                                <textarea id="data_8" false name="info" style="width : 450px;" rows="6" class="form-control"></textarea>
                            </div>
                            <div style="padding-bottom: 18px;">
                                <input name="Submit" value="Submit" type="Submit"></div>
                            <div>
                            </div>
                        </form>
                    </section>
                </div>


                <div class="col-md-6">
                    <div class="card" style="background-color: black; color: white;width: 335px;margin-top: 285px;padding-left: 10px;
                                             margin-left: 135px;">
                        <div class="card-body">
                            <h5 class="card-title">ALREADY A VOLUNTEER?</h5>
                            <p class="card-text">Help us make progress by suggesting some events</p>
                            <a href="login.php" class="btn btn-primary">LOGIN</a>
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
                        <a href="https://mdbootstrap.com/education/bootstrap/" style="color: black">TimeToMentor.com</a>
                    </div>
                    <!-- Copyright -->

                </footer>

        <!-- Footer -->
        <script>  
            function validateform()
            {  
                var name=document.myform.fullname.value;  
                   var password=document.myform.password.value; 
                   var phone=document.myform.phone.value; 
                   var email=document.myform.email.value;
  
                  if (name==null || name=="")
                  {  
                       alert("Name can't be blank");  
                         return false;  
                   }
                   else if(password.length<6)
                   {  
                        alert("Password must be at least 6 characters long.");  
                         return false;  
                    }  
                    else if(phone.length > 10 || phone.length < 10)
                    {
                        alert("Invalid phone number");
                        return false;  
                    }
                    
            }
        </script>

</body>

</html>



