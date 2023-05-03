<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>Automobile</title>
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet"> 
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico"> 
   
</head>
<body>

<section id="service_history">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Enquired Items</h2>
                <p class="text-center wow fadeInDown"></p>
            </div>        
    <?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "automobile");
session_start();
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($_SESSION==NULL){
    echo "<h3 align='center'>Login/SignUp to View</h3>";
    return;
}
$email= $_SESSION['email'];
$sql="";
// Retrieve data from the service_form table
if($email=="avadheshangad@gmail.com"){
    $sql = "SELECT * FROM service_form";
}
else{
    $sql = "SELECT * FROM service_form WHERE email='$email'";
}

$result = mysqli_query($conn, $sql);

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    // Loop through each row
    echo "<div class = 'row justify-content-center'>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        // Display the data in an HTML card
        echo "<div class = 'col-md-4 align-self-center'>";
        echo "<div class='card'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>" . $row['model'] . "</h5>";
        echo "<p class='card-text'>Requirements</p>";
        echo "</div>";
        echo "<ul class='list-group list-group-flush'>";
        echo "<li class='list-group-item'>make: " . $row['make'] . "</li>";
        echo "<li class='list-group-item'>Special Requirements: " . $row['any_special_instruction'] . "</li>";
        echo "<li class='list-group-item'>Type: " . $row['vehicle_type'] . "</li>";
        echo "<li class='list-group-item'>Number: " . $row['vehicle_number'] . "</li>";
        echo "<li class='list-group-item'>Date: " . $row['appointment_date'] . "</li>";
    
        echo "</ul>";
        echo "<div class='card-body'>";
        
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    echo "</div>";
} else {
    echo "No data found";
}

// Close the database connection
mysqli_close($conn);
?>
						
</div>
    </section><!--/#enquired Items-->
</body>
</html>