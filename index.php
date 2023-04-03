<?php

//database connection
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "project";
//connection creation
$conn = mysqli_connect('localhost','root','','project');

if(isset($_POST['submit'])){
	$targetfile = "./uploadedeImage/".basename($_FILES['upload']['name']);
	$imageToUpload = $_FILES['upload']['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	//$upload =$_POST['upload'];

	$sql =" INSERT INTO registration(username,email,password,upload)
	 VALUES('$username','$email','$password','$imageToUpload')";

	 $result = mysqli_query($conn,$sql);
	 if($result){
		//echo"inserted successfully";
		move_uploaded_file($_FILES['upload']['tmp_name'],$targetfile);
		header('location:display.php');
	 }else{
		die(mysqli_error($conn));
	 }
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="content_wrapper">
	<nav>
		<div>
			<a href="index.php">
				<img src="" alt="mine">
			</a>
		</div>
	</nav>
	<div>
		<form action="" method="post" enctype="multipart/form-data">

			<div>
				<h1><label>Registration Form</label></h1>
			</div>

			<div>
				<p>username</p>
				<input autocomplete="off" type="text" name="username" id="" >
			</div>

			<div>
				<p>email</p>
				<input autocomplete="off" type="text" name="email" id="" >
			</div>

			<div>
				<p>password</p>
				<input autocomplete="off" type="password" name="password" id="" >
			</div>
			<div>
				<p>upload</p>
				<input type="file" name="upload" id="" >
			</div>

			<div id="btn">
			<input type="submit" value="Register" name="submit">
		</div>
		<div>
			<p>displayed<a href="display.php">go to view</a></p>
		</div>

		

	</form>
</div>

</body>
</html>