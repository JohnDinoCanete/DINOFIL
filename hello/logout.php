<?php 
session_start();
session_destroy();
echo "You have been logged out";
echo "<a href=\"index.php\">LOGIN</a>";
?>