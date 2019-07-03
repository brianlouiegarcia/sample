<?php
session_start();
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$age = $_POST['age'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$SESSION['user']=$firstname;
include_once('config.php');

if($conn){
	$query=mysqli_query($conn,"INSERT INTO tbl_sample(firstName, lastName,age,contactNo,emailADD)VALUES('".$firstName."','".$lastName."','".$age."','".$contact."','".$email."');");

	if($query>= 1){
		echo "Inserted";

	}else{
		echo"Not Inserted";
		die("error:".$conn->error);
	}
	mysqli_close($conn);

}else{
	die("error:" .$conn->error);
}
session_destroy();
?>