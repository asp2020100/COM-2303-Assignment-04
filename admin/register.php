<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YP | Register</title>
</head>
<body>
    <from method="post" action="register_action.php">
        <h2> YP | Register </h2><br>
        <input type="text" name="name" placeholder="Name"><br><br>
        <input type="text" name="email" placeholder="Email"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="password" name="confirm_password" placeholder="Confirm Password"><br><br>
        <input type="submit" name="register" value="Register"><br><br>
        <p>Already have an account? <a href="login.php">Login</a></p>
        </from>
</body>
</html>