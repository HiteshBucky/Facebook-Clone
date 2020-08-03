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
	
	<title>Edit Account Setting</title>
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
			<form action="" method="post" enctype="multipart/form-data">
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
								<option>It's Complicated</option>
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
					<!-- Forgot Password -->
					<tr>
						<td style="font-weight: bold;">Forgotten Password</td>
						<td>
							<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Turn on</button>

							<div id="myModal" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Modal Header</h4>
										</div>
										<div class="modal-body">
											<form action="recovery.php?id=<?php echo $user_id; ?>" method="post" id="f">
												<strong>What is your best Friend Name?</strong>
												<textarea class="form-control" cols="83" rows="4" name="content" placeholder="Someone"></textarea><br>
												<input class="btn btn-default" type="submit" name="sub" value="submit" style="width: 100px"><br><br>
												<pre>Answer the above question we will ask this if you forget your <br>password.</pre><br><br>
											</form>
											<!-- PHP for updation -->
											<?php
												if(isset($_POST['sub'])){
													$bfn = htmlentities($_POST['content']);
													
													$update = "update users set recovery_account='$bfn' where user_id='$user_id'";
													$run = mysqli_query($con, $update);
													if($run){
														echo "<script>alert('Information Updated')</script>";
														echo "<script>window.open('edit_profile.php?u_id=$user_id','_self')</script>";
													}else{
														echo "<script>alert('Error While updating information')</script>";
														echo "<script>window.open('edit_profile.php?u_id=$user_id','_self')</script>";
													}
												}
											?>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<!-- Adding last button for Update -->
					<tr align="center">
						<td colspan="6" >
							<input type="submit" class="btn btn-info" name="update" style="width: 250px" value="Update">
						</td>
					</tr>
					<?php
						if(isset($_POST['update'])){
							echo "Hello";
							$f_name = htmlentities($_POST['f_name']);
							$l_name = htmlentities($_POST['l_name']);
							$u_name = htmlentities($_POST['u_name']);
							$describe_user = htmlentities($_POST['describe_user']);
							$Relationship_status = htmlentities($_POST['Relationship']);
							$u_pass = htmlentities($_POST['u_pass']);
							$u_country = htmlentities($_POST['u_country']);
							$u_gender = htmlentities($_POST['u_gender']);
							$u_birthday = htmlentities($_POST['u_birthday']);

							$update = "update users set f_name='$f_name', l_name='$l_name', user_name='$u_name', describe_user='$describe_user', Relationship='$Relationship_status', user_pass ='$u_pass', user_country='$u_country', user_gender='$u_gender', user_birthday='$u_birthday' where user_id='$user_id' ";
							$run = mysqli_query($con, $update);
							if($run){
								echo "<script>alert('Both data updated Updated')</script>";
								echo "<script>window.open('edit_profile.php?u_id=$user_id','_self')</script>";
							}
						}
					?>
				</table>
			</form>
		</div>
		<div class="col-sm-2"></div>
	</div>
</body>
</html

