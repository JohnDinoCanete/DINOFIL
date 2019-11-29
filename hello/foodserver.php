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
  $card = $_POST['card'];
  $food = $_POST['food'];
  $qua = $_POST['qua'];
		
	// checking empty fields
	if(empty($fname) || empty($lname) || empty($card) || empty($food) || empty($qua)) {
				
		if(empty($fname)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($lname)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($card)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
	}
		
	if(empty($food)) {
		echo "<font color='red'>Email field is empty.</font><br/>";
}

	
if(empty($qua)) {
	echo "<font color='red'>Email field is empty.</font><br/>";
}

    
		//insert data to database		
		$sql = "INSERT INTO food_tbl(firstname,lastname,card,food,qua)VALUES(:firstname, :lastname, :card, :food, :qua)";
		$query = $dbConn->prepare($sql);		
    $query->bindparam(':firstname', $fname);
    $query->bindparam(':lastname', $lname);
	$query->bindparam(':card', $card);
	$query->bindparam(':food', $food);
	$query->bindparam(':qua', $qua);
    $query->execute(array(':firstname' => $fname,':lastname' => $lname,':card' => $card ,':food' => $food ,':qua' => $qua));
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