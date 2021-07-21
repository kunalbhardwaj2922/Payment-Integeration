<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="contact.css">
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
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
    <br><br>
    <div class="container">
    <div class="col-md-6">
        <h2>Fill the Appointment Form</h2>
        <form action="appoint.php" method="POST">
            <div class="form-group">
                <label>Full-Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Sex</label>
                <input type="text" name="sex" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Age</label>
                <input type="number" name="age" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Mobile No.</label>
                <input type="phone" name="mobile" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label>Problems According To Patient</label>
                <input type="text" name="diseases" class="form-control" >
            </div>
            <div class="form-group">
                <label>Symptoms/Duration</label>
                <input type="text" name="symptoms" class="form-control" required>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Get Appointment</button>

        </form>
    </div>
    </div>



</body>

</html>