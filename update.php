
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "project";
//connection creation
$conn = mysqli_connect('localhost','root','','project');

$id=$_GET['updateid'];

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $upload = $_POST['upload'];

    $sql = "update registration set username='$username',email='$email',password='$password',upload='$upload' where id=$id";
    $result=mysqli_query($conn,$sql);

    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
		<form action="" method="post">

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
				<input autocomplete="off" type="file" name="upload" id="" >
			</div>

			<!--<div>
				<p>Gender</p>
				<select name="gender" id="">
					<option selected disabled>choose gender</option>
					<option value="male">Male</option>
					<option value="male">Female</option>
					<option value="prefer not to say it">prefer not to say it</option>
				</select>
			</div>-->

			<div id="btn">
			<input type="submit" value="update" name="submit">
		</div>

		

	</form>
</div> 
</body>
</html>