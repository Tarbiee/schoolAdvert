<?php

@include 'config.php';

$id = $_GET['edit'];
$sql = "SELECT * FROM school WHERE id='$id' ";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
     <!-- custom css file link  -->
     <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">


<div class="admin-product-form-container centered">

   <?php

      while($row = $result ->fetch_assoc()){

   ?>
   
   <form action="update.php" method="post" enctype="multipart/form-data">
   <h3>Update school</h3>
         <div class="row">
            <div class="col-md-6 mb-3">
               <label for="">school_name</label>
               <textarea name="school_name"  value="<?php echo $row['sname'];?>" class="form-control" required></textarea>
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
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>