<?php
include 'connection.php';
session_start();
if(!isset($_SESSION['id'])) {
    
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
                    <a class="nav-link active mt-5" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notifications</a>
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
                <span class=" me-3">👤 user </span>
            </div>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Dashboard Main Content -->
            <div class="container mt-4">
                <h1>Welcome to registration </h1>
                <p class="lead">Here you can register as either a teacher or a student..</p>

                <!-- Stats Cards -->
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="card text-white bg-dark">
                            <div class="card-body">
                                <h5 class="card-title">teachers</h5>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-dark">
                            <div class="card-body">
                                <h5 class="card-title">students</h5>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-dark">
                            <div class="card-body">
                                <h5 class="card-title">register</h5>
                               
                            </div>
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
