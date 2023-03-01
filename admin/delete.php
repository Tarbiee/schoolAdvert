<?php
 include("config.php");
$id=$_GET['delete'];
$query = "DELETE FROM school  WHERE id='$id' "; 
$result = mysqli_query($conn,$query) ;
if($result){
    echo "deleted successfully";
header("Location: admin_page.php"); 
}
else{
    echo "not deleted";
}
?> 