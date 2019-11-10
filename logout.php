<?php
echo "Logged out scuccessfully"; session_start();
header ("Location:login.php");
session_destroy();
?>
