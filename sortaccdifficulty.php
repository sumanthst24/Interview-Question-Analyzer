<!DOCTYPE html>
<html>
<head>
</head>
<style>
html {
  background: url(https://delcon.net.au/wp-content/uploads/2018/10/question-mark-1872634_1280-862x474.jpg) no-repeat center fixed;
  background-size: cover;
}

.block {
  display: block;
  width: 7  %;
  border: none;
  background-color: #4CAF50;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

#wrapper{width:50%; height:40px; border:1px solid black;}
button{height:50px; position:relative; margin: 10px 60px; width:100x; top:50%; left:0%;}


.block:hover {
  background-color: #ddd;
  color: black;
}

</style>
<center>
  <font color="white";>
<form action="sortaccdifficultycode.php" method="post">
    <h1>The Topics Details</h1>
  <p><h3>Choose the Topic</p></h3>
  <h2>
  <label for="arrays">Arrays</label>
  <input id="arrays" name="topic[]" type="checkbox" value="1">
  <br>
  <label for="strings">Strings</label>
  <input id="strings" name="topic[]" type="checkbox" value="2">
  <br>
  <label for="linkedlist">Linked List</label>
  <input id="linkedlist" name="topic[]" type="checkbox" value="3">
  <br>
  <label for="stackandqueue">Stacks and queues</label>
  <input id="stackandqueue" name="topic[]" type="checkbox" value="4">
  <br>
  <label for="treeandBST">Tree and BST</label>
  <input id="treeandBST" name="topic[]" type="checkbox" value="5">
  <br>
    <button type="submit" class="button-submit block">Submit</button>
</h2>
</form>
</center>
</html>
