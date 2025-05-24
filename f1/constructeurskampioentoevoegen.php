<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
 
</head>
<body>
  <?php
  session_start();
include 'menu_constructeurskampioen.html';
include 'dbconnect.php';
if ($_SESSION["login"]== "waar"){
?>
<form method="post" action="">
<label><strong><h3>Nieuwe constructeurskampioen invoeren</h3></strong></label> <br /> <br /> 
   <label>Constructeurskampioen id:</label> <br />
   <input type="text" name="constructeurskampioen_id" /><br /> <br />
   <label>Team id:</label> <br />
   <input type="text" name="team_id" /><br /> <br />
   <input type="submit" name="verzenden"    value= "Opslaan"/>
</form>
<?php

if (isset($_POST['verzenden'])){
$constructeurskampioen_id=$_POST['constructeurskampioen_id'];
$team_id=$_POST['team_id'];


$query=$db->prepare("INSERT INTO constructeurskampioen(constructeurskampioen_id, team_id)
VALUES( '" . $constructeurskampioen_id . "' , '" . $team_id . "')");

$query->execute();
}
}
else{
  echo $_SESSION["login"];
         header ('location:eerstinloggen.php');
 
 }
?>

</body>
</html>