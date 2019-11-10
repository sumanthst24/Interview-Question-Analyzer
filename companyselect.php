<!DOCTYPE html>
<html>
<head>
</head>
<center>
<style>
html {
  background: url(https://delcon.net.au/wp-content/uploads/2018/10/question-mark-1872634_1280-862x474.jpg) no-repeat center fixed;
  background-size: cover;
}

.block {
  display: block;
  width: 7%;
  border: none;
  background-color: #4CAF50;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

#wrapper{width:500%; height:400px; border:1px solid black;}
button{height:50px; position:relative; margin: 10px 60px; width:100x; top:50%; left:0%;}


.block:hover {
  background-color: #ddd;
  color: black;
}
</style>
<h2>
  <font color="white";>
<form action="selectcompanyquestion.php" method="post">
    <h1>The Company Details</h1>
  <p>Choose the Company</p>
  <label for="google">Google</label>
  <input id="google" name="company[]" type="checkbox" value="1">
  <br>
  <label for="amazon">Amazon</label>
  <input id="amazon" name="company[]" type="checkbox" value="2">
  <br>
  <label for="facebook">Facebook</label>
  <input id="facebook" name="company[]" type="checkbox" value="3">
  <br>
  <label for="apple">Apple</label>
  <input id="apple" name="company[]" type="checkbox" value="4">
  <br>
  <label for="microsoft">Microsoft</label>
  <input id="microsoft" name="company[]" type="checkbox" value="5">
  <br>
  <button type="submit" class="button-submit  block">Submit</button>
</h2>
</form>
</center>
</html>
