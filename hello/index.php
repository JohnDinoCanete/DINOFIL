<html>
<head>
    <title> AICS PROJECT COMPUTER PROGRAMMING </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
            <form action="index.php" method="POST">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="login">
            <a href="#">Forget Password</a>    
            </form>
        
        
        </div>
    
    </body>
</html>
<?php 
session_start();
if(isset($_SESSION['user'])){
    header("location:main.php");
}
include_once ('config.php');
if(isset($_POST['login'])){
   $susername = $_POST['username'];
   $spassword = $_POST['password'];
   $sql = "select * from mydatabase.tusers where username = :user && password = :pass";
   $query = $conn -> prepare($sql);
   $query -> bindParam(':user', $susername);
   $query -> bindParam(':pass', $spassword);
   $query -> execute();
   while($row = $query->fetch(PDO::FETCH_ASSOC)){
       $nickname = $row['nickname'];
   }
    $result = $query->rowCount();
    if($result > 0){
        $_SESSION['user'] = "ok";
        $_SESSION['nickname'] = $nickname;
        header("location:main.php");
    }
    else
    {
        echo "Error: Wrong Username or Password";
    }
}
?>