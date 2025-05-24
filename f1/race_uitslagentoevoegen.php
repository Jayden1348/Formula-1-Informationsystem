<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
 
</head>
<body>
  <?php
  session_start();
include 'menu_race_uitslagen.html';
include 'dbconnect.php';
if ($_SESSION["login"]== "waar"){
?>
<form method="post" action="">
<label><strong><h3>Nieuwe race uitslag invoeren</h3></strong></label> <br /> <br /> 
   <label>ru id:</label> <br />
   <input type="text" name="ru_id" /><br /> <br />
   <label>Race id:</label> <br />
   <input type="text" name="race_id" /><br /> <br />
   <label>Seizoen id:</label> <br />
   <input type="text" name="seizoen_id" /><br /> <br />
   <label>Circuit id:</label> <br />
   <input type="text" name="circuit_id"/> <br /> <br />
   <label>Team id:</label> <br />
   <input type="text" name="team_id"/> <br /> <br />
   <label>Coureur id:</label> <br />
   <input type="text" name="coureur_id"/> <br /> <br />
   <label>Punten:</label> <br />
   <input type="text" name="punten"/> <br /> <br />
   <label>Sprintrace :</label> <br />
   <input type="text" name="sprintrace"/> <br /> <br />
   <input type="submit" name="verzenden"    value= "Opslaan"/>
</form>
<?php

if (isset($_POST['verzenden'])){
$ru_id=$_POST['ru_id'];
$race_id=$_POST['race_id'];
$seizoen_id=$_POST['seizoen_id'];
$circuit_id=$_POST['circuit_id'];
$team_id=$_POST['team_id'];
$coureur_id=$_POST['coureur_id'];
$punten=$_POST['punten'];
$sprintrace=$_POST['sprintrace'];


$query=$db->prepare("INSERT INTO race_uitslagen(ru_id, race_id, seizoen_id, circuit_id, team_id, coureur_id, punten, sprintrace)
VALUES( '" . $ru_id . "' ,'" . $race_id . "' , '" . $seizoen_id . "', '" . $circuit_id . "', '" . $team_id . "', '" . $coureur_id . "', '" . $punten . "', '" . $sprintrace . "')");

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