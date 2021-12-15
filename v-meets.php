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
    <title>View Events</title>
    <link rel="stylesheet" type="text/css" href="table.css">
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
            <li><a href="ied.php">JOIN MEETS </a></li>
            <li><a href="logout.php">LOGOUT <?php echo $user_data['user_name']; ?></a></li>
        </ul>
    </div>
    <div>
        <table class="TBL">
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Attending</th>
                <th>Delete</th>
                
                
            </tr>
       
    
<?php
        
$con1 = mysqli_connect('localhost', 'root', '', 'events');
    
mysqli_select_db($con1, 'events');
        $sqli = "SELECT * FROM event";
        $result1 = mysqli_query($con1, $sqli);
        
        if (mysqli_num_rows($result1) > 0){
            while ($row1 = mysqli_fetch_assoc($result1)){
                echo "
                <tr>
                <td>".$row1["name"]."</td>
                <td>".$row1["event"]."</td>
                <td>".$row1["attend"]."</td>
                <td><a href='delete.php?row=$row1[name]'>Delete</a></td>
                </tr>
                ";
            }
        }
        else{
            echo "No Results";
            
        }
        ?>
        </table>
        </div>