<?php require_once 'cont.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Page</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <div class="bg-img">
        <div class="content">
            <header>Rest Your Password</header>
            <form action="forgot_password.php" method="POST">
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="email" placeholder="email" name="email" required>
                </div>
               
                <button type="submit" name="forgot-password" class="btnlog">Submit</button><br><br>
                

            </form>
        </div>
    </div>
</body>

</html>