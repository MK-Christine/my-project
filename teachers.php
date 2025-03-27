<?php
include 'connection.php';
session_start();
if(!isset($_SESSION['id'])) {
    echo $_SESSION['id'];
   header("Location: login.php");
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
                
                <div class="card shadow">
                    <div class="card-header">
                        <h1>teachers list</h1>
                    </div>
                    <div class="card-body">
                        
                        <table class="table table-stripped">
                            <tr>
                                <th>#</th>
                                <th>FIRSTNAME</th>
                                <th>LASTNAME</th>
                                <th>ID</th>
                                <th>USERNAME</th>
                                <th>ACTION</th>
                                
                            </tr>
                            <tr> <?php $A=mysqli_query($con,"select * from teachers");
                            $i=1; 
                            while ($row=mysqli_fetch_array($A))
                            {
                                ?>
                                <tr>
                                    <td><?php
                                    echo $i
                                    ?></td>
                                    <td><?php echo $row['firstname']  ?> </td>
                                    <td><?php echo $row['lastname']  ?> </td>
                                    <td><?php echo $row['id']  ?> </td>
                                    <td><?php echo $row['username']  ?> </td>
                                    <td>
                                        <a href="edit.php" class="btn btn-info btn-sm">Edit</a>
                                        <a href="delete.php" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <?php
                                $i=$i+1;
                            }
                             ?>
                               
                            </tr>
                        
                        </table>
                    </div>
                </div>
                    
            
                <!-- Recent Activity Section -->
                
            </div>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
