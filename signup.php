<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <div class="bg-img">
        <div class="content">
            <header>Register Here</header>
            <form action="registeration.php" method="POST">
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" placeholder="username" name="user" required>
                </div>
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" placeholder="password" name="password" required>
                </div>
                <div class="field space">
                    <span class="fa fa-user"></span>
                    <input type="email" placeholder="email" name="email" required>
                </div>
                <div class="field space">
                    <span class="fa fa-user"></span>
                    <input type="mobile" placeholder="moibleNo." name="mobile" required>
                </div>



                <button type="submit" class="btnlog">Register</button><br><br>
                <a href="login.php" class="btn">LOGIN</a>

            </form>
        </div>
    </div>
</body>

</html>