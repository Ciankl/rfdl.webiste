<?php
session_start();

    include("connection.php");
    include("functions.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        
        //check if either username or password is empty
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
        // if  information is correct save to database
            $query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";
            
            mysqli_query($con, $query);
            
            header("Location: login.php");
            die;
            
        }else
        {
             // if  information is entered wrong "echo" tells the user that they have entered invalid information
            echo "Please enter some valid information";
        }
            
        
    }
?>

<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" type="text/css" href="lisytle.css">
    <title>Sign up</title>
    
</head>
<body>


    <div id="box">
    <form method="post">
        <h1>Sign Up Here</h1>
        
        <input id="text" type="text" name="user_name" placeholder="Enter Username Here"><br><br>
        <input id="text" type="password" name="password" placeholder="Enter Password Here"><br><br>
        
        <input id="button" type="submit" value="Signup"><br><br>

       <p>Have an account?
        <br>
        <a href="login.php">Sign In</a>    here<br>
    </form>
    </div>
</body>
     <img src="images/lgofixed.png">

</html>

