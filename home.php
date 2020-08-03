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
	<?php
		$user = $_SESSION['user_email'];
		$get_user = "select * from users where user_email='$user'";
		$run_user = mysqli_query($con,$get_user);
		$row = mysqli_fetch_array($run_user);

		$user_name = $row['user_name'];
	?>
	<title><?php echo "$user_name"; ?></title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<style>
	body{
		background-color: #ded1e3;
	}
</style>
<body>
<div class="row">

	<center><h1>Post Something</h1></center>
	<div id="insert_post" class="col-sm-12" style="background-color: #ded1e3;">
		<center>
			<form action="home.php?id=<?php echo $user_id; ?>" method="post" id="f" enctype="multipart/form-data">
				<textarea class="form-control" id="content" rows="4" name="content" placeholder="What's in your mind?"></textarea><br>
				<label class="btn btn-warning" style="background-color:#82ed74" id="upload_image_button">Select Image
				<input type="file" name="upload_image" size="30">
				</label>
				<button id="btn-post" class="btn" style="background-color:#7c22e1; color: white" name="sub">Post</button>
			</form>
			<?php insertPost(); ?> 
		</center>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<center><h2><strong>News Feed</strong></h2><br></center>
		 <?php echo get_posts(); ?> 
	</div>
</div>
</body>
</html>







































































	