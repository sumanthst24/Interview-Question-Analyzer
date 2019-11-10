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
  <form action="addnewtopiccode.php" method="post">
      <br>
      <br>
      <br>
      <input class="input-field" type="text" placeholder="Topic ID" name="topicid">
      <br>
      <br>
      <br>
      <input class="input-field" type="text" placeholder="Topic Name" name="topicname">
      <br>
      <br>
      <br>
  <button type="submit" class="btn">submit</button>
  </form>
</center>
</html>
