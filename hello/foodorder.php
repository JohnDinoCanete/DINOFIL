<!DOCTYPE html>
<html>
<head>
  <title>Hotel Bookings</title>
  <link rel="stylesheet" type="text/css" href="hotel.css">
  <style type="text/css">
  body{
	background-image: url(hotelbook.jpg);
	background-attachment:fixed;
	background-size:cover;
  }
  form, .content {
    width: 30%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid #b0c4de40;
    background: #ffffff80;
	border-radius: 0px 0px 10px 10px;
	color:red;
}
</style>
</head>
<body>
  <div class="header">
  
  </div>
	
  <div class="login-box">

    <img src="avatar.png" class="avatar">
        <h1>Enter your information</h1>
        <strong style="color:red;">Note: We hide your information for your safety!</strong>
            <form action="foodserver.php" method="POST" style="width:200px;" required>
            <p>First Name</p>
            <input type="text" name="firstname" placeholder="Enter First Name"  required>
            <p>Last Name</p>
            <input type="text" name="lastname" placeholder="Enter Last Name"  required>
            <p>Contact</p>
            <input type="text" name="contact" placeholder="Enter Contact" required>
            <p>Address</p>
            <input type="text" name="address" placeholder="Enter Address" required>
            <p>Location</p>
            <input type="text" name="location" placeholder="Enter Location" required>
          <input type="submit" name="Submit" value="Proceed"> 
            </form>
        
        
        </div>
</body>
</html>