<?php
    $status = "";
    if(isset($_POST["signup"])){
        require "./connect.php";
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $role = $_POST['user_type'];

        $hash = password_hash($password,algo:PASSWORD_DEFAULT);
        $insert_sql = "INSERT INTO `employee`(`Username`, `Email`, `Password`, `User_Status`) VALUES ('$username','$email','$hash','$role')";
        if(mysqli_query($conn, $insert_sql)){
            $status = "Success";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <form action="Signup.php" method="post">
        <h2>Sign In</h2>
            <div class="container">
                <label for="Username">Username</label>
                <input type="text" name="username" id="username">
                <span style ="color:red;"><?php $nameError ?></span>
            </div>
                <div class="container">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email">
                </div>
            <div class="container">
                <label for="Password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="container">
                <label for="Password">Confirm Password</label>
                <input type="password" name="password_con" id="password_con">
            </div>
            <div class="container">
                <label for="select">Select user type</label>
                <select name="user_type" id="user_type">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div class="container_but">
                <input type="submit" value="Sign up" name = signup>
                <span style ="color:green;"><?php echo $status ?></span>
            </div>
    </form>
</body>
</html>