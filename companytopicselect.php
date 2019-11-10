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
  width: 7%;
  border: none;
  background-color: #4CAF50;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

#wrapper{width:100%; height:50px; border:1px solid black;}
button{height:50px; position:relative; margin: 5px 10px; width:50x; top:50%; left:0%;}


.block:hover {
  background-color: #ddd;
  color: black;
}

.button-submit{
    color: white;
    border-radius: 10px;
    text-shadow: 0 1px 1px rgba(0,0,0,0.2);
}
.button-submit{
  background: rgb(28, 184, 65);
}

</style>
<form action="companytopicselectcode.php" method="post">
<center>
<font color="PAPAYAWHIP" style="font-family:Arial;">

    <h1>The Company Details</h1>
  <h2>
  <h3>Choose The Company</h3>

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
    <h1>The Topics Details</h1>
    <h2>
    <h3>Choose The Topic</h3>
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
    </h2>
  <button type="submit" class="button-submit block"">Submit</button>
</center>
</form>
</html>
