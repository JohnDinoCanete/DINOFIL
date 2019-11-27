<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="reg.css">
  <style type="text/css">
  body{
	background-image: url(sea.jpg);
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
  <?php include('server.php') ?>
  <?php include('errors.php') ?>
    <img src="avatar.png" class="avatar">
        <h1>Register</h1>
            <form action="index.php" method="POST" style="width:200px;" required>
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" value="<?php echo $username; ?>" required>
            <p>Password</p>
            <input type="password" name="password_1" placeholder="Enter Password" required>
            <p>Confirm Password</p>
            <input type="password" name="password_2" placeholder="Re Enter Password" required>
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Email" value="<?php echo $email; ?>" required>
            <input type="submit" name="reg_user" value="Register">   
            </form>
        
        
        </div>
</body>
</html>