<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
 
</head>
<body>
  <?php
  session_start();
include 'menu_coureurs_per_team.html';
include 'dbconnect.php';
if ($_SESSION["login"]== "waar"){
?>
<form method="post" action="">
<label><strong><h3>Nieuwe coureurs per team invoeren</h3></strong></label> <br /> <br /> 
   <label>cpt id</label> <br />
   <input type="text" name="cpt_id" /><br /> <br />
   <label>Seizoen id:</label> <br />
   <input type="text" name="seizoen_id" /><br /> <br />
   <label>Team id:</label> <br />
   <input type="text" name="team_id" /><br /> <br />
   <label>1e coureur:</label> <br />
   <input type="text" name="1e_coureur" /><br /> <br />
   <label>2e coureur:</label> <br />
   <input type="text" name="2e_coureur" /><br /> <br />
   <input type="submit" name="verzenden"    value= "Opslaan"/>
</form>
<?php

if (isset($_POST['verzenden'])){
$cpt_id=$_POST['cpt_id'];
$seizoen_id=$_POST['seizoen_id'];
$team_id=$_POST['team_id'];
$coureur1=$_POST['1e_coureur'];
$coureur2=$_POST['2e_coureur'];



$query=$db->prepare("INSERT INTO coureurs_per_team(cpt_id, seizoen_id, team_id, 1e_coureur, 2e_coureur)
VALUES('" . $cpt_id . "' , '" . $seizoen_id . "' , '" . $team_id . "' , '" . $coureur1 . "' , '" . $coureur2 . "')");

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