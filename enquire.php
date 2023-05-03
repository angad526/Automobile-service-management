<?php
 require_once('database.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/bg.jpg');">
			<div class="inner">
				<form action="service_action.php" method="POST" enctype="multipart/form-data">
					<h3>Service Form</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">vehicle type</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account"></i> 
							<select name="vehicle_type" id="cars" class="form-control">
								<option value="2 wheeler">2 Wheeler</option>
								<option value="4 wheeler">4 Wheeler</option>
								
								
							</select>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Services</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account"></i> 
							<select name="services" id="cars" class="form-control">
								<option value="Car checkup">Car checkup</option>
								<option value="Car Wash">Car Wash</option>
								<option value="Car Repair">Car Repair</option>
								<option value="Car Paint">Car Paint</option>
								<option value="Car Decor">Car Decor</option>
								<option value="Car Polish">Car Polish</option>
								
							</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">vehicle Number:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account"></i>
								<input type="text" name="vehicle_number" class="form-control" required />
							</div>
						</div>
					
					
						<div class="form-wrapper">
							<label for="">Make:</label>
							<div class="form-holder">
									
								<input type="text" name="make" class="form-control" placeholder="" required />
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Model:</label>
							<div class="form-holder">
								
								<input type="text" name="model" maxlength="" minlength="" class="form-control" placeholder="" required />
							</div>
						</div>
						
					
					
						<div class="form-wrapper">
							<label for="">Any special instruction: </label>
							<div class="form-holder">
							
								<textarea name="any_special_instruction" rows="2" cols="30"></textarea>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Appointment Date:</label>
							<div class="form-holder">
							
								<input type="date" name="appointment_date" class="form-control" placeholder="" required />
								
							</div>
						</div>
					</div>
					
						<div class="form-group">
						<div class="button-holder" name="register">
							<button type="submit">Register Now</button>
						</div>
				</form>
			</div>
		
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>