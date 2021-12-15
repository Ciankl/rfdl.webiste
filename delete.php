<?php


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'events');

$name=$_GET['row'];
$query = "DELETE FROM event WHERE name = '$name'";

$data=mysqli_query($con, $query);

if($data)
{
    header("Location: v-meets.php");
}
else
{
    echo "<font color='red'>Failed To Delete Record From Database";
    
}
?>
