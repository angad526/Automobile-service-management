<?php
  require_once('database.php');
 
  
  
 if(isset($_POST['first']) && $_POST['first'] != "")
 {
	if(isset($_POST['last']) && $_POST['last'] != "")
	{
		if(isset($_POST['email']) && $_POST['email'] != "")
		{
			if(isset($_POST['number']) && $_POST['number'] != "")
			{
				if(isset($_POST['password']) && $_POST['password'] != "")
				{
					if(isset($_POST['address']) && $_POST['address'] != "")
					{
						if(isset($_POST['city']) && $_POST['city'] != "")
						{
							if(isset($_POST['pincode']) && $_POST['pincode'] != "")
							{
								session_start();
								$first = $_POST['first'];
								$last = $_POST['last'];
								$email = $_POST['email'];
								$number = $_POST['number'];
								$password = $_POST['password'];
								$address = $_POST['address'];
								$city = $_POST['city'];
								$pincode = $_POST['pincode'];
								$created_on = date('Y-m-d H:i:s');
								
								$query1 = "INSERT INTO user_table(first_name,last_name,email,phone_number,password,street_address1,city,pincode) VALUES('".$first."', '".$last."', '".$email."', '".$number."', '".$password."', '".$address."', '".$city."', '".$pincode."')";
								if($conn->query($query1) === TRUE)

									{
										$_SESSION['email'] = $email;
										$_SESSION['first_name'] = $first;
										header("Location: index.php");
									}
									else 
									{
										echo "Error: " . $sql . "<br>" . $conn->error;
									}
								
							}
							else
							{
								header("Location: sing_up.php?error:pincode is required"); die;
							}
						}
						else
						{
							header("Location: sing_up.php?error:city is required"); die;
						}
					
					}
					else
					{
						header("Location: sing_up.php?error:Address2 is required"); die;
 	
					}
				}
				else
				{
					header("Location: sing_up.php?error:Address1 is required"); die;
 	
				}
			}
			else
			{
				header("Location: sing_up.php?error:Phone number is required"); die;
 
			}
		
		}
		else
		{
			header("Location: sing_up.php?error:email is required"); die;
 
		}
	}
	else
	{
		header("Location: sing_up.php?error:Last Name field is required"); die;
 
	}
     
 }
 else
 {
	 header("Location: sing_up.php?error:First Name field is required"); die;
 }
?>