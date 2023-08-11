<!DOCTYPE html>
<html>
<head>
    <title>Login for Contact us</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="login-container">
        <h1 class="login-title">Admin Only Login</h1>
        <form action="authenticate.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login"><br><br>
        <a href="../index.html" class="home-link">
        <span class="home-icon">🏠</span> Back to Home
            </a>

    </form>
    </div>
</body>
</html>
