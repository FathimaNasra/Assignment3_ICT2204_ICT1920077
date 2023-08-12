<?php
$db=new mysqli("localhost","root","","portfolio");

if(!$db){

echo "failed";
}
session_start();


?>


 <?php
$conn = mysqli_connect("localhost", "root", "", "portfolio");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
 
// Taking all 5 values from the form data(input)
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];


// We are going to insert the data into our contact_details table
$sql = "INSERT INTO contact_details VALUES ('$name',
    '$email','$subject','$message')";

// Check if the query is successful
if(mysqli_query($conn, $sql)){
    echo "<script>window.open('1.php','_self');</script>";
    
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}


?>

