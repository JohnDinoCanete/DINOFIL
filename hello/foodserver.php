<html>
<head>
	<title>Book Site</title>
	<link rel="stylesheet" type="text/css" href="hotelserver.css">
</head>

<body>
<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['Submit'])) {	
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $contact = $_POST['contact'];
	$add = $_POST['address'];
	$location = $_POST['location'];
		
	// checking empty fields
	if(empty($fname) || empty($lname) || empty($contact) || empty($add) || empty($location)) {
				
		if(empty($fname)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($lname)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($contact)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
    }
    if(empty($add)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
    
    if(empty($location)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database		
		$sql = "INSERT INTO food_tbl(firstname,lastname,contact, address, location) VALUES(:firstname, :lastname, :contact, :address, :location)";
		$query = $dbConn->prepare($sql);		
    $query->bindparam(':firstname', $fname);
    $query->bindparam(':lastname', $lname);
    $query->bindparam(':contact', $contact);
		$query->bindparam(':address', $add);
    $query->bindparam(':location', $location);
    $query->execute(array(':firstname' => $fname,':lastname' => $lname,':contact' => $contact, ':address' => $add, ':location' => $location));
		// Alternative to above bindparam and execute
		// $query->execute(array(':name' => $name, ':email' => $email, ':age' => $age));
		
		//display success message
	}
}
?>
<center>
<div class="food">
<img src="motor.gif" width="350px;"><br>
<h1><font color='green'>Your Driver is on the way.</h1><br>
<a href="main.php"><img src="arrow.jpg" width="150px;"></a>
</center>
</div>
</body>
</html>