<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/all.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/main.css">
<!--google font-->

<link rel="stylesheet" href="css/s.css">



<title >DEducation</title>
</head>
<body>
<!--start navigation -->
<nav class="navbar navbar-expand-sm navbar-dark bg-light pl-5 fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand " href="index.php">DEducation</a>
    <span class="navbar-text abc">Exciting Education</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="mr-auto"></div>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="mr-auto"></div>
      <ul class="navbar-nav custom-nav">
        <li class="nav-item custom-nav-item "><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item custom-nav-item "><a href="course.php" class="nav-link">Courses</a></li>
        <li class="nav-item custom-nav-item"><a href="paymentstatus.php" class="nav-link">Transenction Status</a></li>
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Testimonial</a></li> 
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Contact Us</a></li>
        
        <?php
         session_start();
         if(isset($_SESSION['is_login'])){
           echo '<li class="nav-item custom-nav-item"><a href="student/studentProfile.php" class="nav-link">My Profile</a></li>
           <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
         }else{
           echo '<li class="nav-item custom-nav-item"><a href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuLoginModalcenter" >Login</a></li>
           <li class="nav-item custom-nav-item"><a href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuRegModalcenter">Signup</a></li>';
         }
         ?>  

        
    </ul>
  </div>
</nav>