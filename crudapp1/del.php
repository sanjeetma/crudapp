<?php include "connection/connect.php"?>
<?php
    if(isset( $_GET["del"]))
    {
        $id=$_GET["del"];
       $del_query= "DELETE FROM users WHERE id=$id";
       $fire=mysqli_query($con,$del_query);
    }
?>