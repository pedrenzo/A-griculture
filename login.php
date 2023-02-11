<?php
include 'controller/db_connection.php';
?>


<!DOCTYPE html>
<html>
<head>
    <title>Log In</title>
</head>
<body>
    <form action='controller/login_user.php' method="POST">
        <input type="text" name="email" placeholder="Input Email"/>
        <input type="text" name="password" placeholder="Input Password"/>
        <input type="submit" name="submit" value="LOGIN">
    </form>
</body>
</html>