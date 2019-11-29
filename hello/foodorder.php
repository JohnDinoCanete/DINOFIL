<!DOCTYPE html>
<html>
<head>
<title>PHP GET and POST Method Example</title>
<link rel="stylesheet" href="sample.css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/get_post.js"></script>
</head>
<body>
<div class="container">
<div class="main">

<form method="" action="foodsecure.php"  id="form">
<h2>Order Form </h2>   
<label>Select    :</label>
<span><input type="radio" name="method" value="POST"> Cash 
<input type="radio" name="method" value="get"> Visa  <img src="card.jpg" width="150px;"  style="float:right;"></span>
<label>First Name :</label>
<input type="text" name="firstname" id="firstname" placeho  lder ="John Dino" required/>
<label>Last Name :</label>
<input type="text" name="lastname" id="lastname" placeholder ="Canete" required/>
<label>Card Number :</label>
<input type="text" name="card" id="card" placeholder="1234 2324 2321" required /> 
<label>Food Name :</label>
<input type="text" name="food" id="food" placeholder="Chocomocha" required />    
<label>Quantity :</label>
<input type="text" name="qua" id="qua" placeholder="1" required />          
<input type="submit" name="submit" id="submit" value="Submit">
</form> 
</div>      
</div>
</body>
</html>