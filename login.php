<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
<title>question analyzer</title>
<style>

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
input[type=email] {
  width: auto;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #00ff00;
  border-radius: 4px;
  background-color: transparent;
  color: white;


}

input[type=password] {
  width: auto;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #00ff00;
  border-radius: 4px;
  background-color:transparent;
  color: white;
}
html {
  background: url(https://delcon.net.au/wp-content/uploads/2018/10/question-mark-1872634_1280-862x474.jpg) no-repeat center fixed;
  background-size: cover;
}
::placeholder{
  color: white;
  }


.icon {
  padding: 10px;
  background: transparent;
  color: #00ff00;
  min-width: 50px;
  text-align: center;
}

.btn {
  background-color: transparent;
  color: #00ff00;
  padding: 12px 12px;
  border: circle;
  cursor: pointer;
  width: 300px;
  opacity: 0.9;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #00ff00;
  border-radius: 4px;
}
.input-field:focus {
  border: 2px solid dodgerblue;
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
.card {
  box-shadow: 0 16px 32px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
 background-color: transparent;
opacity: 1.0;
}

.card:hover {
  box-shadow: 0 32px 164px 0 rgba(0,0,0,0.2);
}


</style>
</head>

<body>


<font color="red">
<h1>Welcome , login to continue </h1>
<ul>
  <li><a class="active" href="‪C:/wamp64/www/iqa/login.php">LOGIN PAGE</a></li>
  <li><a href="C:/wamp64/www/iqa/contactus.html">CONTACT US</a><li>

</ul>
<br>

<center>

<form action="checklogin.php" style="max-width:500px;margin:auto" method="post">
<div class="box">
<font color="00ff00">
	<font color="white">
	User id:<br>
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="user_id" name="user_id">
  </div>
	Password:<br>
	<div class="input-container">
    <i class="fa fa-key icon"></i>
  	<input type="password" name="password" placeholder="Password"><br><br><br>
	</div>
	</font>
	<input class="btn" type="submit" name="submitbutton">
</div>
</form>
</center>
</body>
</html>
