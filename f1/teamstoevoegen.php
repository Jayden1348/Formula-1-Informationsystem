<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
 
</head>
<body>
  <?php
  session_start();
include 'menu_teams.html';
include 'dbconnect.php';
if ($_SESSION["login"]== "waar"){
?>
<form method="post" action="">
<label><strong><h3>Nieuwe teams invoeren</h3></strong></label> <br /> <br /> 
   <label>Team id:</label> <br />
   <input type="text" name="team_id" /><br /> <br />
   <label>Teamnaam:</label> <br />
   <input type="text" name="Teamnaam" /><br /> <br />
   <label>Nationaliteit:</label> <br />
   <input type="text" name="Nationaliteit" /><br /> <br />
   <input type="submit" name="verzenden"    value= "Opslaan"/>
</form>
<?php

if (isset($_POST['verzenden'])){
$team_id=$_POST['team_id'];
$teamnaam=$_POST['Teamnaam'];
$nationaliteit=$_POST['Nationaliteit'];



$query=$db->prepare("INSERT INTO teams(team_id, Teamnaam, Nationaliteit)
VALUES( '" . $team_id . "' , '" . $teamnaam . "' , '" . $nationaliteit . "')");

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