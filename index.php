<?php
session_start();
     
    include("connection.php");
    include("functions.php");
    //if user is not logged in they will be redirected to login page
    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
    <title>rfdl</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="main">
    <div class="navbar">
    <div class="icon">
    <h2 class="logo">RFDL</h2>
    </div>
    <div class="menu">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="introduction.php">INTRODUCTION</a></li>
            <li><a href="v-meets.php">VIEW MEETS</a></li>
            <li><a href="ied.php">JOIN MEETS</a></li>
            <li><a href="logout.php">LOGOUT <?php echo $user_data['user_name']; ?></a></li>
        </ul>
    </div>
   
            
        <div class="content">
        <h1><br><br><br><span>Ride Fast</span>Die Last</h1>
        <p class="par">Welcome to RFDL, we are a motorbike group who are all about going fast<br><br></p>
        </div>
        <div>
        <img class="img-wheelie" src="images/Background2.jpg" alt="wheelie">
            
            <p1><br>There is a grey blur, and a green blur.I try to stay on grey one </p1>       <p2> - Joey Dunlop - </p2>
        
        </div>
</body>
</html>
