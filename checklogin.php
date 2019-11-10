<?php
$host="localhost";
$username="root";
$password="";
$dbname="iq_analyser";
$conn = new mysqli($host, $username, $password, $dbname);
if (isset($_POST['user_id'])) {
    $uid = $_POST['user_id'];

}
if (isset($_POST['password'])) {
    $pw= $_POST['password'];

}

{
$query = "SELECT * FROM login_credentials WHERE user_id = '$uid' AND password= '$pw' ;";
$result = mysqli_query($conn,$query);
if (mysqli_num_rows($result) == 1 ){
{
session_start();
header("location: dashboard.php");
 }
}
 else if(mysqli_num_rows($result) == 0){
 echo "user id or password is wrong";
 }
}
?>
