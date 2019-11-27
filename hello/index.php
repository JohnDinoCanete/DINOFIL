<?php include('server.php') ?>
  <?php include('errors.php') ?>
<html>
<head>
    <title> AICS PROJECT COMPUTER PROGRAMMING </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
            <form action="main.php" method="POST">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" name="login_user" value="Login">
            <a href="register.php">Sign up</a>    
            </form>
        
        
        </div>
    
    </body>
</html>
<?php 
session_start();
if(isset($_SESSION['username'])){
    header("location:main.php");
}
include_once ('config.php');
if(isset($_POST['login'])){
   $susername = $_POST['username'];
   $spassword = $_POST['password'];
   $sql = "select * from mydatabase.tusers where username = :username && password = :pass";
   $query = $conn -> prepare($sql);
   $query -> bindParam(':username', $susername);
   $query -> bindParam(':password', $spassword);
   $query -> execute();
   while($row = $query->fetch(PDO::FETCH_ASSOC)){
       $nickname = $row['nickname'];
   }
    $result = $query->rowCount();
    if($result > 0){
        $_SESSION['username'] = $susername;
        $_SESSION['nickname'] = $nickname;
        header("location:main.php");
    }
    else
    {
        echo "Error: Wrong Username or Password";
    }
}
?>