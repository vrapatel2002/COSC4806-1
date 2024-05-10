<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vratik</title>
</head>
<body> 
    <h1> Assignment 1</h1>
    <p> Welocme, <?=$_SESSION['username']?></p>
    <p> <a href="/login.php">Click here to login</a></p>
</body>
</html>