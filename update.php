<?php include "connection/connect.php"?>

<?php
 if(isset($_GET['update']))
 {
     $id=$_GET['update'];
     $upd_query="SELECT * FROM users WHERE id=$id";
     $update=mysqli_query($con,$upd_query);
	 $user = mysqli_fetch_assoc($update);
	 echo $id;
	 echo $user['firstname'];
	 echo $user['lastname'];
 }
 ?>
 <?php
 if(isset($_POST['upd_btn']))
 {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];
	if($con)
{
	$query = "UPDATE users SET firstname='$firstname',lastname='$lastname',mobile='$mobile',password='$password' WHERE id=$id";
	$insert=mysqli_query($con,$query);
    if($insert) header("Location: index.php");
}
}

 
?>

 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>update page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h3>update here</h3>
        
        <div class="container">
	<h1 class="jumbotron">update you details <small>........fill all the label carefully...........</small></h1>
	<br>
	<div class="jumbotron">
		<form class="form-inline" method="post">
			<div class="form-group">
				<div class="input-group">
					<input value = <?php echo $user['firstname'] ?> class="form-control" placeholder="First Name" name="firstname"></input>
				</div>
				<div class="input-group">
					<input value = <?php echo $user['lastname'] ?>  type="text" class="form-control" placeholder="Last Name" name="lastname"></input>
				</div>
                <div class="input-group">
					<input value = <?php echo $user['mobile'] ?> type="text" class="form-control" placeholder="mobile" name="mobile"></input>
				</div>
				<div class="input-group">
					<input value = <?php echo $user['password'] ?> type="password" class="form-control" placeholder="Password" id="pw1" name="password"></input>
				</div>
				<button type="submit" name="upd_btn" class="form-control btn btn-success">update</button>
				
			</div>
		</form>
	</div>
</div>

</body>
</html>
    
</body>
</html>