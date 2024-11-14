<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
        <form action="" method="post">
            <h2>Login</h2>
            <div class="container">
            <label for="Username">Username</label>
            <input type="text" name="username" id="username">
            </div>
            <div class="container">
                <label for="Password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="container_rem">
                <input type="checkbox" name="remember" id="remember">
                <p>Remember Password</p>
            </div>
            <div class="container_rem">
                <a href="#">Forgot Password</a>
            </div>
            <div class="container_but">
                <input type="submit" value="submit">
            </div>
        </form>

</body>
</html>