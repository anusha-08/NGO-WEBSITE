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

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light fixed-top" id="main-bar">
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

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 3px solid white;
  text-align: left;
  padding: 8px;
  color: white;
}

tr:nth-child(even) {
  background-color: black;
  color: white;
}
</style>
<div class="container" style="margin-top: 110px;background-color: black;padding-top: 10px;padding-bottom: 20px;">
<h3 style="color: white;">List of donors</h3>
<?php
echo '<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>City</th>
    <th>State</th>
     <th>Amount</th>
  </tr>
  <tr>';

require('db.php');

$status = "";

$sql = "SELECT Name,Email,City,State,Amount FROM `donor`";
$result = mysqli_query($con,$sql);
$rows = mysqli_num_rows($result);

if ($rows > 0) 
{
  // output data of each row
while($row = mysqli_fetch_array($result)) 
{
  echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Email"] . "</td><td>"
 . $row["City"]. "</td><td>" . $row["State"]. "</td><td>" . $row["Amount"] . "</td></tr>";
}
echo "</table>";
} 
?>

</div>
</div>

 
    </body>
</html>