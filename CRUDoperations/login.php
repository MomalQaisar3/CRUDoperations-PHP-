<?php
// print_r($_GET);
$username = $_GET['username'];
$password = $_GET['password'];

if ($username == 'admin' && $password == 'test') {

    header('Location: dashboard.php');
    exit;

} else {
    if (!empty($_GET)) {
        //echo "Username and Password is wrong";
    }

}

// print($username);
// print($password);
// exit;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUDwebsite</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="loginform">
        <h1>LOGIN FORM</h1>
        <form name="form">
            <label>Username:</label>
            <input type="text" name="username" required><br><br>
            <label>Password:</label>
            <input type="password" name="password" required><br><br>
            <input type="submit" id="btn" value="Login">
        </form>
    </div>
</body>
</html>