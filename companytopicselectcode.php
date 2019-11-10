<?php
$host="localhost";
$username="root";
$password="";
$dbname="iq_analyser";
$conn = new mysqli($host, $username, $password, $dbname);
if(!empty($_POST['company'])) {
    foreach($_POST['company'] as $check) {
            //echo $check;
            $sql = "SELECT * FROM company_details where cid=$check";
            $data = mysqli_query($conn,$sql);
            while($rec = mysqli_fetch_row($data))
            {
            echo "$rec[1]";
            echo "<br>";
            if(!empty($_POST['topic'])) {
                foreach($_POST['topic'] as $chek) {
                  $sql2 ="select DISTINCT(topic_id) from linking where (cid=$rec[0] and topic_id=$chek)";
                  $data2=mysqli_query($conn,$sql2);
                  while($record=mysqli_fetch_row($data2)){
                  $sqlquery="select DISTINCT(question) from question_details join linking on (linking.qno=question_details.qno) where (linking.cid=$rec[0] and linking.topic_id=$record[0])" ;
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

          }
}
}
?>
