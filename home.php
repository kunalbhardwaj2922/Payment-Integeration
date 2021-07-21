<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top ">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                <a class="navbar-brand" href="home.php">Health Care</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="patient.php"><span class="glyphicon glyphicon-pencil"></span> Online Form</a></li>
                    <li><a href="appointment.php"><span class="glyphicon glyphicon-time"></span> Appointment</a></li>
                    <li><a href="service.php"><span class="glyphicon glyphicon-gift"></span> Services</a></li>
                    
                    
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="heading"><h1>"Welcome <?php echo $_SESSION['username']; ?> to  Online HealthCare Center"</h1></div>
    <div id="home">
    <div class="container">
            <div class="row">
                <div class="text-center">
                    <div class="col-md-12 col-sm-0">

                        <h3 style="color: crimson;">+91 959 603 6035</h3>
                        <p class="head">Need professional help? Our support staff..</p>
                        <p class="head">Call us Now!</p>
                        <p><strong>OR</strong></p>

                        <button class="btn "><a href="contact.php">Click Here</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section">
        <div class="container">
            <h2><strong>"We Provides..........Everything"</strong></h2>
            <div class="res">
                <div class="text-center">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="t2.jpg" alt="Responsive image">
                            <h3>Consultation</h3>
                            <p style="font-family: cursive;">“We believe health technologies,have the potential to strengthen the patient-physician connection ”</p>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 ">
                        <div class="thumbnail">
                            <img src="t4.jpg" alt="Responsive image">
                            <h3>Medicines</h3>
                            <p style="font-family: cursive;">“Flowers always make people better, and more helpful; they are sunshine, food and medicine to the mind.”</p>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="t3.jpg" alt="Responsive image">
                            <h3>Hospitalization</h3>
                            <p style="font-family: cursive;">The hospital that feeds you refined sugar, white bread, canned soup, bouillon cubes etc.</p>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="t5.jpg" alt="Responsive image">
                            <h3>Fitness Training</h3>
                            <p style="font-family: cursive;">"Yoga is the journey of the self, through the self, to the self." -- The Bhagavad Gita

                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <h4>“Copyright © Health Care Center. All Rights Reserved” and “Contact Us:+91 959 603 6035 ”</h4>
    </div>





</body>

</html>