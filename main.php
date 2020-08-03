<!DOCTYPE html>
<html>
<head>
	<title>Login and Sign-up Form</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		overflow-x: hidden;
	}
	
	#signup{
		position: absolute;
		top: 50%;
		padding-left: 3vw;
		padding-right: 3vw;
		width: 60%;
		border-radius: 30px;
	}
	#login{
		position: absolute;
		top: 120%;
		padding-left: 3vw;
		padding-right: 3vw;

		width: 60%;
		background-color: #fff;
		border: 1px solid #1da1f2;
		color: #1da1f2;
		border-radius: 30px;
	}
	#login:hover{
		width: 60%;
		background-color: #fff;
		color: #1da1f2;
		border: 2px solid #1da1f2;
		border-radius: 30px;
	}
	.well{
		background-color: #187FAB;
	}

</style>

<body>

	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><h1 style="color: black">Teddy Buddy</h1></center>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-6" style="left: 0.5%; position: relative;" >
			<img src="images/teddybuddy.png" class="img-rounded" title="Teddy Buddy" width="100%" height="565px">
		</div>

		<div class="col-sm-6" style="padding-left: 10%">
			<!-- Printing Logo image  -->
			<img src="images/codingcafelogo.png" class="img-rounded" title="Coding cafe" width="80px" height="80px">

			<!-- Printing quote -->
			<h2><strong>Teddy Buddy helps you to find people just like you</strong></h2><br><br>
			
			<div style="position: relative; margin-bottom: 40%">
				<h4><strong id="joinTB">Join Teddy Buddy Today</strong></h4>
				<form method="post" action="">
					<button id="signup" class="btn btn-info btn-lg" name="signup">Sign up</button><br><br>
					
					<button id="login" class="btn btn-info btn-lg" name="login">Login</button><br><br>

					<!-- If button is clicked , then redirected to pages -->
					<?php
						if(isset($_POST['login'])){
							echo "<script>window.open('signin.php','_self')</script>";
						}
						if(isset($_POST['signup'])){
							echo "<script>window.open('signup.php','_self')</script>";
						}
					?>
				</form>
			</div>

			
		</div>
		
	</div>

</body>
</html>
