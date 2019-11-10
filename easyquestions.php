<?php
$host="localhost";
$username="root";
$password="";
$dbname="iq_analyser";
$conn = new mysqli($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
            $sql = "select question,difficulty from question_details where difficulty<5 order by difficulty asc";
            $data = mysqli_query($conn,$sql);
            if($sql != false){
            while($rec = mysqli_fetch_row($data)){
              echo "$rec[0] " ." $rec[1]";
              echo "<br>";
            }
            echo "<br>";
}
}
?>
