<style>
    *{
      padding: 0;
      margin:0;
      font-family: 'Arial', black;
      justify-content: center;
      align-items:center;
      text-align:center;
    }
    
    body{
        justify-content: center;
        background-color:black;
        color: white;
        align-items:center;
        text-align:center;
    }
    .container {
       width:1100px;
       justify-content: center;
       align-items:center;
       flex-wrap: wrap;
       padding: 40px;
       margin-top: 4%;
    }
    /*  */
    /* .container .contents .imgbx{
        box-shadow:0.5px 10px #e6e6e6;
        transition: 0.3s ease-in-out;
        width:360px;
        height:360px;        
    } */
     .container .contents .imgbx img{
      height: 450px;

    } 
   
</style>
<?php 
@include 'Navbar.php';
@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class= "container">
        <h2>SCHOOL ADVERTISMENT</h2>
  
</body>

    
</body>
</html>

    <?php
    // Connect to database
    $conn = mysqli_connect('localhost','root','','school_db');

    // Retrieve data from database
    $sql = "SELECT id, sname, slocation, simage, feestructure, performance, about, diet, coCurricularActivities,
    boardingFacilities, sports, infrastracture, rules FROM school";
    $result = mysqli_query($conn, "SELECT * FROM school");

    // Loop through data and populate list items
    if (!$result) {
      echo "Error: " .mysql_error($conn);
    }{
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="container">
            <div class="contents">
                <div class="text1">
                    <h3>School Name</h3>
                <p> <?php echo $row['sname']; ?></p><br>
                <h3>School Location</h3>
               <p><?php echo $row['slocation']; ?></p><br>
                </div>
                <div class="imgbx">
           <?php
            echo" <h3>School Image</h3>";
            echo "<img src='uploaded_img/" . $row["simage"] . "'>" . "<br>";
            echo" <h3>School Feestructure</h3>";
            echo "<img src='uploaded_img/" . $row["feestructure"] . "'>"  . "<br>";
            echo" <h3>School Performance</h3>";
            echo "<img src='uploaded_img/" . $row["performance"] . "'>"  . "<br>";?>
                </div>
                <div class="text2">
                <h3>About School</h3>
            <p><?php echo $row['about']; ?></p><br>
            <h3>School Diet</h3>
            <p><?php echo $row['diet']; ?></p><br>
            <h3>School Co-Curricular Activies</h3>
            <p><?php echo $row['coCurricularActivities']; ?></p><br>
            <h3>SchoolBoarding Facilities</h3>
            <p><?php echo $row['boardingFacilities']; ?></td><br>
            <h3>School Sports</h3>
            <p><?php echo $row['sports']; ?></p><br><br>
            <h3>School Infrastructure</h3>
            <p><?php echo $row['infrastracture']; ?></p><br>
            <h3>School Rules</h3>
           <p><?php echo $row['rules']; ?></p>
           
           
                </div>
            </div>
            </div>
            
            <?php
        }
    } 

    // Close database connection
    $conn->close();
    ?>
