<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
 
</head>
<body>
  <?php
  session_start();
include 'menu_personeel.html';
include 'dbconnect.php';
if ($_SESSION["login"]== "waar"){
?>
<form method="post" action="">




   <label><strong><h3>Nieuw personeel invoeren</h3></strong></label> <br /> <br /> 
   <label>Team id:</label> <br />
   <input type="text" name="team_id" /><br /> <br />
   <label>Naam:</label> <br />
   <input type="text" name="naam" /><br /> <br />
   <label>Geboortedatum:</label> <br />
   <input type="date" name="geboortedatum"/> <br /> <br />
   <label>Functie id:</label> <br />
   <input type="text" name="functie_id"/> <br /> <br />
   <label>Personeel id:</label> <br />
   <input type="text" name="personeel_id"/> <br /> <br />
   <input type="submit" name="verzenden"    value= "Opslaan"/>
</form>
<?php

if (isset($_POST['verzenden'])){
$team_id=$_POST['team_id'];
$naam=$_POST['naam'];
$geboortedatum=$_POST['geboortedatum'];
$functie_id=$_POST['functie_id'];
$personeel_id=$_POST['personeel_id'];


$query=$db->prepare("INSERT INTO personeel(team_id, naam, geboortedatum, functie_id, personeel_id)
VALUES( '" . $team_id . "' , '" . $naam . "', '" . $geboortedatum . "', '" . $functie_id . "','" . $personeel_id . "')");

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