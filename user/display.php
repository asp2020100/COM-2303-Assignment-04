<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <h3> User Data Display Page</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>User Email</th>
            <th>User Password</th>
        <tr>
            <?php include 'display.inc.php'; ?>
            
        </table>
        <script src="script.js"></script>
        
</body>
</html>