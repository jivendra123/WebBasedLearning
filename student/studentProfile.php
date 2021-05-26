<?php
if(!isset($_SESSION)){
  session_start();
}
include('./stuInclude/stuheader.php');
include_once('../dbconection.php');

if(isset($_SESSION['is_login'])){
    $stuEmail = $_SESSION['stuLogEmail'];
}else {
    echo "<script> location.href='../index.php'; </script>";
}

$sql = "SELECT * FROM student1 WHERE stu_email='$stuEmail'";
$result = $conn->query($sql);
if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    $stuId = $row["stu_id"];
    $stuName = $row["stu_name"];
    $stuImg = $row["stu_img"];
}

if(isset($_REQUEST['updateStuNameBtn'])){
    if($_REQUEST['stuName']==""){
        $passmsg ='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">All fields required</div>' ;
    }else{
        $stuName=$_REQUEST["stuName"];
        $stu_image = $_FILES['stuImg']['name'];
        $stu_image_temp = $_FILES['stuImg']['tmp_name'];
        $img_folder = '../image/stu'. $stu_image;
        move_uploaded_file($stu_image_temp, $img_folder);
        $sql = "UPDATE student1 SET  stu_name = '$stuName', stu_img='$img_folder'
        WHERE stu_email='$stuEmail'";

        if($conn->query($sql) == TRUE){
            $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>' ;
        }else{
            $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update</div>' ;
        }
    }
}
?>

<div class="col-sm-6 mt-5">
 <form class="mx-5" method="POST" enctype="multipart/form-data" >
 <div class="form-group">
     <label for="stuId"> Student ID :</label>
     <input type="text" class="form-control" id="stuId" name="stuId" value="<?php
     if(isset($stuId)) {echo $stuId; } ?>" readonly>
    </div>
    <div class="form-group">
     <label for="stuEmail">Email :</label>
     <input type="email" class="form-control" id="stuEmail" value="<?php
     echo $stuEmail ?>" readonly >
    </div>
    <div class="form-group">
     <label for="stuName">Name :</label>
     <input type="text" class="form-control" id="stuName" name="stuName" value="<?php
     if(isset($stuName)) {echo $stuName;}?>">
    </div>
    <div class="form-group">
     <label for="stuImg"> Upload Image</label>
     <input type="file" class="form-control-file" id="stuImg" name="stuImg" >
    </div>
    <button type="update" class="btn btn-info" name="updateStuNameBtn">Update</button>
    <?php if(isset($passmsg)) {echo $passmsg;} ?>
 </form>
 </div>

 </div>


<?php 
include('./stuInclude/stufooter.php');
?>