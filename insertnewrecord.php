<?php
$host="localhost";
$username="root";
$password="";
$dbname="iq_analyser";
$conn = new mysqli($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['user_id'])) {
    $userid = $_POST['user_id'];

}
if (isset($_POST['user_name'])) {
    $username = $_POST['user_name'];

}
if (isset($_POST['password'])) {
    $password = $_POST['password'];

}
$query="select * from registration_details where user_id==$userid";
$result = mysqli_query($conn,$query);
if (($result) == null){
$sql= " insert into registration_details (user_id,user_name,password) values ('$userid','$username','$password'); ";
$sql2="insert into user(user_id,user_name) values ('$userid','$username');";
$sql3="insert into login_credentials(user_id,password) values ('$userid','$password');";
}
if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE and $conn->query($sql3) === TRUE ) {
    header("Location:login.php");
} else {
    echo "didnt meet the credentials required ";
}


mysqli_close($conn);
?>
