<?php
require_once('database.php');

ini_set('display_errors', 1);
session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query1 = "SELECT * FROM user_table where (email = '".$username."' OR phone_number = '".$username."') and password = '".$password."'"; 
	$result1 = mysqli_query($conn, $query1);  
	$row = $result1->fetch_assoc();   
	$count = mysqli_num_rows($result1);  
	if($count == 1)
	{
	   $_SESSION['id'] = $row['id'];
	   $_SESSION['first_name'] = $row['first_name'];
	   $_SESSION['last_name'] = $row['last_name'];
	   $_SESSION['email'] = $row['email'];
	   $_SESSION['phone_number'] = $row['phone_number'];
	   $_SESSION['street_address1'] = $row['street_address1'];
	   $_SESSION['street_address2'] = $row['street_address2'];
	   $_SESSION['city'] = $row['city'];
	   $_SESSION['pincode'] = $row['pincode'];
	   header("Location: index.php");
	   
	}  
	else{  
		echo "<h1> Login failed. Invalid username or password.</h1>";
		
	}     
?>