<?php
    //!include 'connection.php';//
    require_once("connection.php");
    $query = "SELECT * FROM `students`";
    //$result = mysqliquery($con,$query);
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<body>
    <div id="dash">
        <h1>Welcome To The Dashboard</h1>
        <div class="showtable">
            <table>
            <tr>
                <td>ID</td>
                <td>Roll</td>
                <td>Name</td>
                <td>Semester</td>
                <td>City</td>
            </tr>
            <tr>
                <td>1</td>  
                <td>8</td>
                <td>Momal Qaisar</td>
                <td>5</td>  
                <td>Gujrat</td>
            </tr>
            </table>
            
        </div>

    </div>  
</body>
</html>