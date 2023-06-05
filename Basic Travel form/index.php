<?php
if(isset($_POST['Name'])){
$server="localhost";
$unername="root";
$password="";

$con= mysqli_connect($server,$unername,$password);

if(!$con){
    die("connection to this database failed due to" .
    mysqli_connect_error());
}
//echo"Success";


$Name= $_POST['Name'] ;
$Age= $_POST['Age'] ;
$class=$_POST['Class'] ;
$Gender=$_POST['Gender'] ;
$number=$_POST['number'] ;
$Email=$_POST['Email'] ;
$Other=$_POST['Other'] ;

$sql="INSERT INTO `trip`.`trip` (`Name`, `Age`, `Class`, `Gender`, `Phone`, `Email`, `Other`, `dt`) VALUES ('$Name', '$Age', '$class', '$Gender', '$number', '$Email', '$Other', current_timestamp())";
echo $sql;
if($con->query($sql)==true){
    echo"inserted";
}
else{
    echo"Error";
}
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class= "bg"src="bg.jpg" alt="Dhempe">
    <div class="container">
        <h3>Welcome to Dhempe college Travel Form</h3>
        <p>Enter your details below to Register yourself for the Trip</p>
        <br>
        <form action="index.php" method="post">
            <input type="text" name="Name" id="Name" class="text" placeholder="Enter your Name">
            
            <input type="text" name="Age" id="Age" class="text" placeholder="Enter your Age">
            
            <input type="text" name="Class" id="Class" class="text" placeholder="Enter your Class">
            
            <input type="text" name="Gender" id="gender" class="text" placeholder="Gender">
            
            <input type="text" name="number" id="number" class="text" placeholder="Enter your Phone Number">
            
            <input type="text" name="Email" id="Email" class="text" placeholder="Enter your Email">
            
            <textarea name="Other" id="Other" cols="30" rows="10" placeholder="Enter Any other information over here"></textarea>
            
            <button class="btn" >Submit</button>
            <button class="btn">Reset</button>

        </form>
    </div>
    <script src="index.js"></script>
  <!--- INSERT INTO `trip` (`Sr No.`, `Name`, `Age`, `Class`, `Gender`, `Phone`, `Email`, `Other`, `dt`) VALUES ('1', 'Test', '22', 'Fybsc', 'Male', '999999999', 'sohai', 'none', current_timestamp());--->
</body>
</html>