<!DOCTYPE html>
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
					<h3 style="text-align: center;"><strong>Forgot Password</strong></h3>
				</div>
				<div class="l_pass">
					<form action="" method="post">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="email" type="email" class="form-control" name="email" placeholder="Enter your E-mail" required>
						</div><br><hr>
						<pre class="text">Enter Your bestfriend name down below</pre>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							<input id="msg" class="form-control" type="text" name="recover_account" placeholder="Someone" required>
						</div><br>
						<a href="signin.php" style="text-decoration: none; color: #187FAB; float: right;" data-toggle="tooltip" title="Signin">Back to Signin?</a><br><br>
						<center><button id="signup" class="btn btn-info btn-lg" name="submit">Submit</button></center>

						<?php include("login.php"); ?> 

					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

