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
<body>
  <form action="addnewquestioncode.php" method="post">
        <br>
        <br>
        <input class="input-field" type="text" placeholder="Question Number" name="questionno">
        <br><br>
        <input class="input-field" type="text" placeholder="Enter the question" name="question">
        <br><br>
        <select name="cid" id="cid">
          <option value="1">Google</option>
          <option value="2">Amazon</option>
          <option value="3">Facebook</option>
          <option value="4">Apple</option>
          <option value="5">Microsoft</option>
        </select>
        <br><br>
        <input class="input-field" type="text" placeholder="Enter the Topic ID" name="tid">
        <br><br>
        <h4>Set Difficulty</h4>
        <input class="slider" type="range" min="1" max="10" placeholder="Set Difficulty" name="diff">
        <br><br>
        <h4>Set Frequency</h4>
        <input class="slider" type="range" min="1" max="10" placeholder="Set Frequency" name="freq">
        <br><br>
          <button type="submit" class="btn">submit</button>
    </form>

</body>
</center>
</html>
