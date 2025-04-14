<?php
include 'connection.php';
session_start();
if(isset($_POST['submit'])){

    $username=$_POST['uname'];
    $new_password=$_POST['newpass'];
    $verify_password=$_POST['vpass'];

    if($verify_password !=$new_password){
        echo "<script>alert('password not matching')</script>";
    }
    else
    {
      $INSERT=mysqli_query ($con, "INSERT INTO users values(null,'$username','$new_password')");
      header('location:login.php');
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">


<head>
    
    <title>signup Form</title>
</head>
<body>
<div class="container flex"> 
  <div class=" row mt-5">
   <div class="col-3"></div>
             <div class="col-6">
              
                         <div class="card shadow mt-5">
                      <div class="card-body">
                      <h3 class="mb-4">SIGN UP </h3>
    <form action="" method="post">
    <input type="text" placeholder="Username" class="form-control mt-5" name=uname>
    <input type="password" placeholder="new_Password" class="form-control mt-5" name="newpass">            
    <input type="password" placeholder="verify_Password" class="form-control mt-5" name="vpass" >            
    <input type="submit"  class= "btn btn-success mt-5" value="signup" name='submit'>
    
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
