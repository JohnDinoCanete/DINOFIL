<!DOCTYPE html>
<html>
<head>
<title>PHP GET and POST Method Example</title>
<!-- Include CSS  File Here-->
<link rel="stylesheet" href="sample.css"/>
<!-- Include JavaScript File Here-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/get_post.js"></script>
</head>
<body>
<div class="container">
<div class="main">

<form method="" action="demo1.php" id="form">
<h2>Payment Form</h2>
<label>Select Payment Method :</label>
<span><input type="radio" name="method" value="post"> Cash
<input type="radio" name="method" value="get"> Visa </span>
<label>First Name :</label>
<input type="text" name="fname" id="fname" />
<label>Last Name :</label>
<input type="text" name="lname" id="lname" />
<input type="submit" name="submit" id="submit" value="Submit">
</form>
<?php include "demo1.php";?>
</div>
</div>
</body>
</html>