<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    $name= $_POST['name'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $password= $_POST['password'];

    $sql ="insert into `crud`(name,email,mobile,password) Values('$name','$email','$mobile','$password')";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo"Data Inserted Successfully!";
        header('location:display.php');
    }
    else{
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
    <title>CRUD - PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<h2 class="my-5"><center>ADD USER - CRUD</center></h2>

    <div class="container my-3">
    <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off"> 
</div>
<div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off"> 
</div>
<div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off"> 
</div>
<div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off"> 
</div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <footer class="my-5"> <center>©<span style="color:#000;"><a href="#"> Muqaddas_Akhtar</a></span> . All rights reserved</center> </footer>
</body>
</html>















