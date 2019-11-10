<?php
$host="localhost";
$username="root";
$password="";
$dbname="iq_analyser";
$conn = new mysqli($host, $username, $password, $dbname);
$conn2 = new mysqli($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['questionno'])) {
    $questionno = $_POST['questionno'];

}
if (isset($_POST['question'])) {
    $question = $_POST['question'];

}
if (isset($_POST['cid'])) {
    $cid = $_POST['cid'];
}
if (isset($_POST['tid'])) {
    $tid = $_POST['tid'];
}
if (isset($_POST['diff'])) {
    $diff = $_POST['diff'];

}
if (isset($_POST['freq'])) {
    $freq = $_POST['freq'];
}

$query="select qno from question_details where qno==$questionno";
$result = mysqli_query($conn,$query);
if (($result) == null){
$sql= " insert into question_details (qno,question,difficulty,frequency) values ('$questionno','$question','$diff','$freq'); ";
$sql2="insert into linking(cid,topic_id,qno) values ('$cid','$tid','$questionno')";
}
if ($conn->query($sql) === TRUE and $conn2->query($sql2) === TRUE ) {
  echo " QUESTION  details inserted successfully";
} else {
    echo "didnt meet the credentials required(question number should be unique)";
}


mysqli_close($conn);
?>
