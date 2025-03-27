<?php
include 'connection.php';
session_start();
if(!isset($_SESSION['id'])) {
    echo $_SESSION['id'];
   header("Location: login.php");
}


if(isset($_POST['submit'])){
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $department = $_POST['dpt'];
    $regno = $_POST['regno'];
    
    $insert=mysqli_query($con, "insert into students values(null,'$firstname','$lastname','$department','$regno','')");
    if($insert){
        header("location:students.php");
    }
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Our system</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        /* Sidebar Style */
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            color: #fff;
        }
        .sidebar a {
            color: #fff;
        }
        .sidebar a:hover {
            background-color: #495057;
            text-decoration: none;
        }
        .sidebar .active {
            background-color: #007bff;
        }
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="d-flex">
        <div class="sidebar p-3">
            <h3 class="text-center mb-4">Dashboard</h3>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active mt-5" href="home.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="teachers.php">teachers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="students.php">students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.html">Logout</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="content w-100">
            <!-- Navigation Bar for the main content -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Registration website</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                   
                    <div class="collapse navbar-collapse" id="navbarNav">
                    
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                        
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                            <div>
                <span class=" me-3">👤 kety </span>
            </div>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Dashboard Main Content -->
            <div class="container mt-4">
                
            <div class=" row mt-5">
   <div class="col-3"></div>
             <div class="col-6">
              
                         <div class="card shadow mt-5">
                      <div class="card-body">
                      <h3 class="mb-4">new student </h3>
                        <form action="" method="post">
                        <input type="text" placeholder="firstname" class="form-control mt-2" name="fname">
                        <input type="password" placeholder="lastname" class="form-control mt-2" name="lname">  
                        
                        <input type="password" placeholder="regno" class="form-control mt-2"name="regno" >           
                        <input type="password" placeholder="department" class="form-control mt-2" name="dpt">           
                        <input type="submit"  class= "btn btn-primary mt-3" name="submit">
                        
                        </form>
                        </div>
                    </div>
                    </div>
            
                <!-- Recent Activity Section -->
                
            </div>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
