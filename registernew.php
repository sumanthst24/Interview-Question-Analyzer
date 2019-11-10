<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: transparent;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
   padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: transparent;
}

.active {
  background-color: dodgerblue;
}
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;


}

.icon {
  padding: 10px;
  background: transparent;
  color: #00ff00;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
  background-color: transparent;
  color : white;
}

.input-field:focus {
  border: 2px solid #00ff00;
}

/* Set a style for the submit button */
.btn {
  background-color: transparent;
  color: #00ff00;
  padding: 15px 20px;
  border: 2px solid #00ff00;
  cursor: pointer;
  width: 100%;
  opacity: 1.0;
}

.btn:hover {
  opacity: 1;
}
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}
/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #00ff00;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
html {
  background: url(https://delcon.net.au/wp-content/uploads/2018/10/question-mark-1872634_1280-862x474.jpg) no-repeat center fixed;
  background-size: cover;
}
::placeholder {
color: white;
}
.box {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 25rem;
  padding: 2.5rem;
  box-sizing: border-box;
  background: rgba(0, 0, 0, 0.6);
  border-radius: 0.625rem;
}
</style>
</head>
<body>
<ul>
  <li><a class="active" href="C:/wamp64/www/iqa/registernew.php">SIGNUP</a></li>

</ul>

<form action="insertnewrecord.php" style="max-width:500px;margin:auto" method="post">
<div class="box">
<font color="#00ff00">
  <h2>Register Form</h2>
  </font>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Enter User Name" name="user_name">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Enter User ID(only integer allowed)" name="user_id">
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password">
  </div>
<font color="white">
<h3>GENDER:</h3>
  <label class="container">MALE
  <input type="radio" checked="checked" name="radio">
  <span class="checkmark"></span>
</label>
<label class="container">FEMALE
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
<label class="container">OTHER
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
</font>
  <button type="submit" class="btn">Register</button>
</div>
</form>
</fieldset>
</body>
</html>
