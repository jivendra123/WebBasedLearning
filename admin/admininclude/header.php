<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css" media="screen">
    <link rel="stylesheet" href="../css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="../css/adminstyle.css"> 
</head>
<body>
<nav class="navbar navbar-dark fixed-top p-0 shadow"
style="background-color: #32968d;">
<a class="navbar-brand col-sm-3 col-md-2 mr-0" 
  href="AdminDash.php">DEducation 
  <small class="text-white"> Admin Area </small>
</a>
</nav>

<div class="container-fluid mb-5" style="margin-top:40px;">
<div class="row">
    <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
        <div class="sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="AdminDash.php">
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="AddCourses.php">
                        <i class="fab fa-accessible-icon"></i>
                        Courses
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lesson.php">
                        <i class="fab fa-accessible-icon"></i>
                        Lessons
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="students.php">
                        <i class="fas fa-users"></i>
                        Students
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminPaymentStatus.php">
                    <i class="fas fa-file-invoice-dollar"></i>
                       Transenction Status
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="feedback.php">
                    <i class="fas fa-comment-dots"></i>
                        Feedback
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>


