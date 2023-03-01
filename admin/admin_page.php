<?php

@include 'config.php';
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
   <style>
          *{
      max-width:100%;
       position:relative;
      max-height:100%;
      justify-content: center;
      align-items:center;
      text-align:center;
    }
    th, td, tr, table {padding: 0; margin: 0;}	
	
	th {border-left:1px solid #333; border-bottom: 1px solid #333;}
	
	td {padding:1px; border-left: 1px solid #999;}
	
   </style>

</head>
<body>
     <h1 style="padding:20px;"><a href="admin_addschool.php">Add New School</a></h1>
   
   <div class="list-container">
     
        <table>
         <tr>
             <th> id</th>
            <th> school name</th>
            <th> school location</th>
            <th> school image</th>
            <th> school feestructure</th>
            <th> school performance</th>
            <th> school about</th>
            <th> school diet</th>
            <th> school coCurricularActivities</th>
            <th>  school boardingFacilities</th>
            <th>  school sports</th>
           <th>  school infrastructure</th>
            <th>  school rules</th>
            <th>  action</th>
            <th> </tr>
         <?php 
           include ("config.php");
          $select = mysqli_query($conn, "SELECT * FROM school");
          $i=1;
         while($row = mysqli_fetch_array($select, MYSQLI_ASSOC)){

            ?>

         <tr align="center">
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['sname']; ?></td>
            <td><?php echo $row['slocation']; ?></td>
            <td><img src="<?php echo $row['simage']; ?>" height="100" alt=""></td>
            <td><img src="<?php echo $row['feestructure']; ?>" height="100" alt=""></td>
            <td><img src="<?php echo $row['performance']; ?>" height="100" alt=""></td>
            <td><?php echo $row['about']; ?></td>
            <td><?php echo $row['diet']; ?></td>
            <td><?php echo $row['coCurricularActivities']; ?></td>
            <td><?php echo $row['boardingFacilities']; ?></td>
            <td><?php echo $row['sports']; ?></td>
            <td><?php echo $row['infrastracture']; ?></td>
            <td><?php echo $row['rules']; ?></td>
            <td>
               <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="delete.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
         <?php } ?>
         </table>
   </div>

</div>
</body>
</html>