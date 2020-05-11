<?php

    require('db.php');
    session_start();

    if(isset($_SESSION['username'])) 
  {

     $username=$_SESSION['username'];
  }
            
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
        <div class="row" style="margin-top: 60px;"" >
            <div class="col-md-12" style="text-align:center;">
        <h2><?php echo "Welcome $username !";?></h2>
        <p style="font-size:30px;"> What do you wish to do today? </p>
    </div>
    </div>
        <div class="container" style="padding-top: 35px;  ">
            <div class="row">
                <div class="col-md-6" style="padding-right: 50px; padding-left: 50px;">
                     <div class="card" style="margin-top: 100px;" data-aos="zoom-in-up">
                                <div class="card-body" style="background-color: black; color:white;">
                                    <h5 class="card-title">Donors List</h5>
                                    <p class="card-text">Check the latest donations made to the NGO and get in touch with the donors</p>
                                    <a href="list.php" class="btn btn-primary " style="font-size: medium; color:black;">LIST</a>
                                </div>
                     </div>
                 </div>

                <div class="col-md-6" style="padding-right: 50px; padding-left: 50px;">
                     <div class="card" style="margin-top:100px;" data-aos="zoom-in-up">
                                <div class="card-body" style="background-color: black; color:white;">
                                    <h5 class="card-title">Suggest Ideas</h5>
                                    <p class="card-text">Have an idea to promote our motto ? Share with us and we'll help you turn it into reality</p>
                                    <a href="suggest.php" class="btn btn-primary " style="font-size: medium; color:black;">SUGGEST</a>
                                </div>
                     </div>

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


</body>

</html>