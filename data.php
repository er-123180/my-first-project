<?php

$name =$_GET['n'];
$mobile = $_GET['m'];
$email = $_GET['e'];

$con = mysqli_connect("sql104.infinityfree.com", "if0_43278785","GmmRn2rn56","if0_43278785_root");

if ( mysqli_connect_errno()) {
	echo "Could not connect to database! <br>" . mysqli_connect_error ();
	
}else echo "Database connected successfully!";


$sql = "INSERT INTO my_user (name, email, mobile)VALUES ('$name', '$email', '$mobile') ";
$result=mysqli_query ($con,$sql);
if($result) echo "Your data inserted sucessfully";
    else echo " Data insert fail";

?>
