<?php
$host="localhost";
$username="root";
$password="";
$dbname="iq_analyser";
$conn = new mysqli($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['companyid'])) {
    $companyid = $_POST['companyid'];

}
if (isset($_POST['company_name'])) {
    $companyname = $_POST['company_name'];

}

$query="select cid from company_details where cid==$companyid";
$result = mysqli_query($conn,$query);
if (($result) == null){
$sql= " insert into company_details (cid,company_name) values ('$companyid','$companyname'); ";
}
if ($conn->query($sql) === TRUE ) {
  echo "company details inserted seccessfully";
} else {
    echo "didnt meet the credentials required ";
}


mysqli_close($conn);
?>
