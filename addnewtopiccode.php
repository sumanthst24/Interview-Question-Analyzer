<?php
$host="localhost";
$username="root";
$password="";
$dbname="iq_analyser";
$conn = new mysqli($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['topicid'])) {
    $tid = $_POST['topicid'];

}
if (isset($_POST['topicname'])) {
    $tname = $_POST['topicname'];

}


$query="select topic_id from topics where topic_id==$tid";
$result = mysqli_query($conn,$query);
if (($result) == null){
$sql= " insert into topics (topic_id,topic_name) values ('$tid','$tname'); ";
}
if ($conn->query($sql) === TRUE ) {
  echo "Topic details inserted successfully";
} else {
    echo "didnt meet the credentials required(topic number should be unique)";
}


mysqli_close($conn);
?>
