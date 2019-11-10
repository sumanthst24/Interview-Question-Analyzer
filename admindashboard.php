<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <font color="white">
    <center>
  <h1>Dash Board</h1>
</center>
  <div>
  <style>
  html {
    background: url(https://delcon.net.au/wp-content/uploads/2018/10/question-mark-1872634_1280-862x474.jpg) no-repeat center fixed;
    background-size: cover;
  }

  .block {
    display: block;
    width: 30%;
    border: none;
    background-color: #4CAF50;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
  }

  #wrapper{width:500%; height:400px; border:1px solid black;}
  button{height:50px; position:relative; margin: 10px 60px; width:100x; top:50%; left:30%;}


  .block:hover {
    background-color: #ddd;
    color: black;
  }

  .button-AllCompanyDetails,
  .button-GetAllTopicsDetails,
  .button-Selectallquestionsofacompany,
  .button-Selectallquestionsofatopic,
  .button-Selectwrtcompanyandtopic,
  .button-Sortaccordtoquestiondiff,
  .button-Sortaccordtoquestonfreq,
  .button-Easyquestion,
  .button-Diffqueston{
      color: white;
      border-radius: 10px;
      text-shadow: 0 1px 1px rgba(0,0,0,0.2);
  }
  .button-AllCompanyDetails{
    background: rgb(28, 184, 65);
  }
  .button-GetAllTopicsDetails{
    background: rgb(202, 60, 60);
  }
  .button-Selectallquestionsofacompany{
    color: black;
    background: rgb(255,255,0);
  }
  .button-Selectallquestionsofatopic{
    background: rgb(0,128,128);
  }
  .button-Selectwrtcompanyandtopic{
    background: rgb(128,128,0);
  }
  .button-Sortaccordtoquestiondiff{
    color: black;
    background: rgb(192,192,192);
  }
  .button-Sortaccordtoquestonfreq{
    background: rgb(0,0,128);
  }
  .button-Easyquestion{
    background: rgb(128,0,128);
  }
  .button-Diffqueston{
    color: black;
    background: rgb(255,0,255);
  }
  <h1>Admin's dash Board</h1>
</head>
</style>
<form action="getalluserdetails.php"  method="get">
    <button type=submit class="button-AllUserDetails block">All user Details</button>
</form>
<form action="addnewcompany.php" method="post">
    <button type=submit class="button-AddNewCompany block">Add  new Company</Button>
</form>
<form action="addnewquestion.php" method="post">
    <button type=submit class="button-AddNewQuestion block">Add  new Question</Button>
</form>
<form action="addnewtopic.php" method="post">
    <button type=submit class="button-AddNewTopic block">Add new Topic</Button>
</form>
<form action="deleteuser.php" method="post">
    <button type=submit class="button-DeleteUser block">Delete a User</Button>
</form>

<form action="getcompanydetails.php"  method="get">
    <button type=submit class="button-AllCompanyDetails block">All Company Details</button>
</form>

<form action="gettopicdetails.php"  method="get">
    <button type=submit class="button-GetAllTopicsDetails block">Get All Topics Details</Button>
</form>

<form action="companyselect.php"  method="get">
    <button type=sumbit class="button-Selectallquestionsofacompany block">All Questions of a Company</Button>
</form>

<form action="topicselect.php"  method="get">
    <button type=submit class="button-Selectallquestionsofatopic block">All Questions of a Topic</Button>
</form>

<form action="companytopicselect.php"  method="get">
    <button type=submit class="button-Selectwrtcompanyandtopic block">Company and Topic</Button>
</form>

<form action="sortaccdifficulty.php" method="post">
    <button type=submit class="button-Sortaccordtoquestiondiff block">Sort According to Question Difficulty</Button>
</form>

<form action="sortaccfrequency.php" method="post">
    <button type=submit class="button-Sortaccordtoquestonfreq block">Sort According to Question Frequency</Button>
</form>

<form action="easyquestions.php" method="post">
    <button type=submit class="button-Easyquestion block">Easy Question</Button>
</form>

<form action="difficultquestions.php" method="post">
    <button type=submit class="button-Diffqueston block">Difficult Question</Button>
</form>

</div>

</html>
