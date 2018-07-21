<?php include "connection/connect.php"?>
<?php include "del.php"?>





 <!DOCTYPE html>  
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>pro magadh</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
		<div class="container">
		<div class = "row">
		<div class "col-lg-8">
		<div class "col-lg-8"></div>
        <h2>data</h2>
		<hr>
		<table class ="table table-striped">
		<thread>
		<tr>
		<th>firstname</th>
		<th>lastname</th>
		<th>mobile</th>
		</tr>
		<tbody>
		<?php
		include "connection/connect.php";
		$read="SELECT * FROM users";
		$sql2=mysqli_query($con,$read);
		while($row=mysqli_fetch_assoc($sql2))
		{?>
			<tr>
				<td><?php echo $row['firstname']?></td>
				<td><?php echo $row['lastname']?></td>
				<td><?php echo $row['mobile']?></td>
				<td>
				<a href="<?php $_SERVER['PHP_SELF']?>?del=<?php echo $row['id']?>"
				 class = "btn btn-sm btn-danger" >Delete</a>

				</td>
				<td>
				<a href="update.php ?update=<?php echo $row['id']?>"
				 class = "btn btn-sm btn-danger" >Edit</a>

				</td>
			</tr>
			<?php
		}
		?>
	
	</tbody>
	</table>
		
        <h3>register here</h3>
        
        <div class="container">
	<h1 class="jumbotron">Sign up to proMagadh <small>A custom social website for pro Magadhains</small></h1>
	<br>
	<div class="jumbotron">
		<form class="form-inline" action="register.php" method="post">
			<div class="form-group">
			<div class="input-group">
					<input type="text" class="form-control" placeholder="Age" name="age"></input>
				</div>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="First Name" name="firstname"></input>
				</div>
				<div class="input-group">
					<input  type="text" class="form-control" placeholder="Last Name" name="lastname"></input>
				</div>
                <div class="input-group">
					<input type="text" class="form-control" placeholder="mobile" name="mobile"></input>
				</div>
				<div class="input-group">
					<input type="password" class="form-control" placeholder="Password" id="pw1" name="password"></input>
				</div>
				<button type="submit" name="register" class="form-control btn btn-success">Sign Up</button>
				
			</div>
		</form>
	</div>
</div>

</body>
</html>