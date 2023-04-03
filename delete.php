<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "project";
//connection creation
$conn = mysqli_connect('localhost','root','','project');

if(isset($_GET['deleteid']))
$id=$_GET['deleteid'];

$sql="delete from registration where id=$id";
$result=mysqli_query($conn,$sql);

if($result){
    header("location:display.php");
}else{
    die(mysqli_error($conn));
}
?>