<?php
$host="localhost";
$username="root";
$password="";
$dbname="iq_analyser";
$conn = new mysqli($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM company_details";
$data = mysqli_query($conn,$sql);
while($rec = mysqli_fetch_row($data))
{
echo "$rec[0]  ";
echo "$rec[1]<br>";
}
?>
