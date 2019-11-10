<?php
$host="localhost";
$username="root";
$password="";
$dbname="iq_analyser";
$conn = new mysqli($host, $username, $password, $dbname);
if(!empty($_POST['topic'])) {
    foreach($_POST['topic'] as $check) {
            //echo $check;
            $sql = "SELECT * FROM topics where topic_id=$check";
            $data = mysqli_query($conn,$sql);
            while($rec = mysqli_fetch_row($data))
            {
            echo "$rec[1]";
            echo "<br>";
           $sqlquery="SELECT DISTINCT(question) FROM question_details join  linking on (question_details.qno)=(linking.qno) join  topics on (linking.topic_id=$rec[0])";
           $dat=mysqli_query($conn,$sqlquery);
            if($sqlquery != false){
            while($questiondetails = mysqli_fetch_row($dat))
            {
              echo "$questiondetails[0]";
              echo "<br>";
            }
          }
          }
            echo "<br>";
    }
}
?>
