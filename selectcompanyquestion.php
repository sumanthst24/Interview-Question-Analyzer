<?php
$host="localhost";
$username="root";
$password="";
$dbname="iq_analyser";
$conn = new mysqli($host, $username, $password, $dbname);
if(!empty($_POST['company'])) {
    foreach($_POST['company'] as $check) {
            //echo $check;
              $array=" ";
            $sql = "SELECT * FROM company_details where cid=$check";
            $data = mysqli_query($conn,$sql);
            while($rec = mysqli_fetch_row($data))
            {
            echo "$rec[1]"." company's interview questions"."<br>";
            echo "<br>";
           $sqlquery="SELECT DISTINCT(question) FROM question_details join  linking on (question_details.qno)=(linking.qno) join  company_details on (linking.cid=$rec[0])";
           $dat=mysqli_query($conn,$sqlquery);
            if($sqlquery != false){
            while($questiondetails = mysqli_fetch_row($dat))
            {
              echo "$questiondetails[0]";
              echo "<br>";
            }
            echo "<br>";
          }
          }
}
}
?>
