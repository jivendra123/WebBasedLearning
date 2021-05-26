<!--start header includeing-->
<?php
include('./dbconection.php');
include('./header.php');
?>
<!--end header includeing-->



<div class="container mt-8">
<h1 class="text-center ">All Courses</h1>
<div class="row justify-content-center">

  <div class="row mt-4">
    <?php 
     $sql = "SELECT * FROM course";
     $result = $conn->query($sql);
     if($result->num_rows > 0){
     while($row = $result->fetch_assoc()){
      $course_id = $row['course_id'];
      echo
      ' <div class="col-md-4 mt-5">
    <div class="card shadow" style="width: 20rem;">
<div class="inner ">
<img src="'. str_replace('..','.',$row['course_img']).'" class="card-img-top" alt="C++">
</div>
  <div class="card-body">
    <h5 class="card-title">'.$row['course_name'].'</h5>
    <p class="card-text">'.$row['course_desc'].'</p>
    <div class="card-footer">
         <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].' </del></small>
        <span class="font-weight-bolder">&#8377 '.$row['course_price'].'<span></p>
    <a href="coursedetails.php?course_id='.$course_id.'" class="btn btn-success text-white float-right">Enroll</a>
</div>
  </div>
</div>
</div> ';
    }
  } 
    ?>
  </div>
</div>
</div>
</div>
<!--start footer includeing-->
<?php
include('./footer.php');
?>
<!--end footer includeing-->