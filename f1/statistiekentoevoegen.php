<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
 
</head>
<body>
  <?php
  session_start();
include 'menu_statistieken.html';
include 'dbconnect.php';
if ($_SESSION["login"]== "waar"){
?>
<form method="post" action="">
<label><strong><h3>Nieuwe statistieken invoeren</h3></strong></label> <br /> <br /> 
   <label>Coureur id:</label> <br />
   <input type="text" name="coureur_id" /><br /> <br />
   <label>Wins:</label> <br />
   <input type="text" name="Wins" /><br /> <br />
   <label>Poles:</label> <br />
   <input type="text" name="Poles" /><br /> <br />
   <label>Podiums:</label> <br />
   <input type="text" name="Podiums" /><br /> <br />
   <label>DNFs:</label> <br />
   <input type="text" name="DNFs" /><br /> <br />
   <label>Races:</label> <br />
   <input type="text" name="Races" /><br /> <br />
   <label>Seizoenen:</label> <br />
   <input type="text" name="Seizoenen" /><br /> <br />
   <input type="submit" name="verzenden"    value= "Opslaan"/>
</form>
<?php

if (isset($_POST['verzenden'])){
$coureur_id=$_POST['coureur_id'];
$wins=$_POST['Wins'];
$poles=$_POST['Poles'];
$podiums=$_POST['Podiums'];
$DNFs=$_POST['DNFs'];
$races=$_POST['Races'];
$seizoenen=$_POST['Seizoenen'];




$query=$db->prepare("INSERT INTO statistieken(coureur_id, Wins, Poles, Podiums, DNFs, Races, Seizoenen)
VALUES( '" . $coureur_id . "' , '" . $wins . "' , '" . $poles . "' , '" . $podiums . "' , '" . $DNFs . "' , '" . $races . "' , '" . $seizoenen . "')");

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