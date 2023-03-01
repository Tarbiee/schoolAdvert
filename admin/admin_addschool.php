<?php
$color_code = array('#000000');
require_once 'config.php';

if(isset($_POST['add_school'])){

   $school_name = $_POST['school_name'];
   $school_location = $_POST['school_location'];
   $school_image = $_FILES['school_image']['name'];
   $school_feeStructure = $_FILES['school_feeStructure']['name'];
   $school_performance = $_FILES['school_performance']['name'];
   $school_about = $_POST['school_about'];
   $school_diet = $_POST['school_diet'];
   $school_coCurricularActivities = $_POST['school_coCurricularActivities'];
   $school_boardingFacilities = $_POST['school_boardingFacilities'];
   $school_sports = $_POST['school_sports'];
   $school_infrastracture = $_POST['school_location'];
   $school_rules = $_POST['school_rules'];
   $school_image="../uploaded_img/". $school_image;
   $school_feeStructure="../uploaded_img/". $school_feeStructure;
   $school_performance="../uploaded_img/".$school_performance;

   

   if($school_name=="" || $school_location=="" || $school_image=="" || $school_feeStructure=="" || $school_performance=="" || $school_about=="" || $school_diet=="" || 
   $school_coCurricularActivities=="" || $school_boardingFacilities=="" || $school_sports=="" || $school_infrastracture=="" || $school_rules==""){
      $message[] = 'please fill out all';
   }else{
      // $sql = "INSERT INTO school(sname, slocation, simage, feestructure, performance,about,diet,coCurricularActivities, boardingFacilities, sports, infrastructure, rules)
      // VALUES('$school_name', '$school_location', '$school_image','$school_feeStructure', '$school_performance', '$school_about', '$school_diet', '$school_coCurricularActivities', '$school_boardingFacilities', '$school_sports', '$school_infrastructure', '$school_rules)";
      $sql = "INSERT INTO school(sname,slocation,simage, feestructure, performance,about,diet,coCurricularActivities,boardingFacilities,sports,infrastracture,rules)
      VALUES('$school_name', '$school_location', '$school_image','$school_feeStructure', '$school_performance', '$school_about', '$school_diet', '$school_coCurricularActivities', '$school_boardingFacilities', '$school_sports', '$school_infrastracture', '$school_rules')";
      $upload = $conn->query($sql);
      if($upload){
        move_uploaded_file( $_FILES['school_image'] ['tmp_name'],$school_image);
        move_uploaded_file( $_FILES['school_feeStructure']['tmp_name'], $school_feeStructure);
        move_uploaded_file( $_FILES['school_performance']['tmp_name'],$school_performance);
         $message[] = 'new school added successfully';
      }else{
         $message[] = 'could not add the school';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM school WHERE id = $id");
   header('location:admin_page.php');
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="../css/style.css">

</head>
<body style="background-color:black;">
<h1 style="text-align:center; padding:20px;"><a href="admin_page.php">HOME</a></h1>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
   
<div class="container">

   <div class="admin-school-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a new school</h3>
         <div class="row">
            <div class="col-md-6 mb-3">
               <label for="">school_name</label>
               <textarea name="school_name" class="form-control" required></textarea>
            </div><br>
            <div class="col-md-6 mb-3">
               <label for="">school_location</label>
               <textarea name="school_location" class="form-control" rows="4" required></textarea>
            </div><br>
            <div class="col-md-6 mb-3">
               <label for="">school_image</label>
               <input type="file" accept="image/png, image/jpeg, image/jpg" required name="school_image" class="box">
            </div><br>
            <div class="col-md-6 mb-3">
               <label for="">school_feeStructure</label>
               <input type="file" accept="image/png, image/jpeg, image/jpg" required name="school_feeStructure" class="box">
            </div><br>
            <div class="col-md-6 mb-3">
               <label for="">school_performance</label>
               <input type="file" accept="image/png, image/jpeg, image/jpg" required name="school_performance" class="box">
            </div>
            <div class="col-md-6 mb-3">
               <label for="">school_about</label>
               <textarea name="school_about" class="form-control" required rows="4"></textarea>
            </div><br>
            <div class="col-md-6 mb-3">
               <label for="">school_diet</label>
               <textarea name="school_diet" class="form-control" required rows="4"></textarea>
            </div><br>
            <div class="col-md-6 mb-3">
               <label for="">school_coCurricularActivities</label>
               <textarea name="school_coCurricularActivities" required class="form-control" rows="4"></textarea>
            </div><br>
            <div class="col-md-6 mb-3">
               <label for="">school_boardingFacilities</label>
               <textarea name="school_boardingFacilities" required class="form-control" rows="4"></textarea>
            </div><br>
            <div class="col-md-6 mb-3">
               <label for="">school_sports</label>
               <textarea name="school_sports" class="form-control" required rows="4"></textarea>
            </div><br>
            <div class="col-md-6 mb-3">
               <label for="">school_infrastructure</label>
               <textarea name="school_infrastructure" class="form-control" required rows="4"></textarea>
            </div><br>
            <div class="col-md-6 mb-3">
               <label for="">school_rules</label>
               <textarea name="school_rules" class="form-control" required rows="4"></textarea>
            </div>

           
         </div>
         
         
         <input type="submit" class="btn" name="add_school" value="add school">
      </form>