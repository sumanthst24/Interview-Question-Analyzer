<?php
$host="localhost";
$username="root";
$password="";
$dbname="iq_analyser";
$conn = new mysqli($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['userid'])) {
    $uid = $_POST['userid'];

}
if (isset($_POST['username'])) {
    $uname = $_POST['username'];

}

$query="select user_id from user where user_id='$uid' and user_name='$uname' ; ";
$result = mysqli_query($conn,$query);
if (($result) != null){
$sql="DELETE FROM login_credentials WHERE user_id = '$uid' ;";
$sql1="DELETE from registration_details where user_id='$uid' ;";
$sql2="DELETE from user where user_id='$uid' ;";
}
if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE and $conn->query($sql1) === TRUE) {
  echo "User details deleted successfully";
} else {
    echo "didnt meet the credentials required(userid or username doesnot exist)";
}


mysqli_close($conn);
?>
