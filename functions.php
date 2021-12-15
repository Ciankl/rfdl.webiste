<?php

function check_login($con)
{
    //checking if session value exists if not it redirects
    if(isset($_SESSION['user_id']))
    {
        $id = $_SESSION['user_id'];
        $query = "select * from users where user_id = '$id' limit 1";
        
        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0)
        {
            //if session value does exist it returns users data
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
        
    }
    //if user data doest exist redirect to login
    header("location: login.php");
    die;
}

