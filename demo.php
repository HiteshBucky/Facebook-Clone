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
	<title>Demo Setting</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<body>
	


	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<form action="" method="POST" enctype="multipart/form-data">
				<table class="table table-bordered table-hover">
					<tr align="center">
						<td colspan="6" class="active"><h2>Edit Your Profile</h2></td>
					</tr>
					<!-- Changeg first name -->
					<tr>
						<td style="font-weight: bold;">Change Your First Name</td>
						<td><input class="form-control" type="text" name="f_name" required value="<?php echo $first_name; ?>"></td>
					</tr>
					<!-- Change last name -->
					<tr>
						<td style="font-weight: bold;">Change Your Last Name</td>
						<td><input class="form-control" type="text" name="l_name" required value="<?php echo $last_name; ?>"></td>
					</tr>
					<!-- Change username -->
					<tr>
						<td style="font-weight: bold;">Change Your Username</td>
						<td><input class="form-control" type="text" name="u_name" required value="<?php echo $user_name; ?>"></td>
					</tr>
					<!-- Change description -->
					<tr>
						<td style="font-weight: bold;">Description</td>
						<td><input class="form-control" type="text" name="describe_user" required value="<?php echo $describe_user; ?>"></td>
					</tr>
					<!-- Change Relationship status -->
					<tr>
						<td style="font-weight: bold;">Relationship Status</td>
						<td>
							<select class="form-control input-md" name="Relationship">
								<option><?php echo $Relationship_status; ?></option>
								<option>Single</option>
								<option>Married</option>
								<option>Complicated</option>
							</select>
						</td>
					</tr>
					<!-- Change password -->
					<tr>
						<td style="font-weight: bold;">Password</td>
						<td>
							<input class="form-control" type="password" name="u_pass" required value="<?php echo $user_pass; ?>">
							<input type="checkbox" onclick="show_password()"><strong>Show Password</strong>
						</td>
					</tr>					
					<!-- Change Country -->
					<tr>
						<td style="font-weight: bold;">Country</td>
						<td>
							<select class="form-control" name="u_country">
								<option><?php echo $user_country; ?></option>
								<option>Pakistan</option>
								<option>United States of America</option>
								<option>India</option>
								<option>Japan</option>
								<option>UK</option>
								<option>France</option>
								<option>Germany</option>
							</select>
						</td>
					</tr>
					<!-- Change gender -->
					<tr>
						<td style="font-weight: bold;">Gender</td>
						<td>
							<select class="form-control input-md" name="u_gender">
								<option><?php echo $user_gender; ?></option>
								<option>Male</option>
								<option>Female</option>
								<option>Others</option>
							</select>
						</td>
					</tr>
					<!-- Change Date of birth -->
					<tr>
						<td style="font-weight: bold;">Date of Birth</td>
						<td><input type="date" class="form-control input-md" placeholder="Date Of Birth" name="u_birthday" value="<?php echo $user_birthday; ?>"></td>
					</tr>



					<!-- Adding last button for Update -->
					<tr align="center">
						<td colspan="6" >
							<center><button id="signin" class="btn btn-info btn-lg" name="login">Login</button></center>

							<?php 
								if(isset($_POST['login'])){

									$f_name = htmlentities(mysqli_real_escape_string($con, $_POST['f_name']));
									$l_name = htmlentities(mysqli_real_escape_string($con, $_POST['l_name']));
									$u_name = htmlentities(mysqli_real_escape_string($con, $_POST['u_name']));
									$describe_user = htmlentities(mysqli_real_escape_string($con, $_POST['describe_user']));
									$Relationship = htmlentities(mysqli_real_escape_string($con, $_POST['Relationship']));
									$u_pass = htmlentities(mysqli_real_escape_string($con, $_POST['u_pass']));
									$u_country = htmlentities(mysqli_real_escape_string($con, $_POST['u_country']));
									$u_gender = htmlentities(mysqli_real_escape_string($con, $_POST['u_gender']));
									$u_birthday = htmlentities(mysqli_real_escape_string($con, $_POST['u_birthday']));
									

									
									$update = "update users set f_name='$f_name', l_name='$l_name', user_name='$u_name', describe_user='$describe_user', Relationship='$Relationship',
											user_pass='$u_pass', user_country='$u_country', user_gender='$u_gender', user_birthday='$u_birthday' where user_id='$user_id'";
									$run = mysqli_query($con, $update);
									if($run){
										echo "<script>alert('Both data updated Updated')</script>";
										echo "<script>window.open('demo.php?u_id=$user_id','_self')</script>";
									}
									else{
										echo " failed";
									}
								}
							?>
						</td>
					</tr>
				</table>
			</form>
		</div>
		<div class="col-sm-2"></div>
	</div>






















</body>
</html>











