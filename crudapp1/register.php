<?php
include "connection/connect.php";
extract($_POST);
if(isset( $_POST['register']))
{
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
//echo $firstname." ".$lastname." ".$userid." ".$mobile."".$password;
if($con)
{
    $sql = "INSERT into users(firstname,lastname,mobile,password)VALUES('$firstname','$lastname','$mobile','$password')";
    $insert=mysqli_query($con,$sql);
    if($insert) {
        echo "data is submitted";
}
else
{
    echo "submit your details";
}
}
}
header("Location: main.php"); 
?>