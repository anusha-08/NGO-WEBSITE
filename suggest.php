<?php

require('db.php');

$status = "";
session_start(); //starts all the sessions 
if($_SESSION['username']!= NULL) 
{

 if($_SERVER['REQUEST_METHOD'] =="POST" and isset($_POST['Submit']))
{

$name = $_SESSION['username'];

$eventname =$_REQUEST['eventname'];
$eventloc =$_REQUEST['eventloc'];
$date = $_REQUEST['date'];
$time=$_REQUEST['time'];
$desc=$_REQUEST['desc'];

$id="SELECT vid FROM `volregister` WHERE Name='$name'";
$result = mysqli_query($con,$id) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);

$ins_query="INSERT into events (`volid`,`eventname`,`eventloc`,`edate`,`etime`,`description`) values ('$row[0]','$eventname','$eventloc','$date','$time','$desc')";

mysqli_query($con,$ins_query) or die(mysqli_error($con));
     
        header("location:thanks.html");
}
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
                    <li class="nav-item"><a href="choose.php" class="nav-link" style="color:black;">Dashboard</a></li>
                    <li class="nav-item"><a href="event.php" class="nav-link" style="color:black;">Events</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link" style="color:black;">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <! ---- END NAVBAR ---->



        <!------ FORM ---->

        <div class="container" style="padding-top: 50px;">
            <section class="box4" data-aos="zoom-in-up">
                <form method="POST" style="color:white;align-content: center" name="myform" onsubmit="return validateform()">
                    <div style="width: 400px;">
                    </div>
                    <div style="padding-bottom: 18px;font-size : 24px;">Events Suggestion</div>
                    <div style="display: flex; padding-bottom: 18px;width : 450px;">
                        <div style=" margin-left : 0; margin-right :1%; width : 49%;">Event name<span style="color: red;"> *</span><br>
                            <input type="text" id="data_2" name="eventname" style="width: 100%;" class="form-control" />
                        </div><br>
                    </div>
                    <div style="display: flex; padding-bottom: 18px;width : 450px;">
                        <div style=" margin-left : 0; margin-right : 0; width : 49%;">Event Location<span style="color: red;"> *</span><br>

                            <input list="locations" id="data_3" name="eventloc" style="width: 100%;" class="form-control" />
                            <datalist id="locations">
                                <option value="Whitefield">
                                <option value="Marthahalli">
                                <option value="Jayanagar">
                                <option value="J P Nagar">
                                <option value="M G Road">
                                <option value="Malleshwaram">
                            </datalist>

                        </div>
                    </div>

                    <div style="padding-bottom: 18px;">Date<br />
                        <input type="date" id="data_4" name="date" style="width : 200px;" class="form-control" />
                    </div>

                    <div style="padding-bottom: 18px;">Time<br />
                        <input type="time" id="data_5" name="time" style="width : 250px;" class="form-control" />
                    </div>

                    <div style="padding-bottom: 18px;">Description<br />
                        <textarea id="data_8" false name="desc" style="width : 450px;" rows="6" class="form-control"></textarea>
                    </div>
                    <div style="padding-bottom: 18px;">
                        <input name="Submit" value="Submit" type="Submit"></div>
                </form>
            </section>
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
            function validateform()
            {  
                var name=document.myform.eventname.value;  
                var loc=document.myform.eventloc.value;
                   var date=document.myform.date.value; 
                   var time=document.myform.time.value; 
                   
  
                  if (name==null || name=="")
                  {  
                       alert("Event Name can't be blank");  
                         return false;  
                   }
                   else if (date==null || date=="")
                  {  
                       alert("Date can't be blank");  
                         return false;  
                   }
                    
                  else if (time==null || time=="")
                  {  
                       alert("Time can't be blank");  
                         return false;  
                   }
                   else if (loc==null || loc=="")
                  {  
                       alert("Event Location can't be blank");  
                         return false;  
                   }
            }
        </script>

        <script>
            AOS.init();

        </script>
</body>

</html>
