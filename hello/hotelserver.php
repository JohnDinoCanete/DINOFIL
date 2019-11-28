<html>
<head>
	<title>Hotel Book Site</title>
</head>
<style>


</style>
<body>
<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['Submit'])) {	
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $email = $_POST['email'];
	$age = $_POST['age'];
	$location = $_POST['location'];
		
	// checking empty fields
	if(empty($fname) || empty($lname) || empty($email) || empty($age) || empty($location)) {
				
		if(empty($fname)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($lname)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
    }
    if(empty($age)) {
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
		$sql = "INSERT INTO hotel_tbl(firstname,lastname,email, age, location) VALUES(:firstname, :lastname, :email, :age, :location)";
		$query = $dbConn->prepare($sql);		
    $query->bindparam(':firstname', $fname);
    $query->bindparam(':lastname', $lname);
    $query->bindparam(':email', $email);
		$query->bindparam(':age', $age);
    $query->bindparam(':location', $location);
    $query->execute(array(':firstname' => $fname,':lastname' => $lname,':email' => $email, ':age' => $age, ':location' => $location));
		// Alternative to above bindparam and execute
		// $query->execute(array(':name' => $name, ':email' => $email, ':age' => $age));
		
		//display success message

	}
}
?>

	<div class="hotel">
	<center>
	<img src="reserve.jpg"><br><br>
	<a href="main.php"><img src="arrow.jpg" width="150px;"></a>
</center>

	</div>
</body>
</html>