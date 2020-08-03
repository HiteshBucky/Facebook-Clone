<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");

if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}
?>
<html>
<head>
	<title>Forgotten Password</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<style>
	body{
		overflow-x: hidden;
	}
	.main-content{
		width: 50%;
		height: 40%;
		margin: 10px auto;
		background-color: #fff;
		border:2px solid #e6e6e6;
		padding: 40px 50px;
	}
	.header{
		border:0px solid #000;
		margin-bottom: 5px;
	}
	.well{
		background-color: #187FAB;
	}
	#signup{
		width: 60%;
		border-radius: 30px;
	}

</style>

<body>
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><h1 style="color: white"><strong>Teddy Buddy</strong></h1></center>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div class="main-content">
				<div class="header">
					<h3 style="text-align: center;"><strong>Change Your Password</strong></h3>
				</div>
				<div class="l_pass">
					<form action="" method="post">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input id="password" type="password" class="form-control" name="pass" placeholder="Enter new Password" required>
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input id="password" type="password" class="form-control" name="pass1" placeholder="Re-enter your new Password" required>
						</div><br>
						<center><button id="signup" class="btn btn-info btn-lg" name="change">Change Password</button></center>

					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>


<?php 

	if(isset($_POST['change'])){

		$pass = htmlentities(mysqli_real_escape_string($con, $_POST['pass']));
		$pass1 = htmlentities(mysqli_real_escape_string($con, $_POST['pass1']));

		if($pass == $pass1)
		{
			if( strlen($pass)>5 && strlen($pass)<20){
				$update = "update users set user_pass='$pass' where user_id='$user_id'";
				$run = mysqli_query($con, $update);
				if($run){
					echo"<script>alert('Password changed Successfully!!')</script>";
					echo "<script>window.open('home.php', '_self')</script>";
				}
				else echo"<script>alert('Password changed failed!!')</script>";	
			}
			else{
				echo"<script>alert('Password is too weak!!')</script>";
				echo "<script>window.open('change_password.php', '_self')</script>";
			}
		}
		else
		{
			echo"<script>alert('Both Password does not match!!')</script>";
			echo "<script>window.open('change_password.php', '_self')</script>";
		}
	}

 ?>
