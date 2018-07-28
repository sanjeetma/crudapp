<?php include "connection/connect.php"?>
<?php
if(isset( $_POST['login']))
{
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];

//echo $firstname." ".$lastname."  ".$mobile."".$password;
if($con)
{
    $sql = "SELECT * FROM users WHERE firstname='$firstname' AND lastname='$lastname' AND mobile='$mobile' AND password='$password' ";
    $insert=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($insert);
    //if($row['firstname']
    echo $row['firstname'];
    if(!$row['password']=="" AND $row['password']==$_POST['password'] )
    {
        echo "abc";
        header("Location: main.php");
    }
    else{
        
        header("Location: index.php");
        echo "abd";
    }
}
}