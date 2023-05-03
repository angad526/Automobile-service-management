<?php

require_once('database.php');



if (isset($_POST['vehicle_type']) && $_POST['vehicle_type'] != "") {
	if (isset($_POST['services']) && $_POST['services'] != "") {
		if (isset($_POST['vehicle_number']) && $_POST['vehicle_number'] != "") {
			if (isset($_POST['make']) && $_POST['make'] != "") {
				if (isset($_POST['model']) && $_POST['model'] != "") {
					if (isset($_POST['any_special_instruction']) && $_POST['any_special_instruction'] != "") {
						if (isset($_POST['appointment_date']) && $_POST['appointment_date'] != "") {
							session_start();
							$vehicle_type = $_POST['vehicle_type'];
							$services = $_POST['services'];
							$vehicle_number = $_POST['vehicle_number'];
							$make = $_POST['make'];
							$model = $_POST['model'];
							$any_special_instruction = $_POST['any_special_instruction'];
							$appointment_date = $_POST['appointment_date'];
							$email=$_SESSION['email'];

							$created_on = date('Y-m-d H:i:s');

							$query = "INSERT INTO service_form(vehicle_type,services,vehicle_number,make,model,any_special_instruction,appointment_date,created_on,email) VALUES('" . $vehicle_type . "', '" . $services . "', '" . $vehicle_number . "', '" . $make . "', '" . $model . "', '" . $any_special_instruction . "', '" . $appointment_date . "', '" . $created_on . "','" . $email . "')";
							if ($conn->query($query) === TRUE) {

								echo "<script>					
alert('Form Submitted');
window.location.href='index.php';
</script>";

							} else {
								echo "Error: " . $sql . "<br>" . $conn->error;
							}
						} else {
							header("Location: sing_up.php?error:appointment date is required");
							die;
						}

					} else {
						header("Location: sing_up.php?error:any special instruction is required");
						die;

					}
				} else {
					header("Location: sing_up.php?error:model is required");
					die;

				}
			} else {
				header("Location: sing_up.php?error: make is required");
				die;

			}

		} else {
			header("Location: sing_up.php?error:vehicle number is required");
			die;

		}
	} else {
		header("Location: sing_up.php?error:services field is required");
		die;

	}

} else {
	header("Location: sing_up.php?error:vehicle type is required");
	die;
}
?>