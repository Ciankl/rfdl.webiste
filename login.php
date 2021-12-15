<?php
session_start();

    include("connection.php");
    include("functions.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        
        //This is checking if the login form has data or not
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
        // if  information is correct save to database
            $query = "select * from users where user_name = '$user_name' limit 1";
            
            $result = mysqli_query($con, $query);
            
            if($result)
            {
                if($result && mysqli_num_rows($result) > 0);
                    {
                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password)
                        {
                         $_SESSION['user_id'] = $user_data['user_id'];
                         header("Location: index.php");
                         die;
                        }
                    }
            }
                
    
             echo "Wrong username or password!";
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
    <title>Login</title>

    
</head>
<body>
  
    
    
    <div id="box">
    <form method="post">
        <h1>Login Here</h1>
        
        <input id="text" type="text" name="user_name" placeholder="Enter Username Here"><br><br>
        <input id="text" type="password" name="password" placeholder="Enter Password Here"><br><br>
        
        <input id="button" type="submit" value="Login"><br><br>
        
        <p>Don't have an account
        <br>
        <a href="signup.php">Sign up</a>    here<br>
        
        
        </p>
    </form>
    </div>
    <img src="images/lgofixed.png">
</body>

</html>

