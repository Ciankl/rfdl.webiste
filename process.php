<?php

error_reporting(0);

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "events";

if($con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
$name = $_POST['name'];
$event = $_POST['event'];
$attend = $_POST['attend'];
if(!empty($name) && !empty($event) && !empty($attend))
        {
        // if  information is correct save to database
            $intotable = "insert into event (name, event, attend) values ('$name', '$event', '$attend')";
            
            mysqli_query($con, $intotable);
            
            echo"Successfully added";
            header("Location: v-meets.php");
            die;
}
            
}