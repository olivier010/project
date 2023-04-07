
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "project";
//connection creation
$conn = mysqli_connect('localhost','root','','project');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

    <style>
        table{
            font-size: 10px;
        }
        button a{
            color:white;
        }
    </style>
</head>
<body>
    <div class="content_wrapper">
        <button type="btn" class="btn btn-primary" >
            <a href="index.php">Add user</a>
        </button>
        <table class="table">
            <thead>
                <tr>
                    
                    <th>sno</th>
                   <th>username</th>
                   <th>email</th>
                   <th>password</th>
                   <th>image_profile</th>
                   <th>operation</th>
                </tr>
            </thead>
            <?php
    $sql="select* from registration";
    $result=mysqli_query($conn,$sql);

    if($result){
        while($row=mysqli_fetch_assoc($result) ){
            $id=$row['id'];
            $username=$row['username'];
            $email=$row['email'];
            $password=$row['password'];
            $upload = $row['upload'];

            echo'<tr>
           <th scope="row">'.$id.'</th>
           <td>'.$username.'</td>
           <td>'.$email.'</td>
           <td>'.$password.'</td>
           <td>'.$upload.'</td>
           <td>
           <button type="btn" class="btn btn-success"><a href="update.php?updateid='.$id.'">update</button>
           <button type="btn" class="btn btn-danger""><a href="delete.php?deleteid='.$id.'">delete</button>
           </td>
           </tr>';
        }
    }
    ?>
        </table>

    </div>
    
    
</body>
</html>