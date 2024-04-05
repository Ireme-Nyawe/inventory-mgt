<?php
session_start();
require("../connection.php");
if(!isset($_SESSION['user'])){
header("location:../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div class="menu">
    <ul>
        <li>
            <a href="add-employee.php">Add Employee</a>
        </li>
        <li>
            <a href="add-employee.php">Report</a>
        </li>
        <li>
            <a href="../logout.php">Logout</a>
        </li>
    </ul>
   </div> 
</body>
</html>