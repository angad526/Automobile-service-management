
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
				<form action="user_action.php" method="POST" enctype="multipart/form-data">
					<h3> User Registration</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">First Name:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account"></i>
								<input type="text" name="first" class="form-control"  required />
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Last Name</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account"></i>
								<input type="text" name="last" class="form-control" required />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Email:</label>
							<div class="form-holder">
									<i class="zmdi zmdi-email"></i>
								<input type="text" name="email" class="form-control" placeholder="" required />
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Phone Number:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-phone"></i>
								<input type="text" name="number" maxlength="10" minlength="10" class="form-control" placeholder="" required />
							</div>
						</div>
						
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Password:</label>
							<div class="form-holder">
							
								<input type="password" name="password" class="form-control" placeholder="" required />
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Street Address:</label>
							<div class="form-holder">
							<i class="zmdi zmdi-gps-dot"></i>
								<input type="text" name="address" class="form-control" placeholder="" required />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">city:</label>
							<div class="form-holder">
							<i class="zmdi zmdi-pin-drop"></i>
								<input type="text" name="city" class="form-control" required>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Pincode:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock"></i>
								<input type="text" name="pincode" class="form-control" placeholder="" required />
							</div>
						</div>

					</div>
					<div class="form-group">
						
						
						<div class="button-holder">
						<button type="submit" name="register_now">Register Now</button>
					</div>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>