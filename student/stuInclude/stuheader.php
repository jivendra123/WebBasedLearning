<?php
include_once('../dbconection.php');
if(!isset($_SESSION)){
  session_start();
}
if(isset($_SESSION['is_login'])){
    $stuLogEmail = $_SESSION['stuLogEmail'];
}
if(isset($stuLogEmail)){
    $sql = "SELECT stu_img FROM student1 WHERE stu_email = '$stuLogEmail'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $stu_img = $row['stu_img'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Profile</title>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/all.min.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link rel="stylesheet" href="../css/owl.carousel.css">
<link rel="stylesheet" href="../css/owl.theme.default.min.css">
<link rel="stylesheet" href="../css/stustyle.css">
</head>
<body>
    
    <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-3
    shadow" style="background-color: #2e8b83;">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="../index.php">DEducation</a>
    </nav><br>
 
    <div class="container-fluid mb-5" style="margin-top:40px;">
      <div class="row">
        <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
         <div class="sidebar-sticky">
            <ul class="nav flex-column">
             <li class="nav-item mb-3">
              <img src="<?php echo $stu_img ?>" alt="studentimage" class="img-thumbnail rounded-circle">
             </li>
             <li class="nav-item">
              <a class="nav-link <?php if(PAGE == 'profile') {echo 'active';} ?>" href="studentProfile.php">
              <i class="fas fa-user"> </i>
              Profile <span class="sr-only">(current)</span>
              </a>
             </li>
             <li class="nav-item">
              <a class="nav-link" href="myCourse.php">
              <i class="fas fa-book-reader"></i>
              My Courses 
              </a>
             </li>
             <li class="nav-item">
              <a class="nav-link" href="stufeedback.php">
              <i class="fas fa-comment-dots"> </i>
              Feedback 
              </a>
             </li>
             <li class="nav-item">
              <a class="nav-link" href="studentChangePass.php">
              <i class="fas fa-key"> </i>
               Change Password
              </a>
             </li>
             <li class="nav-item">
              <a class="nav-link" href="../logout.php">
              <i class="fas fa-sign-out-alt"> </i>
              Logout
              </a>
             </li>
            </ul>
         </div>
        </nav>
 
