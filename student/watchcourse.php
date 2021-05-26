<?php 
if(!isset($_SESSION)){
session_start();
}
include_once('../dbconection.php');

if(isset($_SESSION['is_login'])){
    $stuLogEmail = $_SESSION['stuLogEmail'];
   }else{
       echo "<script> location.href='../index.php'; </script>";
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch Course</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container-fluid bg-success p-2">
    <h3>Welcome to DEducation</h3>
    <a class="btn btn-danger" href="./myCourse.php">My Courses</a>
    </div>

    <div class="container-fluid">
     <div class="row">
      <div class="col-sm-3 border-right">
           <h4 class="text-center">Lesson</h4>
           <ul id="playlist" class="nav flex-column">
            <?php 
            if(isset($_GET['course_id'])){
              $course_id=$_GET['course_id'];
              $sql = "SELECT * FROM lesson WHERE course_id = '$course_id'";
              $result = $conn->query($sql);
              if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
                      echo '<li class="nav-item border-bottom py-2"
                      movieurl='.$row['lesson_link'].' style="cursor:
                      pointer;">'. $row['lesson_link'] .'</li>';
                  }
              } 
            }
            ?></ul>
      </div>
      <div class="col-sm-8">
      <video src="" id="videoarea" class="mt-5 w-75 ml-2" controls></video>
      </div>
     </div>
    </div>


<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>

<script src="js/custom.js"></script>
</body>
</html>