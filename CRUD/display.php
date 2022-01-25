<?php

include'connection.php';

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
    <h2 class="my-5"><center>CRUD - PHP</center></h2>
    <div class="container">
        <button class="btn btn-primary my-3"><a href="user.php" class="text-light"> Add User</a></button>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
       $sql = "SELECT * from `crud`";
       $result= mysqli_query($conn,$sql);
       if($result)
       {
          while($row = mysqli_fetch_assoc($result)){
              $id = $row['id'];
              $name = $row['name'];
              $email = $row['email'];
              $mobile = $row['mobile'];
              $password = $row['password'];
              echo'<tr>
              <th scope="row">'.$id.'</th>
              <td>'.$name.'</td>
              <td>'.$email.'</td>
              <td>'.$mobile.'</td>
              <td>'.$password.'</td>
              <td>
              <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
              <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
       </td>
            </tr>';
          }
       }
      ?>
  
  </tbody>
</table>
    </div>
    <footer class="my-5"> <center>©<span style="color:#000;"><a href="#"> Muqaddas_Akhtar</a></span> . All rights reserved</center> </footer>
</body>
</html>