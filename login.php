<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $username = $_POST['uname'];
    $password = $_POST['pass'];
    
 $query = mysqli_query($con, "SELECT * FROM `users` WHERE PASSWORD='$password' and username='$username' ");
 if(mysqli_num_rows($query)==0){
    echo "<script>alert('Invalid Username or password')</script>";
 }
 else{
    $row = mysqli_fetch_array($query);
            
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['type'];
            
            header("Location: home.php");
 }
}?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">


<head>
    
    <title>Login Form</title>
</head>
<body>
<div class="container flex"> 
  <div class=" row mt-5">
   <div class="col-3"></div>
             <div class="col-6">
              
                         <div class="card shadow mt-5">
                      <div class="card-body">
                      <h3 class="mb-4">login </h3>
    <form action="" method="post">
    <input type="text" placeholder="Username" class="form-control mt-5" name="uname">
    <input type="password" placeholder="Password" class="form-control mt-5" name="pass" >            
    <input type="submit"  class= "btn btn-success mt-5" value="Login" name="submit">
    
    </form>
    </div>
</div>
 </div>
    </div>
 </div> 
    <div class=" col-3"></div>
</div>
</body>
</html>
